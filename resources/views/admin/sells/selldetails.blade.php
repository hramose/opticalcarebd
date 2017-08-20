@extends('layouts.admin.master')

@section('title')
Sell Details
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection    

@section('content')
 <div id="page_content">

        <div id="page_content_inner">
  
                                    
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="uk-text-center">
                         <img class="logo_regular" src="{{ asset('admin/assets/img/logo_main.png') }}" alt="" height="15" width="100"/>
                    </div>
               </div>
            </div>
        <form method="POST" id="form_validation" class="uk-form-stacked">
           <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">

                <div class="uk-width-medium-8-10">
                 
                    <p><span class="uk-text-bold">Order No :</span>
                      <span class="uk-text-muted">{{$sell->order_no}}</span><br>

                    <span class="uk-text-bold">Customer Name :</span>
                    <span class="uk-text-muted">{{$sell->customer_name}}</span><br>

                    <span class="uk-text-bold">DELIVERY DATE:</span>
                    <span class="uk-text-muted">{{$sell->delivery_date}}</span></p>
                 
           
                </div>
                 <div class="uk-width-medium-2-10 uk-row-first ">
                 <p><span class="uk-text-bold">Date :</span>
                      <span class="uk-text-muted">{{$sell->sells_date}}</span><br>

                    <span class="uk-text-bold">Phone :</span>
                    <span class="uk-text-muted">{{$sell->phone}}</span><br>

                      <span class="uk-text-bold">Due Payment Date :</span>
                      <span class="uk-text-muted">{{$sell->updated_at}}</span>
                    </p>
                    
                </div>
            </div>

 <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">
                {{--  Right Start  --}}
                <div class="uk-width-medium-4-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                        <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th colspan="3" class="uk-text-center">Right</th>       
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                           <label class="uk-text-bold">SPH:</label>
                                           <label>{{ $sell->right_sph }}</label>
                                </td>
                                <td>
                                           <label class="uk-text-bold">CYL:</label>
                                           <label>{{ $sell->right_cyl }}</label>
                                </td>
                                <td>
                                         <label class="uk-text-bold">Axis:</label>
                                         <label>{{ $sell->right_axis }}</label>
                                </td>
                                </tr>
                            <tr>
                                <td colspan="3">
                                           <label class="uk-text-bold">Add:</label>
                                           <label>{{ $sell->right_add }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                            <label class="uk-text-bold">Delivery Date:</label>
                                           <label>{{ $sell->delivery_date }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style=" border-bottom: 0px;">
                                     <div class="uk-width-medium-1-1">
                     
                                </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                        </div>
                    </div>
                </div>
                {{--  Left start  --}}
                    <div class="uk-width-medium-4-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                        <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th colspan="3" class="uk-text-center">Left</th>       
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                          <label class="uk-text-bold">SPH:</label>
                                           <label>{{ $sell->left_sph }}</label>
                                </td>
                                <td>
                                          <label class="uk-text-bold">CYL:</label>
                                           <label>{{ $sell->left_cyl }}</label>
                                </td>
                                <td>
                                         <label class="uk-text-bold">Axis:</label>
                                           <label>{{ $sell->left_axis }}</label>
                                </td>
                            <tr>
                                <td colspan="3">
                                           <label class="uk-text-bold">Add:</label>
                                           <label>{{ $sell->left_add }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                           <label class="uk-text-bold">I.P.D:</label>
                                           <label>{{ $sell->ipd }}</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style=" border-bottom: 0px;">
                                           <label class="uk-text-bold">Quantity:</label>
                                           <label>{{ $sell->quantity }}</label>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                        </div>
                    </div>
                </div>
                 <div class="uk-width-medium-2-10 uk-row-first">
                    <div class="md-card" >
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th colspan="2" class="uk-text-center">Taka</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                         <label class="uk-text-bold">Total:</label>
                                           <label>{{ $sell->total }}</label>
                               </td>

                            </tr>
                            <tr>
                                <td>
                                         <label class="uk-text-bold">Advance:</label>
                                           <label>{{ $sell->advance }}</label>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                         <label class="uk-text-bold">Due:</label>
                                           <label>{{ $sell->Due }}</label>
                                </td>

                            </tr>
                            <tr>
                                <td style="border-bottom: 0px;">

                       <div class="uk-width-medium-3-3">
                                    <label class="uk-text-bold">Status:</label>
                                    <label>{{ $sell->status }}</label>
                        </div>
                            
                                </td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                        </div>
                    </div>
                </div>
            </div>

              <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">

                <div class="uk-width-medium-10-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-2">
                                            <span class="uk-text-bold">Note About Lens :</span>
                                            <span class="uk-text-muted">{{$sell->note_about_lens}}</span>
                                            
                                           
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <span class="uk-text-bold">Note About Customer :</span>
                                          <span class="uk-text-muted">{{$sell->note_about_customer}}</span>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               

            </form>
        </div>
    </div>


@endsection

@section('jslink')
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>
@endsection