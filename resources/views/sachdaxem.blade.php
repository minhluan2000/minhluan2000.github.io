<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/style.css">
    <title>Sách đã xem</title>
</head>

<body>
    <!-- Header -->
    <header>
        @include('layout.header')
    </header>


    <!-- Banner hình ảnh -->
    <img src="/image/banner/header_banner1.jpg" alt="" class="rounded" style="width: 100%;">

    <!-- Danh mục sản phẩm -->
    <div class="container-mt-5">
        <div class="row">
            @include('layout.sidebar')

            <article class="col-9">
                <ul class="navbar-nav bg-light py-2">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Trang chủ</a>
                        <span> > </span>
                        <span><ins>Sách đã xem</ins></span>
                    </li>
                </ul>

                <h3 class="text-uppercase border-bottom border-top py-2">Sách đã xem</h3>

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

                    </div>
            </article>
        </div>
    </div>

    <!--Footer-->
    <footer>
      @include('layout.footer')
    </footer>


</body>

</html>
