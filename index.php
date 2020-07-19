<?php
    session_start();

    include_once('includes/database.php');
    include_once('includes/functions.php');

    head('HOME');
    include_once('nav.php');
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
                <img src="img/00.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/01.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!--<div id="time"></div>-->
    
    <div class="countDown" data-aos="fade-down" data-aos-duration="2000">
        <h1 style="color: transparent; -webkit-text-stroke: .7px #fff;">Silverstone Circuit, United Kindom <div id="countDown"></div></h1>
    </div>

    <div class="jumbotron" data-aos="fade-right" data-aos-duration="2000" >
        <img src="./img/formula.png" alt="logo" style="width:300px;" >
        <h1>#WE RACE AS ONE</h1>
        <p>
            As Formula 1 returns after a four-month break, 
            we believe we must return with added purpose and determination 
            to tackle the major issues that we as a sport, but also society, are facing. 
            Those issues are important to the longer-term future of our sport, 
            but equally have a major impact on the communities we race in and countries around the world.
        </p>
        <a class="btn btn-outline-primary btn-lg" href="#" role="button">Read more</a>
    </div>

    <div id="cars" data-aos="fade-left" data-aos-duration="2000">
        <div class="carouselContainer">
            <div class="carouselImgs">
                <img src="img/cars/2.jpeg" alt="car" style="width:100%;">
            </div>
            <div class="carouselImgs">
                <img src="img/cars/1.jpeg" alt="car" style="width:100%;">
            </div>
            <div class="carouselImgs">
                <img src="img/cars/0.jpeg" alt="car" style="width:100%;">
            </div>
            <span class="prev" id="btnPrev" style="color: rgb(129, 252, 252);"> < </span>
            <span class="next" id="btnNext" style="color: rgb(129, 252, 252);"> > </span>
        </div>
        <button class="btn">view specs</button>
    </div>
    
    <div class="team-driver">
        <h1 data-aos="fade-down" data-aos-duration="2000">The Drivers</h1>
        <div id="drivers">
            <div class="driver-1 space" data-aos="fade-right" data-aos-duration="1500">
                <div class="jumbotron">
                    <img src="img/Lewis.png" alt="driver">
                    <h2 data-aos="flip-down" data-aos-duration="2000">L.HAMILTON <span>44</span></h2>
                    <a class="btn btn-outline-primary btn-lg" href="driverone.php" role="button">Read more</a>
                </div>
            </div>
            <div class="driver-2 space" data-aos="fade-left" data-aos-duration="1500">
                <div class="jumbotron">
                    <img src="img/Bottas.png" alt="driver">
                    <h2 data-aos="flip-down" data-aos-duration="2000">V.BOTTAS <span>77</span></h2>
                    <a class="btn btn-outline-primary btn-lg" href="drivertwo.php" role="button">Read more</a>
                </div>
            </div>   
        </div>
    </div>
        
    <div id="tracks" data-aos="fade-up" data-aos-duration="2000">
            <h2 style="font-weight:600; padding-left:.5rem;" data-aos="fade-down" data-aos-duration="2000">Race Calendar 2020</h2></center>
            <div id="carousel">
                <div id="content">
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/00.png" />
                        </div>
                        <div class="details">
                            <h4>Steiermark Grand Prix</h4>
                            <h6>10 -12 July 2020</h6>
                            <p><img src="img/country/01.png" alt="country" />Red bull Ring, Spielberg, Austria</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/01.png" />
                        </div>
                        <div class="details">
                            <h4>Hungarian Grand Prix</h4>
                            <h6>17 - 19 July 2020</h6>
                            <p><img src="img/country/02.png" alt="country" />Hungarian, Mogyorod, Hungary</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/02.png" />
                        </div>
                        <div class="details">
                            <h4>Bristish mark Grand Prix</h4>
                            <h6>31 July - 2 August 2020</h6>
                            <p><img src="img/country/03.png" alt="country" />Silverstone Circuit, Towcester, United Kindom</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/02.png" />
                        </div>
                        <div class="details">
                            <h4>70th Anniversary Grand Prix</h4>
                            <h6>7 - 9 August 2020</h6>
                            <p><img src="img/country/03.png" alt="country" />Silverstone Circuit, Towcester, United Kindom</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/03.png" />
                        </div>
                        <div class="details">
                            <h4>Spanish Grand Prix</h4>
                            <h6>14 - 16 August 2020</h6>
                            <p><img src="img/country/04.png" alt="country" />Circuit de Catalunya, Espana</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/04.png" />
                        </div>
                        <div class="details">
                            <h4>Belgian Grand Prix</h4>
                            <h6>28 - 30 August 2020</h6>
                            <p><img src="img/country/05.png" alt="country" />Circuit de Spa-Francorchamps</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/05.png" />
                        </div>
                        <div class="details">
                            <h4>Italian Grand Prix</h4>
                            <h6>3 - 6 September 2020</h6>
                            <p><img src="img/country/06.png" alt="country" />Autodromo Nazionale di Monza</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/06.png" />
                        </div>
                        <div class="details">
                            <h4>Singapore Grand Prix</h4>
                            <h6>18 - 20 September 2020</h6>
                            <p><img src="img/country/07.png" alt="country" />Marine Bay Street Circuit</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/07.png" />
                        </div>
                        <div class="details">
                            <h4>Russian Grand Prix</h4>
                            <h6>25 - 27 September 2020</h6>
                            <p><img src="img/country/08.png" alt="country" />Sochi, Russian</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/08.png" />
                        </div>
                        <div class="details">
                            <h4>Japanese Grand Prix</h4>
                            <h6>9 - 11 October 2020</h6>
                            <p><img src="img/country/09.png" alt="country" />Suzuka Circuit, Japan</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/09.png" />
                        </div>
                        <div class="details">
                            <h4>United States Grand Prix</h4>
                            <h6>23 - 25 October 2020</h6>
                            <p><img src="img/country/10.png" alt="country" />Circuit of The Americans</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/10.png" />
                        </div>
                        <div class="details">
                            <h4>Mexican Grand Prix</h4>
                            <h6>30 October - 1 November 2020</h6>
                            <p><img src="img/country/11.png" alt="country" />Autodromo Hermanos Rodriguez</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/11.png" />
                        </div>
                        <div class="details">
                            <h4>Brazilian Grand Prix</h4>
                            <h6>12 - 15 November 2020</h6>
                            <p><img src="img/country/12.png" alt="country" />Autodromo Jose Carlos Pace</p>
                            <span>F1</span>
                        </div>
                    </div>
                    <div class="track">
                        <div class="img">
                            <img class="item" src="img/tracks/12.png" />
                        </div>
                        <div class="details">
                            <h4>Abu Dhabi Grand Prix</h4>
                            <h6>27 - 29 November 2020</h6>
                            <p><img src="img/country/13.png" alt="country" />Yas Marine Circuit</p>
                            <span>F1</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>

<?php
    include_once('footers.php');
    foot();
?>