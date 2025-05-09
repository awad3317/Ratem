<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm py-1" style="min-height: 60px;">
    <div class="container-fluid px-4">
        <!-- الشعار -->
        <a class="navbar-brand py-0" href="#home">
            <img src="{{ asset('images/Retme.jpg') }}" alt="Retme logo" width="110" height="70">
        </a>

        <!-- زر القائمة المختصرة -->
        <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="width: 1em; height: 1em;"></span>
        </button>

        <!-- محتوى القائمة -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto mb-1 mb-lg-0 text-center">
                <li class="nav-item">
                    <a class="nav-link active py-1 px-3 fw-bold" href="#">الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-1 px-3 fw-bold" href="#info">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-1 px-3 fw-bold" href="#how">كيف نعمل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-1 px-3 fw-bold" href="#service">ماذا نقدم</a>
                </li>
            </ul>
            
            <!-- زر ابدأ مشروعك (للشاشات الكبيرة فقط) -->
            <div class="d-flex ms-2 d-none d-lg-flex">
                <button type="button" class="btn btn-primary btn-sm px-3" onclick="openModal()">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/Vector.svg') }}" alt="Vector icon" width="15" height="12" class="ms-2">
                        <span class="fw-medium" style="font-size: 0.85rem;">ابدأ مشروعك</span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- زر ابدأ مشروعك للشاشات الصغيرة (ثابت في الأسفل) -->
<div class="d-lg-none fixed-bottom p-3 text-center" style="background-color: rgba(255,255,255,0.9); box-shadow: 0 -2px 10px rgba(0,0,0,0.1);">
    <button type="button" class="btn btn-primary btn-sm w-75" onclick="openModal()">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('images/Vector.svg') }}" alt="Vector icon" width="15" height="12" class="ms-2">
            <span class="fw-medium" style="font-size: 0.85rem;">ابدأ مشروعك</span>
        </div>
    </button>
</div>

<script>
function openModal() {
    console.log('فتح المودال');
    // يمكنك إضافة كود فتح المودال هنا
}
</script>