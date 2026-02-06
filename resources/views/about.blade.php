@extends('layout')
@section('title', 'Account')

@section('css')

@endsection()


@section('body')
    <section class="promo-sec bg-cover jarallax" data-jarallax="" data-speed=".4">

        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap">
                        <h1 class="display-2 text-info">Về chúng tôi</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
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
    <section class="process-sec sec-padding position-relative overflow-hidden">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title fadeInUp" style="transform: translate(0px); opacity: 1;">
                    Quy trình hoạt động</span>
                <h2 class="sec-title">
                    Giải pháp khoa học – công nghệ phục vụ ngành công nghiệp năng lượng
                </h2>
            </div>
            <div class="process-wrapper d-flex justify-content-between flex-wrap mt-5">
                <div class="process-card text-center fadeInUp" data-delay=".2"
                    style="transform: translate(0px); opacity: 1;">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">01</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center"
                        style="overflow: hidden;">
                        <img src="images/slide-new-1.png" alt="request pickup" style="width: 100%; object-fit: contain;">
                    </div>
                    <h3 class="display-4">Tiếp nhận nhu cầu nghiên cứu</h3>
                    <p>Tiếp nhận đề bài nghiên cứu, tư vấn khoa học – công nghệ từ Tập đoàn và các đơn vị đối tác.</p>
                </div>

                <div class="process-card text-center fadeInUp" data-delay=".4"
                    style="transform: translate(0px); opacity: 1;">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">02</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center"
                        style="overflow: hidden;">
                        <img src="images/slide-new-1.png" alt="request pickup" style="width: 100%;">
                    </div>
                    <h3 class="display-4">Phân tích và triển khai nghiên cứu</h3>
                    <p>Phân tích dữ liệu, đánh giá kỹ thuật, phát triển giải pháp khoa học – công nghệ phù hợp thực tiễn.
                    </p>
                </div>

                <div class="process-card text-center fadeInUp" data-delay=".6"
                    style="transform: translate(0px); opacity: 1;">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">03</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center"
                        style="overflow: hidden;">
                        <img src="images/slide-new-1.png" alt="request pickup" style="width: 100%;">
                    </div>
                    <h3 class="display-4">Ứng dụng và chuyển giao công nghệ</h3>
                    <p>ng dụng kết quả nghiên cứu, chuyển giao công nghệ và hỗ trợ triển khai vào sản xuất – kinh doanh.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="about-sec3 sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-7 mx-lg-auto">
                    <div class="about-media3 position-relative">
                        <div class="feat-img position-relative">
                            <img src="images/about-ft.jpg" class="img-fluid round" alt="about">
                            <div class="experien-stat">
                                <p class="text-info m-0">
                                    <span class="purecounter" data-purecounter-end="45"
                                        data-purecounter-duration="0">45</span>+ Năm
                                    Phát Triển
                                </p>
                            </div>
                        </div>
                        <div class="d-flex ab-sm-ft align-items-center gap-4">
                            <img class="round img-fluid" src="images/about-ft2.png" alt="about">
                            <img class="img-fluid" src="images/about-ft3.png" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-content3">
                        <span class="sub-title fadeInUp" style="transform: translate(0px); opacity: 1;">
                            Thông tin giới thiệu
                        </span>
                        <h2 class="sec-title">
                            Viện Dầu khí Việt Nam
                        </h2>
                        <p>
                            Thành lập năm 1978, Viện Dầu khí Việt Nam (VPI) là tổ chức khoa học – công nghệ hàng đầu của
                            ngành dầu khí, đồng hành cùng đất nước hơn 45 năm nghiên cứu, đổi mới và hội nhập quốc tế.
                        </p>
                        <p>
                            VPI sở hữu cơ cấu tổ chức chuyên nghiệp, đội ngũ chuyên gia trình độ cao, năng lực nghiên cứu và
                            cung cấp dịch vụ kỹ thuật trên toàn chuỗi giá trị công nghiệp – năng lượng, nhiều lĩnh vực tiệm
                            cận trình độ khu vực.
                        </p>
                        <p>
                            Trong giai đoạn mới, Viện đẩy mạnh nghiên cứu, chuyển giao công nghệ, hợp tác quốc tế và phát
                            triển nguồn nhân lực, đóng vai trò nòng cốt cho chuyển dịch năng lượng và phát triển bền vững
                            ngành dầu khí.
                        </p>

                        <h4 class="mt-4">Sứ mệnh và Giá trị cốt lõi</h4>

                        <ul class="nav nav-tabs" id="aboutTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                    aria-selected="true">Sứ mệnh</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="core-tab" data-bs-toggle="tab" data-bs-target="#core"
                                    type="button" role="tab" aria-controls="core" aria-selected="false" tabindex="-1">Giá
                                    trị cốt lõi</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="aboutTabContent">
                            <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                aria-labelledby="mission-tab">
                                <ul class="mt-3">
                                    <li>
                                        Đảm bảo giải quyết tất cả các vấn đề nghiên cứu khoa học và triển khai công nghệ dầu
                                        khí;
                                    </li>
                                    <li>
                                        Tư vấn có đầy đủ luận cứ khoa học và thực sự là bộ não tham mưu cho mọi hoạt động
                                        sản xuất kinh doanh cốt lõi của Tập đoàn Công nghiệp - Năng lượng Quốc gia Việt Nam;
                                    </li>
                                    <li>
                                        Đào tạo và cung cấp chuyên gia đầu ngành cho Tập đoàn Công nghiệp - Năng lượng Quốc
                                        gia Việt Nam;
                                    </li>
                                    <li>
                                        Mang lại lợi ích lâu dài cao nhất cho người lao động, Tập đoàn Công nghiệp - Năng
                                        lượng Quốc Gia Việt Nam và đối tác.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="core" role="tabpanel" aria-labelledby="core-tab">
                                <ul class="mt-3">
                                    <li>
                                        <strong>Đạo đức:</strong> Trung thực, Khách quan
                                    </li>
                                    <li>
                                        <strong>Chuyên nghiệp:</strong> Thành thạo, Năng động và Hiệu quả
                                    </li>
                                    <li>
                                        <strong>Trí tuệ:</strong> Sáng tạo, Khoa học
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center about-cta gap-5 mt-5">
                            <a href="about.html" class="btn btn-primary">Tìm hiểu thêm <i class="fa fa-arrow-right"></i>
                                <span style="top: 60.05px; left: 113.167px;"></span>
                            </a>
                            <div class="quick-call d-flex align-items-center">
                                <span class="bg-dark icon-lg rounded-circle text-info"><i
                                        class="fa-solid fa-phone-volume"></i></span>
                                <div class="conn-txt ms-3">
                                    <p class="m-0">Liên hệ:</p>
                                    <a class="h6 text-primary" href="tel:148359505285">148 359 505 285</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()


@section('js')


@endsection()