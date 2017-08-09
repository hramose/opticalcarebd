  <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">

                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>

                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>

                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                            <div class="uk-dropdown uk-dropdown-width-3">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-3-3">
                                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                            <a href="message" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                                <span class="uk-text-muted uk-display-block">Message</span>
                                            </a>
                                            <a href="sell-frame" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                                <span class="uk-text-muted uk-display-block">New Sell</span>
                                            </a>
                                            <a href="day-close-up" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                                <span class="uk-text-muted uk-display-block">Day Close Up</span>
                                            </a>
                                            <a href="notes" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-blue-600">&#xE89C;</i>
                                                <span class="uk-text-muted uk-display-block">Notes</span>
                                            </a>
                                            <a href="update-stock" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-cyan-600">&#xE923;</i>
                                                <span class="uk-text-muted uk-display-block">Update Stock</span>
                                            </a>                                            
                                            <a href="all-category" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                                <span class="uk-text-muted uk-display-block">All Category</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">0</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (0)</a></li>
                                        <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (0)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">
                                        <li>
                                            <ul class="md-list md-list-addon">
                                              <!--  <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-cyan">jj</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Nostrum explicabo.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Enim voluptatibus iste illum doloremque rerum iure asperiores quasi ut.</span>
                                                    </div>
                                                </li>-->
                                                                                           </ul>
                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="md-list md-list-addon">
                                               <!-- <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Nihil fuga earum.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Amet rerum voluptatem incidunt cum voluptas occaecati.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Occaecati a.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Quod rem deserunt porro et rerum fugiat possimus.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Distinctio suscipit neque.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Deserunt ratione qui soluta recusandae neque ratione.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Natus expedita.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Nobis tempora sed vitae illum repellat.</span>
                                                    </div>
                                                </li>-->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="{{ asset('admin/assets/img/avatars/'.sentinel::getUser()->avatar) }}" alt=""/></a>
                             <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                
                                @if (Sentinel::getUser()->roles()->first()->slug == 'admin')
                                    <li><a class="uk-text-center">Administrator</a></li>
                                @else
                                    <li><a class="uk-text-center">Manager</a></li>
                                @endif
                                
                                    <li><a href="#">{{  sentinel::getUser()->name }}</a></li>
                                    <li><a href="change-password">Change Password</a></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="mdi-hardware-keyboard-tab"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>                                   
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>
                {{--  <script type="text/autocomplete">
                    <ul class="uk-nav uk-nav-autocomplete uk-autocomplete-results">
                        {{~items}}
                        <li data-value="{{ $item.value }}">
                            <a href="{{ $item.url }}">
                                {{ $item.value }}<br>
                                <span class="uk-text-muted uk-text-small">{{{ $item.text }}}</span>
                            </a>
                        </li>
                        {{/items}}
                    </ul>
                </script>  --}}
            </form>
        </div>
    </header><!-- main header end -->

<html