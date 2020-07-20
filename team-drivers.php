<style>
    @import url('https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap');
    .team-driver {
        width: 100%;
        height:100vh;
        position: relative;
        margin: auto;
    }
    .frame {
        display: none;
    }
    .driver{
        display:flex;
        width:100%;
        height:100%;
    }
    .driver img{
        padding:4rem 0 4rem 4rem;
        width:50%;
    }
    .driver-text{
        width:50%;
        height:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        font-family: 'Racing Sans One', cursive;
        font-size:5rem;
        color: transparent;
        -webkit-text-stroke: 1px #000;
        letter-spacing: 2px;
    }
    .btn-prev, .btn-next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: white;
        background-color: rgba(0,0,0,0.8);
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }
    .btn-next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }
    @media screen and (max-width: 900px){
        .team-driver{
            width:100%;
            height:100%;
        }
        .driver{
            text-align:center;
            display:flex;
            flex-wrap:wrap; 
        }
        .driver img{
            width:100%;
            padding:0;
        }
        .driver-text{
            width:100%;
            height:20%;
        }
    }
</style>

<div class="team-driver">
    <div class="frame fade">
        <div class="driver">
            <img src="img/lewis.png" alt="driver">
            <div class="driver-text">L.Hamilton 44</div>
        </div>
    </div>
    <div class="frame fade">
        <div class="driver">
           <img src="img/bottas.png" alt="driver">
            <div class="driver-text">V.Bottas 77</div>  
        </div>
    </div>
    <a class="btn-prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="btn-next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("frame");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>