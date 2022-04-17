<?php
//start the session
SESSION_START();


if (isset($_REQUEST['Homepage']) ===true){
    session_destroy();
    header("Location: index.php?Homepage");
}else if (isset($_REQUEST['good4u']) ===true){
    session_destroy();
    header("Location: song7.php?good4u");
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
        <title>Crush-David Archuleta</title>
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
                        <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?Crush">Song 6</a></li>
                        <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?good4u">Song 7</a></li>
                         <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Enchanted">Song 8</a></li>
                 
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 3380px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center" style = 'font-family: Avantgarde TeX Gyre Adventor, sans-serif;'>
                    
                        <?php

                        echo "<h2 class='text-white' style= 'font-family: fantasy;'>Crush</h2>";
                        echo "<p class='lead '>David Archuleta</p>";
                        echo "<br/>";
                
                        echo "<p> I hung up the phone tonight</p>";
                        echo "<p> Something happened for the first time</p>";
                        echo "<p> Deep inside it was a rush</p>";
                        echo "<p> What a rush </p>";
                        echo "<br/>";

                        echo "<p> 'Cause the possibility</p>";
                        echo "<p> That you would ever feel the same way about me</p>";
                        echo "<p> It's just too much</p>";
                        echo "<p> FeeJust too much
</p>";
                        echo "<br/>";

                        echo "<p> Why do I keep running from the truth?</p>";
                        echo "<p> All I ever think about is you</p>";
                        echo "<p> You got me hypnotized</p>";
                        echo "<p> So mesmerized</p>";
                        echo "<p> And I've just got to know
</p>";
                        echo "<br/>";

                        echo "<p> Do you ever think</p>";
                        echo "<p> When you're all alone</p>";
                        echo "<p> All that we could be?</p>";
                        echo "<p> Where this thing could go?</p>";
                        echo "<p> Am I crazy or falling in love?</p>";
                        echo "<p> Is it real or just another crush?</p>";
                        echo "<p> Do you catch a breath</p>";
                        echo "<p> When I look at you?</p>";
                        echo "<p> Are you holding back</p>";
                        echo "<p> Like the way you do?</p>";
                        echo "<p> 'Cause I'm trying, trying to walk away</p>";
                        echo "<p> But I know this crush ain't going away</p>";
                        echo "<p> Going away
</p>";
                        echo "<br/>";

                        echo "<p> Has it ever crossed your mind</p>";
                        echo "<p> When we're hanging</p>";
                        echo "<p> Spending time, girl, are we just friends?</p>";
                        echo "<p> Is there more? Is there more? (Is there more)</p>";
                        echo "<br/>";

                        echo "<p> See it's a chance we've gotta take</p>";
                        echo "<p> 'Cause I believe that we can make</p>";
                        echo "<p> This into something that will last</p>";
                        echo "<p> Last forever, forever</p>";
                        echo "<br/>";

                        echo "<p> Do you ever think</p>";
                        echo "<p> When you're all alone</p>";
                        echo "<p> All that we could be?</p>";
                        echo "<p> Where this thing could go?</p>";
                        echo "<p> Am I crazy or falling in love?</p>";
                        echo "<p> Is it real or just another crush?</p>";
                        echo "<p> Do you catch a breath</p>";
                        echo "<p> When I look at you?</p>";
                        echo "<p> Are you holding back</p>";
                        echo "<p> Like the way you do?</p>";
                        echo "<p> 'Cause I'm trying, trying to walk away</p>";
                        echo "<p> But I know this crush ain't going away</p>";
                        echo "<p> Going away
</p>";
                        echo "<br/>";

                        echo "<p> Why do I keep running from the truth? (why do I keep running?)</p>";
                        echo "<p> All I ever think about is you (all I ever think about)</p>";
                        echo "<p> You got me hypnotized (hypnotized)</p>";
                        echo "<p> So mesmerized (mesmerized)</p>";
                        echo "<p> And I've just got to know</p>";
                        echo "<br/>";

                        echo "<p> Do you ever think (ever think)</p>";
                        echo "<p> When you're all alone (all alone)</p>";
                        echo "<p> All that we could be?</p>";
                        echo "<p> Where this thing could go (go)</p>";
                        echo "<p> Am I crazy or falling in love(crazy)</p>";
                        echo "<p> Is it real or just another crush (another crush)</p>";
                        echo "<p> Do you catch a breath</p>";
                        echo "<p> When I look at you?</p>";
                        echo "<p> Are you holding back</p>";
                        echo "<p> Like the way you do?</p>";
                        echo "<p> 'Cause I'm trying, trying to walk away</p>";
                        echo "<p> But I know this crush ain't going away</p>";
                        echo "<p> (This crush ain't) going away</p>";
                        echo "<p> (Goin' away) going away</p>";
                        echo "<p> (When you're all alone</p>";
                        echo "<p> All that we could be</p>";
                        echo "<p> Where this thing could go)</p>";
                        echo "<p> Going away</p>";

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
