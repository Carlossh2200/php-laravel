<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=htmlspecialchars($_POST["firstname"]);
    $lastname=htmlspecialchars($_POST["lastname"]);
    $mascot = htmlspecialchars($_POST["favMascot"]);

    echo "This is the data submited";
    echo "<br>";
    echo "".$firstname."".$lastname."".$mascot;

}