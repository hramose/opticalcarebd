@extends('layouts.admin.master')

@section('title')
Notes
@endsection

@section('csslink')
      <link rel="stylesheet" href="{{ asset('admin/assets/css/sweetalert.css') }}">
@endsection

@section('content')
        <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center reset-print">

                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-3-10 hidden-print uk-visible-large">
                        <div class="md-list-outside-wrapper" id="notes">
                            <ul class="md-list md-list-outside notes_list" id="notes_list">

                                <li class="heading_list uk-text-danger">Important Notes</li>

                                @foreach ($notes as $note)
                                     <li>
                                    <a href="#" class="md-list-content note_link">
                                        <span class="md-list-heading uk-text-truncate">{{ $note->title }}</span></span>
                                        <span style="display:none;" id="note-content">{{ $note->content }}</span>
                                        <span class="uk-text-small uk-text-muted">{{ $note->created_at  }}</span>
                                    </a>
                                </l>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-large-7-10">
                        <div class="md-card md-card-single">
                            <form >
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                                <div class="md-card-toolbar hidden-print">
                                    <div class="md-card-toolbar-actions">
                                        <i id="addNote" class="md-icon material-icons">&#xE161;</i>
                                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                            <i class="md-icon material-icons">&#xE5D4;</i>
                                            <div class="uk-dropdown uk-dropdown-small">
                                                <ul class="uk-nav">
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE80D;</i> Share</a></li>
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE149;</i> Archive</a></li>
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE872;</i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="note_title" id="note_title" class="md-card-toolbar-input" type="text" value="" placeholder="Add title" />
                                </div>
                                <div class="md-card-content">
                                    <textarea name="note_content" id="note_content" class="md-input" cols="30" rows="12" placeholder="Add content"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-danger" href="#" id="note_add">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>
                    <div class="uk-grid" style="display:none;" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Remove</a> Info" data-status="info" data-pos="bottom-center">Info</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" id="noti" data-message="<a href='#' class='notify-action'>Clear</a> Note added" data-status="success" data-pos="bottom-center">Success</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Refresh</a> Warning Message" data-status="warning" data-pos="bottom-center">Warning</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Undo</a> Danger message" data-status="danger" data-pos="bottom-center">Danger</button>
                        </div>
                    </div>

@endsection

@section('jslink')
        <!--  notes functions -->
    <script src="{{ asset('admin/assets/js/pages/page_notes.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sweetalert-dev.js') }}"></script>
    <script>
        $(document).ready(function(){
           $('#addNote').click(function(event){
                 var title = $('#note_title').val();
                var content = $('#note_content').val();
                console.log(title,content);
                $.post('notes', {'_token':$('input[name=_token]').val(), 'title':title,'content':content}, function(data){
                    console.log(data);
                    $('#notes').load(location.href + ' #notes');
                    swal("Note added!", "You clicked the button!", "success")
                });
            });
        });
    </script>
@endsection
