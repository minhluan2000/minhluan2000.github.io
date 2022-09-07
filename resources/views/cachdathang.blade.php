<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/product_info.css">

    <title>Cách đặt hàng</title>
</head>

<body>
    @include('layout.header')

    <div class="container-mt-5">
        <div class="row">
            @include('layout.sidebar')

            <div class="col">

                <ul class="navbar-nav py-2">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Trang chủ</a>
                        <span> > </span>
                        <span><ins>Cách đặt hàng</ins></span>
                    </li>
                </ul>

                <div class="container py-2">
                    <h2 class="text-center">CÁCH ĐẶT HÀNG</h2>
                    <h6 class="text-center py-3">Chi tiết về các phương thức mua hàng và các tuỳ chọn thanh toán có thể
                        được
                        thanh toán</h6>

                    <div class="row pt-2">
                        <span class="col-2">
                            <img src="/image/product-info-img/choose_product.png" alt="choose_product">
                        </span>
                        <div class="col">
                            <h6>1. Chọn sản phẩm</h6>
                            <p>Chọn sản phẩm bạn muốn. Đặt số lượng và bấm Thêm vào giỏ hoặc bấm Mua ngay để đến trang
                                Thanh toán ngay lập tức.</p>
                        </div>
                    </div>

                    <div class="row py-3">
                        <span class="col-2">
                            <img src="/image/product-info-img/order.png" alt="choose_product">
                        </span>
                        <div class="col">
                            <h6>2. Giỏ hàng</h6>
                            <p>Kiểm tra các mặt hàng trong giỏ. Tại đây bạn có thể lựa chọn các sản phẩm đặt mua và
                                thanh
                                toán. Bấm nút Thanh toán để đến trang thanh toán.</p>
                        </div>
                    </div>

                    <div class="row pb-2">
                        <span class="col-2">
                            <img src="/image/product-info-img/confirm_order.png" alt="choose_product">
                        </span>
                        <div class="col">
                            <h6>3. Thanh toán</h6>
                            <p>- Đăng nhập hoặc đăng ký tài khoản.
                                <br>- Hệ thống sẽ tự động tính phí giao hàng. Bạn có thể chọn lại phương thức vận chuyển
                                khác.
                                <br>- Chọn phương thức thanh toán.
                                <br>- Nhấn nút đặt hàng
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <span class="col-2">
                            <img src="/image/product-info-img/folow_process.png" alt="choose_product">
                        </span>
                        <div class="col">
                            <h6>4. Xác nhận đơn hàng</h6>
                            <p>Hệ thống hiển thị popup xác nhận thông tin đơn hàng. Kiểm tra và nhấn nút xác nhận để
                                giao
                                dịch và thanh toán. Nếu bạn chọn thanh toán trực tuyến, hệ thống sẽ đưa bạn đến trang để
                                thực
                                hiện thanh toán.</p>
                        </div>
                    </div>

                    <div class="row py-4">
                        <span class="col-2">
                            <img src="/image/product-info-img/flow_order.png" alt="choose_product">
                        </span>
                        <div class="col">
                            <h6>5. Theo dõi trạng thái</h6>
                            <p>Sau khi đặt hàng, bạn có thể theo dõi tình trạng đơn hàng của mình trong Tài khoản cá
                                nhân.
                                <br>Sau khi gian hàng đã chuyển hàng cho đơn vị vận chuyển, mã vận đơn sẽ được cập nhật.
                            </p>
                        </div>
                    </div>

                    <h6>Thanh toán</h6>
                    <p>Công ty cổ phần phát triển giải pháp giáo dục VIVI EDUCATION là đơn vị vận hành sàn book365.vn,
                        do đó tên người nhận thanh toán của tất cả các kênh trực tuyến, bao gồm tên tài khoản ngân hàng
                        là Công ty cổ phần phát triển giải pháp giáo dục VIVI EDUCATION. Hãy yên tâm rằng bạn đang thanh
                        toán cho sàn book365.vn
                        <br>Ngân hàng trực tuyến
                        <br>Chuyển khoản ngân hàng
                        <br>Ví điện tử Momo
                        <br>Thẻ tín dụng / Thẻ ghi nợ
                        <br>Thanh tóan khi nhận hàng COD
                    </p>

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
