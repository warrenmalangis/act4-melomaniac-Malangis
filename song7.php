<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['Crush']) ===true){
    session_destroy();
    header("Location: song6.php?Crush");
}else if (isset($_REQUEST['Enchanted']) ===true){
    session_destroy();
    header("Location: song8.php?Enchanted");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>good 4 u-Olivia Rodrigo</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">
                    <img src="assets/Logo.ico" height="40" width="35" alt=""></div>
                <a class="navbar-brand"style= "font-family: monospace; color: #d1d1e0;" href="?Homepage"> WarLyrics Accord </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?EasyOnMe">Previous</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Crush">Song 6</a></li>
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?good4u">Song 7</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Enchanted">Song 8</a></li>
               
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 2950px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Avantgarde TeX Gyre Adventor, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>good 4 u</h2>";
                        echo "<p class='lead '>Olivia Rodrigo</p>";
                        echo "<br/>";
                
                        echo "<p> Well good for you, I guess you moved on really easily</p>";
                        echo "<p> You found a new girl and it only took a couple weeks</p>";
                        echo "<p> Remember when you said that you wanted to give me the world
</p>";
                        echo "<br/>";

                        echo "<p> And good for you, I guess that you've been working on yourself</p>";
                        echo "<p> I guess that therapist I found for you, she really helped</p>";
                        echo "<p> Now you can be a better man for your brand new girl</p>";
                        echo "<br/>";

                        echo "<p> Well good for you</p>";
                        echo "<p> You look happy and healthy, not me</p>";
                        echo "<p> If you ever cared to ask</p>";
                        echo "<p> Good for you</p>";
                        echo "<p> You're doing great out there without me, baby
</p>";
                        echo "<p> God, I wish that I could do that</p>";
                        echo "<br/>";

                        echo "<p> I've lost my mind</p>";
                        echo "<p> I've spent the night</p>";
                        echo "<p> Crying on the floor of my bathroom</p>";
                        echo "<p> But you're so unaffected, I really don't get it</p>";
                        echo "<p> But I guess good for you</p>";
                        echo "<br/>";

                        echo "<p> Well good for you, I guess you're getting everything you want</p>";
                        echo "<p> You bought a new car and your career's really taking off</p>";
                        echo "<p> It's like we never even happened, baby</p>";
                        echo "<p> What the fuck is up with that?</p>";
                        echo "<br/>";

                        echo "<p> And good for you, it's like you never even met me</p>";
                        echo "<p> Remember when you swore to God I was the only</p>";
                        echo "<p> Person who ever got you</p>";
                        echo "<p> Well, screw that and screw you
</p>";
                        echo "<p> You will never have to hurt the way you know that I do</p>";
                        echo "<br/>";

                        echo "<p> Well good for you</p>";
                        echo "<p> You look happy and healthy, not me</p>";
                        echo "<p> If you ever cared to ask</p>";
                        echo "<p> Good for you</p>";
                        echo "<p> You're doing great out there without me, baby
</p>";
                        echo "<p> God, I wish that I could do that</p>";
                        echo "<br/>";

                        echo "<p> I've lost my mind</p>";
                        echo "<p> I've spent the night</p>";
                        echo "<p> Crying on the floor of my bathroom</p>";
                        echo "<p> But you're so unaffected, I really don't get it</p>";
                        echo "<p> But I guess good for you</p>";
                        echo "<br/>";

                        echo "<p> Maybe I'm too emotional</p>";
                        echo "<p> But your apathy's like a wound in salt</p>";
                        echo "<p> Maybe I'm too emotional</p>";
                        echo "<p> Or maybe you never cared at all</p>";
                        echo "<p> Maybe I'm too emotional</p>";
                        echo "<p> But your apathy's like a wound in salt</p>";
                        echo "<p> Maybe I'm too emotional</p>";
                        echo "<p> Or maybe you never cared at all</p>";
                        echo "<br/>";

                        echo "<p> Well good for you</p>";
                        echo "<p> You look happy and healthy, not me</p>";
                        echo "<p> If you ever cared to ask</p>";
                        echo "<p> Good for you</p>";
                        echo "<p> You're doing great out there without me, baby
</p>";
                        echo "<p> Like a damn sociopath</p>";
                        echo "<br/>";

                        echo "<p> I've lost my mind</p>";
                        echo "<p> I've spent the night</p>";
                        echo "<p> Crying on the floor of my bathroom</p>";
                        echo "<p> But you're so unaffected, I really don't get it</p>";
                        echo "<p> But I guess good for you</p>";
                        echo "<br/>";

                        echo "<p> Well good for you, I guess you moved on really easily</p>";
                        echo "<br/>";

                        
                        ?>


                    </div>
                </div>
            </div>
        </section>

        <footer class="py-4 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Warren N. Malangis</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
