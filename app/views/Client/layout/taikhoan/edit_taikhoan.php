<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
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
                                <li class="menu-item-has-children">
                                    <a href="#">Menu</a>
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
<style>
    #nav-account, .form-group{
        text-align: center;
    }

     
        <?php
        if (isset($_SESSION['tai_khoan'])) {
            extract($_SESSION['tai_khoan']);
        }
        ?>
    
</style><br><br>
    <div id="nav-account" role="tabpanel">
    <div class="col-lg-9">
        <div class="axil-dashboard-account">
            <form class="account-details-form" action="index.php?act=suatk" method="POST">
                <div class="row">
                    <div class="col-12">
                        <h5 class="title">Thay đổi thông tin</h5>
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" class="form-control" value="<?=$ten_dang_nhap?>" name="tendangnhap">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="text" class="form-control" value="<?=$mat_khau?>" name="matkhau">
                        </div>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" class="form-control" value="<?=$ho_ten?>" name="hoten">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="text" class="form-control" value="<?=$ngay_sinh?>" name="ngaysinh">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" class="form-control" value="<?=$so_dien_thoai?>" name="sodienthoai">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="<?=$email?>" name="email">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" value="<?=$dia_chi?>" name="diachi">
                        </div>
                        <div class="form-group mb--0">
                            <input type="hidden" name="id" value="<?php echo $id ?>">  
                            <input type="submit" class="axil-btn" value="Save Changes" name="suatk">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>