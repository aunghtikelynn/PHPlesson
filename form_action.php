<?php
    var_dump($_POST);
    //Super Global Variable $_
    // $_REQUEST, $_SEVER, $_GET, $_POST

    // $name = $_GET["name"];
    // $email = $_GET["email"];
    // $password = $_GET["password"];

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $photo = $_FILES["photo"];

    echo "<h1>$name and $email and $password </h1>";
    print_r($photo);
?>