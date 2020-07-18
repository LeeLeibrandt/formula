<?php
    session_start();

    include_once('includes/database.php');
    include_once('includes/functions.php');

    head('Lewis Hamilton');
    include_once('nav.php');
?>

<style>
    .drivers{
        width:100%;
        height:100vh;
    }
    .driver{
        width:100%;
        height:80vh;
        background-image: url('img/01.jpeg');
        background-position:center;
        background-repeat:no-repeat;
    }
    .driver .details{
        position:absolute;
        bottom:200px;
        color:#eee;
        padding-left:2rem;
    }
    .driver .details p{
        color:#eee;
    }
    .driver-details{
        background-color:#fff;
        padding:4rem 0;
        text-align:center;
    }
    .driver-details p{
        color:#000;
        font-weight:600;
        font-size:18px;
       
    }
    .driver-details p span{
        font-weight:400;
    }
</style>

<div class="drivers">
    <div class="driver">
        <div class="details">
            <p>Driver</p>
            <h1>Valtteri Bottas</h1>
        </div>
    </div>
    <div class="driver-details" data-aos="fade-right" data-aos-duration="1500">
        <h1 data-aos="fade-left" data-aos-duration="1000">Race Number #77</h1>
        <p data-aos="fade-left" data-aos-duration="1100">Data of birth <span>28 August 1989</span> </p>
        <p data-aos="fade-left" data-aos-duration="1200">Place of birth <span>Nastola, Finland</span> </p>
        <p data-aos="fade-left" data-aos-duration="1300">Nationality <span>Finnish</span> </p>
        <div class="driver-statistics">
            <h3 data-aos="fade-left" data-aos-duration="1000">STATISTICS</h3>
            <p data-aos="fade-left" data-aos-duration="1100">Grand Prix started <span>143</span> </p>
            <p data-aos="fade-left" data-aos-duration="1200">Pole positions <span>12</span> </p>
            <p data-aos="fade-left" data-aos-duration="1300">Podiums <span>47</span> </p>
            <p data-aos="fade-left" data-aos-duration="1400">Wins <span>8</span> </p>
            <p data-aos="fade-left" data-aos-duration="1500">Fastest win <span>2017 Russian Grand Prix</span> </p>
            <p data-aos="fade-left" data-aos-duration="1600">Career Points <span>1332</span> </p>
        </div>
    </div>
    
    <div class="social-media">

    </div>
</div>

<?php 
    //include_once('footers.php');
    foot();
?>