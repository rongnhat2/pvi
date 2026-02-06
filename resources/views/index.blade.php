@extends('layout')
@section('title', 'Account')

@section('css')

@endsection()


@section('body')

   <!-- Header End -->
   <section class="slider-section position-relative">
      <img src="images/tranck-v.png" alt="Truck delivery illustration" class="anim-img moveXS bottom-0">

      <div class="container-fluid p-0">
         <div class="row g-0 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
               <div class="hero-content position-relative">
                  <div class="trust-badge">
                     <div class="icon rounded-circle">
                        <img src="images/logo.png" alt="Bookmark icon" style="width: 100%;">
                     </div>
                  </div>
                  <p class="sub-title h4">Vietnam Petroleum Institute</p>
                  <h1 class="text-info fw-bold">Viện Dầu khí <br> Việt Nam</h1>

                  <div class="slide-meta">
                     <p class="h6 text-info">Viện Dầu khí Việt Nam là đơn vị khoa học–công nghệ nòng cốt, tiên
                        phong đổi mới và giải pháp chiến lược, phát triển bền vững.</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
               <div class="hero-slider-wrap overflow-hidden position-relative">
                  <div class="hero-slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="slide-img" style="min-height: 100vh;">
                              <img src="images/slide-new-1.png" alt="Logistics warehouse management"
                                 style="height: 100vh; width: auto;">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="slide-img">
                              <img src="images/slide-new-2.png" alt="Global shipping transport"
                                 style="height: 100vh; width: auto;">
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>

            <div class="col-12">
               <div class="custom-nav">
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Slider Section End -->

   <!-- About Section Start -->
   <section class="about-section position-relative sec-padding">
      <img src="images/about-sh.png" alt="shape" class="anim-img moveY">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="about-media position-relative">
                  <div class="about-m1">
                     <img class="round img-fluid" src="images/slide-new-1.png" alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="about-content">
                  <span class="sub-title fadeInUp">
                     Về chúng tôi</span>
                  <h2 class="sec-title">Viện Dầu khí Việt Nam khoa học công nghệ</h2>
                  <p>Thành lập năm 1978, Viện tiên phong nghiên cứu, tư vấn chiến lược, phát triển và chuyển giao công
                     nghệ, đóng góp an ninh năng lượng, chuyển dịch năng lượng.</p>

                  <ul class="check">
                     <li>Đơn vị khoa học–công nghệ nòng cốt của Tập đoàn Công nghiệp – Năng lượng Quốc gia Việt Nam</li>
                     <li>Trung tâm nghiên cứu, tư vấn, đào tạo và đổi mới công nghệ toàn chuỗi dầu khí – năng lượng</li>
                  </ul>
                  <div class="d-sm-flex align-items-center about-footer gap-5 mt-5">
                     <a href="#" class="btn btn-primary">Xem thêm <i class="fa fa-arrow-right"></i><span></span> </a>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About Section End -->


   <!-- Process Section Start -->
   <section class="process-sec sec-padding position-relative overflow-hidden">
      <div class="container">
         <div class="sec-intro mx-auto text-center">
            <span class="sub-title fadeInUp"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none"
                  viewBox="0 0 30 18">
                  <path fill="#009c48"
                     d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                  <path fill="#009c48"
                     d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                  <path fill="#009c48"
                     d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
               </svg>Quy trình hoạt động</span>
            <h2 class="sec-title">Giải pháp khoa học – công nghệ phục vụ ngành công nghiệp năng lượng</h2>
         </div>
         <div class="process-wrapper d-flex justify-content-between flex-wrap mt-5">
            <div class="process-card text-center fadeInUp" data-delay=".2">
               <span class="count mx-auto icon-lg bg-shade rounded-circle">01</span>
               <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center"
                  style="overflow: hidden;">
                  <img src="images/slide-new-1.png" alt="request pickup" style="width: 100%; object-fit: contain;">
               </div>
               <h3 class="display-4">Tiếp nhận nhu cầu nghiên cứu</h3>
               <p>Tiếp nhận đề bài nghiên cứu, tư vấn khoa học – công nghệ từ Tập đoàn và các đơn vị đối tác.</p>
            </div>

            <div class="process-card text-center fadeInUp" data-delay=".4">
               <span class="count mx-auto icon-lg bg-shade rounded-circle">02</span>
               <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center"
                  style="overflow: hidden;">
                  <img src="images/slide-new-1.png" alt="request pickup" style="width: 100%;">
               </div>
               <h3 class="display-4">Phân tích và triển khai nghiên cứu</h3>
               <p>Phân tích dữ liệu, đánh giá kỹ thuật, phát triển giải pháp khoa học – công nghệ phù hợp thực tiễn.</p>
            </div>

            <div class="process-card text-center fadeInUp" data-delay=".6">
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
   <!-- Process Section End -->

   <!-- Choose Section Start -->
   <section class="choose-sec bg-shade sec-padding position-relative">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="choose-media position-relative">
                  <img class="img-fluid" src="images/choose-img.png" alt="Choose Image">
                  <img class="abs-img img-fluid" src="images/choose-img2.png" alt="Choose Image 2">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="choose-content">
                  <span class="sub-title fadeInUp"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="18"
                        fill="none" viewBox="0 0 30 18">
                        <path fill="#009c48"
                           d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                        <path fill="#009c48"
                           d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                        <path fill="#009c48"
                           d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                     </svg>Vì sao chọn chúng tôi</span>
                  <h2 class="sec-title">Lý do Viện Dầu khí Việt Nam là đơn vị khoa học – công nghệ hàng đầu ngành năng
                     lượng</h2>
                  <p>Viện Dầu khí Việt Nam sở hữu hơn 45 năm kinh nghiệm nghiên cứu, đội ngũ chuyên gia đầu ngành và năng
                     lực triển khai đồng bộ trên toàn chuỗi giá trị dầu khí – năng lượng, đáp ứng yêu cầu phát triển bền
                     vững và chuyển dịch năng lượng quốc gia.</p>
                  <div class="success-stat">
                     <div class="progress">
                        <div class="meta">Scientific Research Capacity</div>
                        <div class="progress-bar" data-progress="55%" style="width: 65%;">
                           <span>85%</span>
                        </div>
                     </div>
                     <div class="progress">
                        <div class="meta">Technology Application & Transfer</div>
                        <div class="progress-bar" data-progress="87%" style="width: 87%;">
                           <span>87%</span>
                        </div>
                     </div>
                  </div>
                  <div class="d-sm-flex justify-content-between mb-5">
                     <div class="choose-circle d-flex gap-2 align-items-center">
                        <div class="progress-circle-item">
                           <div class="outer">
                              <div class="inner">
                                 <div class="number" data-target="95">0%</div>
                              </div>
                           </div>
                           <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px" height="80px">
                              <circle cx="40" cy="40" r="30" class="progress-stroke" />
                           </svg>
                        </div>
                        <h3 class="display-4 m-0">Strategic Consulting Effectiveness</h3>
                     </div>

                     <div class="choose-circle d-flex gap-2 align-items-center">
                        <div class="progress-circle-item">
                           <div class="outer">
                              <div class="inner">
                                 <div class="number" data-target="90">0%</div>
                              </div>
                           </div>
                           <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px" height="80px">
                              <circle cx="40" cy="40" r="30" class="progress-stroke" />
                           </svg>
                        </div>
                        <h3 class="display-4 m-0">Project Implementation Success Rate</h3>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Choose Section End -->


   <!-- Blog Section Start -->
   <section class="blog-sec sec-padding">
      <div class="container">
         <div class="sec-intro mx-auto text-center">
            <h2 class="sec-title">TIN TỨC & NHẬN ĐỊNH</h2>
         </div>
         <div class="row justify-content-md-center">
            <div class="col-xl-4 col-md-6">
               <div class="blog-entry fadeInUp" data-delay=".2">
                  <div class="entry-thumb">
                     <a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp"><img
                           src="images/blog1.jpg" alt="Blog"></a>
                  </div>
                  <div class="entry-meta">
                     <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                     <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                  </div>
                  <h3 class="display-4"><a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp">VPI
                        và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp</a></h3>

               </div>
            </div><!--  Blog Entry End -->
            <div class="col-xl-4 col-md-6">
               <div class="blog-entry fadeInUp" data-delay=".4">
                  <div class="entry-thumb">
                     <a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp"><img
                           src="images/blog2.jpg" alt="Blog"></a>
                  </div>
                  <div class="entry-meta">
                     <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                     <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                  </div>
                  <h3 class="display-4"><a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp">VPI
                        và OC Global hợp tác nghiên cứu phát triển cảng hậu cần phục vụ điện gió ngoài khơi tại Việt
                        Nam</a></h3>

               </div>
            </div><!--  Blog Entry End -->
            <div class="col-xl-4 col-md-6">
               <div class="blog-entry fadeInUp" data-delay=".6">
                  <div class="entry-thumb">
                     <a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp"><img
                           src="images/blog3.jpg" alt="Blog"></a>
                  </div>
                  <div class="entry-meta">
                     <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                     <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                  </div>
                  <h3 class="display-4"><a href="VPI và Topsoe tổ chức Hội thảo về các công nghệ phát thải carbon thấp">VPI
                        giữ vai trò hạt nhân nghiên cứu khoa học, đổi mới sáng tạo của Petrovietnam</a></h3>

               </div>
            </div><!--  Blog Entry End -->
         </div>
      </div>
   </section>
   <!-- Blog Section End -->


@endsection()


@section('js')


@endsection()