@extends('layouts.admin.master')

@section('title')
Note
@endsection

@section('csslink')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
    <div id="top_bar">
        <div class="md-top-bar">
            <h2 class="uk-text-center">Take Your Note Everywhere !!!</h2>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class='uk-alert uk-alert-success' data-uk-alert><a href='' class='uk-alert-close uk-close'></a>Opps.. {{ $error }}</div>
            @endforeach   
        @endif

            <div class="md-card-list-wrapper" id="mailbox">
                <div class="uk-width-large-8-10 uk-container-center">
                    <div class="md-card-list">
                        <ul class="hierarchical_slide" id="now">
                             
                            @foreach($notes as $note)
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a id="updateModel" href="#" data-uk-modal="{target:'#model_update'}"><i class="material-icons" data-id="{{ $note->id }}">update</i><input type="hidden" id="noteTitle" value="{{ $note->title }}"><input type="hidden" id="noteContent" value="{{ $note->content }}"> Update</a></li>
                                            <li><a href="#" id="deleteNote"><i data-id="{{ $note->id }}" class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date">{{ $note->created_at }}</span>
                                
                                <div class="md-card-list-item-avatar-wrapper">
                                    <span class="md-card-list-item-avatar md-bg-cyan">note</span>
                                </div>
                                
                                <div class="md-card-list-item-subject">
                                    
                                    <span>{{ $note->title }}</span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        {{ $note->content }}
                                    </div>
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
            <h3 class="uk-modal-title">Update Note</h3>
        </div>
        <form id="form_validation" class="uk-form-stacked" method="POST">
            {{ csrf_field() }}
        <input type="hidden" id="noteId">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-1">
                <div class="parsley-row">
                    <label for="category">Title<span class="req">*</span></label>
                    <input type="text"
                                class="md-input label-fixed"
                                id="oldTitle"
                                required class="md-input" />
                </div>
            </div>
            
        </div>
            <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Content</label>
                    <textarea name="message" id="oldContent" cols="30" rows="6" class="md-input label-fixed"></textarea>
                </div>
        <div class="uk-modal-footer uk-text-right">
            <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
            <button type="button"
                    id="btnUpdateMessage"
                    class="md-btn md-btn-primary uk-modal-close">Update Note</button>
        
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
            {{ method_field('DELETE') }}

                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Add Note</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">Title</label>
                    <input type="text" name="title" class="md-input" id="newTitle"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Content</label>
                    <textarea name="content" id="newContent" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div class="uk-modal-footer">
                    <button type="button" id="btn_save" class="uk-float-right md-btn md-btn-primary uk-modal-close">Save</button>
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
            $(document).on('click','#btn_save', function(event){
                $.ajax({
                    type:'POST',
                    url:'/admin/notes/add',
                    data:{
                        '_token':$('input[name=_token]').val(),
                        'title':$('#newTitle').val(),
                        'content':$('#newContent').val(),
                    },
                    success: function(data){
                        if((data.errors)){
                            if(data.errors.title){
                                toastr.error(data.errors.title,'Error Alert',{timeOut: 8000});
                            }
                            if(data.errors.content){
                                toastr.error(data.errors.content,'Error Alert',{timeOut: 8000});
                            }
                        }else{
                            swal("Good job!", "Note Successfully Saved!", "success");
                            setTimeout(function () { location.reload(); }, 1000);
                        }
                    }
                });
            });
            $(document).on('click','#updateModel',function(event){
                var id = $(this).find("i").attr("data-id");
                var noteTitle = $(this).find('#noteTitle').val();
                var noteContent = $(this).find('#noteContent').val();
                $('#noteId').val(id);
                $('#oldTitle').val(noteTitle);
                $('#oldContent').val(noteContent);
            });
            $(document).on('click','#btnUpdateMessage', function(event){
                 $.ajax({
                    type:'POST',
                    url:'/admin/notes/update',
                    data:{
                        '_token':$('input[name=_token]').val(),
                        'id':$('#noteId').val(),
                        'title':$('#oldTitle').val(),
                        'content':$('#oldContent').val(),
                    },
                    success: function(data){
                        if((data.errors)){
                            if(data.errors.title){
                                toastr.error(data.errors.title,'Error Alert',{timeOut: 8000});
                            }
                            if(data.errors.content){
                                toastr.error(data.errors.content,'Error Alert',{timeOut: 8000});
                            }
                        }else{
                            swal("Good job!", "Note Successfully Updated!", "success");
                            setTimeout(function () { location.reload(); }, 1000);
                        }
                    }
                });
            });
              $(document).on('click', '#deleteNote', function(event){
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
                            $.post('/admin/notes/delete', {'id': id, '_token':$('input[name=_token]').val(),'_method':$('input[name=_method]').val()}, function(data){
                                setTimeout(function () { location.reload(); }, 1000);                                
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