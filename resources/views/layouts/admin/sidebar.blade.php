<!-- main sidebar -->
    <aside id="sidebar_main">

        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="{{ asset('admin/assets/img/logo_main.png') }}" alt="" height="15" width="145"/>
                    <img class="logo_light" src="{{ asset('admin/assets/img/logo_main_white.png') }}" alt="" height="15" width="145"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="{{ asset('admin/assets/img/logo_main_small.png') }}" alt="" height="32" width="145"/>
                    <img class="logo_light" src="{{ asset('admin/assets/img/logo_main_small_light.png') }}" alt="" height="32" width="145"/>
                </a>
            </div>

        </div>
        <div class="menu_section">
            <ul>
                <li class="{{ (Request::is('admin/dashboard')? 'current_section' : '') }}" title="Dashboard">
                    <a href="{{ route('adminDashboard') }}">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>

                </li>
              <!--
                <li title="User Profile">
                    <a href="client">
                        <span class="menu_icon"><i class="material-icons">&#xE335;</i></span>
                        <span class="menu_title">Client</span>
                    </a>

                </li>
                -->
                 <li  title="Stock">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE42A;</i></span>
                        <span class="menu_title">Stock</span>
                    </a>
                    <ul>
                        <li  class="{{ (Request::is('admin/stock/frame')? 'act_item' : '') }}">
                            <a href="{{ route('frame') }}">
                                <span class="menu_icon"><i class="material-icons">&#xE42A;</i></span>
                                <span class="menu_title">Frame</span>

                            </a>
                        </li>
                        <li  class="{{ (Request::is('admin/stock/sunglass')? 'act_item' : '') }}">
                            <a href="{{ route('sunglass') }}">
                                <span class="menu_icon"><i class="material-icons">&#xE42A;</i></span>
                                <span class="menu_title">SunGlass</span>

                            </a>
                        </li>
                        <li  class="{{ (Request::is('admin/stock/contactlens')? 'act_item' : '') }}">
                            <a href="{{ route('contactlens') }}">
                                <span class="menu_icon"><i class="material-icons">&#xE42A;</i></span>
                                <span class="menu_title">Contact Lens</span>

                            </a>
                        </li>
                         <li  class="{{ (Request::is('admin/stock/plasticlens')? 'act_item' : '') }}">
                            <a href="{{ route('plasticlens') }}">
                                <span class="menu_icon"><i class="material-icons">&#xE42A;</i></span>
                                <span class="menu_title">Plastic Lens</span>

                            </a>
                        </li>
                    </ul>
                </l>
                <li title="Sell">
                    <a href="sell">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Sell</span>
                    </a>
                    
                </li>
                <li title="Expenses">
                    <a href="expenses">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Expenses</span>
                    </a>
                    
                </li>
                 <li title="Notes">
                    <a href="{{ route('notes') }}">
                        <span class="menu_icon"><i class="material-icons">note</i></span>
                        <span class="menu_title">Notes</span>
                    </a>
                </li>
                <!--
                <li title="User Profile">
                    <a href="stock-contact_lens">
                        <span class="menu_icon"><i class="material-icons"></i></span>
                        <span class="manu_title">Stock Contact Lens</span>
                    </a>
                </li>
                -->
                 <div class="uk-text-center">
                <iframe src="http://free.timeanddate.com/clock/i5gfj8y5/n73/szw160/szh160/hoc000/hbw0/hfc09f/cf100/hnc07c/hwc000/hcw2/facfff/fdi76/mqcfff/mqs4/mql18/mqw4/mqd60/mhcfff/mhs4/mhl5/mhw4/mhd62/mmv0/hhcfff/hhs1/hhb10/hmcfff/hms1/hmb10/hscfff/hsw3" frameborder="0" width="160" height="160"></iframe>

                    
                </div>
            </ul>
        </div>
    </aside><!-- main sidebar end -->
