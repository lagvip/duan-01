<style>
    .button {
        background-color: greenyellow;
    }

    .button:hover {
        color: red;
    }

    .box {
        border: 1px solid gray;
        border-radius: 10px 50px;
        text-align: center;
    }

    .box li {
        list-style-type: none;
    }
</style>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

    <!-- Start Header -->
    <header class="header axil-header header-style-1">
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="sign-up.html">Join Us</a></li>
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
    </header>
    <!-- End Header -->
    <main class="main-wrapper">

        <div class="axil-product-cart-area axil-section-gap">
            <div class="container">
                <div class="box table axil-product-table axil-cart-table mb--40">
                    <h3>Thông tin người nhận</h3>
                    <?php extract($bill); ?>
                    <ul>
                        <li>Tên người nhận: <strong><?= $ten_nguoi_nhan ?></strong></li>
                        <li>Số điện thoại người nhận: <strong><?= $sdt_nguoi_nhan ?></strong></li>
                        <li>Địa chỉ người nhận: <strong><?= $dia_chi_nguoi_nhan ?></strong></li>
                        <li>Email người nhận: <strong><?= $email_nguoi_nhan ?></strong></li>
                    </ul>
                </div>
                <div class="axil-product-cart-wrap">
                    <div class="product-table-heading">
                        <h4 class="title">Chi tiết đơn hàng</h4>
                    </div>
                    <div class="table-responsive">


                        <table class="table axil-product-table axil-cart-table mb--40">
                            <thead>
                                <tr>
                                    <th scope="col" class="product-title">Mã sản phẩm</th>
                                    <th scope="col" class="product-title">Tên sản phẩm</th>
                                    <th scope="col" class="product-title">Ảnh sản phẩm</th>
                                    <th scope="col" class="product-title">Giá sản phẩm</th>
                                    <th scope="col" class="product-title">SL</th>
                                    <th scope="col" class="product-title">Ram</th>
                                    <th scope="col" class="product-title">Thành tiền</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($donhang as $dh) {
                                    extract($dh);
                                    echo '
                                        <tr>    
                                    
                                    <td class="product-subtotal" data-title="Subtotal">' . $id_san_pham . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $ten_san_pham . '</td>
                                    <td class="product-subtotal" data-title="Subtotal"><img src="img/' . $img_sp . '" style="width: 100px;"></td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $gia_san_pham . '$</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $so_luong . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $ram . '</td>
                                    <td class="product-subtotal" data-title="Subtotal">' . $thanh_tien . '$</td>
                                    
                                    
                                    </tr>
                                    ';
                                }

                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5"><strong>Tổng đơn hàng</strong></td>
                                    <td colspan="1"><strong><?= $tong_tien ?>$</td>
                                </tr>
                            </tfoot>
                        </table>

                        <a href="index.php?act=donhang"><button class="button">Quay lại</button></a><br><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Cart Area  -->

    </main>

</body>