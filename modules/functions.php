<?php
function checkSession(){
    session_start();
    $urlFile = basename($_SERVER['REQUEST_URI'],'?'.$_SERVER['QUERY_STRING']);
    $urlFile1 = $_SERVER['REQUEST_URI'];
    $urlFile2 = $_SERVER['QUERY_STRING'];
    print_r($urlFile1);
    echo "<br>";
    print_r($urlFile2);
    echo "<br>";
    print_r ($urlFile);
    echo "<br>";
}

function authUser(){
    session_start();
    $email = $_POST["email"];
    $pass = $_POST["password"];

    if(checkUser($email, $pass)){
        $_SESSION["email"] = $email;
        header("Location:./panel.php");
    }else {
        header("Location:./panel.php");
    }
}

function checkUser(string $email, string $pass){
    $emailDb = "adri@adri.com";
    $passDb = "adri";
    if($email == $emailDb && $pass == $passDb){
        return true;
    }else {
        return false;
    }
}