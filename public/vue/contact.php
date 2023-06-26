<?php include '../composants/header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ea6733594a.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header_contact">
        <h2>Me contacter</h2>
    </header>

    <div class="form_container">
        <div class="form_droite">
            <div class="box">
                <label for="">Nom :</label>
                <input type="text">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="box">
                <label for="">E-mail :</label>
                <input type="email">
                <i class="fa-sharp fa-solid fa-envelope"></i>
            </div>

            <div class="box">
                <label for="">Télèphone :</label>
                <input type="number">
                <i class="fa-sharp fa-solid fa-mobile"></i>
            </div>

            <div class="box">
                <label for="">Message :</label>
                <textarea></textarea>
            </div>

        </div>
        <div class="form_gauche">
            <p></p>
        </div>

        <div class="form_bas" align="center">
            <button>Envoyer le message</button>
        </div>
    </div>


    <?php include '../composants/footer.php' ?>
</body>

</html>