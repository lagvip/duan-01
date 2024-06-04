<?php extract($onesp);
$hinh = $img_path . $img;
?>

<body class="sticky-header overflow-md-visible">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <!-- Start Header -->
    <header class="header axil-header header-style-5">
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="header-top-dropdown">
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    English
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    USD
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">USD</a></li>
                                    <li><a class="dropdown-item" href="#">AUD</a></li>
                                    <li><a class="dropdown-item" href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="sign-up.html">Join Us</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="index.php" class="logo logo-dark">
                            <img src="views/Client/assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                        <a href="index.php" class="logo logo-light">
                            <img src="views/Client/assets/images/logo/logo-light.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="index.php" class="logo">
                                    <img src="views/Client/assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <ul class="mainmenu">
                                <li><a href="index.php?">Trang chủ</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Danh mục sản phẩm</a>
                                    <ul class="axil-submenu">
                                        <?php
                                        foreach ($listdm as $dm) {
                                            extract($dm);
                                            $linkdm = "index.php?act=sanpham&id=" . $id;
                                            echo '<li><a href="' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                                        }
                                        ?>
                                    </ul>
                                </li>

                                <li><a href="index.php?act=allsanpham">Sản phẩm</a></li>


                                <li><a href="index.php?act=baiviet">Bài viết</a></li>
                                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
        <div class="header-top-campaign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="header-campaign-activation axil-slick-arrow arrow-both-side header-campaign-arrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--20 pb_sm--0 bg-vista-white">
                <div class="container">
                    <div class="row row--25">
                        <div class="col-lg-6 mb--40">
                            <div class="h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="row row--10">
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">
                                                <div class="thumbnail">

                                                    <img class="img-fluid" src="<?php echo $hinh ?>" style="width: 300px; height: 500px;">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                        <div class="col-6 mb--20">
                                            <div class="single-product-thumbnail axil-product thumbnail-grid">

                                            </div>
                                        </div>
                                        <!-- End .col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php extract($onesp);

                        ?>

                        <div class="col-lg-6 mb--40">
                            <div class="h-100">
                                <div class="position-sticky sticky-top">
                                    <div class="single-product-content">
                                        <div class="inner">
                                            <h2 class="product-title"><?php echo " Tên sản phẩm: $ten_san_pham  <br> <br> "; ?></h2>

                                            <span class="price-amount"><?php echo " Giá sản phẩm: $gia<strong>$</strong> <br> <br> "; ?></span>
                                            <div class="product-rating">
                                            </div>


                                            <div class="product-variations-wrapper">





                                            </div>
<style>
    .product-variations-wrapper .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        margin: 0 -5px;
    }

    .hmmmm {
        flex: 0 0 25%; /* Điều chỉnh kích thước của mỗi ô */
        padding: 0 5px;
    }

    .custom-select-form {
        text-align: center;
    }

    .ramButton {
        padding: 3px 8px; /* Điều chỉnh kích thước của nút */
        border-radius: 5px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        cursor: pointer;
        transition: background-color 0.3s, border-color 0.3s;
        font-size: 14px; /* Điều chỉnh kích thước của văn bản */
    }

    .ramButton:hover {
        background-color: #e0e0e0;
        border-color: #999;
    }

    .outOfStock {
        background-color: #f8d7da !important;
        border-color: #f5c6cb !important;
        cursor: not-allowed;
    }

</style>
                                            <!-- Start Product Action Wrapper  -->
                                            <!-- Hiển thị danh sách RAM và số lượng còn trong kho -->
                                            <div class="product-variations-wrapper">
                                                <div class="row">
                                                    <?php foreach ($loadall_pro_detail as $value): ?>
                                                        <?php
                                                        extract($value);
                                                        $isOutOfStock = ($soluong == 0);
                                                        ?>
                                                        <div class="hmmmm">
                                                            <div class="custom-select-form">
                                                                <button type="button" class="ramButton <?= $isOutOfStock ? 'outOfStock' : '' ?>" <?= $isOutOfStock ? 'title="Hết hàng"' : '' ?> onclick="showQuantity('<?= $ram ?>', <?= $soluong ?>)">
                                                                    <?= $ram ?>
                                                                </button>
                                                                <input type="hidden" name="selected_ram" value="<?= $ram ?>">
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>

                                            <!-- Hiển thị số lượng còn trong kho của loại RAM được chọn -->
                                            <div id="quantityDisplay">Số lượng còn trong kho: </div>

                                            <!-- Script JavaScript -->
                                            <!-- Script JavaScript -->
                                            <script>
                                                function showQuantity(ram, quantity) {
                                                    // Cập nhật giá trị 'ram' cho trường ẩn
                                                    document.getElementById("selectedRamInput").value = ram;
                                                    // Hiển thị số lượng còn trong kho của loại RAM được chọn
                                                    document.getElementById("quantityDisplay").innerHTML = "Số lượng còn trong kho của " + ram + ": " + quantity;
                                                }
                                                function validateForm() {
                                                    // Kiểm tra xem trường ẩn selected_ram có giá trị không
                                                    var ramValue = document.getElementById("selectedRamInput").value;
                                                    if (ramValue === "") {
                                                        alert("Vui lòng chọn RAM trước khi thêm vào giỏ hàng.");
                                                        return false; // Ngăn người dùng gửi biểu mẫu nếu chưa chọn RAM
                                                    }
                                                    return true; // Cho phép người dùng gửi biểu mẫu nếu đã chọn RAM
                                                }
                                            </script>


                                            <!-- Form xử lý khi người dùng nhấn nút "Thêm vào giỏ hàng" -->
                                            <!-- Form xử lý khi người dùng nhấn nút "Thêm vào giỏ hàng" -->
                                            <form action="index.php?act=addtocart" method="post">
                                                <!-- Thêm các trường ẩn để gửi thông tin sản phẩm -->
                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                <input type="hidden" name="img" value="<?= $img ?>">
                                                <input type="hidden" name="name" value="<?= $ten_san_pham ?>">
                                                <input type="hidden" name="price" value="<?= $gia ?>">
                                                <!-- Thêm trường ẩn để lưu trữ giá trị 'ram' -->
                                                <input type="hidden" id="selectedRamInput" name="selected_ram" value="">
                                                <!-- Chọn số lượng -->
                                                Số lượng<br>
                                                <input type="number" min="1" name="soluong" value="1" style="height: 40px; width: 500px;"><br><br>
                                                <!-- Nút "Thêm vào giỏ hàng" -->
                                                <!-- Nút "Thêm vào giỏ hàng" -->
                                                <input type="submit" name="addtocart" value="Add to Cart" onclick="return validateForm();">

                                            </form>


                                            <!-- End Product Action Wrapper  -->

                                            <div class="product-desc-wrapper pt--80 pt_sm--60">
                                                <h4 class="primary-color mb--40 desc-heading"><?php echo " $mo_ta <br> <br> "; ?></h4>




                                            </div>
                                            <div class="tab_content_wrapper">
                                                <div class="container">
                                                    <div class="tab-content" role="tablist">
                                                        <div class="container margin_60_35">
                                                            <form action="index.php?act=spchitiet" method="post">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-lg-8">
                                                                        <table class="table table-responsive	">
                                                                            <tr>
                                                                                <th>Tên người dùng</th>
                                                                                <th>Nội dung</th>
                                                                                <th>Ngày bình luận</th>
                                                                            </tr>
                                                                            <?php foreach ($load_all_binhluan as $binhluan):
                                                                                extract($binhluan);
                                                                                ?>
                                                                                <tr>
                                                                                    <td>
                                                                                        <?= $ten_dang_nhap ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?= $content ?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?= $date_comment ?>
                                                                                    </td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        </table>
                                                                        <div class="write_review">
                                                                            <?php if (isset($_SESSION['tai_khoan'])): ?>
                                                                                <div class="form-group">
                                                                                    <label>Bình luận của bạn</label>
                                                                                    <input type="hidden" name="product_id" value="<?= $id ?>">
                                                                                    <textarea class="form-control" name="noidung" cols="30" rows="3" placeholder="Viết đánh giá để mọi người có thể hiểu hơn về sản phẩm"></textarea>
                                                                                </div>
                                                                                <button class="btn_1" name="guibinhluan">Gửi bình luận</button>
                                                                            <?php else: ?>
                                                                                <div class="form-group">
                                                                                    Vui lòng đăng nhập để bình luận!
                                                                                </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!-- /row -->
                                                        </div>
                                                    </div>
                                                    <!-- /tab-content -->
                                                </div>
                                                <!-- /container -->
                                            </div>
                                            <!-- End .product-desc-wrapper -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

        </div>
        <!-- End Shop Area  -->


    </main>

    <footer class="axil-footer-area footer-style-2">
        <!-- Start Footer Top Area  -->
        <div class="footer-top separator-top">
            <div class="container">
                <div class="row">
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Support</h5>
                            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
                            <div class="inner">
                                <p>13 phố Trịnh Văn Bô <br>
                                    phường Phương Canh, Nam Từ Liêm <br>
                                    TP Hà Nội.
                                </p>
                                <ul class="support-list-item">
                                    <li><a href="#"><i class="fal fa-envelope-open"></i></a></li>
                                    <li><a href="#"><i class="fal fa-phone-alt"></i> </a></li>
                                    <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Account</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="index.php?act=dangnhap1">Login / Register</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Quick Link</h5>
                            <div class="inner">
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                    <!-- Start Single Widget  -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="axil-footer-widget">
                            <h5 class="widget-title">Download App</h5>
                            <div class="inner">
                                <span>Save $3 With App & New User only</span>
                                <div class="download-btn-group">
                                    <div class="qr-code">
                                        <img src="views/Client/assets/images/others/qr.png" alt="Axilthemes">
                                    </div>
                                    <div class="app-link">
                                        <a href="#">
                                            <img src="views/Client/assets/images/others/app-store.png" alt="App Store">
                                        </a>
                                        <a href="#">
                                            <img src="views/Client/assets/images/others/play-store.png" alt="Play Store">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget  -->
                </div>
            </div>
        </div>
        <!-- End Footer Top Area  -->

        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-default separator-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="social-share">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-left d-flex flex-wrap justify-content-center">
                            <ul class="quick-link">
                                <li>© 2023. All rights reserved by <a target="_blank" href="https://axilthemes.com/">Axilthemes</a>.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
                            <span class="card-text">Accept For</span>
                            <ul class="payment-icons-bottom quick-link">
                                <li><img src="views/Client/assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
                                <li><img src="views/Client/assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
                                <li><img src="views/Client/assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>


</body>