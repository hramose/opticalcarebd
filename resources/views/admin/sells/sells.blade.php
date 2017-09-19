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
                                             href="{{ route('sellSunglass') }}">Sunglass</a>
                                        <a class="md-btn md-btn-small md-btn-primary"
                                             href="{{ route('sellContactlens') }}">Contact Lens</a>
                                        <a class="md-btn md-btn-small md-btn-primary"
                                             href="{{ route('sellPlasticlens') }}">Plastic Lens</a>
                            </div>
                        </div>
                    </div>
               <br>

                <form class="uk-form-stacked" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" id="sellsId">
                        <input type="hidden" id="mOrderNo">
                        <input type="hidden" id="mCustomerName">
                        <input type="hidden" id="mSellsDate">
                        <input type="hidden" id="mTotal">
                        <input type="hidden" id="mAdvance">
                        <input type="hidden" id="mDue">
                    <div class="uk-modal" id="settings">
                        <div class="uk-modal-dialog">
                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Options <i class="material-icons" data-uk-tooltip="{pos:'top'}" title="headline tooltip">&#xE8FD;</i></h3>
                            </div>
                            <p>What? you like to do with this data. </p>
                            <div class="uk-modal-footer uk-text-right">
                                <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="button"
                                                    id="linkPayDue"
                                                    data-uk-modal="{target:'#model_paydue'}"
                                                    class="md-btn md-btn-primary uk-modal-close">Pay Due</button>

                                        <a  id="linkDetails"
                                                    target="_blank"
                                                    class="md-btn md-btn-success">Details</a>
                                        <a  id="linkCustomerCopy"
                                                    target="_blank"
                                                    class="md-btn md-btn-warning">Customer Copy</a>
                                       <button type="button"
                                                     id="btnDelete"
                                                    class="md-btn md-btn-danger  uk-modal-close">Delete</button>
                            </div>
                        </div>
                    </div>
                                 <div class="uk-width-medium-1-6">
                <div class="uk-width-medium-1-3">
                            <div class="uk-modal" id="model_paydue">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Pay Due</h3>
                                    </div>
                                   <form id="form_validation" class="uk-form-stacked" method="POST">
                                        {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label for="category">Order No<span class="req">*</span></label>
                                                <input type="text"
                                                          class="md-input label-fixed"
                                                          name="category"
                                                          id="txtOrderNo"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Customer Name<span class="req">*</span></label>
                                                <input type="text"
                                                        class="md-input label-fixed"
                                                          id="txtCustomerName"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Sell Date<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtSellDate"
                                                           class="md-input label-fixed"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Total<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtTotal"
                                                           class="md-input label-fixed"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Advance<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtAdvance"
                                                           class="md-input label-fixed"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Due<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtDue"
                                                            onkeyup="sum();"
                                                           class="md-input label-fixed"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Pay Due<span class="req">*</span></label>
                                                <input type="text"
                                                          id="txtPayDue"
                                                            onkeyup="sum();"
                                                           class="md-input label-fixed"
                                                          required class="md-input" />
                                            </div>
                                        </div>
                                    </div>
                                      <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-1">
                                <div class="parsley-row">
                                    <label for="val_birth">Date:<span class="req"></span></label>
                                    <input type="text"
                                                id="val_birth"
                                                class="md-input dueDate"
                                                data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </div>
                            </div>
                          </div>

                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-1">
                                            <div class="parsley-row">
                                                <label>Remaining Due :</label>
                                                    <label for="Number" id="lbl_RDue"></label>
                                            </div>
                                        </div>
                                    </div>

                                      <div class="uk-grid" data-uk-grid-margin>                                    <div class="uk-width-medium-1-1">
                                          <label>Status:</label>
                                          <label ><span class="" id="lbl_Status"></span></label>
                                    </div>
                                    </div>

                                     <div class="uk-grid" data-uk-grid-margin>
                                         <div class="uk-width-medium-1-1">
                                         <input type="checkbox" class="less"  id="less"  data-md-icheck/>
                                        <label for="checkbox_demo_1" class="inline-label">Less <small>(Only if have)</small></label>
                                  </div>
                                  </div>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                        <button type="button"
                                                     id="btnPayDue"
                                                    class="md-btn md-btn-success  uk-modal-close">Pay Due</button>
                                    </div>

                                </div>
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
        function sum(){

            var due = document.getElementById('txtDue').value;
            var paydue = document.getElementById('txtPayDue').value;
            var result = parseInt(due) - parseInt(paydue);
            if (!isNaN(result)) {
                $('#lbl_RDue').text(result);
                if(parseInt(paydue) < parseInt(due)){
                    $('#lbl_Status').text('Due');
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-warning');
                }else if(parseInt(paydue) == parseInt(due)){
                    $('#lbl_Status').text('Paid');
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-success');
                }else{
                    $('#lbl_Status').text('Error');
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-danger');
                }
            }
    }
     $('#btnPayDue').click(function(event){
            if(document.getElementById("less").checked){
                var  Less = "Less";
            }else{
                var  Less = "";
            }
            $.ajax({
                type:'POST',
                url:'sells/paydue',
                data:{
                    '_token': $('input[name=_token]').val(),
                    'order_no': $('#txtOrderNo').val(),
                    'Due': $('#lbl_RDue').text(),
                    'PayDue': $('#txtPayDue').val(),
                    'Date': $('.dueDate').val(),
                    'Less': Less,
                    'Status': $('#lbl_Status').text(),
                },
                success:function(data){
                    if((data.errors)) {
                        if(data.errors.PayDue){
                            toastr.error(data.errors.PayDue,'Error Alert',{timeOut:8000});
                        }
                         if(data.errors.Date){
                            toastr.error(data.errors.Date,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Status){
                            toastr.error(data.errors.Status,'Error Alert',{timeOut:8000});
                        }
                    }else if(data.errorsR){
                            toastr.error(data.errorsR,'Error Alert',{timeOut:8000});
                    }else{
                        swal("Good job!", "Due Successfully Paid!", "success")
                    }
                }
            });
        });

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
                    return '<a id="optionsModal" data-uk-modal="{target:'+"'#settings'"+'}"><i class="md-icon material-icons md-36 uk-text-primary" data-id="' + row.id + '">&#xE8B8;</i><input type="hidden" id="optOrderNo" value="'+ row.order_no +'"><input type="hidden" id="optCustomerName" value="'+ row.customer_name +'"><input type="hidden" id="optSellsDate" value="'+ row.sells_date +'"><input type="hidden" id="optTotal" value="'+ row.total +'"><input type="hidden" id="optAdvance" value="'+ row.advance +'"><input type="hidden" id="optDue" value="'+ row.due +'"></a>'
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
            var orderNo = $(this).find('#optOrderNo').val();
            var customerName = $(this).find('#optCustomerName').val();
            var sellsDate = $(this).find('#optSellsDate').val();
            var total = $(this).find('#optTotal').val();
            var advance = $(this).find('#optAdvance').val();
            var due = $(this).find('#optDue').val();
            $('#sellsId').val(id);
            $('#mOrderNo').val(orderNo);
            $('#mCustomerName').val(customerName);
            $('#mSellsDate').val(sellsDate);
            $('#mTotal').val(total);
            $('#mAdvance').val(advance);
            $('#mDue').val(due);
            $('#linkDetails').attr("href","sells/"+id+"/details");
            $('#linkCustomerCopy').attr("href","sells/"+id+"/customercopy");
        });
        $(document).on('click', '#linkPayDue', function(event){
            $('#txtPayDue').val("");
            $('.dueDate').val("");
            $('#lbl_Status').text("");
            $('#lbl_RDue').text("");
            $('#txtOrderNo').prop('disabled', true);
            $('#txtCustomerName').prop('disabled', true);
            $('#txtSellDate').prop('disabled', true);
            $('#txtTotal').prop('disabled', true);
            $('#txtAdvance').prop('disabled', true);
            $('#txtDue').prop('disabled', true);
            var id = $('#sellsId').val();
            var orderNo = $('#mOrderNo').val();
            var customerName = $('#mCustomerName').val();
            var sellsDate = $('#mSellsDate').val();
            var total = $('#mTotal').val();
            var advance = $('#mAdvance').val();
            var due = $('#mDue').val();
            $('#txtOrderNo').val(orderNo);
            $('#txtCustomerName').val(customerName);
            $('#txtSellDate').val(sellsDate);
            $('#txtTotal').val(total);
            $('#txtAdvance').val(advance);
            $('#txtDue').val(due);
        });
        $(document).on('click', '#btnPayDue',function(event){
            table.ajax.reload(null,false);
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
