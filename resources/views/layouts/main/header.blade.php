 <!-- Header -->
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12"> 
            <!-- Header Logo -->
            <div class="logo"><a title="Optical Care BD" href="{{ route('home') }}"><img alt="Optical Care BD" src="{{ asset('main/images/logo.png') }}"></a></div>
            <!-- End Header Logo --> 
          </div>
          <div class="col-lg-9 col-xs-12 right_menu">
            <div class="toplinks"> 
              {{--  <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Default welcome msg! </div>
              <!-- End Default Welcome Message -->
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"><a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#">Company <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="about_us.html">About Us</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Customer Service</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Privacy Policy</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="sitemap.html">Site Map</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search Terms</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Advanced Search</a></li>
                  </ul>
                </div>
                <!-- End Header Company -->  --}}
                
                <div class="login"><a href="{{ route('login') }}"><span class="hidden-xs">Log In</span></a></div>
              </div>
              <!-- links --> 
            </div>
            
            <!-- Search-col -->
            <div class="search-box pull-right">
              <form action="" method="POST" id="search_mini_form" name="Categories">
                <input type="text" placeholder="Search entire store here..." value="Search" maxlength="70" name="search" id="search">
                <button type="button" class="search-btn-bg"><span class="glyphicon glyphicon-search"></span>&nbsp;</button>
              </form>
            </div>
            <!-- End Search-col --> 
            <!-- Header Language -->
            <div class="lang-curr">
              <div class="form-language">
                <ul class="lang">
                  <li class=""><a href="#" title="English"><img src="{{ asset('main/images/english.png') }}" alt="English" /> <span>English</span></a></li>
                  <li class=""><a href="#" title="Francais"><img src="{{ asset('main/images/francais.png') }}" alt="Francais" /> <span>francais</span></a></li>
                  <li class=""><a href="#" title="German"><img src="{{ asset('main/images/german.png') }}" alt="German" /> <span>german</span></a></li>
                </ul>
              </div>
              <div class="form-currency">
                <ul class="currencies_list">
                  <li class=""><a class="" title="Dollar" href="#">$</a></li>
                  <li class=""><a class="" title="Euro" href="#">&euro;</a></li>
                  <li class=""><a class="" title="Pound" href="#">&pound;</a></li>
                </ul>
              </div>
            </div>
            
            <!-- End Header Currency --> 
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->