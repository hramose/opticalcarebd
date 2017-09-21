@extends('layouts.admin.master')

@section('title')
Expenses Details
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
        <div id="page_content">

        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">Expenses Details</h4>
                       <div class="uk-width-medium-1-6">
                <div class="uk-width-medium-1-3">
                            <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('expenses') }}"><-&nbsp;Back</a>
                            <div class="uk-modal" id="model_edit">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Edit Expense</h3>
                                    </div>
                                   <form id="form_validation" class="uk-form-stacked" method="POST">
                                        {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" id="txtId">
                                    <div class="uk-grid" data-uk-grid-margin>
                                      <div class="uk-width-medium-1-1">
                                        <div class="parsley-row uk-margin-top">
                                            <label for="val_birth">Date:<span class="req"></span></label>
                                            <input type="text"
                                                        id="txtDate"
                                                        value="2017-08-22"
                                                        class="md-input sellsDate"
                                                        data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                        </div>
                                    </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="name">Expense Name<span class="req">*</span></label>
                                                <input type="text"
                                                           class="md-input label-fixed"
                                                           id="txtName"
                                                           required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" id="addQuantity" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="amount">Amount<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtAmount"
                                                          required
                                                          class="md-input label-fixed" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>

                                        <button type="button"
                                                     id="btnEdit"
                                                    class="md-btn md-btn-warning  uk-modal-close">Save change</button>
                                    </div>

                                </div>
                            </div>
                        </div>
             </div>
               <br>
            @if(session()->has('message'))
                 <div class='uk-alert uk-alert-success' data-uk-alert><a href='#' class='uk-alert-close uk-close'></a>{{ session()->get('message') }}</div>
            @endif
          <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="dt_colVis_buttons"></div>
                    <table id="dt_tableExport" class="uk-table uk-text-nowrap uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="uk-text-center">Id</th>
                            <th class="uk-text-center">Date</th>
                            <th class="uk-text-center">Expenses Name</th>
                            <th class="uk-text-center">Amount</th>
                            <th class="uk-text-center">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($expense as $expenses)
                                <tr>
                                    <td class="uk-text-center">{{ $expenses->id }}</td>
                                    <td class="uk-text-center">{{ $expenses->date }}</td>
                                    <td class="uk-text-center">{{ $expenses->expenses_name }}</td>
                                    <td class="uk-text-center">{{ $expenses->amount }}</td>
                                    <td class="uk-text-center">
                                        <a id="editModel" data-uk-modal="{target:'#model_edit'}">
                                            <i class="md-icon material-icons md-36 uk-text-primary" data-id="{{ $expenses->id }}">&#xE254;</i>
                                            <input type="hidden" id="editDate" value="{{ $expenses->date }}">
                                            <input type="hidden" id="editName" value="{{ $expenses->expenses_name }}">
                                            <input type="hidden" id="editAmount" value="{{ $expenses->amount }}">
                                        </a>
                                        <a id="deleteFrame"><i class="md-icon material-icons md-36 uk-text-danger" data-id="{{ $expenses->id }}">&#xE92B;</i></a>'
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                        <tr>
                          <th class="uk-text-center">Id</th>
                            <th class="uk-text-center">Date</th>
                            <th class="uk-text-center">Expenses Name</th>
                            <th class="uk-text-center">Amount</th>
                            <th class="uk-text-center">Action</th>
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
        <script srprabhas new movie trailer c="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

         <script src="{{ asset('admin/bower_components/handlebars/handlebars.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/custom/handlebars_helpers.min.js') }}"></script>
        <!-- parsley (validation) -->
        <script>
        // load parsley config (altair_admin_common.js)
        altair_forms.parsley_validation_config();
        </script>
        <script src="{{ asset('admin/bower_components/parsleyjs/dist/parsley.min.js') }}"></script>
    <script>
            $(document).on('click','.btnSectionClone', function(event){
               var dateValu =  $('#val_birth').val();
                $("<input type='hidden' />")
                    .attr("id", "date")
                    .attr("name", "date[]")
                    .attr("value", dateValu)
                    .prependTo("#formid");
            });
              $(document).on('click','.btnSectionRemove', function(event){
                  $('#date').remove();
            });
            $(document).on('click', '#editModel', function(event){
               var id = $(this).find( "i" ).attr( "data-id" );
               var date = $(this).find('#editDate').val();
               var name = $(this).find('#editName').val();
               var amount = $(this).find('#editAmount').val();
               $('#txtId').val(id);
               $("#txtDate").val(date);
               $('#txtName').val(name);
               $('#txtAmount').val(amount);
           });
        $(document).on('click','#btnEdit', function(event){
             $.ajax({
                 type:'POST',
                 url:'/admin/expenses/edit',
                 data:{
                     '_token':$('input[name=_token]').val(),
                     'id':$('#txtId').val(),
                     'date':$('#txtDate').val(),
                     'expenses_name':$('#txtName').val(),
                     'amount':$('#txtAmount').val(),
                 },
                 success:function(data){
                     if((data.errors)){
                         if(data.errors.date){
                             toastr.error(data.errors.date,'Error Alert',{timOut:8000});
                         }
                          if(data.errors.expenses_name){
                             toastr.error(data.errors.expenses_name,'Error Alert',{timOut:8000});
                         }
                          if(data.errors.amount){
                             toastr.error(data.errors.amount,'Error Alert',{timOut:8000});
                         }
                     }else{
                         swal("Good job!", "Expense Successfully Updated!", "success")
                         setTimeout(function () { location.reload(); }, 1000);
                     }
                 }
             });
        });
        $(document).on('click', '#deleteFrame', function(event){
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
                     $.post('/admin/expenses/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
                    });
                    swal("Deleted!", "Your data has been deleted.", "success");
                   setTimeout(function () { location.reload(); }, 1000);
                } else {
                    swal("Cancelled", "Your data is safe :)", "error");
                }
            });
        });
        </script>
@endsection
