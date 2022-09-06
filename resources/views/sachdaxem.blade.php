<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4db44f2445.js" crossorigin="anonymous"></script>
  <title>Sách đã xem</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top mb-4">
    <div class="container-fluid col-sm-3">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img class="logo" src="/image/logo-book-removebg-preview.png" alt="Logo">
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
        <a href="{{ url('/dang-nhap') }}"><button type="button" class="btn btn-sm btn-outline-primary px-1">Đăng
            nhập</button></a>
        <a href="{{ url('/dang-ky') }}"><button type="button" class="btn btn-sm btn-outline-primary px-2"> Đăng ký
          </button></a>
      </div>

      <div class="btn-group">
        <a href="#!">
          <button class="popup" onclick="myFunction()" style="font-size: 22px; border: none; background: none;">
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
          <button style="font-size: 22px; border: none; background: none;"><i class="fas fa-shopping-cart">
              <span class="badge bg-danger" style="font-size: 11px;">2</span></i>
          </button>
        </a>
      </div>
    </div>

  </nav>

  <!-- Menu -->
  <nav class="navbar navbar-expand-sm bg-primary text-white navbar-dark">
    <div class="container-fluid justify-content-center" style="margin-top: 60px;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('/') }}">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('/gioi-thieu') }}">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ url('/tintuc-sukien') }}">Tin tức - Sự kiện</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light active" href="{{ url('/sach-da-xem') }}">Sách đã xem</a>
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


  <!-- Banner hình ảnh -->
  <img src="/image/banner/header_banner1.jpg" alt="" class="rounded" style="width: 100%;">

  <!-- Danh mục sản phẩm -->
  <div class="container-mt-5">
    <div class="row">
      <div class="d-flex col-sm-3 py-3 bg-light">
        <div class="list-group list-group-flush ms-3">
          <div class="dropdown dropend">
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm1.png" alt="dm1">
              Sách hay nổi bật </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sách bán chạy</a></li>
              <li><a class="dropdown-item" href="#">Nhiều người giới thiệu</a></li>
              <li><a class="dropdown-item" href="#">Tác phẩm đạt giải Nobel</a></li>
            </ul>

            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm2.png" alt="dm2">
              Sách thiếu nhi </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Truyện tranh</a></li>
              <li><a class="dropdown-item" href="#">Bách khoa tri thức</a></li>
              <li><a class="dropdown-item" href="#">Sách song ngữ thiếu nhi</a></li>
              <li><a class="dropdown-item" href="#">Sách tô màu</a></li>
              <li><a class="dropdown-item" href="#">Văn học thiếu nhi</a></li>
              <li><a class="dropdown-item" href="#">Manga - Comic</a></li>
            </ul>

            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm3.png" alt="dm3">
              Sách giành cho giới trẻ </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Kĩ năng sống</a></li>
              <li><a class="dropdown-item" href="#">Kĩ năng nghề nghiệp</a></li>
              <li><a class="dropdown-item" href="#">Phát triển tâm thức</a></li>
              <li><a class="dropdown-item" href="#">Phổ biến kiến thức</a></li>
            </ul>
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm4.png" alt="dm4">
              Tủ sách gia đình </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nuôi dạy con</a></li>
              <li><a class="dropdown-item" href="#">Chăm sóc sức khoẻ</a></li>
              <li><a class="dropdown-item" href="#">Hôn nhân gia đình</a></li>
              <li><a class="dropdown-item" href="#">Cẩm nang du lịch</a></li>
              <li><a class="dropdown-item" href="#">Dạy nấu ăn</a></li>
              <li><a class="dropdown-item" href="#">Thời trang - làm đẹp</a></li>
            </ul>
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm5.png" alt="dm5">
              Sách khoa học - công nghệ </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Công nghệ thông tin</a></li>
              <li><a class="dropdown-item" href="#">Tạp chí khoa học</a></li>
              <li><a class="dropdown-item" href="#">Khoa học tự nhiên</a></li>
              <li><a class="dropdown-item" href="#">Y - dược</a></li>
              <li><a class="dropdown-item" href="#">Cơ khí, chế tạo máy</a></li>
              <li><a class="dropdown-item" href="#">Xây dựng, kiến trúc</a></li>
              <li><a class="dropdown-item" href="#">Điện - Điện tử</a></li>
              <li><a class="dropdown-item" href="#">Môi trường</a></li>
              <li><a class="dropdown-item" href="#">Địa lý, thiên văn</a></li>
            </ul>
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm6.png" alt="dm6">
              Sách quản lý - kinh tế </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Quản trị - Kinh doanh</a></li>
              <li><a class="dropdown-item" href="#">Marketing</a></li>
              <li><a class="dropdown-item" href="#">Start-up</a></li>
              <li><a class="dropdown-item" href="#">Doanh nhân</a></li>
              <li><a class="dropdown-item" href="#">Sách kinh tế</a></li>
              <li><a class="dropdown-item" href="#">Quản lý nhà nước</a></li>
            </ul>
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm7.png" alt="dm7">
              Sách chính trị - xã hội </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sách lịch sử</a></li>
              <li><a class="dropdown-item" href="#">Văn hoá - Xã hội</a></li>
              <li><a class="dropdown-item" href="#">Chính trị - tư tưởng</a></li>
              <li><a class="dropdown-item" href="#">Pháp luật</a></li>
              <li><a class="dropdown-item" href="#">Những vấn đề quốc tế</a></li>
              <li><a class="dropdown-item" href="#">Sách tôn giáo</a></li>
              <li><a class="dropdown-item" href="#">Chủ tịch Hồ Chí Minh</a></li>
            </ul>
            <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
              <img src="/image/danh-muc/dm8-all.png" alt="dm8-all">
              Tất cả danh mục </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sách thiếu nhi</a></li>
              <li><a class="dropdown-item" href="#">Sách dành cho giới trẻ</a></li>
              <li><a class="dropdown-item" href="#">Tủ sách gia đình</a></li>
              <li><a class="dropdown-item" href="#">Sách khoa học - công nghệ</a></li>
              <li><a class="dropdown-item" href="#">Sách quản lý - kinh tế</a></li>
              <li><a class="dropdown-item" href="#">Sách chính trị - xã hội</a></li>
              <li><a class="dropdown-item" href="#">Sách giáo khoa - giáo trình</a></li>
              <li><a class="dropdown-item" href="#">Sách ngoại ngữ</a></li>
              <li><a class="dropdown-item" href="#">Văn học - nghệ thuật</a></li>
              <li><a class="dropdown-item" href="#">Sách khác</a></li>
            </ul>

          </div>
        </div>
      </div>

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
                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt="" class="img-fluid">
                <div class="thumb-content">
                  <h4>Bách khoa toàn thư thế hệ mới</h4>
                  <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                  <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span></p>
                  <div class="star-rating">
                    <ul class="list-inline ms-4">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="product-list col border-rounded shadow">
                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt="" class="img-fluid">
                <div class="thumb-content">
                  <h4>Bách khoa toàn thư thế hệ mới</h4>
                  <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                  <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span></p>
                  <div class="star-rating">
                    <ul class="list-inline ms-4">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="product-list col border-rounded shadow">
                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt="" class="img-fluid">
                <div class="thumb-content">
                  <h4>Bách khoa toàn thư thế hệ mới</h4>
                  <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                  <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span></p>
                  <div class="star-rating">
                    <ul class="list-inline ms-4">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="product-list col border-rounded shadow">
                <img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" alt="" class="img-fluid">
                <div class="thumb-content">
                  <h4>Bách khoa toàn thư thế hệ mới</h4>
                  <p class="text-center"><a href="#!"><ins>Nhiều tác giả</ins></a></p>
                  <p class="item-price text-center"><strike>360.000đ</strike> <span>252.000đ</span></p>
                  <div class="star-rating">
                    <ul class="list-inline ms-4">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary ms-3 px-3 mb-3"><i class="fas fa-cart-plus"> Thêm vào giỏ</i></a>
                </div>
              </div>
            </div>

          </div>
      </article>


    </div>
  </div>







  <!--Footer-->
  <div class="mt-5 p-4 bg-primary text-white text-center">
    <p>SMARTBOOK - SÁCH LÀ TRI THỨC CỦA NHÂN LOẠI</p>
  </div>

  <div class="container-fluid py-3">
    <div class="row">
      <div class="col-sm-3">
        <strong class="tg-logo"><a href="javascript:void(0);"><img src="/image/logo-book-removebg-preview.png"
              alt="image description" style="width: 70%;"></a></strong>
        <ul class="navbar-nav border-top pt-2">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <span>Trâu Quỳ - Gia Lâm - Hà Nội
            </span>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <span>
              <em>+84 961 987 761</em>
            </span>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <span>Phục vụ tất cả các ngày từ 9am - 5pm</span>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <span>
              <em><a href="mailto:smartbook@gmail.com">smartbook@gmail.com</a></em>
            </span>
          </li>
        </ul>
        <div class="pt-2">
          <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
          <a class="ps-2" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
          <a class="ps-2" href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
          <a class="ps-2" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
          <a class="ps-2" href="javascript:void(0);"><i class="fa fa-rss"></i></a>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="row">
          <ul class="navbar-nav col-sm-5 p-4" style="margin-left: 100px;">
            <li><a href="javascript:void(0);">Điều khoản</a></li>
            <li><a href="javascript:void(0);">Chính sách giảm giá</a></li>
            <li><a href="javascript:void(0);">Lợi nhuận</a></li>
            <li><a href="javascript:void(0);">Riêng tư</a></li>
            <li><a href="javascript:void(0);">Cookies</a></li>
            <li><a href="javascript:void(0);">Liên hệ với chúng tôi</a></li>
            <li><a href="javascript:void(0);">Các chi nhánh</a></li>

          </ul>
          <ul class="navbar-nav col-sm-5 p-4">
            <li><a href="javascript:void(0);">Câu chuyện của chúng tôi</a></li>
            <li><a href="javascript:void(0);">Gặp gỡ đội của tôi</a></li>
            <li><a href="javascript:void(0);">FAQ</a></li>
            <li><a href="javascript:void(0);">Lời chứng thực</a></li>
            <li><a href="javascript:void(0);">Gia nhập đội ngũ chúng tôi</a></li>
            <li><a href="javascript:void(0);">Tầm nhìn &amp; Mục tiêu</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="p-4 bg-primary text-white text-center">
    <p>Copyright &copy; 2022 - SmartBook</p>
  </div>


</body>

</html>