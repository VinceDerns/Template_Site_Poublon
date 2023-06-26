<?php include '../composants/header.php' ?>

<?php include '../composants/header.php' ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ea6733594a.js" crossorigin="anonymous"></script>

</head>

<body>

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

    <h2>Mes Romans</h2>
    <div class="container">
        <div class="maincontainer">
            <div class="thecard">
                <div class="thefront"><img src="../images/L'hibiscus bleu.jpg" alt="" width="250px" height="320px">
                </div>

                <div class="theback">
                    <p>Neige, au caractère bien trempé, se retrouve après un long voyage en avion en Nouvelle-Calédonie,
                        à 16 700 kms de la
                        France. Elle se fait rapidement des amis.</p>
                </div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
                <div class="thefront"><img src="../images/Les ailes du paradis.jpg" alt="" width="250px" height="320px">
                </div>

                <div class="theback">
                    <p>Giuseppe a vécu plus de quarante ans dans le quartier du Marais, 4ème arrondissement de Paris, et
                        il a vu ce quartier
                        populaire se transformer petit à petit en quartier de "petits bourgeois" ou plus populairement
                        "bobos".</p>
                </div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
                <div class="thefront"><img src="../images/Les oiseaux de la colère.jpg" alt="" width="250px"
                        height="320px"></div>

                <div class="theback">
                    <p>Ce livre émouvant rapporte l’histoire d’un homme, Giuseppe, qui vit à Paris. Pour avoir voulu
                        nourrir des pigeons, il se
                        fera expulser de son appartement par la mairie socialiste du IVe arrondissement, ce qui le
                        conduira à vivre
                        définitivement dans la rue.</p>
                </div>
            </div>
        </div>

        <div class="maincontainer">
            <div class="thecard">
                <div class="thefront"><img src="../images/Un tout petit péché.jpg" alt="" width="250px" height="320px">
                </div>

                <div class="theback">
                    <p>Ce Roman est basé sur une histoire vraie, celle de Giuseppe Belvedere, dit Nino, humaniste, poète
                        et homme libre,
                        Giuseppe, Italien, arrivait à Paris en 1970. Il vécut ses douze dernières années à la rue, seul
                        dans sa camionette
                        stationnée rue Beaubourg à Paris 4.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include '../composants/footer.php' ?>

</body>

</html>