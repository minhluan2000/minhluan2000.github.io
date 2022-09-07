<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/style.css">
    <title>SmartBook - Sách là tri thức</title>
</head>

<body>
    <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <!-- Danh mục sản phẩm -->
    <div class="container-mt-5">
        <div class="row">
            @include('layout.sidebar')


            <!-- Banner -->
            <div class="col-sm-6 py-3 border-bottom">
                <!-- Carousel Slide -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/image/sach5.jpg" alt="1" class="img-carousel d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/sach14.jpg" alt="2" class="img-carousel d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/sach10.jpg" alt="3" class="img-carousel d-block">
                        </div>
                        <div class="carousel-item">
                            <img src="/image/sach15.jpg" alt="4" class="img-carousel d-block">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Right banner -->
            <span class="col-sm-3 py-3 border-left">
                <div class="trang-chu-video hidden-xs">
                    <div class="item-news-top-area">
                        <a href="#">
                            <img src="/image/sach16.jpg" alt="sach16" style="width: 95%">
                        </a>
                        <a href="#">
                            <span class="name">
                                Những cuốn sách hay nhất định phải đọc một lần trong đời.
                            </span>
                        </a>
                        <span class="preview-text d-block">
                            "Những cuốn sách hay nhất định phải đọc một lần trong đời...."
                        </span>
                    </div>
                </div>
            </span>

        </div>
    </div>

    <!-- -------------- -->
    <!-- Sách giảm giá -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="container-fluid bg-light py-3">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sách <b> Giảm giá</b></h2>
                    <span><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></span>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/Đắc_nhân_tâm.jpg" class="img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Đắc nhân tâm</h4>
                                                <p><a href="#!"><ins>Dale Carnegie</ins></a></p>
                                                <p class="item-price"><strike>200.000đ</strike> <span>150.000đ</span>
                                                </p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/Nanh_trang.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Nanh trắng</h4>
                                                <p><a href="#!"><ins>Jack London</ins></a></p>
                                                <p class="item-price"><strike>88.000đ</strike> <span>52.800đ</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/combo_sach.jpeg" class="img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Combo - Tác phẩm kinh điển minh...</h4>
                                                <p><a href="#!"><ins>Người dịch: Ngụy Thanh...</ins></a></p>
                                                <p class="item-price"><strike>450.000đ</strike> <span>292.500đ</span>
                                                </p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <a href="{{ url('/product-info') }}"><img
                                                        src="/image/nghi-trong-suot-nhe-nhu-may.jpeg"
                                                        class="img-fluid" alt=""></a>
                                            </div>
                                            <div class="thumb-content">
                                                <a href="{{ url('/product-info') }}" style="color: black;">
                                                    <h4>Nghĩ thông suốt, đời nhẹ như mây</h4>
                                                </a>
                                                <p><a href="#!"><ins>Lysa TerKeurst</ins></a></p>
                                                <p class="item-price"><strike>150.000đ</strike> <span>90.000đ</span>
                                                </p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Sony Play Station</h4>
                                                <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Macbook Pro</h4>
                                                <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span>
                                                </p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-half-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Bose Speaker</h4>
                                                <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Samsung Galaxy S8</h4>
                                                <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Apple iPhone</h4>
                                                <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Canon DSLR</h4>
                                                <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Google Pixel</h4>
                                                <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 py-2">
                                        <div class="thumb-wrapper shadow">
                                            <div class="img-box">
                                                <img src="/image/logo-book-removebg-preview.png" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Apple Watch</h4>
                                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn btn-primary"><i
                                                        class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev bg bg-light" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next bg-light" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a href="#"><img src="/image/banner1.jpg" alt="banner1" class="rounded py-2"
                    style="width: 100%;"></a>
        </div>
    </div>

    <!-- -------------- -->
    <!-- Sách Thiếu nhi -->
    <!-- -------------- -->
    <div class="container-fluid border-top">
        <div class="py-3">
            <h2>Sách <b> Thiếu nhi</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm">OK</button>
                        </div>
                    </div>
                </form>

            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="py-2">
            <a href="#"><img src="/image/banner2.jpg" alt="banner2" class="rounded"
                    style="width: 100%;"></a>
        </div>
    </div>



    <!-- -------------- -->
    <!-- Sách Quản lý - Kinh tế -->
    <!-- -------------- -->
    <div class="container-fluid border-top">
        <div class="p-3">
            <h2>Sách <b> Quản lý - Kinh tế</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="py-3">
            <a href="#"><img src="/image/banner2.jpg" alt="banner2" class="rounded"
                    style="width: 100%;"></a>
        </div>
    </div>


    <!-- -------------- -->
    <!-- Sách dành cho giới trẻ -->
    <!-- -------------- -->
    <div class="container-fluid border-top">
        <div class="p-3">
            <h2>Sách <b> Dành cho giới trẻ</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- -------------- -->
    <!-- Tủ sách gia đình -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="p-3">
            <h2>Tủ Sách <b> Gia đình</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- -------------- -->
    <!-- Sách Khoa học - Công nghệ -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="p-3">
            <h2>Sách <b> Khoa học - Công nghệ</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- -------------- -->
    <!-- Sách Chính trị - Xã hội -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="p-3">
            <h2>Sách <b> Chính trị - Xã hội</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- -------------- -->
    <!-- Sách Văn học - Nghệ thuật -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="p-3">
            <h2>Sách <b> Văn học - Nghệ thuật</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!-- -------------- -->
    <!-- Sách Giáo khoa - Giáo trình -->
    <!-- -------------- -->
    <div class="container-fluid border-top border-bottom">
        <div class="p-3">
            <h2>Sách <b> Giáo khoa - Giáo trình</b>
                <p><a href="#!" class="btn btn-sm btn-outline-primary float-right">Xem tất cả</a></p>
            </h2>
        </div>

        <section class="row">
            <div class="col-3 bg-light mt-2 pt-3">
                <h5>Tìm Kiếm</h5>
                <form>
                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên sách">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist1" id="sel1">
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                        <option value="">Tìm theo nhà tài trợ</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Tìm theo tên tác giả">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist2" id="sel2">
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                        <option value="">Tìm theo gian hàng</option>
                    </select>

                    <div class="input-group input-group-sm px-2">
                        <input type="text" class="form-control" placeholder="Nhà xuất bản">
                        <span class="input-group-text"><a href="#!"><i class="fas fa-search"></i></a></span>
                    </div>

                    <select class="form-select form-select-sm px-2 mx-2" name="sellist3" id="sel3">
                        <option value="">Tìm theo đánh giá sao</option>
                        <option value="">Từ 5 sao</option>
                        <option value="">Từ 4 sao</option>
                        <option value="">Từ 3 sao</option>
                        <option value="">Từ 2 sao</option>
                        <option value="">Từ 1 sao</option>
                    </select>

                    <div class="row mx-0">
                        <label for="">Chọn khoảng giá:</label>
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Min">
                        </div>
                        -
                        <div class="col">
                            <input type="number" step="1000" class="form-control form-control-sm px-0"
                                placeholder="Max">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary btn-sm ">OK</button>
                        </div>
                    </div>
                </form>
            </div>

            <article class="col-9">
                <div class="container-fluid bg-light">
                    <div class="row mt-2 pt-3">

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 py-2">
                            <div class="product-list col border-rounded shadow">
                                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt=""
                                    class="img-fluid">
                                <div class="thumb-content">
                                    <h4>Bách khoa toàn thư thế hệ mới</h4>
                                    <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                                    <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span>
                                    </p>
                                    <div class="star-rating">
                                        <ul class="list-inline ms-4">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i
                                            class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
            </article>
        </section>


        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-9">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#!">Trước</a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Sau</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!--Footer-->
    <footer>
        @include('layout.footer')
    </footer>

</body>

</html>
