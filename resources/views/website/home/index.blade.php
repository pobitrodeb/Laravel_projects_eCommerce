@extends('website.master_files.index')

@section('title')
    Home
@endsection

@section('navbar')
    <!-- Header Container  -->
    <header id="header" class=" variantleft type_5">
        <!-- Header Top -->
        <div class="header-top compact-hidden">
            <div class="container">
                <div class="row">
                    <div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
                        <ul class="list-inlines">
                            <li class="hidden-xs" >
                                <div class="welcome-msg">
                                    <ul class="list-msg">
                                        <li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li>
                                        <li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
                        <h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
                        <div class="tabBlock" id="TabBlock-1">
                            <ul class="top-link list-inline">
                                <li class="account" id="my_account">
                                    <a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu ">
                                        <li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
                                        <li><a href="login.html"><i class="fa fa-pencil-square-o"></i> Login</a></li>
                                    </ul>
                                </li>
                                <li class="wishlist "><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
                                <li class="checkout hidden"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
                                <li class="login hidden"><a href="cart.html" title="Shopping Cart"><span >Shopping Cart</span></a></li>

                                <li class="form-group languages-block ">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{asset('/')}}website/image/demo/flags/gb.png" alt="English" title="English">
                                            <span class="">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html"><img class="image_flag" src="{{asset('/')}}website/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="index.html"> <img class="image_flag" src="{{asset('/')}}website/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </li>
                                <li class="form-group currency currencies-block">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds	</a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar	</a></li>
                                        </ul>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->
        <!-- Header center -->
        <div class="header-center">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-md-3 col-sm-4 col-xs-12">
                        <a href="home5.html"><img src="{{asset('/')}}website/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
                    </div>
                    <!-- //End Logo -->
                    <div class="header-center-right col-md-9 col-sm-8 col-xs-12">
                        <!-- Phone -->
                        <div class="phone-contact hidden-xs">
                            <div class="inner-info">
                                <h2>Hotline:</h2><p>(801) 2345 - 6789</p>
                            </div>
                        </div>
                        <!-- //End Phone -->
                        <!-- Cart Pro-->
                        <div class="block-cart">
                            <!--cart-->
                            <div class="shopping_cart pull-right">
                                <div id="cart" class=" btn-group btn-shopping-cart">
                                    <a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                                        <div class="shopcart">
                                            <span class="handle pull-left"></span>
                                            <span class="text-shopping-cart-home5 "> Shopping now  </span>
                                            <span class="total-shopping-cart cart-total-full">	2 item(s) - $162.00	</span>
                                        </div>
                                    </a>
                                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html"> <img src="{{asset('/')}}website/image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                                                        <td class="text-center"> x1 </td>
                                                        <td class="text-center"> $1,202.00 </td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="product.html"> <img src="{{asset('/')}}website/image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                                                        <td class="text-center"> x1 </td>
                                                        <td class="text-center"> $60.00 </td>
                                                        <td class="text-right">
                                                            <a href="product.html" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <div>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><strong>Sub-Total</strong>
                                                            </td>
                                                            <td class="text-right">$1,060.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                            </td>
                                                            <td class="text-right">$2.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>VAT (20%)</strong>
                                                            </td>
                                                            <td class="text-right">$200.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left"><strong>Total</strong>
                                                            </td>
                                                            <td class="text-right">$1,262.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="text-center"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--//cart-->
                        </div>
                        <!-- //End Cart Pro -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header center -->
        <!-- Header Bottom -->
        <div class="header-bottom compact-hidden">
            <div class="container">
            <div class="rows">
                <div class="header-bottom-inner">
                    <div class="header-bottom-menu col-md-8 col-sm-2 col-xs-2">
                        <div class="responsive so-megamenu  megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="megamenu-wrapper ">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container">
                                                <ul class="megamenu " data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="index.html">Home <b class="caret"></b></a>
                                                        <div class="sub-menu" style="width:100%;" >
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="index.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-1.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - (Default)</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home2.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-2.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 2</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home3.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-3.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 3</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home4.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-4.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 4</h3>
                                                                        </a>

                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <a href="home5.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-5.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 5</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home6.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-6.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 6</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home7.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-7.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 7</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home8.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-8.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 8</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home9.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-9.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 9</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="home10.html" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-10.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 10</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-11.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 11</h3>
                                                                        </a>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="image-link">
                                                                            <span class="thumbnail">
                                                                                <img class="img-responsive img-border" src="{{asset('/')}}website/image/demo/menu/home-12.jpg" alt="">
                                                                                <span class="btn btn-default">Read More</span>
                                                                            </span>
                                                                            <h3 class="figcaption">Home page - Layout 12</h3>
                                                                        </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>

                                                                Features
                                                            </strong>

                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; right: auto;">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu">Listing pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="category.html">Category Page 1 </a></li>
                                                                                    <li><a href="category-v2.html">Category Page 2</a></li>
                                                                                    <li><a href="category-v3.html">Category Page 3</a></li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu">Product pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="product.html">Product Page 1</a></li>
                                                                                    <li><a href="product-v2.html">Product Page 2</a></li>
                                                                                    <li><a href="product-v3.html">Product Page 3</a></li>
                                                                                    <li><a href="product-v4.html">Product Page 4</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu">Shopping pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="cart.html">Shopping Cart Page</a></li>
                                                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                                                    <li><a href="compare.html">Compare Page</a></li>
                                                                                    <li><a href="wishlist.html">Wishlist Page</a></li>

                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu">My Account pages</a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="login.html">Login Page</a></li>
                                                                                    <li><a href="register.html">Register Page</a></li>
                                                                                    <li><a href="my-account.html">My Account</a></li>
                                                                                    <li><a href="order-history.html">Order History</a></li>
                                                                                    <li><a href="order-information.html">Order Information</a></li>
                                                                                    <li><a href="return.html">Product Returns</a></li>
                                                                                    <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><img src="{{asset('/')}}website/image/demo/menu/hot-icon.png" alt="">Pages</strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 40%; ">
                                                            <div class="content" >
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="faq.html">FAQ</a></li>
                                                                            <li><a class="subcategory_item" href="typography.html">Typography</a></li>
                                                                            <li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
                                                                            <li><a class="subcategory_item" href="contact.html">Contact us</a></li>
                                                                            <li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
                                                                            <li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
                                                                            <li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
                                                                            <li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><img src="{{asset('/')}}website/image/demo/menu/new-icon.png" alt="">Categories</strong>
                                                            <span class="label"></span>
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; display: none;">
                                                            <div class="content">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 img img1">
                                                                                <a href="#"><img src="{{asset('/')}}website/image/demo/cms/img1.jpg" alt="banner1"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img2">
                                                                                <a href="#"><img src="{{asset('/')}}website/image/demo/cms/img2.jpg" alt="banner2"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img3">
                                                                                <a href="#"><img src="{{asset('/')}}website/image/demo/cms/img3.jpg" alt="banner3"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img4">
                                                                                <a href="#"><img src="{{asset('/')}}website/image/demo/cms/img4.jpg" alt="banner4"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu">Automotive</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                        <li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                        <li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                        <li><a href="#"  class="main-menu">More Car Accessories</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu">Electronics</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
                                                                                        <li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
                                                                                        <li><a href="#"  class="main-menu">Home Audio</a></li>
                                                                                        <li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="#"  class="main-menu">Earings</a></li>
                                                                                        <li><a href="#"  class="main-menu">Wedding Rings</a></li>
                                                                                        <li><a href="#"  class="main-menu">Men Watches</a></li>
                                                                                        <li><a href="#"  class="main-menu">Women Watches</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu">Bags, Holiday Supplies</a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
                                                                                        <li><a href="#"  class="main-menu">Gift for Man</a></li>
                                                                                        <li><a href="#"  class="main-menu">Gift for Woman</a></li>
                                                                                        <li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Accessories</strong>

                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="row">
                                                                            <div class="col-md-6 static-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <a href="#"  class="main-menu">Automotive</a>
                                                                                            <ul>
                                                                                                <li><a href="#">Car Alarms and Security</a></li>
                                                                                                <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                                <li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
                                                                                            <ul>
                                                                                                <li><a href="#" >Accessories for i Pad</a></li>
                                                                                                <li><a href="#" >Apparel</a></li>
                                                                                                <li><a href="#" >Accessories for iPhone</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 static-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <a href="#" class="main-menu">Sports &amp; Outdoors</a>
                                                                                            <ul>
                                                                                                <li><a href="#" >Camping &amp; Hiking</a></li>
                                                                                                <li><a href="#" >Cameras &amp; Photo</a></li>
                                                                                                <li><a href="#" >Cables &amp; Connectors</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="#"  class="main-menu">Electronics</a>
                                                                                            <ul>
                                                                                                <li><a href="#" >Battereries &amp; Chargers</a></li>
                                                                                                <li><a href="#" >Bath &amp; Body</a></li>
                                                                                                <li><a href="#" >Outdoor &amp; Traveling</a></li>
                                                                                            </ul>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <span class="title-submenu">Bestseller</span>
                                                                        <div class="col-sm-12 list-product">
                                                                            <div class="product-thumb">
                                                                                <div class="image pull-left">
                                                                                    <a href="#"><img src="{{asset('/')}}website/image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
                                                                                </div>
                                                                                <div class="caption">
                                                                                    <h4><a href="#">Filet Mign</a></h4>
                                                                                    <div class="ratings">
                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    </div>
                                                                                    <p class="price">$88.00</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 list-product">
                                                                            <div class="product-thumb">
                                                                                <div class="image pull-left">
                                                                                    <a href="#"><img src="{{asset('/')}}website/image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
                                                                                </div>
                                                                                <div class="caption">
                                                                                    <h4><a href="#">Dail Lulpa</a></h4>
                                                                                    <div class="ratings">
                                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    </div>
                                                                                    <p class="price">$78.00</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12 list-product">
                                                                            <div class="product-thumb">
                                                                                <div class="image pull-left">
                                                                                    <a href="#"><img src="{{asset('/')}}website/image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
                                                                                </div>
                                                                                <div class="caption">
                                                                                    <h4><a href="#">Canon EOS 5D</a></h4>

                                                                                    <div class="ratings">
                                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                                                    </div>
                                                                                    <p class="price">
                                                                                        <span class="price-new">$60.00</span>
                                                                                        <span class="price-old">$145.00</span>

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="blog-page.html" class="clearfix">
                                                            <strong>Blog</strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>

                                                    <li class="hidden-md color-buy">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>Buy Theme!</strong>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10 col-xs-10 header_search">
                        <div id="sosearchpro" class="search-pro">
                            <form method="GET" action="index.html">
                                <div id="search0" class="search input-group">
                                    <div class="select_category filter_type  icon-select">
                                        <select class="no-border" name="category_id">
                                            <option value="0">All Category</option>
                                            <option value="20">Desktops</option>
                                            <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 9</option>

                                            <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 8</option>

                                            <option value="18">Laptops &amp; Notebooks</option>
                                            <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>

                                            <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>

                                            <option value="25">Automotive</option>
                                            <option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadgets &amp; Auto Parts</option>

                                            <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More Car Accessories</option>

                                            <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Alarms and Security</option>

                                            <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Audio &amp; Speakers</option>

                                            <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>

                                            <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>

                                            <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
                                            <option value="57">Mobile &amp; Tablet </option>
                                            <option value="68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hanet magente</option>

                                            <option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knage unget</option>

                                            <option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latenge mange</option>

                                            <option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punge nenune</option>

                                            <option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qunge genga</option>

                                            <option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tange manue</option>

                                            <option value="17">Electronics </option>
                                            <option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angene mafin</option>

                                            <option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egante mangetes</option>

                                            <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gante extensg</option>

                                            <option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guntes magesg</option>

                                            <option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rengae manges</option>

                                            <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sine engain</option>

                                            <option value="33">Apparel</option>
                                            <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>


                                            <option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computers</option>

                                            <option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option>

                                            <option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option>

                                            <option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</option>

                                            <option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobiles</option>

                                            <option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports</option>

                                            <option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watches</option>

                                            <option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</option>

                                            <option value="34">Computer</option>
                                            <option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camping &amp; Hiking</option>

                                            <option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cusen mariot</option>

                                            <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denta magela</option>

                                            <option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engite nanet</option>

                                            <option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theid cupensg</option>

                                            <option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verture agoent</option>
                                        </select>
                                    </div>

                                    <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
                                    <span class="input-group-btn">
                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <input type="hidden" name="route" value="product/search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </header>
    <!-- //Header Container  -->
@endsection

@section('slider')
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 box_slider">
        <div id="sohomepage-slider-home3">
            <div class="slider-container ">
                <div id="so-slideshow" class="">
                    <div class="module slideshow no-margin">
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/image/demo/slider/sl11/1.jpg" alt="slider1" class="img-responsive"></a>
                            <div class="sohomeslider-description">
                                <img class="image image-sl11 pos-right img-active" src="{{asset('/')}}website/image/demo/slider/sl11/2.png" alt="slideshow">
                                <div class="text pos-right text-sl11">
                                    <h3 class="tilte modtitle-sl11  title-active">Nikon D7100</h3>
                                    <p class="des des-sl11 des-active">Ultimate image quality. Create without limination</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/image/demo/slider/sl12/1.jpg" alt="slider1" class="img-responsive"></a>
                            <div class="sohomeslider-description">
                                <img class="image image-sl12 pos-left img-active" src="{{asset('/')}}website/image/demo/slider/sl12/2.png" alt="slideshow">
                                <div class="text pos-right text-sl12">
                                <h3 class="tilte modtitle-sl12 title-active">OUR NEW RANGE OF</h3>
                                <h4 class="titleh4 h4-active">TABLET</h4>
                                <p class="des des-sl11 des-active">FOR LESS THAN $99.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('/')}}website/image/demo/slider/sl13/1.jpg" alt="slider1" class="img-responsive"></a>
                            <div class="sohomeslider-description">
                                <img class="image image-sl13 pos-right img-active" src="{{asset('/')}}website/image/demo/slider/sl13/2.png" alt="slideshow">
                                <div class="text pos-left text-sl13">
                                    <h3 class="tilte modtitle-sl13 title-active">OUR NEW RANGE OF</h3>
                                    <h4 class="titleh4 h4-active">IMACS</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loadeding"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ads_banner')
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 box_banner">
        <div class="module banner-right hidden-md hidden-sm hidden-xs">
            <ul>
                <li><a title="Static Image" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/img-banner-right-1.png" alt="Static Image"></a></li>
                <li><a title="Static Image" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/img-banner-right-2.png" alt="Static Image"></a></li>
                <li><a title="Static Image" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/img-banner-right-3.png" alt="Static Image"></a></li>
            </ul>
        </div>
    </div>
@endsection

@section('promotion_banner')
	<!--Block Spotlight2  -->
    <div class="so-spotlight2">
        <div class="container">
            <ul class="mudule list-services row">
                <li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Free Shipping" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/free-shipping.png" alt="Free Shipping"></a></li>
                <li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Guaranteed" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/guaranteed.png" alt="Guaranteed"></a></li>
                <li class="item-service col-lg-4 col-md-4 col-sm-4 col-xs-12"><a title="Deal" href="#"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/deal.png" alt="Deal"></a></li>
            </ul>
        </div>
    </div>
    <!-- Block Spotlight3  -->
@endsection

@section('hot_deals')
    <!-- Mod Deals -->
    <div class="module so-deals">
        <h3 class="modtitle"><span>Hot Deals</span></h3>
        <div class="modcontent">
            <div id="so_deals_14513931681482050581" class="so-deal modcontent products-list grid clearfixbutton-type1 style2">
                <div class="extraslider-inner product-layout deal-slider">
                    <div class="product-thumb transition product-item-container">
                        <div class="left-block">
                            <div class="product-image-container">
                                <div class="image">
                                    <span class="label label-sale">Sale</span>
                                    <a class="lt-image" href="product.html" target="_self">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e11.jpg" alt="img" title="Juren tima chuk" />
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e12.jpg" alt="img" title="Juren tima chuk" />
                                    </a>
                                    <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="caption">
                                <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                </div>
                                <h4><a href="product.html" target="_self" title="Juren tima chuk..">Elivers chukalen..</a></h4>
                                <p class="price">
                                <span class="price-new">$82.40</span> <span class="price-old">$122.00</span>
                                </p>
                            </div>
                        </div>
                        <!-- End right block -->
                    </div>
                    <div class="product-thumb transition product-item-container">
                        <div class="left-block">
                            <div class="product-image-container">
                                <div class="image">
                                    <span class="label label-sale">Sale</span>
                                    <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self">
                                            <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/5.png" alt="img" title="Juren tima chuk" />
                                            <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/1.png" alt="img" title="Juren tima chuk" />
                                        </a>
                                        <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="caption">
                                <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div>
                                <h4><a href="product.html" target="_self" title="Juren tima chuk..">Sende cuisei in..</a></h4>
                                <p class="price">
                                <span class="price-new">$82.40</span> <span class="price-old">$122.00</span>
                                </p>
                            </div>
                        </div>
                        <!-- End right block -->
                    </div>
                    <div class="product-thumb transition product-item-container">
                        <div class="left-block">
                            <div class="product-image-container">
                                <div class="image">
                                    <span class="label label-sale">Sale</span>
                                    <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self">
                                            <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e7.jpg" alt="img" title="Juren tima chuk"/>
                                            <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e6.jpg" alt="img" title="Juren tima chuk"/>
                                        </a>
                                    <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="caption">
                                <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div>
                                <h4><a href="product.html" target="_self" title="Juren tima chuk..">Juren tima chuk..</a></h4>
                                <p class="price">
                                <span class="price-new">$82.40</span> <span class="price-old">$122.00</span>
                                </p>
                            </div>
                        </div>
                        <!-- End right block -->
                    </div>
                    <div class="product-thumb transition product-item-container">
                        <div class="left-block">
                            <div class="product-image-container">
                                <div class="image">
                                    <span class="label label-sale">Sale</span>

                                    <a class="lt-image" href="product.html" target="_self">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e13.jpg" alt="img" title="Juren tima chuk"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e14.jpg" alt="img" title="Juren tima chuk"/>
                                    </a>

                                    <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="caption">
                                <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div>
                                <h4><a href="product.html" target="_self" title="Juren tima chuk..">Caras tima chuk..</a></h4>
                                <p class="price">
                                <span class="price-new">$82.40</span> <span class="price-old">$122.00</span>
                                </p>
                            </div>
                        </div>
                        <!-- End right block -->
                    </div>
                    <div class="product-thumb transition product-item-container">
                        <div class="left-block">
                            <div class="product-image-container">
                                <div class="image">
                                    <span class="label label-sale">Sale</span>

                                    <a class="lt-image" href="product.html" target="_self">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/14.jpg" alt="img" title="Juren tima chuk"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/19.jpg" alt="img" title="Juren tima chuk"/>
                                    </a>

                                    <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-block">
                            <div class="caption">
                                <div class="rating">
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                </div>
                                <h4><a href="product.html" target="_self" title="Juren tima chuk..">Caras tima chuk..</a></h4>
                                <p class="price">
                                <span class="price-new">$82.40</span> <span class="price-old">$122.00</span>
                                </p>
                            </div>
                        </div>
                        <!-- End right block -->
                    </div>

                </div>
            </div>

        </div><!--/.modcontent-->
    </div>
    <!-- End Mod -->
@endsection

@section('mobile_tablet')
    <!-- Mod Category Slider1 -->
    <div id="so_category_slider_home2" class="container-slider module  item-1">
        <div class="page-top">
            <h3 class="modtitle">
                <span>	Mobile &amp; Tablet </span>
            </h3>
            <div class="item-sub-cat">
                <ul>
                    <li>
                        <a href="category.html" title="Tange manue" target="_self">	Tange manue	</a>
                    </li>
                    <li>
                        <a href="category-v2.html" title="Punge nenune" target="_self">	Punge nenune </a>
                    </li>
                    <li>
                        <a href="category-v3.html" title="Hanet magente" target="_self"> Hanet magente </a>
                    </li>
                </ul>
            </div>
        </div> <!-- /.page-top -->
        <!-- /.item-cat-image -->
        <div class="item-cat-image">
            <a href="#" title="Banner"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/banner/img-cat-1.png" alt="Banner"></a>
        </div>
        <!-- /.item-cat-image -->
        <div class="modcontent">
            <div class="categoryslider-content products-list grid show preset01-4 preset02-3 preset03-2 preset04-2 preset05-1">
                <div class="slider so-category-slider not-js product-layout">
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/14.jpg" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/19.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Tilam Makar Loring</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$367.00</span> <span class="price-old">$400.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/15.png"  alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/15.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Furen Olam Mascha</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$267.00</span> <span class="price-old">$300.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e7.jpg" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e6.jpg" alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Lorem Anna Oziea</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$150.00</span> <span class="price-old">$182.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/23.png"  alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/19.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Juren tima chukam</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">170.00</span> <span class="price-old">220.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/6.png" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/6.png"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Chukam kuren tima </a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$167.00</span> <span class="price-old">$200.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mod -->
@endsection

@section('electiornics')
    <!-- Mod Category Slider2 -->
    <div id="so_category_slider_home2-2" class="container-slider module item-1">
        <div class="page-top">
            <h3 class="modtitle">
                <span>	Electronics </span>
            </h3>
            <div class="item-sub-cat">
                <ul>
                    <li>
                        <a href="category.html" title="Sine engain" target="_self">	Sine engain	</a>
                    </li>
                    <li>
                        <a href="category-v2.html" title="Gante extensg" target="_self">	Gante extensg</a>
                    </li>
                    <li>
                        <a href="category-v3.html" title="Guntes magesg" target="_self"> Guntes magesg </a>
                    </li>
                </ul>
            </div>
        </div> <!-- /.page-top -->
        <!-- /.item-cat-image -->
        <div class="item-cat-image">
            <a href="#" title="Banner"><img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/banner/img-cat-2.png" alt="Banner"></a>
        </div>
        <!-- /.item-cat-image -->
        <div class="modcontent">
            <div class="categoryslider-content products-list grid show preset01-4 preset02-3 preset03-2 preset04-2 preset05-1">
                <div class="slider so-category-slider not-js product-layout">
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b7.jpg" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b9.jpg" alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Loring Tilam Makar" target="_self">Loring Tilam Makar </a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$267.00</span> <span class="price-old">$300.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b5.jpg"  alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b1.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Furen Olam Mascha</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$167.00</span> <span class="price-old">$200.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <span class="label label-new">New</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b2.png" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b13.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Lorem Anna Oziea</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$150.00</span> <span class="price-old">$182.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b1.jpg"  alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b3.jpg"  alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Chukam kuren tima </a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">$167.00</span> <span class="price-old">$200.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="item product-layout">
                        <div class="item-inner product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <div class="image">
                                        <span class="label label-sale">Sale</span>
                                        <a class="lt-image" href="product.html" target="_self" title="Juren tima chukam">
                                            <img class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b10.png" alt="Juren tima chukam">
                                            <img class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/b14.jpg" alt="Juren tima chukam">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4 class="item-title">
                                        <a href="product.html" title="Juren tima chukam" target="_self">Juren tima chukam</a>
                                    </h4>
                                    <p class="price">
                                        <span class="price-new">170.00</span> <span class="price-old">220.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="button-group">
                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
                                <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mod -->
@endsection

@section('best_deals')
    <!-- Mod Best Seller -->
    <div class="moduletable module best-seller">
        <h3 class="modtitle"><span>Best Sellers</span></h3>
        <div id="sp_extra_slider_20796849091482058205" class="so-extraslider">
            <div class="extraslider-inner best-seller-slider">
                <div class="item ">
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e12.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e11.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Caras cursus nulla												</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$122.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e4.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e4_2.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Doner spareribs												</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$122.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e13.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/e14.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Bikum masen dum..												</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$122.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/2.png" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/1.png" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Eliver bikum  dume..												</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$142.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <!-- End item-wrap -->
                </div>
                <div class="item ">
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/1.png" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/2.png" alt="img" title="Apple Cinema 30&quot;" />
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Lorem exercit..								</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$122.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/j1.jpg" alt="img" title="Apple Cinema 30&quot;"  />
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/j2.jpg" alt="img" title="Apple Cinema 30&quot;" />
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Cornedbeef turk..											</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="old-price product-price">$55.00</span>
                                            <span class="price-old">$79.00</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/34.jpg" alt="img"  title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/35.jpg" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Doner sparerib..									</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="old-price product-price">$75.00</span>
                                            <span class="price-old">$99.00</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <div class="item-wrap style1">
                        <div class="item-wrap-inner media">
                            <div class="media-left">
                                <div class="item-image">
                                    <div class="item-img-info">
                                    <a href="product.html" class="lt-image" target="_self" title="Bikum masen dumas">
                                        <img  class="lazyload img-1 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/5.png" alt="img" title="Apple Cinema 30&quot;"/>
                                        <img  class="lazyload img-2 img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/shop/product/2.png" alt="img" title="Apple Cinema 30&quot;"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="item-info">
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <div class="item-title">
                                        <a href="product.html" target="_self" title="Bikum masen dumas">
                                            Bikum eliver   dume..												</a>
                                    </div>
                                    <!-- Begin item-content -->
                                    <div class="item-content">
                                        <div class="content_price">
                                            <span class="price product-price">	$92.00	</span>
                                        </div>
                                    </div>
                                    <!-- End item-content -->
                                </div>
                            </div><!-- End item-info -->
                        </div>
                        <!-- End item-wrap-inner -->
                    </div>
                    <!-- End item-wrap -->
                </div>
            </div>
        </div>
    </div>
    <!-- //End Best Seller  -->
@endsection

