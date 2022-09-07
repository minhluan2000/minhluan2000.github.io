<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/general.css">
    <title>Giỏ hàng</title>
</head>

<body>
    <!-- Header -->
    <header>
        @include('layout.header')
    </header>

    <main>
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
                            <input class="form-check-input" type="checkbox" id="check1" name="san-pham"
                                value="san-pham" checked>
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
                            <input class="form-check-input" type="checkbox" id="check2" name="nxb" value="nxb"
                                checked>
                            <label class="form-check-label">NXB Kim Đồng (1 sản phẩm)</label>
                        </div>

                        <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" id="check3" name="sach" value="sach"
                                checked>
                            <label class="form-check-label">
                                <div class="row">
                                    <div class="col-8">
                                        <h5>Bách khoa toàn thư thế hệ mới</h5>
                                        <p>Tác giả: Nhiều tác giả</p>
                                        <p>NXB: Kim Đồng</p>
                                        <a href="#!" class="remove">Xoá</a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#!"><img
                                                src="/image/SachThieuNhi/bach-khoa-toan-thu-the-he-moi.jpeg"
                                                style="width:300%" alt=""></a>
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


                            <p><strike class="old-price">360.000</strike><span> đ</span> | <span style="color: red;">
                                    -30%</span></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check4" name="nxb"
                                    value="nxb" checked disabled>
                                <label class="form-check-label">Giảm giá chung: 30%. Tương đương 108.000đ</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 text-center py-5">
                        <input class="quantity" type="number" min="1" max="50" step="1"
                            style="font-size: 20px;" value="1">
                    </div>

                    <div class="col-sm-2 text-center py-5">
                        <h6 class="total-price">252.000 đ</h6>
                        <p><strike class="old-price-total">360.000 đ</strike> | <span style="color: red;"> -30%</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="container-fluid">
                <div class="row py-2">
                    <div class="col-sm-4">
                        <div class="form-check py-3">
                            <input class="form-check-input" type="checkbox" id="check4" name="nxb" value="nxb"
                                checked>
                            <label class="form-check-label">Saigon Books (1 sản phẩm)</label>
                        </div>

                        <div class="form-check py-2">
                            <input class="form-check-input" type="checkbox" id="check5" name="sach" value="sach"
                                checked>
                            <label class="form-check-label">
                                <div class="row">
                                    <div class="col-8">
                                        <h5>Nghĩ thông suốt, đời nhẹ như mây</h5>
                                        <p>Tác giả: Lysa TerKeurst</p>
                                        <p>NXB: Thế Giới</p>
                                        <a href="#!" class="remove">Xoá</a>
                                    </div>
                                    <div class="col-2">
                                        <a href="#!"><img src="/image/nghi-trong-suot-nhe-nhu-may.jpeg"
                                                style="width:300%" alt=""></a>
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
                            <p><strike class="old-price2">150.000</strike> <span> đ</span> | <span
                                    style="color: red;"> -40%</span></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check4" name="nxb"
                                    value="nxb" checked disabled>
                                <label class="form-check-label">Giảm giá chung: 40%. Tương đương 60.000đ</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-2 py-3">
                        <div class="text-center py-5">
                            <input class="quantity2" type="number" min="1" max="50" step="1"
                                style="font-size: 20px;" value="1">
                        </div>
                    </div>

                    <div class="col-sm-2 py-3">
                        <div class="text-center py-5">
                            <h6 class="total-price2">90.000 đ</h6>
                            <p><strike class="old-price-total2">150.000 đ</strike> | <span style="color: red;">
                                    -40%</span></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-check py-3">
                            <input class="form-check-input" type="checkbox" id="check4" name="nxb"
                                value="nxb" checked>
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
    </main>

    <script>
        $('.quantity').on('input', function() {
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

        $('.quantity2').on('input', function() {
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
    <footer>
      @include('layout.footer')
    </footer>


</body>

</html>
