<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    <link rel="stylesheet" href="/css/product_info.css">
    <title>Liên hệ</title>
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

            <div class="col">
                <div class="container my-4">
                    <a href="{{ url('/') }}">Trang chủ</a>
                    <span> > </span>
                    <span><ins>Liên hệ</ins></span>

                    <div class="container">
                        <div id="wraper">
                            <div class="container">
                                <div class="row justify-content-around">
                                    <form action="" class="col-md-6 p-3 my-3 border bg-light">
                                        <h1 class="text-center text-uppercase h3 py-3 text-danger">Liên hệ</h1>
                                        <div class="form-group my-2">
                                            <label for="fullname">Họ tên</label>
                                            <span><input type="text" name="fullname" id="fullname"
                                                    class="form-control" required></span>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="address">Địa chỉ</label>
                                            <input type="text" name="address" id="address" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="phone">Số điện thoại</label>
                                            <input type="tel" name="phone" id="phone" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="comment">Nội dung</label>
                                            <textarea name="text" id="comment" cols="53" rows="5"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary my-2"
                                            style="float: right;">Gửi</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
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
