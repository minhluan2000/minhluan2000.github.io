<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="/css/general.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/4db44f2445.js" crossorigin="anonymous"></script>
  <title>Giỏ hàng</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-sm bg-light navbar-dark fixed-top mb-4">
    <div class="container-fluid col-sm-3">
      <a class="navbar-brand" href="/view/index.html">
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
          <a class="nav-link text-light" href="{{ url('/tintuc-sulien') }}">Tin tức - Sự kiện</a>
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

  <div class="container border border-bottom-0">
    <ul class="navbar-nav py-2">
      <li class="nav-item">
        <a href="{{ url('/') }}">Trang chủ</a>
        <span> > </span>
        <span><ins>Giỏ hàng</ins></span>
      </li>
    </ul>

    <h2 class="text-center py-3">GIỎ HÀNG</h2>

    <div class="container-fluid">
      <div class="row py-3">
        <div class="col-sm-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="check1" name="san-pham" value="san-pham" checked>
            <label class="form-check-label">
              <h4>Sản phẩm</h4>
            </label>
          </div>
        </div>

        <div class="col-sm-4">
          <h4 class="text-center">Đơn giá</h4>
        </div>

        <div class="col-sm-2">
          <h4 class="text-center">Số lượng</h4>
        </div>

        <div class="col-sm-2">
          <h4 class="text-center">Thành tiền</h4>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row py-3">
        <div class="col-sm-4">

          <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="check2" name="nxb" value="nxb" checked>
            <label class="form-check-label">NXB Kim Đồng (1 sản phẩm)</label>
          </div>

          <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="check3" name="sach" value="sach" checked>
            <label class="form-check-label">
              <div class="row">
                <div class="col-8">
                  <h5>Bách khoa toàn thư thế hệ mới</h5>
                  <p>Tác giả: Nhiều tác giả</p>
                  <p>NXB: Kim Đồng</p>
                  <a href="#!" class="remove">Xoá</a>
                </div>
                <div class="col-2">
                  <a href="#!"><img src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg" style="width:300%"
                      alt=""></a>
                </div>
              </div>
            </label>
          </div>

        </div>

        <div class="col-sm-4">
          <div class="text-center py-5">
            <div class="row">
              <div class="col-7 text-end">
                <p class="price">252.000 </p>
              </div>
              <div class="col-5 text-start px-0">
                <p>đ</p>
              </div>
            </div>


            <p><strike class="old-price">360.000</strike><span> đ</span> | <span style="color: red;"> -30%</span></p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check4" name="nxb" value="nxb" checked disabled>
              <label class="form-check-label">Giảm giá chung: 30%. Tương đương 108.000đ</label>
            </div>
          </div>
        </div>

        <div class="col-sm-2 text-center py-5">
          <input class="quantity" type="number" min="1" max="50" step="1" style="font-size: 20px;" value="1">
        </div>

        <div class="col-sm-2 text-center py-5">
          <h6 class="total-price">252.000 đ</h6>
          <p><strike class="old-price-total">360.000 đ</strike> | <span style="color: red;"> -30%</span></p>
        </div>
      </div>

    </div>

    <div class="container-fluid">
      <div class="row py-2">
        <div class="col-sm-4">
          <div class="form-check py-3">
            <input class="form-check-input" type="checkbox" id="check4" name="nxb" value="nxb" checked>
            <label class="form-check-label">Saigon Books (1 sản phẩm)</label>
          </div>

          <div class="form-check py-2">
            <input class="form-check-input" type="checkbox" id="check5" name="sach" value="sach" checked>
            <label class="form-check-label">
              <div class="row">
                <div class="col-8">
                  <h5>Nghĩ thông suốt, đời nhẹ như mây</h5>
                  <p>Tác giả: Lysa TerKeurst</p>
                  <p>NXB: Thế Giới</p>
                  <a href="#!" class="remove">Xoá</a>
                </div>
                <div class="col-2">
                  <a href="#!"><img src="/image/nghi-trong-suot-nhe-nhu-may.jpeg" style="width:300%" alt=""></a>
                </div>
              </div>
            </label>
          </div>
        </div>

        <div class="col-sm-4 py-3">
          <div class="text-center py-5">
            <div class="row">
              <div class="col-7 text-end">
                <p class="price2">90.000 </p>
              </div>
              <div class="col-5 text-start px-0">
                <p>đ</p>
              </div>
            </div>
            <p><strike class="old-price2">150.000</strike> <span> đ</span> | <span style="color: red;"> -40%</span></p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="check4" name="nxb" value="nxb" checked disabled>
              <label class="form-check-label">Giảm giá chung: 40%. Tương đương 60.000đ</label>
            </div>
          </div>
        </div>

        <div class="col-sm-2 py-3">
          <div class="text-center py-5">
            <input class="quantity2" type="number" min="1" max="50" step="1" style="font-size: 20px;" value="1">
          </div>
        </div>

        <div class="col-sm-2 py-3">
          <div class="text-center py-5">
            <h6 class="total-price2">90.000 đ</h6>
            <p><strike class="old-price-total2">150.000 đ</strike> | <span style="color: red;"> -40%</span></p>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <div class="form-check py-3">
            <input class="form-check-input" type="checkbox" id="check4" name="nxb" value="nxb" checked>
            <label class="form-check-label">Chọn tất cả</label>
          </div>
        </div>

        <div class="col-sm-2 py-3">
          <a href="#!" class="remove">Xoá</a>
          <span style="font-size: 11px;">(Xoá toàn bộ sản phẩm)</span>
        </div>

        <div class="col-sm-4 py-3 ps-5 text-center">
          <h5>Tổng tiền hàng</h5>
        </div>

        <div class="col-sm-2 py-3">
          <h4><strike class="total-all-old-price">510.000 đ</strike></h4>
        </div>

        <div class="col-sm-2 py-3 text-end">
          <h3 class="total-all-price">342.000 đ</h3>
        </div>
      </div>

    </div>

    <div class="container-fluid">
      <div class="text-end">
        <button type="submit" class="btn btn-success px-xl-5" style="font-size: 20px;">
          Thanh toán
          <img src="/image/product-info-img/dathanhtoan.png" alt="">
        </button>
      </div>
    </div>

  </div>

  <script>
    $('.quantity').on('input', function () {
      var $quantity = $(this).val();
      var $parent = $(this).parents('div');
      var $price = $parent.find('.price').text();
      parseFloat($price).toFixed(3);
      var $old_price = $parent.find('.old-price').text();
      parseFloat($old_price).toFixed(3);

      var $total_price = $parent.find('.total-price');
      var $old_price_total = $parent.find('.old-price-total');

      $total_price.text(($quantity * $price).toFixed(3) + ' đ');
      $old_price_total.text(($quantity * $old_price).toFixed(3) + ' đ');
    });

    $('.quantity2').on('input', function () {
      var $quantity = $(this).val();
      var $parent = $(this).parents('div');
      var $price = $parent.find('.price2').text();
      parseFloat($price).toFixed(3);
      var $old_price = $parent.find('.old-price2').text();
      parseFloat($old_price).toFixed(3);

      var $total_price = $parent.find('.total-price2');
      var $old_price_total = $parent.find('.old-price-total2');

      $total_price.text(($quantity * $price).toFixed(3) + ' đ');
      $old_price_total.text(($quantity * $old_price).toFixed(3) + ' đ');
    });



  </script>


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