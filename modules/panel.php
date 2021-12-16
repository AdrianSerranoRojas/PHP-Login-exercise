<?php
session_start();

if( isset ($_SESSION["email"]) ){
    echo "Logged in";
    echo "<br>";
    echo "<br>";
    echo "<form action='./close_session.php' method='POST'>";
    echo "<button type='submit' class='btn btn-primary'>Log Out</button>";
    echo "</form>";
}else{
    header("Location:../index.php?variable=1");
    // echo "private section";
    // echo "<form action='../index.php' method='POST'>";
    // echo "<button type='submit' class='btn btn-primary'>go to Index</button>";
    // echo "</form>";
}