<?php

$voornaam = $achternaam = $geboortedatum = $adres = $postcode = $plaats = $telefoonnummer = $email =
$ouder1 = $ouder2 = $medisch = $nood = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["voornaam"])) {
        $name_error = "verplicht veld";
    } else {
        $firstname = test_input($_POST["voornaam"]);
        // check if firstname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $voornaam)) {
            $name_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["achternaam"])) {
        $name_error = "verplicht veld";
    } else {
        $lastname = test_input($_POST["achternaam"]);
        // check if lastname only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $achternaam)) {
            $name_error = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["geboortedatum"])) {
        $name_error = "verplicht veld";
    } else {
        $adress = test_input($_POST["geboortedatum"]);
        // check if adress only contains letters numbers and whitespace
        if (!preg_match("'%\A(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d\z%", $geboortedatum)) {
            $name_error = "Date incorrectly formated";
        }
    }

    if (empty($_POST["adres"])) {
        $name_error = "verplicht veld";
    } else {
        $postalcode = test_input($_POST["adres"]);
        // check if postalcode only contains letters numbers and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $adres)) {
            $name_error = "Only letters numbers and white space allowed";
        }
    }

    if (empty($_POST["postcode"])) {
        $name_error = "verplicht veld";
    } else {
        $residence = test_input($_POST["postcode"]);
        // check if residence only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $postcode)) {
            $name_error = "Only letters numbers and white space allowed";
        }
    }

    if (empty($_POST["plaats"])) {
        $name_error = "verplicht veld";
    } else {
        $birthdate = test_input($_POST["birthdate"]);
        // check if birthdate only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $plaats)) {
            $name_error = "Only letters numbers and white space allowed";
        }
    }

    if (empty($_POST["telefoonnummer"])) {
        $phone_error = "verplicht veld";
    } else {
        $phone = test_input($_POST["telefoonnummmer"]);
        // check if phonenumbers address is well-formed
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$telefoonnummer)){
            $phone_error = "Invalid phone number";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "verplicht veld";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }

    if (empty($_POST["ouder1"])) {
        $name_error = "verplicht veld";
    } else {
        $birthdate = test_input($_POST["ouder1"]);
        // check if birthdate only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $ouder1)) {
            $name_error = "Only letters numbers and white space allowed";

    if (empty($_POST["ouder2"])) {
        $name_error = "verplicht veld";
    } else {
        $birthdate = test_input($_POST["ouder2"]);
        // check if birthdate only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $ouder2)) {
            $name_error = "Only letters numbers and white space allowed";

    if (empty($_POST["medisch"])) {
        $name_error = "verplicht veld";
    } else {
        $birthdate = test_input($_POST["medisch"]);
        // check if birthdate only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $medisch)) {
            $name_error = "Only letters numbers and white space allowed";

    if (empty($_POST["nood"])) {
        $name_error = "verplicht veld";
    } else {
        $birthdate = test_input($_POST["nood"]);
        // check if birthdate only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9]*$/", $nood)) {
            $name_error = "Only letters numbers and white space allowed";        

    if ($name_error == '' and $email_error == '' and $phone_error == ''){

        $user_name = "root";
        $password = "12345678";
        $database = "school";
        $server = "localhost";

        $conn = new mysqli("$server","$user_name","$password","$database");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $firstname = $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $address = $_POST['adress'];
        $postal_code = $_POST['postalcode'];
        $residence = $_POST['residence'];
        $birthdate = $_POST['birthdate'];
        $phonenr = $_POST['phonenr'];
        $e_mail = $_POST['email'];


        $sql = "INSERT INTO school ( naam, achternaam, adres, postcode, woonplaats, geb_datum, phonenr, email ) VALUES ('$firstname','$lastname','$address','$postal_code','$residence','$birthdate',''$phonenr','$e_mail')";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>