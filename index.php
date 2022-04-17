<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Dandelions']) ===true){
    session_destroy();
    header("Location: song1.php?Dandelions");
    }
else if (isset($_REQUEST['HappierThanEver']) ===true){
    session_destroy();
    header("Location: song2.php?HappierThanEver");
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
        <title>Home-WarLyrics Accord</title>
        <link rel="icon" type="image/x-icon" href="assets/Logo.ico" />
      
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->


        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <div id="header">


                    <img src="assets/Logo.ico" height="40" width="35" alt=""></div>
                <a class="navbar-brand" style= "font-family: monospace; color: #d1d1e0;" href="#"> WarLyrics Accord </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;"  href="?Dandelions">Song 1</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?HappierThanEver">Song 2</a></li>
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
                background-image: url("images/backg.jpg");
                background-size: 1300px 610px;
            }
        </style>
        <header class="text-white">
            <div class="px-4 text-center">
                <br>
                <br> 
                </br>
                <h1 class="fw-bolder" style="font-size: 6vw" style="background-color: black;" >Welcome to WarLyrics Accord</h1>
                <p class="leader">Spreading amazing music that holistically touches everyone's heart</p>
                
            </div>
        </header>

 
       <br>
            <br>
                <br>
                <br>  
        <br/>

        <footer class="py-3 bg-danger">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; 2022. Warren N. Malangis</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
