<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars ($_POST["emailaddress"]);
    
    header("location:../index.html")
}