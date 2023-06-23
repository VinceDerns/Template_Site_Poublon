<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <div class="navbar">
        <input type="checkbox" id="toggle">
        <nav>
            <a href="../html/biographie.html"><img class="title" src="../images/MSP Titre.jpg" alt="Marie-Simone POUBLON"></a>
            <label class="navbar_toggler" for="toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </label>
            <ul class="nav_list">
                <li class="nav_item">
                    <a class="nav_link" href="../html/index.html">Accueil</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="../html/biographie.html">Biographie</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="../html/livres.html">Livres</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="../html/commander.html">Commander</a>
                </li>
                <li class="nav_item">
                    <a class="nav_link" href="../html/contact.html">Contact</a>
                </li>
            </ul>
        </nav>
    </div>

    <header>
        <div>
            <img class="img_header" src="../images/phto-profil-MSP-ConvertImage.jpg" alt="">
        </div>
        <div class="bloc_header">
            <h1>Marie-Simone POUBLON</h1>
            <h3>Auteure et chroniqueuse de presse</h3>
            <br>
            <p>"Un livre est un outil de liberté"</p>
            <p>Jean Guéhenno de l'académie Française</p>
            <button class="btn_header"><a href="../html/biographie.html" target="_blank">En savoir plus</a></button>
        </div>
    </header>
</body>

</html>