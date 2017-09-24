@extends('layouts.main.master')


@section('title')
Home
@endsection

@section('csslink')

@endsection

@section('content')
  <!-- Slider -->
  <div id="magik-slideshow" class="magik-slideshow">
    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
      <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
        <ul>
          <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('main/images/slide-img1.jpg') }}"><img src="{{ asset('main/images/slide-img1.jpg') }}" alt="slide-img" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
            <div class="info">
              <div    class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='860'  data-y='60'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>New Season</div>
              <div class='tp-caption line' data-x='860'  data-y='120'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>&nbsp;</div>
              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='860'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Embracing tradition. </div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='860'  data-y='330'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'> {{--<a href='#' class="view-more">View More</a>--}} <a href='{{ route('login') }}' class="buy-btn">Login</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='860'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Reviving Craftsmanship. Re-introducing quality.</div>
              <div    class='tp-caption Title sft  tp-resizeme small-size ' data-x='860'  data-y='370'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'></div>
            </div>
          </li>
          <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('main/images/slide-img2.jpg') }}"><img src="{{ asset('main/images/slide-img2.jpg') }}" alt="slide" data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat'  />
            <div class="info">
              <div class='tp-caption ExtraLargeTitle sft tp-resizeme ' data-x='395'  data-y='60'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'>YOU’RE ALWAYS</div>
              <div class='tp-caption line' data-x='395'  data-y='120'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>&nbsp;</div>
              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='395'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>WELCOME</div>
              <div    class='tp-caption Title1 sft tp-resizeme' data-x='395'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>To Optical Care</div>
              <div    class='tp-caption sfb  tp-resizeme ' data-x='395'  data-y='330'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>{{--<a href='#' class="view-more">View More</a>--}} <a href='{{route('login')}}' class="buy-btn">Login</a></div>
              <div    class='tp-caption Title sft  tp-resizeme ' data-x='395'  data-y='370'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;font-size:11px'></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <div class="top-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner1">
            <div class="top-b-text"><strong>Designer Frame</strong> For Men and Women</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col free-shipping"><strong>Free Shipping</strong> on order over $199</div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col add-banner2">
            <div class="top-b-text"><strong>Luxury Sunglass</strong>2017 New Arrive</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last offer"><strong>New Collection</strong> For Everyone </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- main container -->
  <div class="main-col">
    <div class="container">
      <div class="row">
        <div class="product-grid-view">
          <div class="col-md-12">
            <div class="std">
              <div class="home-tabs wow bounceInUp animated">
                <div class="producttabs">
                  <div id="magik_producttabs1" class="magik-producttabs"> 
                    <!--<h3></h3>-->
                    <div class="magik-pdt-container"> 
                      <!--Begin Tab Nav -->
                      <div class="magik-pdt-nav">
                        <ul class="pdt-nav">
                          <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li>
                          <li class="item-nav" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">New Arrivals</span></li>
                        </ul>
                      </div>
                      <!-- End Tab Nav --> 
                      <!--Begin Tab Content -->
                      <div class="magik-pdt-content wide-5">
                        <div class="pdt-content is-loaded pdt_best_sales tab-content-actived">
                          <ul class="pdt-list products-grid-home zoomOut play">
                            <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product1.jpg') }}" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product2.jpg') }}" alt="Sample Product"></a>
                                    <div class="sale-label sale-top-left">Sale</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:40%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product3.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:0%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item last item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product4.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:100%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate  wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product5.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:100%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product6.jpg') }}" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product7.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:40%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product8.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:0%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="pdt-content pdt_new_arrivals is-loaded">
                          <ul class="pdt-list products-grid-home zoomOut play">
                            <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product11.jpg') }}" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product13.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:0%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product15.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:100%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$90.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$80.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item last item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product1.jpg') }}" alt="Sample Product"></a>
                                    <div class="new-label new-top-left">New</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:80%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate wide-first">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product2.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:40%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product3.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:0%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product4.jpg') }}" alt="Sample Product"></a>
                                    <div class="sale-label sale-top-right">Sale</div>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:100%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="item last item-animate">
                              <div class="item-inner">
                                <div class="item-img">
                                  <div class="item-img-info"><a href="product_detail.html" title="Sample Product" class="product-image"><img src="{{ asset('main/products-images/product5.jpg') }}" alt="Sample Product"></a>
                                    <div class="item-box-hover">
                                      <div class="box-inner">
                                        <div class="actions">
                                          <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                          </div>
                                          <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                                          <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title"><a href="product_detail.html" title="Sample Product">Sample Product</a> </div>
                                    <div class="item-content">
                                      <div class="rating">
                                        <div class="ratings">
                                          <div class="rating-box">
                                            <div class="rating" style="width:100%"></div>
                                          </div>
                                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                        </div>
                                      </div>
                                      <div class="item-price">
                                        <div class="price-box">
                                          <p class="old-price"><span class="price-label">Regular Price:</span> <span class="price">$100.00 </span> </p>
                                          <p class="special-price"><span class="price-label">Special Price</span> <span class="price">$90.00 </span> </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end main container --> 
  <!-- Featured Slider -->
  {{--  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products">
      <div class="new_title center">
        <h2>Featured Products</h2>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product10.jpg') }}"> </a>
                  <div class="sale-label sale-top-left">sale</div>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:80%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product11.jpg') }}"></a>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:30%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box">
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product12.jpg') }}"></a>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:100%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box">
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->
          
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product13.jpg') }}"> </a>
                  <div class="new-label new-top-left">new</div>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:80%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product14.jpg') }}"></a>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:30%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box">
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img alt="Sample Product" src="{{ asset('main/products-images/product15.jpg') }}"></a>
                  <div class="item-box-hover">
                    <div class="box-inner">
                      <div class="actions">
                        <div class="add_cart">
                          <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                        </div>
                        <div class="product-detail-bnt"><a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a></div>
                        <span class="add-to-links"><a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="compare.html" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="Sample Product" href="product_detail.html"> Sample Product </a> </div>
                  <div class="item-content">
                    <div class="rating">
                      <div class="ratings">
                        <div class="rating-box">
                          <div style="width:100%" class="rating"></div>
                        </div>
                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                      </div>
                    </div>
                    <div class="item-price">
                      <div class="price-box">
                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $100.00 </span> </p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider --> 
  <!--Offer Start-->
  <div class="offer-slider wow animated parallax parallax-2">
    <div class="container">
      <ul class="bxslider">
        <li>
          <h2>NEW ARRIVALS</h2>
          <h1>Sale up to 30% off</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. </p>
          <a class="shop-now" href="#">Shop now</a> </li>
        <li>
          <h2>Hello hotness!</h2>
          <h1>Summer collection</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. </p>
          <a class="shop-now" href="#">View More</a> </li>
        <li>
          <h2>New launch</h2>
          <h1>Designer dresses on sale</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Integer sed arcu massa. </p>
          <a class="shop-now" href="#">Learn More</a> </li>
      </ul>
    </div>
  </div>  --}}
  <!--Offer silder End--> 
  
  <!-- Latest Blog -->
  {{--  <section class="latest-blog wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="new_title center">
          <h2>Latest Blog</h2>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="blog_inner">
            <div class="blog-img"> <img src="{{ asset('main/images/blog-img1.jpg') }}" alt="Blog image">
              <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
            </div>
            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="blog_inner">
            <div class="blog-img"> <img src="{{ asset('main/images/blog-img2.jpg') }}" alt="Blog image">
              <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
            </div>
            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="blog_inner">
            <div class="blog-img"> <img src="{{ asset('main/images/blog-img3.jpg') }}" alt="Blog image">
              <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
            </div>
            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="blog_inner">
            <div class="blog-img"> <img src="{{ asset('main/images/blog-img4.jpg') }}" alt="Blog image">
              <div class="mask"> <a class="info" href="blog_detail.html">Read More</a> </div>
            </div>
            <h3><a href="blog_detail.html">Pellentesque habitant morbi</a> </h3>
            <div class="post-date"><i class="icon-calendar"></i> Apr 10, 2014</div>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sit  ... </p>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}
  <!-- End Latest Blog --> 
  
  <!-- offer banner section -->
  
  {{--  <div class="offer-banner-section wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col"><img src="{{ asset('main/images/promo-banner-img1.png') }}" alt="offer banner1"></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col"><img src="{{ asset('main/images/promo-banner-img2.png') }}" alt="offer banner2"></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col"><img src="{{ asset('main/images/promo-banner-img3.png') }}" alt="offer banner3"></div>
        </div>
        <div class="col-lg-3 col-sm-3 col-xs-6">
          <div class="col last"><img src="{{ asset('main/images/promo-banner-img4.png') }}" alt="offer banner4"></div>
        </div>
      </div>
    </div>
  </div>  --}}
  <!-- end banner section -->
@endsection

@section('jslink')
  <script type="text/javascript" src="{{ asset('main/js/revslider.js') }}"></script> 
  <script type="text/javascript" src="{{ asset('main/js/jquery.bxslider.min.js') }}"></script> 
  <script type='text/javascript'>
      jQuery(document).ready(function(){
      jQuery('#rev_slider_4').show().revolution({
      dottedOverlay: 'none',
      delay: 5000,
      startwidth: 1920,
      startheight: 650,

      hideThumbs: 200,
      thumbWidth: 200,
      thumbHeight: 50,
      thumbAmount: 2,

      navigationType: 'thumb',
      navigationArrows: 'solo',
      navigationStyle: 'round',

      touchenabled: 'on',
      onHoverStop: 'on',

      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,

      spinner: 'spinner0',
      keyboardNavigation: 'off',

      navigationHAlign: 'center',
      navigationVAlign: 'bottom',
      navigationHOffset: 0,
      navigationVOffset: 20,

      soloArrowLeftHalign: 'left',
      soloArrowLeftValign: 'center',
      soloArrowLeftHOffset: 20,
      soloArrowLeftVOffset: 0,

      soloArrowRightHalign: 'right',
      soloArrowRightValign: 'center',
      soloArrowRightHOffset: 20,
      soloArrowRightVOffset: 0,

      shadow: 0,
      fullWidth: 'on',
      fullScreen: 'off',

      stopLoop: 'off',
      stopAfterLoops: -1,
      stopAtSlide: -1,

      shuffle: 'off',

      autoHeight: 'off',
      forceFullWidth: 'on',
      fullScreenAlignForce: 'off',
      minFullScreenHeight: 0,
      hideNavDelayOnMobile: 1500,

      hideThumbsOnMobile: 'off',
      hideBulletsOnMobile: 'off',
      hideArrowsOnMobile: 'off',
      hideThumbsUnderResolution: 0,

      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0,
      fullScreenOffsetContainer: ''
      });
      });
  </script>
@endsection