<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=htmlspecialchars($_POST["firstname"]);
    $lastname=htmlspecialchars($_POST["lastname"]);
    $mascot = htmlspecialchars($_POST["favMascot"]);

    if (empty($firstname) || empty($lastname) || empty($mascot)){
        exit();
    }


    echo "This is the data submited";
    echo "<br>";
    echo "".$firstname."".$lastname."".$mascot;
    echo "<br>";
    
    header("Location: ../index.php");

}
else{
    header("Location: ../index.php");
}