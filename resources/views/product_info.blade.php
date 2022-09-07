<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/product_info.css">
    <title>SmartBook - Sách là tri thức</title>

</head>

<body>
    <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 py-3">
                <div>

                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a href="{{ url('/') }}">Trang chủ</a>
                            <span> > </span>
                            <span><a href="#!">Sách giành cho giới trẻ</span></a>
                            <span> > </span>
                            <span><ins>Nghĩ thông suốt, đời nhẹ như mây</ins></span>
                        </li>
                    </ul>

                    <div class="my-5">
                        <img id="myImg" src="/image/nghi-trong-suot-nhe-nhu-may.jpeg"
                            alt="Nghĩ thông suốt đời nhẹ như mây" class="rounded mx-auto d-block">
                    </div>

                    <!-- The modal -->
                    <div class="modal" id="myModal">
                        <span class="close">&times;</span>
                        <img src="" alt="" class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>

                    <!-- Xử lý zoom ảnh -->
                    <script>
                        // Get the modal
                        var modal = document.getElementById("myModal");

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById("myImg");
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function() {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                            modal.style.display = "none";
                        }
                    </script>
                </div>

                <div data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid justify-content-center border-top">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#gioi-thieu" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#giao-hang" class="nav-link">Giao hàng</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#binh-luan" class="nav-link">Bình luận</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div id="gioi-thieu" class="container-fluid">
                        <h5>GIỚI THIỆU SÁCH</h5>
                        Uninvited: Nghĩ thông suốt, đời nhẹ như mây
                        <br>Kẻ thù luôn muốn chúng ta cảm thấy bị từ chối, bị bỏ rơi và cô đơn...
                        <br>Trong Nghĩ thông suốt, đời nhẹ như mây, tác giả Lysa TerKeurst chia sẻ những trải nghiệm cá
                        nhân
                        sâu sắc của mình về sự từ chối — từ nhận định về người phụ nữ có thân hình săn chắc hoàn hảo một
                        mình
                        một góc cho đến tuổi thơ vô cùng đau đớn bị cha bỏ rơi. Lysa TerKeurst tập trung vào để kiểm tra
                        một
                        cách trung thực gốc rễ của sự từ chối, cũng như khả năng sự từ chối có thể đầu độc các mối quan
                        hệ từ
                        trong ra ngoài, bao gồm cả mối quan hệ của chúng ta với Chúa.
                        <br>Với sự am hiểu sâu rộng về Kinh thánh, bằng một đức tính trung thực dễ bị tổn thương nhưng
                        không
                        kém phần hóm hỉnh, Lysa TerKeurst sẽ giúp bạn:
                        <br>• NGỪNG CẢM THẤY BỊ BỎ RƠI bằng cách tin rằng ngay cả khi bạn bị người khác coi thường, bạn
                        vẫn
                        được Chúa lựa chọn.
                        <br>• THAY ĐỔI KHUYNH HƯỚNG SUY SỤP hoặc kiểm soát hành động của người khác bằng cách dựa vào
                        lòng
                        tôn kính Chúa để xử lý tổn thương của bạn.
                        <br>• BIẾT CHÍNH XÁC NHỮNG GÌ CẦN CẦU NGUYỆN trong mười ngày tới để ổn định tâm hồn và khôi phục
                        sự
                        tự tin của bạn khi bị từ chối.
                        <br>• VƯỢT QUA HAI NỖI SỢ HÃI CỐT LÕI nuôi dưỡng sự bất an của bạn bằng cách am hiểu bí mật của
                        sự sở
                        hữu.
                        <br>Nghĩ thông suốt, đời nhẹ như mây nhắc nhở rằng chúng ta đã được định sẵn cho một tình yêu
                        không
                        bao giờ có thể bị suy giảm, hoen ố, lung lay hay chiếm đoạt - một tình yêu không bị chối từ.
                        <br>
                        <h5 class="py-2">Chi tiết sách</h5>
                        <div class="row">
                            <div class="col-3">
                                <p>Đơn vị phát hành</p>
                                <p>Nhà xuất bản</p>
                                <p>Năm xuất bản</p>
                                <p>Tác giả</p>
                                <p>Kích thước</p>
                                <p>Trọng lượng</p>
                                <p>Loại bìa</p>
                                <p>Số trang</p>
                                <p>Mã ISBN</p>
                            </div>
                            <div class="col-3">
                                <p>: Saigon Books</p>
                                <p>: Thế Giới</p>
                                <p>: 2019</p>
                                <p>: Lysa TerKeurst</p>
                                <p>: 20x15x3 (cm)</p>
                                <p>: 380 (g)</p>
                                <p>: Bìa mềm</p>
                                <p>: 304</p>
                                <p>: 8935278604426</p>
                            </div>
                        </div>
                    </div>

                    <div id="giao-hang" class="container-fluid py-2 border-top">
                        <h5>GIAO HÀNG</h5>
                        <p>Chi tiết giao hàng của các gian hàng cho các đơn hàng</p>
                        <h6>Thời gian chuẩn bị sản phẩm:</h6>
                        <p>Tối đa 2 ngày làm việc (đóng cửa vào Chiều thứ 7 - Ngày Chủ nhật) sau khi kiểm tra tồn kho
                            thành công</p>
                        <h6>Phương thức và phí vận chuyển:</h6>
                        <p>Đơn vị vận chuyển:
                            <br>- Vnpost
                            <br>- Nhất Tín Express
                        </p>
                        <h6>Chính sách đổi hoặc trả hàng</h6>
                        <p>Bảo vệ bạn trên mọi bước đường Với chính sách bảo vệ người mua. Nếu bạn không nhận được sản
                            phẩm,
                            Chúng tôi sẽ hoàn trả cho bạn toàn bộ số tiền Theo các điều kiện sau:
                            <br>- Sản phẩm nhận được hoàn toàn khác với những gì gian hàng đã giới thiệu.
                            <br>- Sản phẩm chưa được vận chuyển hoặc bị hư hỏng.
                            <br>- Có vấn đề với mặt hàng đã đặt. Đã xảy ra sự cố khi liên hệ với gian hàng.
                            <br>Thông tin chi tiết có thể được tìm thấy tại Trang trợ giúp của người mua. Và nếu bạn có
                            yêu cầu
                            cần hỗ trợ, Bạn có thể liên hệ ngay với chúng tôi 0247.300.1369 mỗi ngày trừ ngày lễ 08:30 -
                            17:00
                            hoặc gửi email tới book365@vivicorp.com. Nhóm của chúng tôi sẽ liên hệ lại với bạn trong
                            thời gian
                            sớm nhất.
                        </p>
                    </div>

                    <div id="binh-luan" class="container-fluid py-2 border-top">
                        <h5>ĐÁNH GIÁ & BÌNH LUẬN</h5>
                        <div class="star-rating">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>

                        <form action="">
                            <div>
                                <label for="comment">Bình luận:</label>
                                <textarea name="text" id="comment" rows="5" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Gửi</button>
                        </form>
                    </div>

                </div>

            </div>

            <div class="col-sm-6 py-4">
                <nav class="sticky-top" style="padding-top: 60px;">
                    <h3>Nghĩ thông suốt, đời nhẹ như mây</h3>
                    <p>Tác giả: <a href="#!">Lysa TerKeurst</a></p>
                    <p>Lĩnh vực: <a href="#!">Sách giành cho giới trẻ</a> | Loại sách: Sách in</p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            <li class="list-inline-item">(0 đánh giá)</li>
                            <li class="list-inline-item">
                                <a href="#!"><ins>Click để đánh giá</ins></a>
                            </li>
                        </ul>
                    </div>
                    <h6 class="" style="color: red; font-size: 30px;">90.000đ</h6>
                    <p><strike>150.000đ</strike>
                        <span>-40%</span>
                    </p>
                    <p>Vận chuyển: <br>Giảm 30% phí vận chuyển bởi Nhất Tín Express (NTX)</p>
                    <p>Tình trạng: <span style="color: blue;">Còn hàng</span></p>
                    <p>Số lượng:
                        <span><input type="number" min="1" max="50" step="1"
                                style="font-size: 20px;" value="1"></span>
                    </p>

                    <div class="row ps-2">

                        <div class="col-3 px-2">
                            <button type="button" class="btn btn-success">
                                <img src="/image/product-info-img/buy.png" alt="buynow">
                                Mua ngay
                            </button>
                        </div>

                        <div class="col-3 px-0">
                            <button type="button" class="btn btn-primary">
                                <img src="/image/product-info-img/cart.png" alt="addtocart">
                                Thêm vào giỏ
                            </button>
                        </div>

                        <div class="col-3">
                            <button class="btn btn-danger py-2" data-bs-toggle="tooltip"
                                title="Thêm vào danh sách yêu thích">
                                <i class="far fa-heart"></i>
                                Thích
                            </button>
                        </div>

                        <script>
                            // Initialize tooltips
                            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                                return new bootstrap.Tooltip(tooltipTriggerEl)
                            })
                        </script>

                    </div>
                </nav>

            </div>

        </div>

    </div>

    <!--Footer-->
    <footer>
        @include('layout.footer')
    </footer>

</body>

</html>
