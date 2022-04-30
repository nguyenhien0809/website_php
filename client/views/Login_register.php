        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li class="active">Đăng nhập | Đăng ký</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-section mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                        <!-- Login Form s-->
                        <form action="?ctrl=Login_register&act=login" method="post">
                            <div class="login-form">
                                <h4 class="login-title">Đăng nhập</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-20">
                                        <label>Tên tài khoản*</label>
                                        <input class="mb-0" name="username" type="email" placeholder="Tên tài khoản">
                                    </div>
                                    <div class="col-12 mb-20">
                                        <label>Mật khẩu*</label>
                                        <input class="mb-0" name="password" type="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                            <input type="checkbox" id="remember_me">
                                            <label for="remember_me">Nhớ mật khẩu</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                        <a href="#"> Bạn quên mật khẩu?</a>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="register-button mt-0">Đăng nhập</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                        <form action="?ctrl=Login_register&act=register" method="post">
                            <div class="login-form">
                                <h4 class="login-title">Đăng ký</h4>
                                <div class="row">
                                    <div class="col-md col-12 mb-20">
                                        <label>Họ và tên</label>
                                        <input class="mb-0" name="name" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label>Tên tài khoản*</label>
                                        <input class="mb-0" name="username" type="email" placeholder="Tên tài khoản*">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label>Mật khẩu*</label>
                                        <input class="mb-0" name="password" type="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label>Nhập lại mật khẩu*</label>
                                        <input class="mb-0" name="re_password" type="password"
                                            placeholder="Nhập lại mật khẩu">
                                    </div>
                                    <div class="col-12">
                                        <button class="register-button mt-0">Đăng ký</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>