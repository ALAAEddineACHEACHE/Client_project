<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<?php

$to      = 'alae@gmail.com';
$subject = 'hey You';
$message = 'Can you identify me :P';
$headers = 'From: alaedine@gmail.com' . "\r\n" .
    'Reply-To: alaedine@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light active">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Contact Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <form class="d-flex" style="margin-left:90%;">
                    <boutton class="btn btn-outline-success" type="submit" value="submit" name="submit" id="submit" onclick="location.href = 'connexion.php';">Se connecter</boutton>

                </form>
            </div>
        </div>
    </nav>
    <section class=" get_in_touch">
        <h1 class="title">Contact</h1>
        <div class="container">
            <form action="test.php" method="post">
                <div class="contact-form row">
                    <div class="form-field col-lg-6">
                        <input type="text" name="nom" id="name" class="input-text">
                        <label for="name" class="label">Nom</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="text" name="prenom" id="prenom" class="input-text">
                        <label for="prenom" class="label">Prenom</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="email" name="email" id="email" class="input-text">
                        <label for="email" class="label">email</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="phone" name="phone" class="input-text" id="phone">
                        <label for="phone" class="label">Phone number</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="text" name="numberkg" id="nombrekg" class="input-text" required>
                        <label for="nombrekg" class="label">Nombre de Kg (3.5€/Kg)</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="time" id="date" name="date" min="09:00" max="12:00" class="input-text">
                        <label for="date" class="label">Date(Matin)</label>
                    </div>
                    <div class="form-field col-lg-6">
                        <input type="time" id="date" name="date" min="14:00" max="18:00" class="input-text">
                        <label for="date" class="label">Date(Après-midi)</label>
                    </div>

                    <div class="form-field col-lg-6">
                        <input type="text" name="coord" id="coord" class="input-text">
                        <label for="coord" class="label">Coordonnées</label>
                    </div>
                    <span style="text-decoration: underline;">Note: La date choisie doit être entre 8h jusqu'à 12h(midi) dans le premier champ sinon entre 14h et 18h dans le deuxieme champ.
                        <br><i>Choisissez une seule date soit le premier champ ou le deuxieme.</i></span>
                    <div class="form-field col-lg-12">
                        <input class="submit-btn" type="submit" value="submit" name="submit" id="submit" />
                    </div>

                </div>
            </form>
        </div>
    </section>









    <!-- bootstrap -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- bootstrap -->
</body>

</html>