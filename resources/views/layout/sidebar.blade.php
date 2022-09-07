<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>
    <!-- Danh mục sản phẩm -->

    <div class="d-flex col-sm-3 py-3 bg-light">
        <div class="list-group list-group-flush ms-3">
            <div class="dropdown dropend">
                <a href="#" class="list-group-item list-group-item-action border border-0" data-bs-toggle="dropdown">
                    <img src="{{ asset('image/danh-muc/dm1.png') }}" alt="dm1">
                    Sách hay nổi bật </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sách bán chạy</a></li>
                    <li><a class="dropdown-item" href="#">Nhiều người giới thiệu</a></li>
                    <li><a class="dropdown-item" href="#">Tác phẩm đạt giải Nobel</a></li>
                </ul>

                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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

                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
                    <img src="/image/danh-muc/dm3.png" alt="dm3">
                    Sách giành cho giới trẻ </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Kĩ năng sống</a></li>
                    <li><a class="dropdown-item" href="#">Kĩ năng nghề nghiệp</a></li>
                    <li><a class="dropdown-item" href="#">Phát triển tâm thức</a></li>
                    <li><a class="dropdown-item" href="#">Phổ biến kiến thức</a></li>
                </ul>
                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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
                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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
                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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
                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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
                <a href="#" class="list-group-item list-group-item-action border border-0"
                    data-bs-toggle="dropdown">
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


</body>

</html>
