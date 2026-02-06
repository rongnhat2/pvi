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
                    <div class="promo-wrap text-center">
                        <h1 class="display-2 text-primary">Tài liệu<br>Viện Dầu khí Việt Nam</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('customer.index') }}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tài liệu</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0 0,100% 0,100% 100%,0 100%);"
            class="jarallax-container">
            <img src="{{ asset('images/promo.jpg') }}" alt="" class="jarallax-img"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1903px; height: 454.12px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden;">
        </div>
    </section>

    <section class="py-5 bg-shade">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title text-primary">KHO TÀI LIỆU</span>
                <h2 class="sec-title mb-2">Tài liệu phục vụ nghiên cứu và đào tạo</h2>
                <p class="mt-2 mb-0 text-secondary">
                    Các tài liệu dưới đây được phân chia thành tài liệu <span class="fw-bold text-primary">Public</span>
                    (Công khai) và <span class="fw-bold text-primary">Private</span> (Riêng tư). Tài liệu riêng tư yêu cầu
                    đăng nhập để xem.
                </p>
            </div>
            <div class="row g-4">
                <!-- Tài liệu Public -->
                <div class="col-lg-6">
                    <div class="card border-primary h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="m-0"><i class="bi bi-book"></i> Tài liệu Public</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-file-earmark-text text-primary"></i>
                                        <span>Báo cáo thường niên 2023</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Xem</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-file-earmark-pdf text-primary"></i>
                                        <span>Giới thiệu về Viện Dầu khí VN</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Xem</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-file-earmark-word text-primary"></i>
                                        <span>Danh mục các đề tài nghiên cứu</span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Xem</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Tài liệu Private -->
                <div class="col-lg-6">
                    <div class="card border-primary h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="m-0"><i class="bi bi-lock"></i> Tài liệu Private <span
                                    class="badge bg-light text-primary fw-normal ms-2" style="font-size: 0.85em;">Yêu cầu
                                    đăng nhập</span></h5>
                        </div>
                        <div class="card-body">
                            @if(Auth::check())
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="bi bi-file-earmark-lock text-primary"></i>
                                            <span>Báo cáo phân tích chuyên sâu</span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Xem</a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="bi bi-file-earmark-lock2 text-primary"></i>
                                            <span>Tài liệu hướng dẫn nội bộ</span>
                                        </div>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Xem</a>
                                    </li>
                                </ul>
                            @else
                                <div class="text-center py-4">
                                    <i class="bi bi-exclamation-circle text-primary display-5 mb-3"></i>
                                    <h5 class="text-primary mb-3">Bạn cần <a href="{{ route('login') }}"
                                            class="text-primary text-decoration-underline">đăng nhập</a> để xem tài liệu riêng
                                        tư</h5>
                                    <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection()

@section('js')

@endsection()