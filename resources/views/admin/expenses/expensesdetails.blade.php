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
                        <div class="uk-modal" id="modal_default">
                                    <div class="uk-modal-dialog">
                                      <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">New Expense</h3>
                                    </div>
                                    <form method="POST" id="formid" action="{{ route('addExpenses') }}">
                                    {{ csrf_field() }}
                                     {{ method_field('DELETE') }} 
                                        <div class="uk-width-medium-1-1">
                                <div class="parsley-row uk-margin-top">
                                    <label for="val_birth">Date:<span class="req"></span></label>
                                    <input type="text" 
                                                id="val_birth"  
                                                name="date[]"
                                                class="md-input sellsDate"  
                                                data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </div>
                            </div>
                                        <div data-dynamic-fields="field_template_modal"></div>
                                 <script id="field_template_modal" type="text/x-handlebars-template">

                                <div class="uk-grid uk-grid-medium form_section" data-uk-grid-match>
                                
                                    <div class="uk-width-9-10">
                                        <div class="uk-grid">
                                            <div class="uk-width-2-3">
                                                <div class="parsley-row">
                                                     <label for="d_form_address">Expenses Name</label>
                                            <input type="text" class="md-input" name="expense_name[]" id="d_form_address">
                                                </div>
                                            </div>
                                            <div class="uk-width-1-3">
                                                <div class="parsley-row">
                                                     <label for="d_form_address">Taka</label>
                                            <input type="text" class="md-input" name="taka[]" id="d_form_address">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-10 uk-text-center">
                                        <div class="uk-vertical-align uk-height-1-1">
                                            <div class="uk-vertical-align-middle">
                                                <a href="#" class="btnSectionClone"><i class="material-icons md-36">&#xE146;</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </script>
                            <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="submit" 
                                                     id="btnAddExpenses"
                                                    class="md-btn md-btn-primary">Add Expense</button>
                                         </div>
                                         </form>
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
                                        <a id="updateQuantityModel" data-uk-modal="{target:'#model_frame'}">
                                            <i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE254;</i>
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
        <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>

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



