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
                        <h1 class="display-2 text-info">Dịch vụ của<br>Viện Dầu khí Việt Nam</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('customer.index') }}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Dịch vụ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0 0,100% 0,100% 100%,0 100%);"
            id="jarallax-container-0" class="jarallax-container">
            <img src="images/promo.jpg" alt="" class="jarallax-img"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1903px; height: 454.12px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: -7.56px; transform: translate3d(0px, 7.56px, 0px);">
        </div>
    </section>

    <section class="services-visual-section bg-shade py-5">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title fadeInUp">PHÂN LOẠI DỊCH VỤ</span>
                <h2 class="sec-title mb-2">Các Nhóm Năng Lực Dịch Vụ</h2>
                <p class="mt-2 mb-0 text-secondary">Khám phá các giải pháp nổi bật của Viện Dầu khí Việt Nam</p>
            </div>
            <div class="row g-4">

                <!-- Tìm kiếm - Thăm dò - Khai thác -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="Tìm kiếm - Thăm dò - Khai thác">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Tìm kiếm - Thăm dò - Khai thác</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Địa chất mỏ:</b> Tổng hợp tài liệu, xây dựng mô hình địa chất mỏ.</li>
                                <li><b>Công nghệ mỏ:</b> Đánh giá đặc tính vỉa, tối ưu mô hình khai thác.</li>
                                <li><b>Khoan khai thác:</b> Nghiên cứu giải pháp khoan, thiết kế thiết bị khai thác.</li>
                                <li><b>Công nghệ hóa - khai thác:</b> Nghiên cứu ăn mòn, hóa phẩm khai thác.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Phân tích mẫu -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid" alt="Phân tích mẫu">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Phân tích mẫu</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Địa hóa:</b> Phân tích hóa chuyên sâu các mẫu dầu khí.</li>
                                <li><b>Thạch học:</b> Phân tích lát mỏng, XRD, SEM, mô tả lõi trầm tích.</li>
                                <li><b>Địa tầng, cổ sinh:</b> Phân loại vật chất hữu cơ, tuổi địa tầng.</li>
                                <li><b>Mẫu lõi, lưu thể:</b> Phân tích cơ học đá, đánh giá chất lượng vỉa.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Hóa - Chế biến -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="Hóa - Chế biến">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Hóa - Chế biến</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Khoa học &amp; tư vấn công nghệ:</b> Nghiên cứu lựa chọn công nghệ lọc hóa dầu, xử lý
                                    khí.</li>
                                <li><b>Xúc tác:</b> Phát triển/đánh giá các loại xúc tác chế biến dầu khí.</li>
                                <li><b>Nhiên liệu sinh học:</b> Sản xuất, tối ưu hóa, phát triển tiêu chuẩn kỹ thuật NLSH.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- An toàn - Sức khỏe - Môi trường -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="An toàn - Sức khỏe - Môi trường">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">An toàn - Sức khỏe - Môi trường</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>An toàn:</b> Tư vấn, biên soạn quy chuẩn, dịch vụ HAZID, HAZOP.</li>
                                <li><b>Môi trường:</b> Khảo sát, báo cáo EIA/ESIA, thiết kế xử lý chất thải.</li>
                                <li><b>Phần mềm:</b> Mô phỏng môi trường/an toàn.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Chống ăn mòn -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid" alt="Chống ăn mòn">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Chống ăn mòn</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Khảo sát ăn mòn:</b> Đánh giá ăn mòn, kiểm tra NDT.</li>
                                <li><b>Kiểm soát rủi ro:</b> Xếp hạng rủi ro, RBI, lập kế hoạch kiểm soát.</li>
                                <li><b>Cung cấp hệ thống kiểm soát:</b> Thiết kế, cung cấp thiết bị, đánh giá toàn vẹn thiết
                                    bị.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Kinh tế - Quản lý -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="Kinh tế - Quản lý">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Kinh tế - Quản lý</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Kinh tế dầu khí:</b> Xây dựng chiến lược phát triển ngành, thẩm định dự án.</li>
                                <li><b>Thị trường - năng lượng:</b> Nghiên cứu thị trường, phân tích &amp; dự báo giá.</li>
                                <li><b>Quản trị doanh nghiệp:</b> Tư vấn cơ cấu tổ chức, M&A, quản lý số liệu.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Công nghệ thông tin -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="Công nghệ thông tin">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Công nghệ thông tin</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Phần mềm:</b> Phát triển phần mềm dầu khí, WebGIS, quản lý dữ liệu.</li>
                                <li><b>Quản trị hệ thống:</b> Vận hành, bảo trì hệ thống, giải pháp lưu trữ.</li>
                                <li><b>Dịch vụ thêm:</b> Tư vấn CNTT, nghiên cứu/ứng dụng phân tích dữ liệu.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Đào tạo - Thông tin - Lưu trữ -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-visual card border-0 shadow h-100">
                        <img src="{{ asset('images/slide-new-1.png') }}" class="card-img-top img-fluid"
                            alt="Đào tạo - Thông tin - Lưu trữ">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold mb-3">Đào tạo - Thông tin - Lưu trữ</h5>
                            <ul class="service-list text-start small ps-2">
                                <li><b>Đào tạo chuyên ngành:</b> Địa chất, công nghệ mỏ, kỹ thuật hóa học, quản lý dầu khí.
                                </li>
                                <li><b>Lưu trữ &amp; số hóa:</b> Cơ sở dữ liệu, chuẩn hóa, phục chế, sao chép dữ liệu ngành
                                    dầu khí.</li>
                                <li><b>Bản đồ hoạt động:</b> Cập nhật hoạt động, dữ liệu ngành đáp ứng tiêu chuẩn ISO/IEC
                                    27001:2013.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Lưu ý: Đảm bảo các ảnh tương ứng (VD: service-exploration.jpg, service-analysis.jpg, ...) đã có trong thư mục public/images -->

@endsection()

@section('js')

@endsection()