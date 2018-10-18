<?php
$voornaam = $achternaam = $geboortedatum = $adres = $postcode = $plaats = $telefoonnummer = $email =
$ouder1 = $ouder2 = $medisch = $nood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $voornaam = test_input($_POST["voornaam"]);
  $achternaam = test_input($_POST["achternaam"]);
  $geboortedatum = test_input($_POST["geboortedatum"]);
  $adres = test_input($_POST["adres"]);
  $postcode = test_input($_POST["postcode"]);
  $plaats = test_input($_POST["plaats"]);
  $telefoonnummer = test_input($_POST["telefoonnummer"]);
  $email = test_input($_POST["email"]);
  $ouder1 = test_input($_POST["ouder1"]);
  $ouder2 = test_input($_POST["ouder2"]);
  $medisch = test_input($_POST["medisch"]);
  $nood = test_input($_POST["nood"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>