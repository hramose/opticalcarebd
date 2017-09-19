@extends('layouts.admin.master')

@section('title')
SMS
@endsection

@section('csslink')
    
@endsection

@section('content')
    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <div class="uk-clearfix">
                    <div class="md-top-bar-actions-left">
                        <div class="md-top-bar-checkbox">
                            <input type="checkbox" name="mailbox_select_all" id="mailbox_select_all" data-md-icheck />
                        </div>
                        <div class="md-btn-group">
                            <a href="#" class="md-btn md-btn-flat md-btn-small md-btn-wave" data-uk-tooltip="{pos:'bottom'}" title="Archive"><i class="material-icons">&#xE149;</i></a>
                            <a href="#" class="md-btn md-btn-flat md-btn-small md-btn-wave" data-uk-tooltip="{pos:'bottom'}" title="Spam"><i class="material-icons">&#xE160;</i></a>
                            <a href="#" class="md-btn md-btn-flat md-btn-small md-btn-wave" data-uk-tooltip="{pos:'bottom'}" title="Delete"><i class="material-icons">&#xE872;</i></a>
                        </div>
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode: 'click'}">
                            <button class="md-btn md-btn-flat md-btn-small md-btn-wave" data-uk-tooltip="{pos:'top'}" title="Move to"><i class="material-icons">&#xE2C7;</i> <i class="material-icons">&#xE313;</i></button>
                            <div class="uk-dropdown">
                                <ul class="uk-nav uk-nav-dropdown">
                                    <li><a href="#">Forward</a></li>
                                    <li><a href="#">Reply</a></li>
                                    <li><a href="#">Offers</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Trash</a></li>
                                    <li><a href="#">Spam</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="md-top-bar-actions-right">
                        <div class="md-top-bar-icons">
                            <i id="mailbox_list_split" class=" md-icon material-icons">&#xE8EE;</i>
                            <i id="mailbox_list_combined" class="md-icon material-icons">&#xE8F2;</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card-list-wrapper" id="mailbox">
                <div class="uk-width-large-8-10 uk-container-center">
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Today</div>
                        <div class="md-card-list-header md-card-list-header-combined heading_list" style="display: none">All Messages</div>
                        <ul class="hierarchical_slide">
                        @foreach($allsms as $sms)
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
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

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent md-fab-wave" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
            <form>
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Compose Message</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" class="md-input" id="mail_new_to"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="mail_new_message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div id="mail_upload-drop" class="uk-file-upload">
                    <p class="uk-text">Drop file to upload</p>
                    <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                    <a class="uk-form-file md-btn">choose file<input id="mail_upload-select" type="file"></a>
                </div>
                <div id="mail_progressbar" class="uk-progress uk-hidden">
                    <div class="uk-progress-bar" style="width:0">0%</div>
                </div>
                <div class="uk-modal-footer">
                    <a href="#" class="md-icon-btn"><i class="md-icon material-icons">&#xE226;</i></a>
                    <button type="button" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('jslink')
      <!--  mailbox functions -->
    <script src="{{ asset('admin/assets/js/pages/page_mailbox.min.js') }}"></script>  
@endsection