
<div class="carouselContainer">
    <div class="carouselImgs driver slide1">
        <img src="img/driver01.png" alt="Hamiltion">
        <div class="driver-name">
            <h1>L.HAMLITIONS <span>44</span></h1>
        </div>
    </div>
    <div class="carouselImgs driver slide2">
    <img src="img/driver02.jpg" alt="Hamiltion">
        <div class="driver-name">
            <h1>V.BOTTAS <span>77</span></h1>
        </div>
    </div>
    <span class="prev" id="btnPrev"> < </span>
    <span class="next" id="btnNext"> > </span>
</div>

<script>
//DRIVER
var currentSlide = 1;

function showSlide(slideIndex) {
    const slides = document.getElementsByClassName('carouselImgs');
    if (slideIndex > slides.length) { currentSlide = 1 }
    if (slideIndex < 1) { currentSlide = slides.length }
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none'
    }
    slides[currentSlide - 1].style.display = 'flex'
}

function nextSlide() {
    showSlide(currentSlide += 1);
}

function previousSlide() {
    showSlide(currentSlide -= 1);
}

window.onload = function () {
    showSlide(currentSlide);
    document.getElementById('btnPrev').addEventListener('click', function () {
        previousSlide();
    })
    document.getElementById('btnNext').addEventListener('click', function () {
        nextSlide();
    })
}
</script>