<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['HappierThanEver']) ===true){
    session_destroy();
    header("Location: song2.php?HappierThanEver");
}else if (isset($_REQUEST['Dandelions']) ===true){
    session_destroy();
    header("Location: song1.php?Dandelions");
}else if (isset($_REQUEST['doubletake']) ===true){
    session_destroy();
    header("Location: song3.php?doubletake");
}else if (isset($_REQUEST['Tahanan']) ===true){
    session_destroy();
    header("Location: song4.php?Tahanan");
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
        <title>Easy on Me-Adele</title>
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
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?HappierThanEver">Song 2</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?doubletake">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Tahanan">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?EasyOnMe">Song 5</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Crush">Next</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 2150px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Avantgarde TeX Gyre Adventor, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Easy on Me</h2>";
                        echo "<p class='lead '>Adele.</p>";
                        echo "<br/>";
                
                        echo "<p> There ain't no gold in this river </p>";
                        echo "<p> That I've been washing my hands in forever </p>";
                        echo "<p> I know there is hope in these waters </p>";
                        echo "<p> But I can't bring myself to swim </p>";
                        echo "<p> When I am drowning in this silence </p>";
                        echo "<p> Baby, let me in </p>";
                        echo "<br/>";

                        echo "<p> Go easy on me, baby</p>";
                        echo "<p> I was still a child</p>";
                        echo "<p> Didn't get the chance to</p>";
                        echo "<p> Feel the world around me</p>";
                        echo "<p> I had no time to choose what I chose to do</p>";
                        echo "<p> So go easy on me</p>";
                        echo "<br/>";

                        echo "<p> There ain't no room for things to change</p>";
                        echo "<p> When we are both so deeply stuck in our ways</p>";
                        echo "<p> You can't deny how hard I have tried</p>";
                        echo "<p> I changed who I was to put you both first</p>";
                        echo "<p> But now I give up
</p>";
                        echo "<br/>";

                        echo "<p> Go easy on me, baby</p>";
                        echo "<p> I was still a child</p>";
                        echo "<p> Didn't get the chance to</p>";
                        echo "<p> Feel the world around me</p>";
                        echo "<p> Had no time to choose what I chose to do</p>";
                        echo "<p> So go easy on me</p>";
                        echo "<br/>";

                        echo "<p> I had good intentions</p>";
                        echo "<p> And the highest hopes</p>";
                        echo "<p> But I know right now</p>";
                        echo "<p> It probably doesn't even show</p>";
                        echo "<br/>";

                        echo "<p> Go easy on me, baby</p>";
                        echo "<p> I was still a child</p>";
                        echo "<p> I didn't get the chance to</p>";
                        echo "<p> Feel the world around me</p>";
                        echo "<p> I had no time to choose what I chose to do</p>";
                        echo "<p> So go easy on me</p>";
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
