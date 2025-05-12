document.addEventListener('DOMContentLoaded', function() {
            const texts = [
                {text: "فـكـرة", color: "#5700ff"},
                {text: "مـشـروع", color: "#ff0066"},
                {text: "تصميم", color: "#5700ff"},
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