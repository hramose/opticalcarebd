@extends('layouts.admin.master')

@section('title')
SMS
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
    <div id="page_content">
        <div id="page_content_inner">
            <h4 class="heading_a uk-margin-bottom">SMS</h4>        
        <a class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('allSMS') }}"><i class="material-icons">send</i>All&nbsp;Customer</a>
        <a class="md-btn md-btn-success md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('allDeliverySMS') }}"><i class="material-icons">send</i>All&nbsp;Today&nbsp;delivery&nbsp;Customer</a>
        <a class="md-btn md-btn-warning md-btn-wave-light waves-effect waves-button waves-light" href="{{ route('allDueSMS') }}"><i class="material-icons">send</i>All&nbsp;Due&nbsp;Customer</a>
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class='uk-alert uk-alert-success' data-uk-alert><a href='' class='uk-alert-close uk-close'></a>Opps.. {{ $error }}</div>
            @endforeach   
        @endif

            <div class="md-card-list-wrapper" id="mailbox">
                <div class="uk-width-large-8-10 uk-container-center">
                    <div class="md-card-list">
                        <ul class="hierarchical_slide" id="now">
                        @foreach($allsms as $sms)
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a id="updateModel" href="#" data-uk-modal="{target:'#model_update'}"><i data-id="{{ $sms->id }}" class="material-icons">&#xE15E;</i><input type="hidden" id="messageType" value="{{ $sms->message_type }}"><input type="hidden" id="message" value="{{ $sms->message }}"> Update</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">sms</span>
                                </div>
                                <div class="md-card-list-item-sender">
                                    <span>{{ $sms->send_to }}</span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <span>{{ $sms->message_type }}</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">{{ $sms->message }}</div>
                                    
                                </div>
                            </li>
                        @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
<div class="uk-modal" id="model_update">
    <div class="uk-modal-dialog">
        <div class="uk-modal-header">
            <h3 class="uk-modal-title">Update Message</h3>
        </div>
        <form id="form_validation" class="uk-form-stacked" method="POST">
            {{ csrf_field() }}
        <input type="hidden" id="messageId">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
                <div class="parsley-row">
                    <label for="category">Message Type<span class="req">*</span></label>
                    <input type="text"
                                class="md-input label-fixed"
                                id="txtMessageType"
                                required class="md-input" />
                </div>
            </div>
            
        </div>
            <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="message" id="new_message" cols="30" rows="6" class="md-input label-fixed"></textarea>
                </div>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
            <button type="button"
                    id="btnUpdateMessage"
                    class="md-btn md-btn-primary uk-modal-close">Update Message</button>
        
        </div>

    </div>
</div>
    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
            <form method="POST" action="{{ route('sendSMS') }}">
            {{ csrf_field() }}
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Send SMS</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" name="phone" class="md-input" id="mail_new_to"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div class="uk-modal-footer">
                    <button type="submit" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('jslink')
      <!--  mailbox functions -->
    <script src="{{ asset('admin/assets/js/pages/page_mailbox.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  

    <script>
        $(document).ready(function(){
            $(document).on('click','#updateModel',function(event){
                $('#txtMessageType').prop('disabled', true);
                var id = $(this).find("i").attr("data-id");
                var messageType = $(this).find('#messageType').val();
                var message = $(this).find('#message').val();
                $('#messageId').val(id);
                $('#txtMessageType').val(messageType);
                $('#new_message').val(message);
            });
            $(document).on('click','#btnUpdateMessage', function(event){
                $.ajax({
                    type:'POST',
                    url:'/admin/sms/update',
                    data:{
                        '_token':$('input[name=_token]').val(),
                        'id':$('#messageId').val(),
                        'message':$('#new_message').val()       
                    },
                    success: function(data){
                        if((data.errors)){
                            if(data.errors.message){
                                toastr.error(data.errors.message, 'Error Alert', {timeOut: 8000});
                            }
                        }else{
                            swal("Good job!", "Message Successfully Updated!", "success");
                            setTimeout(function () { location.reload(); }, 1000);
                        }
                    }
                });
            });

            });
    </script>
@endsection