<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['Dandelions']) ===true){
    session_destroy();
    header("Location: song2.php?Dandelions");
}else if (isset($_REQUEST['HappierThanEver']) ===true){
    session_destroy();
    header("Location: song2.php?HappierThanEver");
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
        <title>double take-dhruv</title>
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
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?doubletake">Song 3</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Tahanan">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?EasyOnMe">Song 5</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Crush">Next</a></li>
                    </ul>
                </div>
            </div>
        </nav>
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
                    <div class="col-lg-12 text-center">
                    
                        <?php

                        echo "<h2 class='text-white'>double take</h2>";
                        echo "<p class='lead '>dhruv.</p>";
                        echo "<br/>";
                
                        echo "<p> I could say I never dare </p>";
                        echo "<p> To think about you in that way, but</p>";
                        echo "<p> I would be lying</p>";
                        echo "<p> And I pretend I'm happy for you
</p>";
                        echo "<p> When you find some dude to take home</p>";
                        echo "<p> But I won't deny that</p>";
                        echo "<br/>";

                        echo "<p> In the midst of the crowds</p>";
                        echo "<p> In the shapes in the clouds</p>";
                        echo "<p> I don't see nobody but you</p>";
                        echo "<p> In my rose-tinted dreams</p>";
                        echo "<p> Wrinkled silk on my sheets</p>";
                        echo "<p> I don't see nobody but you
</p>";
                        echo "<br/>";

                        echo "<p> Boy, you got me hooked on to something</p>";
                        echo "<p> Who could say that they saw us coming?</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<p> Spend the summer of a lifetime with me
</p>";
                        echo "<p> Let me take you to the place of your dreams</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<br/>";

                        echo "<p> And I could say I never unzipped</p>";
                        echo "<p> Those blue Levi's inside my head</p>";
                        echo "<p> But that's far from the truth</p>";
                        echo "<p> Don't know what's come over me</p>";
                        echo "<p> It seems like yesterday when I said</p>";
                        echo "<p> We'll be friends forever</p>";
                        echo "<br/>";

                        echo "<p> Constellations of stars</p>";
                        echo "<p> Murals on city walls</p>";
                        echo "<p> I don't see nobody but you</p>";
                        echo "<p> You're my vice, you're my muse</p>";
                        echo "<p> You're a nineteenth-floor view</p>";
                        echo "<p> I don't see nobody but you</p>";
                        echo "<br/>";


                        echo "<p> Boy, you got me hooked on to something</p>";
                        echo "<p> Who could say that they saw us coming?</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<p> Spend the summer of a lifetime with me
</p>";
                        echo "<p> Let me take you to the place of your dreams</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<br/>";

                        echo "<p> Boy, you got me hooked on to something</p>";
                        echo "<p> Who could say that they saw us coming?</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<p> Spend the summer of a lifetime with me
</p>";
                        echo "<p> TLet me take you to the place of your dreams</p>";
                        echo "<p> Tell me, do you feel the love?</p>";
                        echo "<br/>";

                        echo "<p> Do you feel the love?</p>";
                        echo "<p> Do you feel the love?</p>";
                        echo "<p> Do you feel the love?</p>";
                        echo "<p> Do you feel the love?</p>";
                        echo "<p> Feel the love</p>";
                        echo "<p> Do you feel the love?</p>";             
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
