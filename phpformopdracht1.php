<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aanmelden leerling OBS Het Piratenschip</title>
    <link rel="stylesheet" type="text/css" href="formopdracht1.css">

</head>
<body>
    <?php include ("validation2.php"); ?>
    <div class="container">
    <p><h2> Welkom bij OBS het Piratenschip<br>
    <i>nieuwe leerling aanmelden</i></h1></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">    
        Voornaam Leerling:<br>
        <input type="text" name="voornaam" placeholder="voornaam leerling" tabindex="1"autofocus><br>
        Achternaam leerling:<br>
        <input type="text" name="achternaam" placeholder="achternaam leerling" tabindex="2"><br>
        Geboortedatum:<br>
        <input type="text" name="geboortedatum" placeholder="geboortedatum" tabindex="3"><r>
        Adres:<br>
        <input type="text" name="adres" placeholder="adres" tabindex="4"><br>
        Postcode:<br>
        <input type="text" name="postcode" placeholder="postcode" tabindex="5"><br>
        Plaats:<br>
        <input type="text" name="plaats" placeholder="plaats" tabindex="6"><br>
        Telefoonnummer:<br>
        <input type="tel" name="telefoonnummer" placeholder="telefoonnummer" tabindex="7"><br>
        Email:<br>
        <input type="email" name="email" placeholder="email" tabindex="8"><br>
        Naam ouder of voogd:<br>
        <input type="text" name="ouder1" placeholder="ouder/voogd" tabindex="9"><br>
        Naam ouder of voogd:<br>
        <input type="text" name="ouder2" placeholder="ouder/voogd" tabindex="10"><br>
        Medische bijzonderheden:<br>
        <input type="text" name="medisch" placeholder="medische gegevens" tabindex="11"><br>
        In geval van nood:<br>
        <input type="text" name="nood" placeholder="in geval van nood" tabindex="12"><br>
        <button name="submit" type="submit" id="contact-submit" data-submit="..versturen">Versturen</button>
    </form>    
    </div>    



</body>
</html>