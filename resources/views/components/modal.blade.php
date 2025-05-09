<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="projectModalLabel">ابدأ مشروعك (تواصل معنا)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="projectForm"  method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-secondary">الأسم</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="مثال: احمد سعيد" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label text-secondary">رقم الجوال</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary">البريد الالكتروني</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="مثال: ahmed@gmail.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label text-secondary">وصف المشروع</label>
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="تفاصيل المشروع..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">
                            <img src="{{ asset('images/Vector.svg') }}" alt="Send icon" width="15" class="me-2">
                            ارسال
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>