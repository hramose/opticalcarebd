@extends('layouts.admin.master')

@section('title')
Sell
@endsection

@section('csslink')
    
@endsection    

@section('content')
<div id="page_content">

        <div id="page_content_inner">
            {{--  <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="uk-text-center">
                         <img class="logo_regular" src="assets/img/logo_main.png" alt="" height="15" width="100"/>
                    </div>
               </div>
            </div>  --}}
        <form method="POST" id="form_validation" class="uk-form-stacked">
           <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">

                <div class="uk-width-medium-6-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                         <h3 class="heading_a">Sell Everything Form here</h3>
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Order No<span class="req"></span></label>
                                                <input type="text" name="txt_OrderNo" value=""  class="md-input">
                                                 <span class="md-input-bar "></span>
                                            </div>
                                    </div>

                                </div>
                            </div>
                             <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Customer Name<span class="req"></span></label>
                                                <input type="text" name="txt_CustomerName" value=""  class="md-input">
                                                 <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="uk-width-medium-4-10 uk-row-first">
                    <div class="md-card" >
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                            <div class="uk-width-medium-1-1">
                                <div class="parsley-row uk-margin-top">
                                    <label for="val_birth">Date:<span class="req"></span></label>
                                    <input type="text" name="jDate"  id="val_birth"  class="md-input" data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </div>
                            </div>
                          </div><br>
                          <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Phone:<span class="req"></span></label>
                                                <input type="text" name="txt_Phone" value=""  class="md-input">
                                                 <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                </div>
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
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Address<span class="req"></span></label>
                                                <input type="text" name="txt_Address" value=""  class="md-input">
                                                 <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>

               <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">

                <div class="uk-width-medium-8-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                        <div class="uk-overflow-container">
                        <table class="uk-table uk-table-striped">
                            <thead>
                            <tr>
                                <th colspan="3" class="uk-text-center">Right</th>
                                <th></th>
                                <th colspan="3" class="uk-text-center">Left</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">SPH:<span class="req"></span></label>
                                           <input type="text" name="txt_Rsph" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">CYL:<span class="req"></span></label>
                                           <input type="text" name="txt_Rcyl" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Axis:<span class="req"></span></label>
                                           <input type="text" name="txt_Raxis" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                 <td></td>
                                 <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">SPH:<span class="req"></span></label>
                                           <input type="text" name="txt_Lsph" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">CYL:<span class="req"></span></label>
                                           <input type="text" name="txt_Lcyl" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Axis:<span class="req"></span></label>
                                           <input type="text" name="txt_Laxis" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Add:<span class="req"></span></label>
                                           <input type="text" name="txt_Radd" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td></td>
                                <td colspan="3">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Add:<span class="req"></span></label>
                                           <input type="text" name="txt_Ladd" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="3">
                                     <label for="val_birth">Delivery Date:<span class="req"></span></label>
                                     <input type="text" name="DDate"  id="val_birth"  class="md-input" data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </td>
                                <td></td>
                                <td colspan="3">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">I.P.D.<span class="req"></span></label>
                                           <input type="text" name="txt_IPD" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>

                            </tr>
                           
                            <tr>
                                <td colspan="3" style=" border-bottom: 0px;">
                                     <div class="uk-width-medium-1-1">
                                        <select id="select_demo_5"  name="opt_category" data-md-selectize data-md-selectize-bottom data-uk-tooltip="{pos:'top'}" title="Select Cetagory Name">
                                            <option value="">Select Cetagory Name</option>
                                                                                                            <option value="sizar_frame">sizar_frame</option>
                                                                                                            <option value="sizar_frame">sizar_frame</option>
                                                    
                                        </select>

                                    </div>
                                </td>
                                <td></td>
                                <td colspan="3" style="border-bottom: 0px;">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Quantity:<span class="req"></span></label>
                                           <input type="text" name="txt_Quantity" value=""  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
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
                                     <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Total:<span class="req"></span></label>
                                           <input type="text" name="txt_Total" value="" id="total"  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                               </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Advance:<span class="req"></span></label>
                                           <input type="text" name="txt_Adv" value="" id="adv"  class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info md-input-filled">
                                           <label for="Number">Due:<span class="req"></span></label>
                                           <input type="text" name="txt_Due" value="" id="due" class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td style="border-bottom: 0px;">
                                <div class="uk-width-medium-1-1">
                                  <span class="icheck-inline">
                                      <input type="radio" name="status" value="Paid" id="status" data-md-icheck />
                                      <label for="radio_demo_inline_1" class="inline-label">Paid</label>
                                  </span>
                                  <span class="icheck-inline">
                                      <input type="radio" name="status" value="Due" id="status" data-md-icheck />
                                      <label for="radio_demo_inline_2" class="inline-label">Due</label>
                                  </span>

                                </div>
                                   <div class="uk-width-medium-1-1">
                                        <button id="cal" type="button" onclick="Calculate()" class="md-btn md-btn-success md-btn-block">Calculate</button>

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

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Note About Lens<span class="req"></span></label>
                                                <input type="text" name="txt_NAL" value=""  class="md-input">
                                                <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label for="Number">Note About Customer<span class="req"></span></label>
                                                <input type="text" name="txt_NAC" value=""  class="md-input">
                                                <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                </div>
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
                                           <input type="submit"  class="md-btn md-btn-twitter md-btn-large md-btn-block" name="btn_submit">
                                           </div>
                                        <div class="uk-width-medium-1-2">
                                          <button class="md-btn md-btn-gplus md-btn-large md-btn-block">Reset</button>
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
    
@endsection