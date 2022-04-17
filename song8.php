<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['Crush']) ===true){
    session_destroy();
    header("Location: song6.php?Crush");
}else if (isset($_REQUEST['good4u']) ===true){
    session_destroy();
    header("Location: song7.php?good4u");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Enchanted-Taylor Swift</title>
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
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?good4u">Song 7</a></li>
                         <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?Enchanted">Song 8</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 3000px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Avantgarde TeX Gyre Adventor, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Enchanted</h2>";
                        echo "<p class='lead '>Taylor Swift</p>";
                        echo "<br/>";
                
                        echo "<p> There I was again tonight</p>";
                        echo "<p> Forcing laughter, faking smiles</p>";
                        echo "<p> Same old tired lonely place
</p>";
                        echo "<br/>";

                        echo "<p> Walls of insincerity,</p>";
                        echo "<p> Shifting eyes and vacancy</p>";
                        echo "<p> Vanished when I saw your face</p>";
                        echo "<br/>";

                        echo "<p> All I can say is it was enchanting to meet you</p>";
                        echo "<br/>";

                        echo "<p> Your eyes whispered, Have we met?</p>";
                        echo "<p> Across the room your silhouette</p>";
                        echo "<p> Starts to make its way to me</p>";
                        echo "<p> The playful conversation starts</p>";
                        echo "<p> Counter all your quick remarks
</p>";
                        echo "<p> Like passing notes in secrecy</p>";
                        echo "<br/>";

                        echo "<p> And it was enchanting to meet you</p>";
                        echo "<p> All I can say is I was enchanted to meet you</p>";
                        echo "<br/>";

                        echo "<p> This night is sparkling, don't you let it go</p>";
                        echo "<p> I'm wonderstruck, blushing all the way home</p>";
                        echo "<p> I'll spend forever wondering if you knew</p>";
                        echo "<p> I was enchanted to meet you</p>";
                        echo "<br/>";

                        echo "<p> The lingering question kept me up</p>";
                        echo "<p> 2 AM, who do you love?</p>";
                        echo "<p> I wonder 'til I'm wide awake</p>";
                        echo "<p> And now I'm pacing back and forth</p>";
                        echo "<p> Wishing you were at my door</p>";
                        echo "<p> I'd open up and you would say, Hey,</p>";
                        echo "<p> It was enchanting to meet you,</p>";
                        echo "<p> All I know is I was enchanted to meet you.</p>";
                        echo "<br/>";

                        echo "<p> This night is sparkling, don't you let it go</p>";
                        echo "<p> I'm wonderstruck, blushing all the way home</p>";
                        echo "<p> I'll spend forever wondering if you knew</p>";
                        echo "<p> This night is flawless, don't you let it go
</p>";
                        echo "<p> I'm wonderstruck, dancing around all alone</p>";
                        echo "<p> I'll spend forever wondering if you knew</p>";
                        echo "<p> I was enchanted to meet you</p>";
                        echo "<br/>";

                        echo "<p> This is me praying that</p>";
                        echo "<p> This was the very first page</p>";
                        echo "<p> Not where the story line ends</p>";
                        echo "<p> My thoughts will echo your name</p>";
                        echo "<p> Until I see you again
</p>";
                        echo "<p> These are the words I held back</p>";
                        echo "<p> As I was leaving too soon</p>";
                        echo "<p> I was enchanted to meet you</p>";
                        echo "<br/>";

                        echo "<p> Please don't be in love with someone else</p>";
                        echo "<p> Please don't have somebody waiting on you</p>";
                        echo "<p> Please don't be in love with someone else</p>";
                        echo "<p> Please don't have somebody waiting on you</p>";
                        echo "<br/>";

                        echo "<p> This night is sparkling, don't you let it go</p>";
                        echo "<p> I'm wonderstruck, blushing all the way home</p>";
                        echo "<p> I'll spend forever wondering if you knew</p>";
                        echo "<p> This night is flawless, don't you let it go</p>";
                        echo "<p> (Please don't be in love with someone else)</p>";
                        echo "<p> I'm wonderstruck, dancing around all alone</p>";
                        echo "<p> (Please don't have somebody waiting on you)</p>";
                        echo "<p> I'll spend forever wondering if you knew</p>";
                        echo "<p> (Please don't be in love with someone else)</p>";
                        echo "<p> I was enchanted to meet you
</p>";
                        echo "<br/>";

                        echo "<p> Please don't be in love with someone else</p>";
                        echo "<p> Please don't have somebody waiting on you</p>";
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
