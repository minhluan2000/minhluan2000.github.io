<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4db44f2445.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/login.css">
    <title>Đăng ký</title>
</head>

<body>

    <nav class="navbar-nav bg-light">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="/image/logo-book-removebg-preview.png" alt="logo" style="width: 12%;">
            </a>
        </div>
    </nav>

    <section class="vh-100">
        <div class="container-fluid h-custom py-3">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image" style="margin-top: -350px;">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="divider d-flex align-items-center my-4">
                            <h2 class="text-center fw-bold mx-2 mb-0">Đăng Ký</h2>
                        </div>

                        <!-- Họ tên -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên</label>
                                    <input type="text" id="name" class="form-control form-control-lg" placeholder="Tên"
                                        required />

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                    <label class="form-label" for="surname">Họ</label>
                                    <input type="text" id="surname" class="form-control form-control-lg"
                                        placeholder="Họ" required />

                                </div>
                            </div>
                        </div>

                        <!-- Tên đăng nhập -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="username">Tên đăng nhập</label>
                            <input type="text" id="username" class="form-control form-control-lg"
                                placeholder="Tên đăng nhập" required />

                            <!-- Email -->
                            <div class="form-outline mb-3 py-2">
                                <label class="form-label" for="email">Địa chỉ Email</label>
                                <input type="email" id="email" class="form-control form-control-lg"
                                    placeholder="Nhập Email của bạn" required />

                                <!-- Password -->
                                <div class="form-outline mb-3 py-2">
                                    <label class="form-label" for="password">Mật khẩu</label>
                                    <input type="password" id="password" class="form-control form-control-lg"
                                        placeholder="Nhập mật khẩu" required />

                                    <!-- Nhập lại password -->
                                    <div class="form-outline mb-3 py-2">
                                        <label class="form-label" for="password">Nhập lại mật khẩu</label>
                                        <input type="password" id="password" class="form-control form-control-lg"
                                            placeholder="Nhập lại mật khẩu" required />

                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="terms"
                                            required />
                                        <label class="form-check-label" for="terms">
                                            Tôi đồng ý tất cả các điều khoản trong <a href="#!">Điều khoản &amp; Dịch
                                                vụ</a>
                                        </label>
                                    </div>


                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <button type="submit" class="btn btn-primary btn-lg"
                                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Bạn đã tài khoản? <a
                                                href="{{ url('/dang-nhap') }}" class="link-danger">Đăng nhập</a></p>
                                        <p class="small fw-bold mt-2 pt-1 mb-0"><a href="{{ url('/') }}">
                                                <i class="fas fa-arrow-left"></i> Quay lại Trang chủ</a></p>
                                    </div>

                                    <!-- Register buttons -->
                                    <div class="text-center py-4">
                                        <p>Hoặc đăng nhập với:</p>
                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-link btn-floating mx-1">
                                            <i class="fab fa-linkedin-in"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
                <div>
                    <div class="d-flex flex-column flex-md-row text-center text-md-start 
                        justify-content-between py-4 px-5 bg-primary">
                        <!-- Copyright -->
                        <div class="text-white mb-3 mb-md-0">
                            Copyright © 2022 SmartBook. All rights reserved.
                        </div>
                        <!-- Copyright -->

                        <!-- Right -->
                        <div>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#!" class="text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </div>
                </div>

    </section>

</body>

</html>