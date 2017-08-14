@extends('layouts.admin.master')

@section('title')
Sell Frame
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
       
           <div class="uk-grid uk-grid-small" data-uk-grid-margin="" data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-6-10">
                    <div class="md-card" >
                        <div class="md-card-content">
                         <h3 class="heading_a">Frame Order From</h3>
                            <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                          
                                               <label>Order No<span class="req"></span></label>
                                                <input type="text" 
                                                            id="txt_OrderNo" 
                                                            class="md-input">
                                                 <span class="md-input-bar "></span>
                                            </div>
                                    </div>

                                </div>
                            </div>
                             <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label>Customer Name<span class="req"></span></label>
                                                <input type="text" 
                                                            id="txt_CustomerName" 
                                                            class="md-input">
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
                                    <input type="text" 
                                                id="val_birth"  
                                                class="md-input sellsDate"  
                                                data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </div>
                            </div>
                          </div><br>
                          <div class="uk-form-row">
                                <div class="uk-grid" data-uk-grid-margin="">
                                         <div class="uk-width-medium-1-1">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label>Phone:<span class="req"></span></label>
                                                <input type="text" 
                                                            id="txt_Phone" 
                                                            class="md-input">
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
                                               <label>Address<span class="req"></span></label>
                                                <input type="text" 
                                                            id="txt_Address" 
                                                            class="md-input">
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
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label>SPH:<span class="req"></span></label>
                                           <input type="text" 
                                                       id="txt_Rsph" 
                                                       class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label>CYL:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Rcyl" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label>Axis:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Raxis" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            <tr>
                                <td colspan="3">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label>Add:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Radd" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                     <label for="val_birth">Delivery Date:<span class="req"></span></label>
                                     <input type="text" 
                                                id="val_birth"  
                                                class="md-input deliveryDate" data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (YYYY-MM-DD)" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style=" border-bottom: 0px;">
                                     <div class="uk-width-medium-1-1">
                                        <select id="mySelect" class="opt_category" data-md-selectize data-md-selectize-bottom 
                                                    data-uk-tooltip="{pos:'top'}" title="Select Cetagory id" >
                                            <option value="">Select Cetagory Name</option>
                                            @foreach($categorys as $category)
                                                 <option  value="{{ $category->category }}">{{ $category->category }}</option>
                                            @endforeach
                                    </select>
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
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">SPH:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Lsph" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">CYL:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Lcyl" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Axis:<span class="req"></span></label>
                                           <input type="text" 
                                                      id="txt_Laxis" 
                                                      class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            <tr>
                                <td colspan="3">
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Add:<span class="req"></span></label>
                                           <input type="text" 
                                                       id="txt_Ladd" 
                                                       class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                     <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">I.P.D.<span class="req"></span></label>
                                           <input type="text" 
                                                       id="txt_IPD" 
                                                       class="md-input">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style=" border-bottom: 0px;">
                                     <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Quantity:<span class="req"></span></label>
                                           <input type="text" 
                                                       id="txt_Quantity" 
                                                       class="md-input">
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
                                           <input type="text" 
                                                       id="txt_Total"   
                                                       class="md-input"
                                                       onkeyup="sum();">
                                           <span class="md-input-bar "></span>
                                    </div>
                               </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="md-input-wrapper md-input-wrapper-info">
                                           <label for="Number">Advance:<span class="req"></span></label>
                                           <input type="text" 
                                                       id="txt_Adv"
                                                       class="md-input"
                                                       onkeyup="sum();">
                                           <span class="md-input-bar "></span>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                           <label for="Number">Due:</label>
                                           <label for="Number" id="lbl_Due"></label>
                                </td>

                            </tr>
                            <tr>
                                <td style="border-bottom: 0px;">

                       <div class="uk-width-medium-3-3">
                                <label>Status:</label>
                                <label ><span class="" id="lbl_Status"></span></label>
                        </div>
                        <div class="uk-width-medium-3-3">
                        {{--  <input type="checkbox" data-switchery data-switchery-color="#1e88e5" id="switch_demo_primary less" value="Less" />
                            <label for="switch_demo_primary" class="inline-label">Less <small>(Only if have)</small></label>  --}}

                            <input type="checkbox" name="checkbox_demo_mercury" id="checkbox_demo_1 less"  />
                                        <label for="checkbox_demo_1" class="inline-label">Less <small>(Only if have)</small></label>
                          
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
                                               <label>Note About Lens<span class="req"></span></label>
                                                <input type="text"
                                                            id="txt_NAL" 
                                                            class="md-input">
                                                <span class="md-input-bar "></span>
                                            </div>
                                    </div>
                                    <div class="uk-width-medium-1-2">

                                           <div class="md-input-wrapper md-input-wrapper-success">
                                               <label>Note About Customer<span class="req"></span></label>
                                                <input type="text" 
                                                            id="txt_NAC" 
                                                            class="md-input">
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
                                           <button class="md-btn md-btn-twitter md-btn-large md-btn-block" id="btn_submit">Submit</button>
                                           </div>
                                        <div class="uk-width-medium-1-2">
                                          <button id="btn_reset" class="md-btn md-btn-gplus md-btn-large md-btn-block">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
    </div>
    </div>
@endsection

@section('jslink')
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>
    <script>
    function sum(){
        
            var total = document.getElementById('txt_Total').value;
            var advance = document.getElementById('txt_Adv').value;
            var due = parseInt(total) - parseInt(advance);
            if (!isNaN(due)) {
                $('#lbl_Due').text(due);
                if(parseInt(advance) < parseInt(total)){
                    $('#lbl_Status').text('Due');
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-warning');
                }else if(parseInt(advance) == parseInt(total)){
                    $('#lbl_Status').text('Paid');        
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-success');   
                }else{
                    $('#lbl_Status').text('Error');  
                    $("#lbl_Status").attr('class', 'uk-badge  uk-badge-danger');
                }
            }
    }
        $('#btn_submit').click(function(event){
            if($('#less').is(':checked') == true){
                console.log('Less');
            }
            $.ajax({
                type:'POST',
                url:'frame',
                data:{
                    '_token': $('input[name=_token]').val(),
                    'order_no': $('#txt_OrderNo').val(),
                    'CustomerName': $('#txt_CustomerName').val(),
                    'SellsDate': $('.sellsDate').val(),
                    'Phone': $('#txt_Phone').val(),
                    'Address': $('#txt_Address').val(),
                    'RightSPH': $('#txt_Rsph').val(),
                    'RightCYL': $('#txt_Rcyl').val(),
                    'RightAxis': $('#txt_Raxis').val(),
                    'RightADD': $('#txt_Radd').val(),
                    'DeliveryDate': $('.deliveryDate').val(),
                    'Category': $('.opt_category').val(), 
                    'LeftSPH': $('#txt_Lsph').val(),
                    'LeftCYL': $('#txt_Lcyl').val(),
                    'LeftAxis': $('#txt_Laxis').val(),
                    'LeftADD': $('#txt_Ladd').val(),
                    'IPD': $('#txt_IPD').val(),
                    'Quantity': $('#txt_Quantity').val(), 
                    'Total': $('#txt_Total').val(), 
                    'Advance': $('#txt_Adv').val(), 
                    'Due': $('#lbl_Due').text(), 
                    'Less': $('#less').val(),
                    'Status': $('#lbl_Status').text(), 
                    'NoteAL': $('#txt_NAL').val(),
                    'NoteAC': $('#txt_NAC').val(),
                },
                success:function(data){
                    if((data.errors)) {
                        if(data.errors.order_no){
                            toastr.error(data.errors.order_no,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.SellsDate){
                            toastr.error(data.errors.SellsDate,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Phone){
                            toastr.error(data.errors.Phone,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Category){
                            toastr.error(data.errors.Category,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Quantity){
                            toastr.error(data.errors.Quantity,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Total){
                            toastr.error(data.errors.Total,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Advance){
                            toastr.error(data.errors.Advance,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Due){
                            toastr.error(data.errors.Due,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Less){
                            toastr.error(data.errors.Less,'Error Alert',{timeOut:8000});
                        }
                        if(data.errors.Status){
                            toastr.error(data.errors.Status,'Error Alert',{timeOut:8000});
                        }
                    }else{
                        swal("Good job!", "Frame Sell Successfully!", "success")
                    }
                }
            });
        });
        $('#btn_reset').click(function(event){
            $('#txt_OrderNo').val("");
            $('#txt_CustomerName').val("");
            $('.sellsDate').val("");
            $('#txt_Phone').val("");
            $('#txt_Address').val("");
            $('#txt_Rsph').val("");
            $('#txt_Rcyl').val("");
            $('#txt_Raxis').val("");
            $('#txt_Radd').val("");
            $('.deliveryDate').val("");
            $('.opt_category').val(""); 
            $('#txt_Lsph').val("");
            $('#txt_Lcyl').val("");
            $('#txt_Laxis').val("");
            $('#txt_Ladd').val("");
            $('#txt_IPD').val("");
            $('#txt_Quantity').val(""); 
            $('#txt_Total').val(""); 
            $('#txt_Adv').val(""); 
            $('#lbl_Due').text(""); 
            $('#less').prop('checked', false);
            $('#lbl_Status').text(""); 
            $("#lbl_Status").attr('class', '');            
            $('#txt_NAL').val("");
            $('#txt_NAC').val("");
            toastr.success('All Data Successfully Reset :)','Success Alert',{timeOut:8000});            
        });
    </script>
@endsection