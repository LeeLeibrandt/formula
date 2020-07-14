<?php

    session_start();
    require_once('includes/functions.php');
    head('HOME');
    include_once('includes/nav.php');
?>
 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/02.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/01.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/00.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    
    <main>
       <div class="jumbotron">
            <img src="./img/logo.svg" alt="logo" style="width:300px;">
            <h1>WE RACE AS ONE</h1>
            <p>You can't score any points on Saturday - but what you do in qualifying can make or break a Grand Prix weekend. Want to know what's really happening? Read on...</p>
            <a class="btn btn-outline-primary btn-lg" href="#" role="button">Read more</a>
        </div>

        <?php 
            include_once('cars.php'); 
            //include_once('drivers.php');
            include_once('tracks.php');
            //include_once('split.php'); 
        ?>
        
    </main>

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
<?php
    foot();
?>