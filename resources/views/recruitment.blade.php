@extends('layout')
@section('title', 'Liên hệ')

@section('css')

@endsection()

@section('body')

    <section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-wrap text-center">
                        <h1 class="display-2 text-info">Tuyển dụng<br>Viện Dầu khí Việt Nam</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('customer.index') }}">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tuyển dụng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0 0,100% 0,100% 100%,0 100%);"
            class="jarallax-container">
            <img src="{{ asset('images/promo.jpg') }}" alt="" class="jarallax-img"
                style="object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden;">
        </div>
    </section>

    <section class="py-5 bg-shade">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title fadeInUp">CƠ HỘI NGHỀ NGHIỆP</span>
                <h2 class="sec-title mb-2">Gia nhập đội ngũ Viện Dầu khí Việt Nam</h2>
                <p class="mt-2 mb-0 text-secondary">Chúng tôi luôn tìm kiếm những cá nhân năng động, sáng tạo và nhiệt huyết
                    để cùng phát triển và đóng góp vào thành công của tổ chức.</p>
            </div>
            <div class="row g-4">
                <!-- Vị trí tuyển dụng 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold mb-3">Kỹ sư Địa chất Dầu khí</h5>
                            <ul class="text-start small ps-2 mb-3">
                                <li>Phân tích và đánh giá tài nguyên dầu khí.</li>
                                <li>Thực hiện các dự án nghiên cứu địa chất mỏ.</li>
                                <li>Yêu cầu: Tốt nghiệp ĐH chuyên ngành, ưu tiên có kinh nghiệm.</li>
                            </ul>
                            <a href="#apply" class="btn btn-primary">Ứng tuyển</a>
                        </div>
                    </div>
                </div>
                <!-- Vị trí tuyển dụng 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold mb-3">Chuyên viên Phân tích Hóa học</h5>
                            <ul class="text-start small ps-2 mb-3">
                                <li>Phân tích mẫu hóa học trong lĩnh vực dầu khí.</li>
                                <li>Thực hiện nghiên cứu phát triển quy trình phân tích.</li>
                                <li>Yêu cầu: Tốt nghiệp ĐH ngành Hóa học, có kiến thức phòng thí nghiệm.</li>
                            </ul>
                            <a href="#apply" class="btn btn-primary">Ứng tuyển</a>
                        </div>
                    </div>
                </div>
                <!-- Vị trí tuyển dụng 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title text-primary fw-bold mb-3">Kỹ sư Công nghệ thông tin</h5>
                            <ul class="text-start small ps-2 mb-3">
                                <li>Phát triển phần mềm quản lý dữ liệu dầu khí.</li>
                                <li>Quản trị hệ thống, hỗ trợ kỹ thuật IT.</li>
                                <li>Yêu cầu: Tốt nghiệp ngành IT, ưu tiên kinh nghiệm về data.</li>
                            </ul>
                            <a href="#apply" class="btn btn-primary">Ứng tuyển</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form ứng tuyển -->
    <section id="apply" class="py-5">
        <div class="container">
            <div class="sec-intro mx-auto text-center mb-5">
                <span class="sub-title fadeInUp">ỨNG TUYỂN NGAY</span>
                <h2 class="sec-title display-5 fw-bold mb-2">Gửi CV cho chúng tôi</h2>
                <p class="mt-2 mb-0 text-secondary">Điền thông tin và tải lên CV, chúng tôi sẽ liên hệ với bạn sớm nhất có
                    thể.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" id="name" required
                                placeholder="Nhập họ và tên">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email liên hệ</label>
                            <input type="email" name="email" class="form-control" id="email" required
                                placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Vị trí ứng tuyển</label>
                            <select name="position" id="position" class="form-control" required>
                                <option value="">-- Chọn vị trí --</option>
                                <option value="geo_engineer">Kỹ sư Địa chất Dầu khí</option>
                                <option value="chemical_analyst">Chuyên viên Phân tích Hóa học</option>
                                <option value="it_engineer">Kỹ sư Công nghệ thông tin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cv" class="form-label">Tải lên CV</label>
                            <input type="file" name="cv" class="form-control" id="cv" accept=".pdf,.doc,.docx" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-info px-5">Gửi hồ sơ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection()

@section('js')

@endsection()