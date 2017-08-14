@extends('layouts.admin.master')

@section('title')
Sells
@endsection

@section('csslink')
          <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection

@section('content')
        <div id="page_content">

        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">Sells</h4>
                       <div class="uk-width-medium-1-6">
                <div class="uk-width-medium-1-3">
                            <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" data-uk-modal="{target:'#sellModel'}">New&nbsp;Sell</button>
                        </div>
             </div>
                <div class="uk-modal" id="sellModel">
                        <div class="uk-modal-dialog">
                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">New Sells <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="Select that you want to sell.">&#xE8FD;</i></h3>
                            </div>
                            <p>What do you want to sell? </p>
                            <div class="uk-modal-footer uk-text-right">
                                    <button type="button" 
                                        class="md-btn md-btn-small md-btn-flat uk-modal-close">Close</button>
                                        <a class="md-btn md-btn-small md-btn-primary" 
                                             href="{{ route('sellFrame') }}">Frame</a>
                                        <a class="md-btn md-btn-small md-btn-primary" 
                                             href="{{ route('sellFrame') }}">Sunglass</a>
                                        <a class="md-btn md-btn-small md-btn-primary"
                                             href="{{ route('sellFrame') }}">Contact Lens</a>
                                        <a class="md-btn md-btn-small md-btn-primary" 
                                             href="{{ route('sellFrame') }}">Plastic Lens</a>
                                          
                            </div>
                        </div>
                    </div> 
               <br>   
                   
                <form class="uk-form-stacked" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }} 
                        <input type="hidden" id="sellsId">
                    <div class="uk-modal" id="settings">
                        <div class="uk-modal-dialog">
                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Options <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                            </div>
                            <p>What? you like to do with this data. </p>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="button" 
                                                     id="btnPayDue"
                                                    class="md-btn md-btn-primary uk-modal-close">Pay Due</button>
                                        <button type="button" 
                                                     id="btnDetails"
                                                    class="md-btn md-btn-success  uk-modal-close">Details</button>
                                        <button type="button" 
                                                     id="btnCustomerCopy"
                                                    class="md-btn md-btn-warning  uk-modal-close">Customer Copy</button>
                                       <button type="button" 
                                                     id="btnDelete"
                                                    class="md-btn md-btn-danger  uk-modal-close">Delete</button>
                            </div>
                        </div>
                    </div>   
            </form>
          <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    {{--  <div class="dt_colVis_buttons"></div>  --}}
                    <table id="dt_tableExport" class="uk-table uk-text-nowrap uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Product Type</th>
                            <th>Cetagory</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Adv</th>
                            <th>Due</th>
                            <th>Status</th>     
                           <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                           <th>Order No</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Product Type</th>
                            <th>Cetagory</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Adv</th>
                            <th>Due</th>
                            <th>Status</th>     
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
                $(this).html('<input type="text" class="md-input" placeholder=" '+title+'" />');
            });
            var table  = $('#dt_tableExport').DataTable({
                "responsive":true,
                "destroy": true,
                "processing": true,
                "serverSide": true,
                "ajax": "sells/api",
                "columns":[
                    {data: 'order_no'},
                    {data: 'sells_date'},
                    {data: 'customer_name'},
                    {data: 'phone'},
                    {data: 'product_type'},
                    {data: 'product_category'},
                    {data: 'quantity'},
                    {data: 'total'},
                    {data: 'advance'},
                    {data: 'due'},
                    {data: 'status'},
                    {mRender: function (data, type, row) {
                    return '<a id="optionsModal" data-uk-modal="{target:'+"'#settings'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE8B8;</i><input type="hidden" id="frameCategory" value="'+ row.category +'"><input type="hidden" id="frameQuantity" value="'+ row.quantity +'"></a>'
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
        $(document).on('click', '#optionsModal', function(event){
            var id = $(this).find( "i" ).attr( "data-id" );
            $('#sellsId').val(id);
        });
        $(document).on('click', '#btnDelete', function(event){
        var id = $("#sellsId").val();
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
                     $.post('sells/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
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



