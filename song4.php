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
}else if (isset($_REQUEST['doubletake']) ===true){
    session_destroy();
    header("Location: song3.php?doubletake");
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
        <title>Tahanan-Adie</title>
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
                         <li class="nav-item"><a class="nav-link text-blue"style= "font-family: cursive;" href="?Tahanan">Song 4</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?EasyOnMe">Song 5</a></li>
                          <li class="nav-item"><a class="nav-link text-light"style= "font-family: cursive;" href="?Crush">Next</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <style>
            body {
                background-image: url("images/guitar.jpg");
                background-size: 1300px 3650px;
            }
        </style>
        <!-- About section-->
        <section id="songs">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                    
                        <?php

                        echo "<h2 class='text-white'>Tahanan</h2>";
                        echo "<p class='lead '>Adie.</p>";
                        echo "<br/>";
                
                        echo "<p> Mmm... </p>";
                        echo "<p> Ohh woah ohh... </p>";
                        echo "<br/>";

                        echo "<p> Sa araw-araw </p>";
                        echo "<p> Tanging ikaw ang</p>";
                        echo "<p> Palagi kong hinahangad</p>";
                        echo "<p> Laging tanaw</p>";
                        echo "<p> Sa 'yo ang ilaw</p>";
                        echo "<p> Na nagsisilbi kong liwanag</p>";
                        echo "<br/>";

                        echo "<p> Labis ang ngiti kapag ika'y kaharap</p>";
                        echo "<p> Ramdam ko ang pagmamahal giliw</p>";
                        echo "<p> Namumukod-tangi ka at walang katulad</p>";
                        echo "<p> Ikaw lang ang para sa 'kin...</p>";
                        echo "<br/>";

                        echo "<p> Sa 'yo lang, sa 'yo lang (lalalalala)</p>";
                        echo "<p> Ako uuwi</p>";
                        echo "<p> Kaya naman</p>";
                        echo "<br/>";

                        echo "<p> Dito ka sa piling ko</p>";
                        echo "<p> O, dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Bumabagal ang ikot ng mundo</p>";
                        echo "<p> Kapag ika'y nariyan</p>";
                        echo "<p> O aking tahanan</p>";
                        echo "<br/>";

                        echo "<p> Ta ta ta ta ta tahanan...</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> O aking tahanan</p>";
                        echo "<p> Latatadatadatadada mmm</p>";
                        echo "<br/>";

                        echo "<p> Sa bawat sandali</p>";
                        echo "<p> Na tayo ay magkayakap nang mahigpit</p>";
                        echo "<p> Taglay mong init ang bumabalot sa 'king</p>";
                        echo "<p> Nilalamig na damdamin</p>";
                        echo "<br/>";

                        echo "<p> Tayong dalawa'y pinagtagpo</p>";
                        echo "<p> Ng tamang pagkakataon</p>";
                        echo "<p> Hindi maitatanggi</p>";
                        echo "<p> Na sa akin ikaw ang tanging</p>";
                        echo "<p> Tiyak ahh...</p>";
                        echo "<br/>";


                        echo "<p> Ikaw lang, ikaw lang ang tinatangi</p>";
                        echo "<p> (Ikaw lamang ang tinatangi ko)</p>";
                        echo "<p> Ikaw lang at ako ang</p>";
                        echo "<p> Naaaninag (naaaninag)
</p>";
                        echo "<p> Sa gitna ng paraiso na</p>";
                        echo "<p> Ating sinimulan</p>";
                        echo "<p> O aking tahanan</p>";
                        echo "<br/>";

                        echo "<p> Pinapawi lahat ng iyong mga ngiti</p>";
                        echo "<p> Negatibo na nakadikit sa 'king labi</p>";
                        echo "<p> Huli ng iyong ngiti ang aking kiliti</p>";
                        echo "<p> Katotohanan na hindi ko maitatanggi
</p>";
                        echo "<p> Na mahal kita</p>";
                        echo "<p> Walang iba</p>";
                        echo "<p> Kaya naman</p>";
                        echo "<br/>";

                        echo "<p> Dito ka sa piling ko</p>";
                        echo "<p> O, dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Bumabagal ang ikot ng mundo</p>";
                        echo "<p> Kapag ika'y nariyan</p>";
                        echo "<p> O aking tahanan</p>";
                        echo "<br/>";

                        echo "<p> Ta ta ta ta ta tahanan...</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka sa piling ko ohh</p>";
                        echo "<p> (Pinapawi lahat ng iyong ngiti</p>";
                        echo "<p> Negatibo na nakadikit sa 'king labi)
</p>";
                        echo "<br/>";

                        echo "<p> Bumabagal ang ikot ng mundo woah oh</p>";
                        echo "<p> (Huli ng iyong ngiti ang aking kiliti</p>";
                        echo "<p> Katotohanan na hindi ko maitatanggi)
</p>";
                        echo "<br/>";

                        echo "<p> Ta ta ta ta ta tahanan</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> Dito ka lang</p>";
                        echo "<p> O aking tahanan</p>";
                        echo "<p> Mmm...
</p>";            
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
