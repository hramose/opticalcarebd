@extends('layouts.admin.master')

@section('title')
Stock Contactlens
@endsection

@section('csslink')
          <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection

@section('content')
        <div id="page_content">

        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">Stock Contactlens</h4>
                       <div class="uk-width-medium-1-6">
                <div class="uk-width-medium-1-3">
                            <button id="addContactlensModel" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" data-uk-modal="{target:'#model_contactlens'}">Add&nbsp;New&nbsp;Contactlens</button>
                            <div class="uk-modal" id="model_contactlens">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Model Title</h3>
                                    </div>
                                   <form id="form_validation" class="uk-form-stacked" method="POST">
                                        {{ csrf_field() }}
                                    {{ method_field('DELETE') }} 
                                    <input type="hidden" id="contactlensId">
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="category">Category/Name<span class="req">*</span></label>
                                                <input type="text" 
                                                          class="md-input label-fixed"
                                                          name="category" 
                                                          id="txtCategory"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="quantity">Quantity<span class="req">*</span></label>
                                                <input type="text" 
                                                          class="md-input label-fixed"                                                                                     name="quantity" 
                                                          id="txtQuantity"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" id="addQuantity" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="newQuantity">Add Quantity<span class="req">*</span></label>
                                                <input type="text" 
                                                          name="newQuantity" 
                                                          id="txtNewQuantity"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="button" 
                                                     id="btnAddContactlens"
                                                    class="md-btn md-btn-primary uk-modal-close">Add Contactlens</button>
                                        <button type="button" 
                                                     id="btnUpdateQuantity"
                                                    class="md-btn md-btn-success  uk-modal-close">Update Quantity</button>
                                        <button type="button" 
                                                     id="btnEdit"
                                                    class="md-btn md-btn-warning  uk-modal-close">Edit</button>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
             </div>
               <br>      

          <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    {{--  <div class="dt_colVis_buttons"></div>  --}}
                    <table id="dt_tableExport" class="uk-table uk-text-nowrap uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th>Quantity</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                           <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category/Name</th>
                            <th>Quantity</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Action</th>                            
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('jslink')
    <!-- datatables -->
    <script src="{{ asset('admin/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <!-- datatables buttons-->
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/datatables/buttons.uikit.js') }}"></script>
    <script src="{{ asset('admin/bower_components/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.colVis.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.html5.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-buttons/js/buttons.print.js') }}"></script>
    
    <!-- datatables custom integration -->
    <script src="{{ asset('admin/assets/js/custom/datatables/datatables.uikit.min.js') }}"></script>

    <!--  datatables functions -->
    <script src="{{ asset('admin/assets/js/pages/plugins_datatables.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#dt_tableExport thead th').each( function() {
                var title =$(this).text();
                $(this).html('<input type="text" class="md-input" placeholder="Search '+title+'" />');
            });
            var table  = $('#dt_tableExport').DataTable({
                "responsive":true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "ajax": "contactlens/api",
                "columns":[
                    {data: 'id'},
                    {data: 'category'},
                    {data: 'quantity'},
                    {data: 'created_at'},
                    {data: 'updated_at'},
                    {mRender: function (data, type, row) {
                    return '<a id="updateQuantityModel" data-uk-modal="{target:'+"'#model_contactlens'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE923;</i><input type="hidden" id="contactlensCategory" value="'+ row.category +'"><input type="hidden" id="contactlensQuantity" value="'+ row.quantity +'"></a> <a id="editModel" data-uk-modal="{target:'+"'#model_contactlens'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE254;</i><input type="hidden" id="editContactlensCategory" value="'+ row.category +'"><input type="hidden" id="editContactlensQuantity" value="'+ row.quantity +'"></a>  <a id="deleteContactlens"><i class="md-icon material-icons md-36 uk-text-danger" data-id="' + row.id + '">&#xE92B;</i></a>'
                }
                }
                ]
            });
            table.columns().every( function() {
                var that = this;
                $('input', this.header()).on('keyup change', function(){
                    if (that.search() !== this.value){
                        that
                              .search( this.value )
                              .draw();
                    }
                });
            });
            $(document).on('click','#addContactlensModel', function(event){
            $('.uk-modal-title').text('Add New Contactlens');
             $("#txtCategory").val("");
            $('#txtQuantity').val("");
            $("#txtCategory").prop('disabled', false);
            $("#txtQuantity").prop('disabled', false);
            $('#btnAddContactlens').show();
            $('#addQuantity').hide(0);
            $('#btnUpdateQuantity').hide(0);
            $('#btnEdit').hide(0);
        });
        $(document).on('click','#updateQuantityModel', function(event){
            var  id = $(this).find("i").attr("data-id");
            var  category = $(this).find("#contactlensCategory").val();
            var  quantity = $(this).find("#contactlensQuantity").val();
            $("#contactlensId").val(id);
            $("#txtCategory").val(category);
            $("#txtQuantity").val(quantity);
            $('.uk-modal-title').text('Update Quantity');
            $('#txtCategory').prop('disabled', true);
            $('#txtQuantity').prop('disabled', true);
            $('#txtNewQuantity').val("");
            $('#txtAddQuantity').show();
            $('#addQuantity').show();
            $('#btnUpdateQuantity').show();
            $('#btnAddContactlans').hide();
            $('#btnEdit').hide();
        });
         $(document).on('click', '#editModel', function(event){
            var id = $(this).find( "i" ).attr( "data-id" ); 
            var category = $(this).find('#editContactlensCategory').val();
            var quantity = $(this).find('#editContactlensQuantity').val();
            $('#contactlensId').val(id);
            $("#txtCategory").val(category);
            $('#txtQuantity').val(quantity);
            $('.uk-modal-title').text('Edit Contactlens Info');
            $("#txtCategory").prop('disabled', false);
            $("#txtQuantity").prop('disabled', false);                    
            $('#btnEdit').show();
            $('#btnAddContactlens').hide(0);
            $('#btnUpdateQuantity').hide(0);
            $('#addQuantity').hide(0);
        });
        $('#btnAddContactlens').click(function(event){
            $.ajax({
                type: 'POST',
                url: 'contactlens',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'category': $('#txtCategory').val(),
                    'quantity': $('#txtQuantity').val()
                },
                success: function(data) {
                     if ((data.errors)) {
                        if (data.errors.category) {
                            toastr.error(data.errors.category, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.quantity) {
                            toastr.error(data.errors.quantity, 'Error Alert', {timeOut: 8000});
                        }
                    } else {
                        table.ajax.reload( null, false);
                         swal("Good job!", "New Contactlens Successfully Added!", "success")
                    }
                },
            });
        });
        $(document).on('click','#btnUpdateQuantity', function(event){
            var id = $( "#contactlensId" ).val();
           
            $.ajax({
                type:'POST',
                url:'contactlens/update',
                data:{
                    '_token': $('input[name=_token]').val(),
                    'id':id,
                    'newQuantity': $('#txtNewQuantity').val()
                },
                success: function(data) {
                     if ((data.errors)) {
                        if (data.errors.newQuantity) {
                            toastr.error(data.errors.newQuantity, 'Error Alert', {timeOut: 8000});
                        }
                    } else {
                        table.ajax.reload( null, false);
                         swal("Good job!", "Contactlens Quantity Successfully Updated!", "success")
                    }
                },
            });
        });
         $(document).on('click','#btnEdit', function(event){
            var id = $( "#contactlensId" ).val();             
            $.ajax({
                type: 'POST',
                url: 'contactlens/edit',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': id,
                    'category': $('#txtCategory').val(),
                    'quantity': $('#txtQuantity').val()
                },
                success: function(data) {
                     if ((data.errors)) {
                        if (data.errors.category) {
                            toastr.error(data.errors.category, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.quantity) {
                            toastr.error(data.errors.quantity, 'Error Alert', {timeOut: 8000});
                        }
                    } else {
                        table.ajax.reload( null, false);
                         swal("Good job!", "Contactlens info Successfully Updated!", "success")
                    }
                },
            });
        });
        $(document).on('click', '#deleteContactlens', function(event){
        var id = $(this).find( "i" ).attr( "data-id" );
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this data!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
                },
                function(isConfirm){
                if (isConfirm) {
                     $.post('contactlens/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
                        table.ajax.reload( null, false );                    
                    });
                    swal("Deleted!", "Your data has been deleted.", "success");
                } else {
                    swal("Cancelled", "Your data is safe :)", "error");
                }
            });
        });
    });
    </script>
@endsection



