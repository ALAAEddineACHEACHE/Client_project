<?php
require 'Database.php';
$pdo = new Database();
$db = $pdo->getDb();
$name = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$numberkg = $_POST["numberkg"];
$date = $_POST["date"];
$coord = $_POST["coord"];
$requete =
    $db->prepare('INSERT INTO donnees(name,prenom,email,phone_number,nombre_kg,date,coord) VALUES (:name,:prenom,
:email,:phone_number,:nombre_kg,:date,:coord)');
$resultat = $requete->execute([
    'name' => $name,
    'prenom' => $prenom,
    'email' => $email,
    'phone_number' => $phone,
    'nombre_kg' => $numberkg,
    'date' => $date,
    'coord' => $coord



]);
echo ($resultat) ? 'Reussite' : "Vous devez choisir une date soit dans le premier champ soit dans le deuxieme pour enregistrer vos données,Merci. ";
