<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DAT-G mobie</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="public/client/image/menu/flag-icon/icon" href="public/client/images/menu/flag-icon/icon.png">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="public/client/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/client/css/font-awesome.min.css">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="public/client/css/fontawesome-stars.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="public/client/css/meanmenu.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/client/css/owl.carousel.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="public/client/css/slick.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="public/client/css/animate.css">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="public/client/css/jquery-ui.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="public/client/css/venobox.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="public/client/css/nice-select.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="public/client/css/magnific-popup.css">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="public/client/css/bootstrap.min.css">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="public/client/css/helper.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/client/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="public/client/css/responsive.css">
    <!-- Modernizr js -->
    <script src="public/client/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="body-wrapper">
        <!-- header -->
        <header>

            <div class="header-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Số điện thoại liên hệ:</span><a href="#"> 0865198651 </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <?php if(isset($_SESSION['account'])){ 
                                        $UserName = $_SESSION['account'];
                                        $check = $this->Model->fetchOne("select * from user where UserName = '$UserName'");
                                        $name = $this->Model->fetchOne("select * from info_user where id_User = '".$check['id']."'");?>
                                        <li>
                                            <div class="ht-setting-trigger"><span><i class="fa fa-user" aria-hidden="true"></i><?php echo $name['Ho_Ten'] ?></span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">Tài khoản</a></li>
                                                    <li><a href="#">Lịch sử</a></li>
                                                    <li><a href="?act=logout">Đăng xuất</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php }else{ ?>
                                        <li>
                                            <a href="?ctrl=Login_register">Đăng ký</a>
                                        </li>

                                        <li>
                                            <a href="?ctrl=Login_register">Đăng Nhập</a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="logo pb-sm-30 pb-xs-30">
                                <a href="?">
                                    <img src="public/client/images/menu/logo/logo1.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">

                            <form action="#" class="hm-searchbox">

                                <input type="text" placeholder="Tìm kiếm ...">
                                <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>

                            <?php $tong=0; ?>
                            <div class="header-middle-right">
                                <ul class="hm-menu">
                                    <li class="hm-wishlist">
                                        <a href="?ctrl=Wishlist">
                                            <span class="cart-item-count wishlist-item-count"><?php echo isset($_SESSION['yeu_thich']) ? count($_SESSION['yeu_thich']) : 0 ?></span>
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    </li>
                                    <li class="hm-minicart">
                                        
                                        <span></span>
                                        <div class="minicart">
                                            <ul class="minicart-product-list">
                                               <?php 
                                               if(isset($_SESSION['gio_hang']))
                                                foreach($_SESSION['gio_hang'] as $id_sp => $sl){ 
                                                    $data_gh = $this->Model->fetchOne("select * from view_sp where id = '$id_sp'"); ?>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="public/Upload/Products/<?php echo $data_gh['Anh'] ?>" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html"><?php echo $data_gh['Ten_SP'] ?></a></h6>
                                                            <span><?php echo currency_format($data_gh['Gia_Sau'])." x ".$sl ?></span>
                                                        </div>
                                                        <a href="?act=delete&dm=gio_hang&id=<?php echo $id_sp ?>" class="close" title="Remove">
                                                                <i class="fa fa-close"></i>
                                                        </a>
                                                    </li>
                                                        
                                                    <?php $tong += $data_gh['Gia_Sau']*$sl; } ?>
                                            </ul>
                                            <p class="minicart-total">Tổng: <span><?php echo currency_format($tong) ?></span></p>
                                            <div class="minicart-button">
                                                <a href="?ctrl=Cart" class="li-button li-button-fullwidth li-button-dark">
                                                    <span>Xem giỏ hàng</span>
                                                </a>
                                                <a href="checkout.html" class="li-button li-button-fullwidth">
                                                    <span>Thanh toán</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="hm-minicart-trigger">
                                            <span class="item-icon"></span>
                                            <span class="item-text"><?php echo currency_format($tong) ?>
                                                    <span class="cart-item-count"><?php echo isset($_SESSION['gio_hang']) ? count($_SESSION['gio_hang']) : 0 ?></span>
                                            </span>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="hb-menu">
                                <nav>
                                    <ul>
                                        <li><a href="?">Trang chủ</a></li>

                                        <li class="dropdown-holder"><a href="shop-list.html">Danh mục</a>
                                            <ul class="hb-dropdown">
                                                <li><a href="shop-4-column.html">Điện thoại</a></li>
                                                <li><a href="shop-4-column.html">Phụ kiện</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                <div class="container">
                    <div class="row">
                        <div class="mobile-menu">
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <?php if (file_exists($ctrl)){
            include $ctrl;
        }
        
        ?>

        <!-- footer -->
        <div class="footer">

            <div class="footer-static-top">
                <div class="container">

                    <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                        <div class="row">


                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-static-middle">
                <div class="container">
                    <div class="footer-logo-wrap pt-50 pb-35">
                        <div class="row">
                            <!-- Begin Footer Logo Area -->
                            <div class="col-lg-4 col-md-6">
                                <div class="footer-logo">
                                    <img src="public/client/images/menu/logo/logo1.png" alt="Footer Logo">
                                    <p class="info">
                                        Thương hiệu triệu niềm tin!
                                    </p>
                                </div>
                                <ul class="des">
                                    <li>
                                        <span>Địa chỉ: </span> Phù lộc,Phù chẩn,Từ sơn,Bắc ninh
                                    </li>
                                    <li>
                                        <span>Phone: </span>
                                        <a href="#">0865198651</a>
                                    </li>
                                    <li>
                                        <span>Email: </span>
                                        <a href="mailto://nguyenhien080900@gmail.com">nguyenhien080900@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer Logo Area End Here -->
                            <!-- Begin Footer Block Area -->
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Sản phẩm</h3>
                                    <ul>
                                        <li><a href="#">Sản phẩm mới</a></li>
                                        <li><a href="#">Sản phẩm nổi bật</a></li>
                                        <li><a href="#">Sản phẩm bán chạy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Về chúng tôi</h3>
                                    <ul>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="footer-block">
                                    <h3 class="footer-block-title">Theo dõi</h3>
                                    <ul class="social-link">
                                        <li class="twitter">
                                            <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-static-bottom pt-55 pb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="copyright text-center pt-25">
                                <span><a href="" target="_blank"></a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal thông tin sản phẩm -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter37">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        <div class="modal-inner-area row">
                            <div class="col-lg-5 col-md-6 col-sm-6">

                                <div class="product-details-left">
                                    <div class="product-details-images slider-navigation-1">
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/1.jpg" alt="product image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/2.jpg" alt="product image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/3.jpg" alt="product image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/4.jpg" alt="product image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/5.jpg" alt="product image">
                                        </div>
                                        <div class="lg-image">
                                            <img src="public/client/images/product/large-size/6.jpg" alt="product image">
                                        </div>
                                    </div>
                                    <div class="product-details-thumbs slider-thumbs-1">
                                        <div class="sm-image"><img src="public/client/images/product/small-size/1.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="public/client/images/product/small-size/2.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="public/client/images/product/small-size/3.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="public/client/images/product/small-size/4.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="public/client/images/product/small-size/5.jpg" alt="product image thumb"></div>
                                        <div class="sm-image"><img src="public/client/images/product/small-size/6.jpg" alt="product image thumb"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content pt-60">
                                    <div class="product-info">
                                        <h2>Tên sản phẩm</h2>
                                        <span class="product-details-ref">Reference: demo_15</span>

                                        <div class="price-box pt-20">
                                            <span class="Mới-price Mới-price-2">2.000.000đ</span>
                                        </div>
                                        <div class="product-desc">
                                            <p>
                                                <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                            </p>
                                        </div>
                                        <div class="product-variants">
                                            <div class="produt-variants-size">
                                                <label>Màu</label>
                                                <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">Xanh</option>
                                                        <option value="2" title="M">Đỏ</option>
                                                        <option value="3" title="L">Tím</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity">
                                                <div class="quantity">
                                                    <label>Số lượng</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="submit">Thêm vào giỏ</button>
                                            </form>
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

    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="public/client/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper js -->
    <script src="public/client/js/vendor/popper.min.js"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="public/client/js/bootstrap.min.js"></script>
    <!-- Ajax Mail js -->
    <script src="public/client/js/ajax-mail.js"></script>
    <!-- Meanmenu js -->
    <script src="public/client/js/jquery.meanmenu.min.js"></script>
    <!-- Wow.min js -->
    <script src="public/client/js/wow.min.js"></script>
    <!-- Slick Carousel js -->
    <script src="public/client/js/slick.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script src="public/client/js/owl.carousel.min.js"></script>
    <!-- Magnific popup js -->
    <script src="public/client/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope js -->
    <script src="public/client/js/isotope.pkgd.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="public/client/js/imagesloaded.pkgd.min.js"></script>
    <!-- Mixitup js -->
    <script src="public/client/js/jquery.mixitup.min.js"></script>
    <!-- Countdown -->
    <script src="public/client/js/jquery.countdown.min.js"></script>
    <!-- Counterup -->
    <script src="public/client/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script src="public/client/js/waypoints.min.js"></script>
    <!-- Barrating -->
    <script src="public/client/js/jquery.barrating.min.js"></script>
    <!-- Jquery-ui -->
    <script src="public/client/js/jquery-ui.min.js"></script>
    <!-- Venobox -->
    <script src="public/client/js/venobox.min.js"></script>
    <!-- Nice Select js -->
    <script src="public/client/js/jquery.nice-select.min.js"></script>
    <!-- ScrollUp js -->
    <script src="public/client/js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script src="public/client/js/main.js"></script>
</body>

<!-- index30:23-->

</html>