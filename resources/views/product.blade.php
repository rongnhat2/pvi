@extends('layout')
@section('title', 'Account')

@section('css')

@endsection()


@section('body')


    <!-- Promo Section Start -->
    <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
        <img src="images/promo.jpg" alt="" class="jarallax-img">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap">
                        <h1 class="display-2 text-info">Sản phẩm</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Start -->
    <div class="services-sec bg-shade sec-padding">
        <div class="container">

            <h3>Sản phẩm Số</h3>
            <br>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/d386a38fe5114026b175a64710051e57/original/Tinh-nang-phat-hien-gieng-co-luu-luong-dau-bat-thuong.png'); background-size: cover; height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Xây dựng giải pháp xác định giếng có chế độ làm việc bất thường
                                khu vực mỏ Bạch Hổ</a></h3>
                        <p>Công cụ có khả năng phát hiện các giếng có chế độ làm việc bất thường tự động giúp nâng cao hiệu
                            suất làm việc cũng như độ chính xác trong công tác phân tích… </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/79b155a0f0c74c2ba68e37481310190c/original/Giao-dien-thong-tin-chi-tiet.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Phần mềm cơ sở dữ liệu các quá trình công nghệ hoá học
                                (YEP-Yearbook)</a></h3>
                        <p>Phần mềm cơ sở dữ liệu các quá trình công nghệ hóa học” là một công cụ mạnh mẽ dành cho các
                            chuyên gia, nhà quản lý và các đơn vị hoạt động trong lĩnh vực dầu khí… </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/67f7524af2ab40db8b69e2fff94f1665/original/Bio2.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Báo cáo số Sinh địa tầng phân tập và môi trường trầm tích lô
                                NCS-01</a></h3>
                        <p>Sản phẩm cung cấp cho người dùng một kho dữ liệu đầy đủ và được cập nhật về kết quả phân tích
                            sinh địa tầng của các giếng khoan ở thềm lục địa Việt Nam. Dữ liệu bao gồm… </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/b7c00ab2f7de4b12b52ca8057280492f/original/Picture2.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Báo cáo số phân tích mẫu lõi đặc biệt cho các giếng khoan thuộc bể
                                Cửu Long kết hợp chatbot Q&A</a></h3>
                        <p>Báo cáo này là kết quả của việc phân tích mẫu lõi đặc biệt từ các giếng khoan trong bể Cửu Long.
                            Các kết quả phân tích tập trung vào… </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/f1f62ca224424860b665526f7ccdeaab/original/image-4.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Báo cáo số Cơ hội phát triển CCUS tại Việt Nam (Carbon capture and
                                storage opportunities in Vietnam)</a></h3>
                        <p>Báo cáo số Cơ hội phát triển CCUS tại Việt Nam là ứng dụng cung cấp cái nhìn tổng quan về cơ hội
                            phát triển các dự án thu giữ, lưu trữ và…
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:2000/https://cdn.gamma.app/oc5mvaibpa4g1a5/884f6bf8b8a24d4094353a6984af2d61/original/Offshore-wind.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Clean Hydrogen</a></h3>
                        <p>Công cụ trực quan hóa được thiết kế để cung cấp các thông tin quan trọng về thị trường, sản phẩm
                            và công nghệ trong lĩnh vực năng lượng sạch. Với mục tiêu cung cấp thông tin đa chiều sản xuất
                            hydro xanh… </p>
                    </div>
                </div>
            </div>
            <br>
            <h3>Sản phẩm Thương mại hóa</h3>
            <br>
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/0e543e42bca943f29aec1e33c38eef10/original/1-1621321505.png'); background-size: cover; height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Anode hy sinh
                                hợp kim nhôm</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/e5c111512eea416c942ec1e91e68ca72/original/1-1621321198.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Vật liệu Nano Graphene
                                (TIOP-GNM 02)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/6348524e919e4cd0930f8004f20c4591/original/1-1621321138.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Vật liệu Cacbon nano tube
                                (TIOP - CNT35)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/8c4a1c0731ab49aeaecc1d188139ac13/original/1-1621321296.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Dầu nhiệt phân sinh khối
                                (VPI BIO-OIL 02)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/e5e33238b6544aa8ae01ac5ad46a92d2/original/1-1621321350.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Dầu nhờn động cơ
                                (TIOP - EO2050G)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/1decb3b054544fec9aa5f0a764fdfdc9/original/1-1621321401.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Gạch không nung sử dụng
                                xúc tác FCC thải</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/bb17ba6b04cc40aa83e1fec5a4879eee/original/1-1621321554.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Hóa phẩm khử dầu
                                (VPI-HUD)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/8ab995a8d256434cbb29089c31474daa/original/11.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Chất phân tán dầu
                                (CPT-CPSE)</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card2 round bg-info fadeInUp" data-delay=".2">
                        <div class="serv-thumb"
                            style="background-image: url('https://imgproxy.gamma.app/resize/quality:80/resizing_type:fit/width:1000/height:1000/https://cdn.gamma.app/oc5mvaibpa4g1a5/fdb7778c80c0470881945c4c8009bf16/original/10.png'); background-size: cover;  height: 150px">
                        </div>
                        <h3 class="display-4"><a href="#">Bản tin thị trường
                                năng lượng và dầu khí​</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

@endsection()


@section('js')


@endsection()