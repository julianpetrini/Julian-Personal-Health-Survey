<?php

function printAgeImageTag() {

    $age = $_SESSION["age"];

    echo"<div>";

    switch ($age) {

    case "18":
        echo "<img src='/img/pic-18.jpeg'>";
        break;

    case "19":
        echo "<img src='/img/pic-19.jpeg'>";
        break;

    case "20":
        echo "<img src='/img/pic-20.png'>";
        break;

    case "21":
        echo "<img src='/img/pic-21.png'>";
        break;

    case "22":
        echo "<img src='/img/pic-22.png'>";
        break;

    case "23":
        echo "<img src='/img/pic-23.jpeg'>";
        break;
}
}



echo "<br>";
echo "<br>";
?>
