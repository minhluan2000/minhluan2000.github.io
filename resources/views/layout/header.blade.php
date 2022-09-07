<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top mb-4">
            <div class="col-sm-3">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="\image\logo-book-removebg-preview.png">
                </a>
            </div>

            <form class="d-flex col-sm-5">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm sách">
                    <button class="btn btn-outline-primary" type="submit">
                        <span class="input-group-btn"><i class="fas fa-search"></i></span>
                    </button>
                </div>
            </form>

            <div class="col-sm-1">

            </div>

            <div class="col-sm-3">
                <div class="btn-group mx-2 py-2">
                    <a href="{{ url('/dang-nhap') }}"><button type="button"
                            class="btn btn-sm btn-outline-primary px-1">
                            Đăng nhập</button></a>
                    <a href="{{ url('/dang-ky') }}"><button type="button" class="btn btn-sm btn-outline-primary px-2">
                            Đăng ký
                        </button></a>
                </div>

                <div class="btn-group">
                    <a href="#!">
                        <button class="popup" onclick="myFunction()"
                            style="font-size: 22px; border: none; background: none;">
                            <i class="far fa-heart">
                                <span class="badge bg-danger" style="font-size: 11px;">0</span>
                            </i>
                            <span class="popuptext" id="myPopup">
                                Chưa có sản phẩm yêu thích...
                            </span>
                        </button>
                    </a>

                    <script>
                        // When the user clicks on div, open the popup
                        function myFunction() {
                            var popup = document.getElementById("myPopup");
                            popup.classList.toggle("show");
                        }
                    </script>

                    <a href="{{ url('/gio-hang') }}">
                        <button style="font-size: 22px; border: none; background: none;"><i
                                class="fas fa-shopping-cart">
                                <span class="badge bg-danger" style="font-size: 11px;">2</span></i>
                        </button>
                    </a>
                </div>
            </div>

        </nav>

        <!-- Menu -->
        <nav class="navbar navbar-expand-sm bg-primary">
            <div class="container-fluid justify-content-center" style="margin-top: 60px;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/gioi-thieu') }}">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/tintuc-sukien') }}">Tin tức - Sự kiện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/sach-da-xem') }}">Sách đã xem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/cach-dat-hang') }}">Cách đặt hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ url('/lien-he') }}">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>
