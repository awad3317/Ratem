document.addEventListener('DOMContentLoaded', function() {
    // تهيئة المودال
    const projectModal = new bootstrap.Modal(document.getElementById('projectModal'));
    
    // فتح المودال عند النقر على زر معين
    document.querySelector('.open-project-modal').addEventListener('click', function() {
        projectModal.show();
    });
    
    // معالجة إرسال النموذج
    document.getElementById('projectForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // إظهار رسالة النجاح
                showToast('success', 'تم استلام طلبك بنجاح... سوف يقوم فريقنا بالتواصل معك');
                projectModal.hide();
                this.reset();
            } else {
                showToast('error', 'حدث خطأ أثناء الإرسال، يرجى المحاولة لاحقاً');
            }
        })
        .catch(error => {
            showToast('error', 'حدث خطأ أثناء الإرسال، يرجى المحاولة لاحقاً');
        });
    });
    
    // دالة لعرض التنبيهات
    function showToast(type, message) {
        const toastContainer = document.getElementById('toastContainer');
        const toastEl = document.createElement('div');
        toastEl.className = `toast show align-items-center text-white bg-${type}`;
        toastEl.setAttribute('role', 'alert');
        toastEl.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        `;
        toastContainer.appendChild(toastEl);
        
        setTimeout(() => {
            toastEl.remove();
        }, 5000);
    }
});
document.addEventListener('DOMContentLoaded', function() {
                const phoneInput = document.querySelector("#phone");
                const iti = window.intlTelInput(phoneInput, {
                    initialCountry: "sa",
                    separateDialCode: true,
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                });
                
                phoneInput.addEventListener('change', function() {
                    phoneInput.value = iti.getNumber();
                });
            });