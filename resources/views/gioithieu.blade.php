<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/css/product_info.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4db44f2445.js" crossorigin="anonymous"></script>
  <title>Giới thiệu</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top mb-4">
    <div class="container-fluid col-sm-3">
      <a class="navbar-brand" href="{{ url('/')}}">
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
          <a class="nav-link text-light active" href="{{ url('/gioi-thieu') }}">Giới thiệu</a>
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

  <div class="container my-4">
    <a href="{{ url('/') }}">Trang chủ</a>
    <span> > </span>
    <span><ins>Giới thiệu</ins></span>

    <div class="container border py-4 my-4">
      <h3 class="border-3 border-bottom border-warning">Giới thiệu về SMARTBOOK</h3>
      <p>SmartBook là trang thương mại điện tử của Nhà Sách SmartBook, hệ thống nhà sách thân thuộc của nhiều
        gia đình Việt kể từ nhà sách đầu tiên ra đời năm 1982 đến nay.<br><br>Đến với không gian mua sắm trực
        tuyến SmartBook, khách hàng có thể dễ dàng tìm thấy những cuốn sách hay, đa thể loại của nhiều nhà
        xuất bản, công ty sách trong và ngoài nước cùng nhiều dụng cụ học tập, văn phòng phẩm, quà lưu niệm,
        đồ chơi giáo dục chính hãng của những thương hiệu uy tín. Cùng tiêu chí không ngừng hoàn thiện, nâng
        cao chất lượng sản phẩm, dịch vụ, SmartBook cam kết mang đến cho khách hàng trải nghiệm mua
        sắm trực tuyến an toàn, tiện lợi: cách đặt hàng đơn giản, phương thức thanh toán đa dạng, dịch vụ
        chăm sóc khách hàng tận tình, chu đáo.
      </p>

      <div class="row">
        <div class="col-6">
          <img src="/image/gioi-thieu/gt4.jpg" alt="" style="width: 100%;">
          <img src="/image/gioi-thieu/gt3.jpg" alt="" style="width: 100%; margin-top: 10px;">
        </div>
        <div class="col-6">
          <img src="/image/gioi-thieu/gt2.jpg" alt="" style="width: 100%;">
          <img src="/image/gioi-thieu/gt1.jpg" alt="" style="width: 100%; margin-top: 10px;">
        </div>
      </div>

      <h6 class="my-3">Danh mục hàng hóa phong phú, nhiều sản phẩm độc quyền, được chọn lọc kỹ càng đã tạo nên sự khác
        biệt
        của Nhà Sách Phương Nam và tạo dựng <h6 class="text-center">được lòng tin yêu từ khách hàng.</h6>
      </h6>

      <p>
        Hi vọng với trang thương mại điện tử SmartBook, SmartBook có thể gia tăng tiện ích cho khách hàng,
        đồng thời mang những sản phẩm của hệ thống nhà sách đến với mọi khách hàng trên cả nước.
        <br>Quý khách hàng có nhu cầu liên lạc, đóng góp ý kiến, phản hồi về sản phẩm dịch vụ của SmartBook,
        vui lòng liên hệ:
        <br>- Hotline: +84 961 987 761
        <br>- Email: smartbook@gmail.com
        <br>- Yêu cầu hỗ trợ đơn hàng Online: hotro@smartbook.com
        <br>- Gửi bản thảo, các vấn đề liên quan đến xuất bản: xuatban@smartbook.com
        <br>Địa chỉ văn phòng công ty: Trâu Quỳ - Gia Lâm - Hà Nội
      </p>

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