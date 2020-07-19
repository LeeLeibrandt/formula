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
                <body onload="startTime()">
                <style>
                    #drivers{
                        margin-bottom:10rem;
                    }
                    #time{
                        text-align: center;
                        color: #eee;
                        font-size:3rem;
                        margin-top:3rem;
                    }
                    .countDown{
                        text-align:center;
                        margin-top:4rem;
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
                <script src="https://unpkg.com/vue"></script>
                <script src="js/main.js"></script>
                <script src="js/app.js"></script>
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

                    function startTime() {
                        var today = new Date();
                        var h = today.getHours();
                        var m = today.getMinutes();
                        var s = today.getSeconds();
                        m = checkTime(m);
                        s = checkTime(s);
                        document.getElementById('time').innerHTML =
                        h + ":" + m + ":" + s;
                        var t = setTimeout(startTime, 500);
                    }
                    function checkTime(i) {
                        if (i < 10) {i = "0" + i};
                        return i;
                    }  
            
                    // Set the date we're counting down to
                    //format (month-day-year time)
                    var countDownDate = new Date("August 2 2020 15:10:00").getTime();
            
                    // Update the count down every 1 second
                    var x = setInterval(function() {
            
                    // Get today's date and time
                    var now = new Date().getTime();
                        
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;
                        
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        
                    // Output the result in an element with id="demo"
                    document.getElementById("countDown").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";
                        
                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                    }, 1000);
                </script>
                </body>
            </html>
        EOT;
    }