@extends('layouts.admin.master')


@section('title')
Dashboard
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
        <div id="page_content">
        <div id="page_content_inner">

            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Frame <span class="uk-badge uk-badge-notification">Category {{ $frameCategory }}</span></span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $frameQuantity->quantity }}</noscript></span></h2>
                        </div>
                    </div>
                </div>

                 <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Sunglass <span class="uk-badge uk-badge-notification uk-badge-primary">Category {{ $sunglassCategory }}</span></span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $sunglassQuantity->quantity }}</noscript></span></h2>
                        </div>
                    </div>
                </div>

                 <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Contact Lens <span class="uk-badge uk-badge-notification uk-badge-success">Category {{ $contactLensCategory }}</span></span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $contactLensQuantity->quantity }}</noscript></span></h2>
                        </div>
                    </div>
                </div>

                 <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Plastic Lens <span class="uk-badge uk-badge-notification uk-badge-success">Category {{ $plasticLensCategory }}</span></span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0<noscript>{{ $plasticLensQuantity->quantity }}</noscript></span></h2>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Today Total Sale</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>{{ $TTSell->total }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
               <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Today Total Advance</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>{{ $TTAdvance->total }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
                 <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Today Total Due</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>{{ $TTDPay->total }}</noscript></span></h2>
                        </div>
                    </div>
                </div> 
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_sale peity_data">5,3,9,6,5,9,7,3,5,2</span></div>
                            <span class="uk-text-muted uk-text-small">Today Total Expense</span>
                            <h2 class="uk-margin-remove">$<span class="countUpMe">0<noscript>{{ $TTExpenses->total }}</noscript></span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="heading_a uk-margin-bottom uk-text-center">DUE PAYMENT REMINDER <span class="uk-badge uk-badge-success uk-badge-notification">{{$due}}</span></h4>
          <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    {{--  <div class="dt_colVis_buttons"></div>  --}}
                    <table id="dt_tableExport" class="uk-table uk-text-nowrap uk-table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Order NO</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Total</th>
                           <th>Due</th>
                           <th>Action</th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                          <th>Order NO</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Total</th>
                           <th>Due</th>
                           <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="uk-width-large-1-1">
                               <div class="md-card">
                                   <div class="md-card-toolbar">
                                       <div class="md-card-toolbar-actions">
                                           <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                           <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                                           <i class="md-icon material-icons md-card-close">&#xE14C;</i>
                                       </div>
                                       <h3 class="md-card-toolbar-heading-text">

                                          TODAY DELIVERY<span class="uk-badge uk-badge-notification">{{ $TdeliverysCount }}</span>
                                       </h3>
                                   </div>

                                            <div class="md-card-content">
                                       <ul class="md-list md-list-addon gmap_list" id="map_users_list">

                                      @foreach ($Tdeliverys as $delivery)
                                        <li data-gmap-lat="37.406267"  data-gmap-lon="-122.06742" data-gmap-user="Eric Grady" data-gmap-user-company="Rempel, Upton and Anderson">
                                            <div class="md-list-addon-element">
                                                <img class="md-user-image md-list-addon-avatar" src="{{ asset('admin/assets/img/avatars/avatar.png') }}" alt=""/>
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">{{ $delivery->customer_name }}</span>
                                                <span class="uk-text-small uk-text-muted">
                                                Order No:{{ $delivery->order_no }},&nbsp;
                                                Product Type: {{ $delivery->product_type }},&nbsp;
                                                Product Cetagory: {{ $delivery->product_cetagory }}

                                                </span>
                                                <span class="uk-text-small uk-text-muted">
                                                    Phone:{{ $delivery->phone }},&nbsp;
                                                    DELIVERY DATE: {{ $delivery->delivery_date }}
                                                </span>
                                                 <span class="uk-text-small uk-text-muted">
                                                    Total: {{ $delivery->total }},&nbsp;
                                                    Advance: {{ $delivery->advance }},&nbsp;
                                                    Due: {{$delivery->due}}
                                                </span>
                                                <span class="">
                                                <a class="md-btn md-btn-primary md-btn-mini md-btn-wave-light md-btn-icon waves-effect waves-button waves-light" href='/admin/sms/delivery/{{ $delivery->id }}'>Send SMS</a>

                                                </span>

                                            </div>
                                        </li>
                                      @endforeach

                                       </ul>
                                   </div>


                               </div>
                               <div class="md-card">
                                   <div id="map_users_controls"></div>


                               </div>
                           </div>

        </div>
    </div>
@endsection


@section('jslink')
    <!-- page specific plugins -->
    <!-- d3 -->
    <script src="{{ asset('admin/bower_components/d3/d3.min.js') }}"></script>
    <!-- metrics graphics (charts) -->
    <script src="{{ asset('admin/bower_components/metrics-graphics/dist/metricsgraphics.min.js') }}"></script>
    <!-- chartist (charts) -->
    <script src="{{ asset('admin/bower_components/chartist/dist/chartist.min.js') }}"></script>
    <!-- maplace (google maps) -->
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{ asset('admin/bower_components/maplace-js/dist/maplace.min.js') }}"></script>
    <!-- peity (small charts) -->
    <script src="{{ asset('admin/bower_components/peity/jquery.peity.min.js') }}"></script>
    <!-- easy-pie-chart (circular statistics) -->
    <script src="{{ asset('admin/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <!-- countUp -->
    <script src="{{ asset('admin/bower_components/countUp.js/dist/countUp.min.js') }}"></script>
    <!-- handlebars.js -->
    <script src="{{ asset('admin/bower_components/handlebars/handlebars.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/handlebars_helpers.min.js') }}"></script>
    <!-- CLNDR -->
    <script src="{{ asset('admin/bower_components/clndr/clndr.min.js') }}"></script>

    <!--  dashbord functions -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.min.js') }}"></script>
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

        var table = $('#dt_tableExport').DataTable({
            "responsive":true,
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "ajax":"dashboard/api",
            "columns":[
                {data:'order_no'},
                {data:'customer_name'},
                {data:'phone'},
                {data:'sells_date'},
                {data:'total'},
                {data:'due'},
                {mRender: function (data, type, row) {
                          return '<a href="/admin/sms/due/' + row.id + '"><i class="md-icon material-icons md-36 uk-text-primary">&#xE158;</i></a><a id="deleteSunglass"><i class="md-icon material-icons md-36 uk-text-danger" data-id="' + row.id + '">&#xE92B;</i></a>'
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
      });
    </script>
@endsection
