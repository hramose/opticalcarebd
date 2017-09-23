  <div class="mm-toggle-wrap">
    <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
  </div>
  <!-- Navbar -->
  <nav>
    <div class="container">
      <div class="row">
        <div class="nav-inner col-lg-12">
          <ul id="nav" class="hidden-xs">
            <li class="level0 nav-8 level-top active"><a href="{{ route('home') }}"><span>Home</span></a></li>
            {{--  <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>Shop</span></a></li>  --}}
            <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>About Us</span></a></li>
            <li class="level0 nav-8 level-top"><a href="grid.html" class="level-top"><span>Contact Us</span></a></li>
          </ul>
          <div class="menu_top pull-right">
          <ul id="nav" class="hidden-xs">
            <li class="level0 nav-8 level-top"><a href="{{ route('login') }}"><span>Login</span></a></li>
            
          </ul>
          </div>

          {{--  <div class="menu_top">
            <div class="top-cart-contain pull-right"> 
              <!-- Top Cart -->
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#"><span class="hidden-xs">Shopping Cart (2)</span></a></div>
                <div>
                  <div class="top-cart-content" style="display: none;">
                    <div class="block-subtitle">
                      <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                      <!--top-subtotal-->
                      <div class="pull-right">
                        <button title="View Cart" class="view-cart" type="button"><span>View Cart</span></button>
                      </div>
                      <!--pull-right--> 
                    </div>
                    <!--block-subtitle-->
                    <ul class="mini-products-list" id="cart-sidebar">
                      <li class="item first">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#l"><img alt="Sample Product" src="{{ asset('main/products-images/product4.jpg') }}"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                            <p class="product-name"><a href="product_detail.html">Sample Product</a></p>
                          </div>
                        </div>
                      </li>
                      <li class="item last">
                        <div class="item-inner"><a class="product-image" title="Sample Product" href="#"><img alt="Sample Product" src="{{ asset('main/products-images/product3.jpg') }}"></a>
                          <div class="product-details">
                            <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                            <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                            <p class="product-name"><a href="product_detail.html">Sample Product</a></p>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="actions">
                      <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                    </div>
                    <!--actions--> 
                  </div>
                </div>
              </div>
              <!-- Top Cart -->
              <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                <input value="" type="hidden">
                <input id="enable_module" value="1" type="hidden">
                <input class="effect_to_cart" value="1" type="hidden">
                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
              </div>
            </div>
          </div>  --}}
        </div>
      </div>
    </div>
  </nav>
  <!-- end nav --> 