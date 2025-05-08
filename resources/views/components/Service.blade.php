<section id="service" class="bg-light py-5">
    <div class="container py-4">
        <h1 class="display-4 text-primary mb-5" data-aos="fade-left">خدماتنا</h1>
        
        <div class="row g-4">
            <!-- خدمة 1 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-left">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <img src="{{ asset('images/Monitor_Smartphone_1.svg') }}" alt="بناء و تصميم واجهات وتجربة المتسخدم" width="60" height="60" class="mb-3">
                        <h3 class="h5 text-primary mb-3">بناء و تصميم واجهات وتجربة المتسخدم</h3>
                        <button class="btn btn-outline-primary mt-auto" onclick="openModal()">ابدأ مشروعك</button>
                    </div>
                </div>
            </div>
            
            <!-- خدمة 2 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <img src="{{ asset('images/web_dev_1.svg') }}" alt="تطوير المواقع الالكترونية" width="60" height="60" class="mb-3">
                        <h3 class="h5 text-primary mb-3">تطوير المواقع الالكترونية</h3>
                        <button class="btn btn-outline-primary mt-auto" onclick="openModal()">ابدأ مشروعك</button>
                    </div>
                </div>
            </div>
            
            <!-- خدمة 3 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <img src="{{ asset('images/mobile_dev_1.svg') }}" alt="تطوير تطبيقات الهواتف الذكية" width="60" height="60" class="mb-3">
                        <h3 class="h5 text-primary mb-3">تطوير تطبيقات الهواتف الذكية</h3>
                        <button class="btn btn-outline-primary mt-auto" onclick="openModal()">ابدأ مشروعك</button>
                    </div>
                </div>
            </div>
            
            <!-- خدمة 4 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <img src="{{ asset('images/serverss_1.svg') }}" alt="ادارة الاستضافات و الخوادم" width="60" height="60" class="mb-3">
                        <h3 class="h5 text-primary mb-3">ادارة الاستضافات و الخوادم</h3>
                        <button class="btn btn-outline-primary mt-auto" onclick="openModal()">ابدأ مشروعك</button>
                    </div>
                </div>
            </div>
            
            <!-- خدمة 5 -->
            <div class="col-md-4 col-sm-6" data-aos="fade-left" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm rounded-3">
                    <div class="card-body d-flex flex-column align-items-center text-center p-4">
                        <img src="{{ asset('images/idas_1.svg') }}" alt="تقديم الاستشارات التقنية" width="60" height="60" class="mb-3">
                        <h3 class="h5 text-primary mb-3">تقديم الاستشارات التقنية</h3>
                        <button class="btn btn-outline-primary mt-auto" onclick="openModal()">ابدأ مشروعك</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            easing: 'ease-out-quad',
            duration: 1000,
        });
        
        // تأكد من تعريف هذه الدالة في مكان آخر من التطبيق
        window.openModal = function() {
            // كود فتح المودال هنا
            console.log('فتح نموذج البدء بالمشروع');
            // مثال: $('#projectModal').modal('show');
        };
    });
</script>
@endpush

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush