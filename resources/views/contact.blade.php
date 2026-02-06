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
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                        <path fill="#fd5523"
                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148">
                        </path>
                        <path fill="#fd5523"
                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187">
                        </path>
                        <path fill="#fd5523"
                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142">
                        </path>
                    </svg>
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
                                <li><strong>Điện thoại:</strong> <a href="tel:8292393838">+66 58 256 978</a></li>
                                <li><strong>Email:</strong> <a
                                        href="mailto:transhubinfo@gmail.com">transhubinfo@gmail.com</a></li>
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
                                <li>75 15h Street, Office 47 Berlin, Đức</li>
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