<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/product_info.css">
    <title>Giới thiệu</title>
</head>

<body>
    <!-- Header -->
    <header>
      @include('layout.header')
    </header>

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

            <h6 class="my-3">Danh mục hàng hóa phong phú, nhiều sản phẩm độc quyền, được chọn lọc kỹ càng đã tạo nên
                sự khác
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
    <footer>
      @include('layout.footer')
    </footer>
</body>

</html>
