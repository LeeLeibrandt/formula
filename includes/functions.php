<?php

//head template with nav
function head($title){
    echo <<< EOT
        <!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
                <link rel="stylesheet" href="css/main.css">
                <title>$title</title>
            </head>
            <body>
            <style>
                #drivers{
                    margin-bottom:10rem;
                }
                @media screen and (max-width: 800px) {
                    .w-100{
                        height:40vh;
                    }
                    .carouselContainer{
                        height: 50%;
                    }
                    #cars{
                        margin-top:7rem;
                        margin-bottom:7rem;
                    }
                }
                @media screen and (max-width: 400px) {
                    .logos{
                        height:100%;
                    }    
                }
            </style>
    EOT;
}

//footer template
function foot(){
    echo <<< EOT
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script></script>
            <script src="js/main.js"></script>
            <script>

                //AOS ANIMATION
                AOS.init();

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
            </body>
        </html>
    EOT;
}