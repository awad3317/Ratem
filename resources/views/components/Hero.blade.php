<section class="mt-5" id="home" class="bg-backGround w-full top-0 left-0 pb-5 pb-md-4">
    <div class="container px-4 px-lg-5 py-4 py-md-5">
        <div class="row align-items-center">
            <style>
                .changing-text {
                    transition: color 0.5s ease-in-out;
                }
            </style>
            <!-- النص والرسالة -->
            <div class="col-md-7 order-md-1 order-2" data-aos="fade-left">
                <div class="hero-text mb-4 mb-md-0">
                    <h1 class="display-4 fw-medium text-dark mb-3">
                        في بالك
                        <span class="fw-bold changing-text" style="color: #5700ff">فـكـرة</span>
                    </h1>
                    <h1 class="display-4 fw-medium text-dark">
                        مالك الا رتم
                    </h1>
                </div>
            </div>

            <!-- الصورة -->
            <div class="col-md-5 order-md-2 order-1" data-aos="fade-right">
                <img
                    src="{{ asset('images/retam.png') }}"
                    alt="Hero section image"
                    class="img-fluid p-md-4"
                    loading="lazy"
                    decoding="async"
                >
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const texts = [
                {text: "فـكـرة", color: "#5700ff"},
                {text: "مـشـروع", color: "#ff0066"},
                {text: "حـل", color: "#5700ff"},
                {text: "إبـداع", color: "#ff0066"}
            ];

            const changingText = document.querySelector('.changing-text');
            let currentIndex = 0;

            function changeText() {
                currentIndex = (currentIndex + 1) % texts.length;
                changingText.style.color = texts[currentIndex].color;
                changingText.textContent = texts[currentIndex].text;
            }
            setInterval(changeText, 2000);
        });
    </script>
</section>
