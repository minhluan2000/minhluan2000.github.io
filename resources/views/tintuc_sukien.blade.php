<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/product_info.css">
    <title>Tin tức - Sự kiện</title>
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

            <!-- ---------------- -->
            <!-- Tin túc -Sự kiện -->
            <!-- ---------------- -->
            <div class="col-sm-6 my-4">
                <ul class="navbar-nav bg-light py-2">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Trang chủ</a>
                        <span> > </span>
                        <span><ins>Tin tức - Sự kiện</ins></span>
                    </li>
                </ul>

                <h3 class="text-uppercase border-bottom border-top py-3" style="color: rgb(92, 92, 54);">
                    Tin tức nổi bật</h3>

                <div class="container-fluid py-3">
                    <div class="row py-3">
                        <div class="col-3">
                            <a href="#!"><img src="/image/Đắc_nhân_tâm.jpg" alt=""
                                    style="width: 100%;"></a>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h5>Những cuốn sách hay nhất định phải đọc một lần trong đời</h5>
                            </a>
                            <p>Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh
                                ngạc
                                trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ,
                                tác phẩm
                                này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện
                                có một
                                không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có
                                tầm ảnh
                                hưởng nhất mọi thời đại.</p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-3">
                    <div class="row py-3">
                        <div class="col-3">
                            <a href="#!"><img src="/image/tintuc-hinhanh/sach-mua-nhieu-1.png" alt=""
                                    style="width: 100%; height: 60%;"></a>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h5>18 tựa sách hay giảm 15-50% được tìm mua nhiều nhất.</h5>
                            </a>
                            <p>Xin giới thiệu tới quý bạn 18 cuốn sách đặc thù được bạn đọc quan tâm và tìm mua nhiều
                                nhất
                                tại Sàn sách trực tuyến SmartBook thời gian gần đây:
                                <br>..............
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-3">
                    <div class="row py-3">
                        <div class="col-3">
                            <a href="#!"><img src="/image/tintuc-hinhanh/ss.png" alt=""
                                    style="width: 100%; height: 80%;"></a>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h5>Top 108 sách được bạn đọc quan tâm tìm mua nhiều nhất trên diễn đàn và mạng xã hội
                                </h5>
                            </a>
                            <p>108 tựa sách hay tiêu biểu, giảm tới 30%. Tất cả đều là sách có bản quyền, bản in đẹp,
                                cung
                                cấp trực tiếp từ gần 70 Nhà xuất bản, đơn vị phát hành, trân trọng giới thiệu cùng quý
                                bạn đọc!
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-3 my-4">
                <h4 class="text-uppercase border-bottom" style="color: rgb(92, 92, 54);">
                    Tin tức liên quan
                </h4>
                <a href="#!">
                    <h6 class="border-bottom py-2">Những cuốn sách hay nhất định phải đọc một lần trong đời</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">18 tựa sách hay giảm 15-50% được tìm mua nhiều nhất.</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Top 108 sách được bạn đọc quan tâm tìm mua nhiều nhất trên
                        diễn đàn và mạng xã hội</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Thư viện sách cộng đồng hơn 6000 đầu sách hay và mới tại The
                        Wiselands Coffee...</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Sách xưa "Tam tự kinh"</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Những tựa sách kể về những “người lính” và giai đoạn vàng son
                        của dân tộc.</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Edison và hơn 10.000 lần thất bại để mang lại ánh sáng cho
                        nhân loại</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">19 tác phẩm lịch sử thế giới và việt nam không thể bỏ lỡ!</h6>
                </a>
                <a href="#!">
                    <h6 class="border-bottom py-2">Những tác Phẩm Văn Học Việt Nam kinh điển nên đọc.</h6>
                </a>
            </div>

        </div>
    </div>

    <!--Footer-->
    <footer>
      @include('layout.footer')
    </footer>


</body>

</html>
