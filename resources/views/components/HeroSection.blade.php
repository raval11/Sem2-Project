<style>
    .slider-container {
    width: 100%;
    overflow: hidden;
}

.slider {
    display: flex;
}

.slider-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    flex: 0 0 100%;
}

.slide img {
    width: 100%;
    height: auto;
}
</style>

<div class="slider-container h-[80vh]">
    <div class="slider overflow-hidden">
        <div class="slider-inner">
            <!-- Slide 1 -->
            <div class="slide">
                <img  src="{{ asset('asset/image/g1.jpg') }}" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="slide">
                <img  src="{{ asset('asset/image/g2.jpg') }}" alt="Slide 2">
            </div>
            <!-- Slide 3 -->
            <div class="slide">
                <img  src="{{ asset('asset/image/g3.jpg') }}" alt="Slide 3">
            </div>
            <!-- Add more slides as needed -->
        </div>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const sliderInner = document.querySelector('.slider-inner');
        const slides = document.querySelectorAll('.slide');

        let slideIndex = 0;

    function showSlide(index) {
        // Calculate the translateX value based on the slide index
        const translateValue = -index * slides[0].offsetWidth;
        sliderInner.style.transform = `translateX(${translateValue}px)`;
    }

    function nextSlide() {
        if (slideIndex < slides.length - 1) {
            slideIndex++;
        } else {
            slideIndex = 0;
        }
        showSlide(slideIndex);
    }
    setInterval(nextSlide, 3000);
});
</script>
