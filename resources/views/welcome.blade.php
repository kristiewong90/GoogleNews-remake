<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <title>Google News</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header>


                <div class="top-nav">
                    <div class="hamburger">
                        <button><i class="fa fa-bars fa-lg"></i></button>
                        <a href="#"><img src="/img/google-logo.jpg">News</a>
                    </div>



                    <div class="search-bar">
                        <span class ="icon"><i class="fa fa-search fa-lg"></i></span>
                        <input type="text" placeholder="Search"></input>
                    </div>

                    <div class ="side-nav">
                        <i class="fa fa-th fa-lg"></i>
                        <i class="fa fa-bell fa-lg"></i>
                        <?php foreach ($profiles as $profile): ?>
                            <img src="<?php echo $profile->image ?>">
                        <?php endforeach ?>
                    </div>
                </div>

                <div class ="bottom-nav">

                    <div class="links">
                        <a href="#">Headlines </a>
                        <a href="#">Local </a>
                        <a href="#">For You </a>
                        <a href ="#">|</a>
                        <a href="#">Canada <i class="fa fa-angle-down fa-lg"></i></a>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cog fa-2x"></i>
                    </div>

                </div>

        </header>

        <div class="body container">

            <div class="sections">
                <p>SECTIONS</p>
                <ul>
                    <li><a href="#"><i class="fa fa-calendar"></i> Top Stories</a></li>
                    <li><a href="#"><i class="fa fa-globe"></i> World</a></li>
                    <li><a href="#"><i class="fa fa-flag"></i> Canada</a></li>
                    <li><a href="#"><i class="fa fa-building"></i> Business</a></li>
                    <li><a href="#"><i class="fa fa-database"></i> Technology</a></li>
                    <li><a href="#"><i class="fa fa-film"></i> Entertainment</a></li>
                    <li><a href="#"><i class="fa fa-bicycle"></i> Sports</a></li>
                    <li><a href="#"><i class="fa fa-flask"></i> Science</a></li>
                    <li><a href="#"><i class="fa fa-heartbeat"></i> Health</a></li>
                    <hr>
                    <li><a href="#"><i class="fa fa-edit"></i> Manage sections</a></li>
                </ul>
            </div>

            <div class="stories">
                <h2>Top Stories</h2>

                    <?php foreach ($articles as $article): ?>
                        <div class="articles">
                            <div class ="image">
                                <img src="<?php echo $article->image ?>">
                            </div>
                            <div class ="content">
                                <h6><a href="#"><?php echo $article->sentence ?></a></h6>
                                <span class="text"><?php echo $article->country ?> .
                                <?php echo $article->time ?>h ago</span><br><br>
                                <span class="text">RELATED COVERAGE</span><br>
                                <span class="title"><a href="#"><?php echo $article->sentence ?></a></span><br>
                                <span class="text"><?php echo $article->country ?> .
                                <?php echo $article->time ?>h ago</span>
                            </div>
                        </div>
                    <?php endforeach ?>

                    <h2>World <i class="fa fa-ellipsis-v fa-xs"></i></h2>

                    <?php foreach ($articles as $article): ?>
                        <div class="articles">
                            <div class ="image">
                                <img src="<?php echo $article->image ?>">
                            </div>
                            <div class ="content">
                                <h6><a href="#"><?php echo $article->sentence ?></a></h6>
                                <span class="text"><?php echo $article->country ?> .
                                <?php echo $article->time ?>h ago</span><br><br>
                                <span class="text">RELATED COVERAGE</span><br>
                                <span class="title"><a href="#"><?php echo $article->sentence ?></a></span><br>
                                <span class="text"><?php echo $article->country ?> .
                                <?php echo $article->time ?>h ago</span>
                            </div>
                        </div>
                    <?php endforeach ?>

            </div>


            <div class = "right-column">
                <h5>In The News</h5>
                <div class="in-the-news">
                    <?php foreach ($buttons as $button): ?>
                        <button><?php echo $button->name ?></button><br>
                    <?php endforeach ?>
                </div>

                <h5>Recent</h5>
                <div class="recent">
                    <?php foreach ($titles as $title): ?>
                        <span class="text"><a href="#"><?php echo $title->name ?></a><br>
                        <?php echo $title->domain ?> .
                        <?php echo $title->time ?>m ago<br></span><br>
                    <?php endforeach ?>
                </div>

                <h5>Calgary</h5>
                <div class="calgary">
                    <div class="weather">

                            <span="today"><strong>Today</strong></span>
                            <br>
                            <img id="icon"/>
                            <br/>
                            <span id="temp"></span>°


                        <script type="text/javascript">
                            // set up AJAX
                            var xhttp = new XMLHttpRequest();
                            // set up a URL variable to hold the URL to the API
                            var url = "http://api.openweathermap.org/data/2.5/weather?q=Calgary,ca&appid=c4703850194cf25ab30bc7dddd9d6af0";
                            // ajax event handler
                            xhttp.onreadystatechange = function(){
                                // is the server done responding?
                                if(xhttp.readyState==4 && xhttp.status==200){
                                    // set the parsed JSON into a variable
                                    var parsedJSON = JSON.parse(xhttp.responseText);
                                    //  call a function to output the weather data
                                    outputWeather(parsedJSON);
                                }
                            }
                            xhttp.open("GET", url, true);
                            xhttp.send();

                            function outputWeather(weatherData){

                                // output the image
                                var icon = weatherData.weather[0].icon;
                                icon = "https://openweathermap.org/img/w/"+icon+".png";
                                document.getElementById('icon').src = icon;

                                // get the temperature
                                var temp = weatherData.main.temp;
                                // change temp to an integer and subtract -273.15 to get celcius.
                                temp = parseInt(temp-273.15);
                                document.getElementById('temp').innerHTML = temp;
                            }
                            </script>
                        </div>

                        <?php foreach ($titles as $title): ?>
                            <span class="text"><a href="#"><?php echo $title->name ?></a><br>
                            <?php echo $title->domain ?> .
                            <?php echo $title->time ?>m ago<br></span><br>
                        <?php endforeach ?>
                </div>
            </div>
        </div>

    </body>
</html>
