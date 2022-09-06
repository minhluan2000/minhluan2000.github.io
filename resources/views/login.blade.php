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
    <title>Đăng nhập</title>

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
        <div class="container-fluid h-custom py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1 px-3">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Tên đăng nhập hoặc Email</label>
                            <input type="email" id="email" class="form-control form-control-lg"
                                placeholder="Tên đăng nhập hoặc Email" required />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">Mật khẩu</label>
                            <input type="password" id="password" class="form-control form-control-lg"
                                placeholder="Mật khẩu" required />

                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="password" />
                                <label class="form-check-label" for="password">
                                    Nhớ mật khẩu
                                </label>
                            </div>
                            <a href="#!" class="text-body" data-bs-toggle="modal" data-bs-target="#myModal">
                                Quên mật khẩu?
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-titler">Quên mật khẩu</h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="form-outline mb-4">
                                                    <label class="form-label" for="email">Nhập Email của bạn</label>
                                                    <input type="email" id="email"
                                                        class="form-control form-control-lg"
                                                        placeholder="Nhập Email của bạn" required />

                                                </div>

                                                <button type="submit" class="btn btn-primary btn-lg"
                                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Gửi yêu cầu
                                                </button>

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản? <a
                                    href="{{ url('/dang-ky') }}" class="link-danger">Đăng ký</a></p>
                            <p class="small fw-bold mt-2 pt-1 mb-0"><a href="{{ url('/') }}">
                                    <i class="fas fa-arrow-left"></i> Quay lại Trang chủ</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start 
            justify-content-between py-4 px-4 px-xl-5 bg-primary">
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
    </section>

</body>

</html>
