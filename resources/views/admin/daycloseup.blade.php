@extends('layouts.admin.master')

@section('title')
Day Close Up
@endsection

@section('csslink')
  <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
  <div id="page_content">

      <div id="page_content_inner">
  <p>
      <a class="uk-text-muted" href="dashboard">Home</a>/
      <a class="uk-text-muted" href="sell">Sell</a>/
      <a class="uk-text-muted" href="#">Day Close Up</a>
  </p>
          <h3 class="heading_b uk-margin-bottom">DAY CLOSE UP</h3>
          <div class="md-card">
              <div class="md-card-content large-padding">
                  <form method="POST" id="form_validation" class="uk-form-stacked">
                                  {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                      <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1 ">
                              <div class="parsley-row">
                                  <label for="Text" class="uk-text-primary">Today Total Sells :<span class="req"></span></label>
                                  <input type="text" name="txt_TTSell" id="Tsells" value="{{ $TTSell->total }}" class="md-input" onkeypress="return isNumber(event)" />
                              </div>
                          </div>

                      </div>
                       <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1">
                              <div class="parsley-row">
                                  <label for="Text" class="uk-text-primary">Today Total Advance :<span class="req"></span></label>
                                  <input type="text"  name="txt_TTAdvance" id="Tadvance" value="{{ $TTAdvance->total }}" class="md-input" onkeyup="sum();" onkeypress="return isNumber(event)" />
                              </div>
                          </div>

                      </div>
                      <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1">
                              <div class="parsley-row">
                                  <label for="Text" class="uk-text-primary">Today Total Due Payment :<span class="req"></span></label>
                                  <input type="text"  name="txt_TTDPay" id="TDPay" value="{{ $TTDPay->total }}" class="md-input" onkeyup="sum();" onkeypress="return isNumber(event)" />
                              </div>
                          </div>

                      </div>
                      <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1">
                              <div class="parsley-row">
                                  <label for="Text" class="uk-text-danger">Today Total Expenses :<span class="req"></span></label>
                                  <input type="text"  name="txt_TTExpenses" id="Texpenses" value="{{ $TTExpenses->total }}" class="md-input" onkeyup="sum();" onkeypress="return isNumber(event)" />
                              </div>
                          </div>

                      </div>
                       <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1">
                              <div class="parsley-row">
                                  <label for="Text" class="uk-text-danger">Today Total Visa Payment :<span class="req"></span></label>
                                  <input type="text"  name="txt_TTVPay" id="TVisa" value="0" onkeyup="sum();" class="md-input" onkeypress="return isNumber(event)" />
                              </div>
                          </div>

                      </div>
                      <div class="uk-grid" data-uk-grid-margin>
                          <div class="uk-width-medium-1-1 md-input-filled">
                              <div class="parsley-row ">
                                   <div class="md-input-wrapper md-input-filled">
                                  <label for="Text" class="uk-text-success">Today Total Balance :<span class="req"></span></label>
                                  <input type="text"  name="txt_TTBalance" id="TBalance" class="md-input" onkeypress="return isNumber(event)" />
                              </div>
                              </div>
                          </div>
                      </div>


                      <div class="uk-grid">
                          <div class="uk-width-1-1">
                              <button type="button"
                                                   id="btnSubmit"
                                                  class="md-btn md-btn-primary">Submit</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>

          <div class="md-card uk-margin-medium-bottom">
              <div class="md-card-content">
                  {{-- <div class="dt_colVis_buttons"></div> --}}
                  <table id="dt_tableExport" class="uk-table" cellspacing="0" width="100%">
                      <thead>
                      <tr>
                          <th>Date</th>
                          <th>Total Sells</th>
                          <th>Total Advance</th>
                          <th>Total Due Payment</th>
                          <th>Total Expenses</th>
                          <th>Total Visa Payment</th>
                          <th class="uk-text-center">Balance</th>
                          <th class="uk-text-center">Action</th>


                      </tr>
                      </thead>

                      <tfoot>
                      <tr>
                          <th>Date</th>
                          <th>Total Sells</th>
                          <th>Total Advance</th>
                          <th>Total Due Payment</th>
                          <th>Total Expenses</th>
                          <th>Total Visa Payment</th>
                          <th class="uk-text-center">Balance</th>
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

<script>
window.onload  = sum;
  function sum(){
       var Tsell = parseInt(document.getElementById("Tsells").value);
       var Tadvance = parseInt(document.getElementById("Tadvance").value);
       var TDPay = parseInt(document.getElementById("TDPay").value);
       var Texpenses = parseInt(document.getElementById("Texpenses").value);
       var TVisa = parseInt(document.getElementById("TVisa").value);

       var cal = Tadvance + TDPay - Texpenses - TVisa;
       document.getElementById("TBalance").value = cal;
  }
    function isNumber(evt) {
      evt = (evt) ? evt : window.event;
      var charCode = (evt.which) ? evt.which : evt.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          toastr.error('Only number are allow.','Error Alert',{timeOut:8000});
          return false;

      }
      return true;
  }
  $(document).ready(function(){
      $('#dt_tableExport thead th').each(function(){
        var title = $(this).text();
        $(this).html('<input type="text" class="md-input" placeholder="Search '+title+'" />');
      })

      var table = $('#dt_tableExport').DataTable({
        "responsive":true,
        "destroy":true,
        "processing":true,
        "serverSide":true,
        "ajax":"daycloseup/api",
        "columns":[
          {data: 'date'},
          {data: 'total_sells'},
          {data: 'total_advance'},
          {data: 'total_due_payment'},
          {data: 'total_expenses'},
          {data: 'total_visa'},
          {data: 'balance'},
          {mRender: function (data, type, row) {
                    return '<a id="deleteSunglass"><i class="md-icon material-icons md-36 uk-text-danger" data-id="' + row.id + '">&#xE92B;</i></a>'
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
          $('#btnSubmit').click(function(event){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10) {
                dd = '0'+dd
            }
            if(mm<10) {
                mm = '0'+mm
            }
            today = yyyy + '-' + mm + '-' + dd;
            $.ajax({
                type: 'POST',
                url: 'daycloseup/add',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'date':today,
                    'sell':$('#Tsells').val(),
                    'advance':$('#Tadvance').val(),
                    'duepay':$('#TDPay').val(),
                    'expenses':$('#Texpenses').val(),
                    'visa':$('#TVisa').val(),
                    'balance':$('#TBalance').val()
                },
                success: function(data) {
                     if ((data.errors)) {
                        if (data.errors.date) {
                          swal("Oops...!", "Today Sell already Stop See you Twomorrow :) ","error")
                        }
                        if (data.errors.sell) {
                            toastr.error(data.errors.sell, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.advance) {
                            toastr.error(data.errors.advance, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.duepay) {
                            toastr.error(data.errors.duepay, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.expenses) {
                            toastr.error(data.errors.expenses, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.visa) {
                            toastr.error(data.errors.visa, 'Error Alert', {timeOut: 8000});
                        }
                        if (data.errors.balance) {
                            toastr.error(data.errors.balance, 'Error Alert', {timeOut: 8000});
                        }
                    } else {
                      table.ajax.reload( null, false);
                      swal("Good job!", "Sell Successfully Stop for Today See you Twomorrow :) ","success")
                    }
                },
            });
        });
          $(document).on('click', '#deleteSunglass', function(event){
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
                         $.post('daycloseup/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
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
