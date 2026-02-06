@extends('layout')
@section('title', 'Liên hệ')

@section('css')

@endsection()

@section('body')

    <section class="promo-sec bg-cover jarallax" data-jarallax="" data-speed=".4">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap">
                        <h1 class="display-2 text-info">Liên hệ</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('customer.index') }}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);"
            id="jarallax-container-0" class="jarallax-container"><img src="images/promo.jpg" alt="" class="jarallax-img"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1903px; height: 454.12px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: -7.56px; transform: translate3d(0px, 7.56px, 0px);">
        </div>
    </section>
    <section class="contact-widgets bg-shade sec-padding">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title fadeInUp" style="transform: translate(0px); opacity: 1;">
                    LIÊN HỆ
                </span>
                <h2 class="sec-title">
                    Hỗ trợ bạn mọi lúc, mọi nơi
                </h2>
            </div>
            <div class="row pt-3">
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="images/icons/headphone.svg" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li><strong>Điện thoại:</strong> <a href="tel:0243. 1234567">0243. 1234567</a></li>
                                <li><strong>Email:</strong> <a href="mailto:info@vpi.pvn.vn">info@vpi.pvn.vn</a></li>
                            </ul>
                            <a href="#" class="ct-url">Gửi email cho chúng tôi <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta">LIÊN HỆ NGAY</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="images/icons/watch.svg" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li><strong>Thứ 2 - Thứ 7:</strong> 07:00 - 22:00</li>
                                <li><strong>Chủ nhật:</strong> Nghỉ</li>
                            </ul>
                            <a href="#" class="ct-url">ĐẶT LỊCH HẸN <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta">GIỜ LÀM VIỆC</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="images/icons/watch.svg" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li>Địa chỉ:</li>
                                <li>167 Trung Kính, Cầu Giấy, Hà Nội</li>
                            </ul>
                            <a href="#" class="ct-url">XEM BẢN ĐỒ <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta">ĐỊA CHỈ</h4>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 text-center">
                    <h6>Kết nối mạng xã hội:</h6>
                    <div class="social-share mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()

@section('js')

@endsection()