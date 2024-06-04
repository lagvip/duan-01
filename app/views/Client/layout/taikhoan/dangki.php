<body>

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <a href="index.php" class="site-logo"><img src="views/Client/assets/images/logo/logo.png" alt="logo"></a>
            </div>
            <div class="col-md-6">
                <div class="singin-header-btn">
                    <p>Already a member?</p>
                    <a href="index.php?act=dangnhap1" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row">
        <div class="col-xl-4 col-lg-6">
            <div class="axil-signin-banner bg_image bg_image--10">
                <h3 class="title">We Offer the Best Products</h3>
            </div>
        </div>
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">I'm New Here</h3>
                    <p class="b2 mb--55">Enter your detail below</p>
                    <form class="singin-form" action="index.php?act=dangky" method="POST">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Pass Word</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name="ngaysinh">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="diachi">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="axil-btn btn-bg-primary submit-btn" name="submit" value="Create Account">
                            <input type="reset" class="axil-btn btn-bg-primary submit-btn" name="submit" value="Reset">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>