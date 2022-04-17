<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['Dandelions']) ===true){
    session_destroy();
    header("Location: song1.php?Dandelions");
}else if (isset($_REQUEST['doubletake']) ===true){
    session_destroy();
    header("Location: song3.php?doubletake");
}else if (isset($_REQUEST['Tahanan']) ===true){
    session_destroy();
    header("Location: song4.php?Tahanan");
}else if (isset($_REQUEST['EasyOnMe']) ===true){
    session_destroy();
    header("Location: song5.php?EasyOnMe");
}else if (isset($_REQUEST['Crush']) ===true){
    session_destroy();
    header("Location: song6.php?Crush");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Happier Than Ever-Billie Eilish</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">
                    <img src="assets/Logo.ico" height="40" width="35" alt=""></div>
                <a class="navbar-brand" style= "font-family: monospace; color: #d1d1e0;" href="?Homepage"> WarLyrics Accord </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;"  href="?Dandelions">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?HappierThanEver">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?doubletake">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Tahanan">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?EasyOnMe">Song 5</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Crush">Next</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 2550px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = "font-family: Avantgarde TeX Gyre Adventor, sans-serif;">
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Happier Than Ever</h2>";
                        echo "<p class='lead '>Billie Eilish.</p>";
                        echo "<br/>";
                
                        echo "<p> When I'm away from you </p>";
                        echo "<p> I'm happier than ever</p>";
                        echo "<p> Wish I could explain it better</p>";
                        echo "<p> I wish it wasn't true
</p>";
                        echo "<br/>";

                        echo "<p> Give me a day or two</p>";
                        echo "<p> To think of something clever</p>";
                        echo "<p> To write myself a letter</p>";
                        echo "<p> To tell me what to do</p>";
                        echo "<br/>";

                        echo "<p> Do you read my interviews?</p>";
                        echo "<p> Or do you skip my avenue?</p>";
                        echo "<p> When you said you were passing through</p>";
                        echo "<p> Was I even on your way?
</p>";
                        echo "<br/>";

                        echo "<p> I knew when I asked you to</p>";
                        echo "<p> Be cool about what I was telling you</p>";
                        echo "<p> You'd do the opposite of what you said you'd do</p>";
                        echo "<p> And I'd end up more afraid</p>";
                        echo "<br/>";

                        echo "<p> Don't say it isn't fair</p>";
                        echo "<p> You clearly weren't aware that you</p>";
                        echo "<p> Made me miserable</p>";
                        echo "<p> So if you really wanna know</p>";
                        echo "<br/>";


                        echo "<p> When I'm away from you</p>";
                        echo "<p> I'm happier than ever
</p>";
                        echo "<p> Wish I could explain it better</p>";
                        echo "<p> I wish it wasn't true</p>";
                        echo "<br/>";

                        echo "<p> You call me again, drunk in your Benz</p>";
                        echo "<p> Driving home under the influence</p>";
                        echo "<p> You scared me to death but I'm wasting my breath</p>";
                        echo "<p> 'Cause you only listen to your fucking friends
</p>";
                        echo "<br/>";

                        echo "<p> I don't relate to you</p>";
                        echo "<p> I don't relate to you, no</p>";
                        echo "<p> 'Cause I'd never treat me this shitty
</p>";
                        echo "<p> You made me hate this city</p>";
                        echo "<br/>";

                        echo "<p> And I don't talk shit about you on the internet</p>";
                        echo "<p> Never told anyone anything bad</p>";
                        echo "<p> 'Cause that shit's embarrassing, you were my everything</p>";
                        echo "<p> And all that you did was make me fucking sad
</p>";
                        echo "<br/>";

                        echo "<p> So don't waste the time I don't have</p>";
                        echo "<p> And don't try to make me feel bad</p>";
                        echo "<br/>";

                        echo "<p> I could talk about every time that you showed up on time</p>";
                        echo "<p> But I'd have an empty line 'cause you never did</p>";
                        echo "<p> Never paid any mind to my mother or friends so I</p>";
                        echo "<p> Shut 'em all out for you 'cause I was a kid
</p>";
                        echo "<br/>";

                        echo "<p> You ruined everything good</p>";
                        echo "<p> Always said you were misunderstood</p>";
                        echo "<p> Made all my moments your own
</p>";                  
                        echo "<p> Just fucking leave me alone</p>";
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
