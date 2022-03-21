<?php

function printAgeImageTag() {

    $sport = $_SESSION['question4'];

 

    switch ($sport) {

    case "lifting":
        echo "<div class='img-responsive'>
                <img src='/img/lifting.jpg'>
            </div>";
        break;

    case "Weights":
        echo "<div class='img-responsive'>
                <img src='/img/weight.jpg'>
            </div>";
        break;

    case "Walking":
        echo "<div class='img-responsive'>
                <img src='/img/walking.png'>
            </div>";
        break;

    case "Jogging":
        echo "<div class='img-responsive'> 
            <img src='/img/running.jpg>
            </div>";
        break;

    case "Running":
        echo "<div class='img-responsive'> 
                <img src='/img/running1.jpg'>
            </div>";
        break;

    case "Swimming":
        echo "<div class='img-responsive'>
        <img src='/img/swim.jpg'>
        </div>";
        break;

    case "Dancing":
        echo "<div class='img-responsive'>
        <img src='/img/dancing.jpg'>
        </div>";
        break;

    case "Aerobics":
        echo "<div class='img-responsive'>
        <img src='/img/aerobics.jpg'>
        </div>";
        break;

    case "Pilates":
        echo "<div class='img-responsive'>
        <img src='/img/pilates.png'>
        </div>";
        break;
    case "Team sports":
        echo "<div class='img-responsive'>
        <img src='/img/teamsports.jpg'>
        </div>";
        break;
        
    case "no-additional-sport":
        echo "<div class='img-responsive'>
                <img src='/img/nosport.jpg'>
            </div>";
        break;

    case "":
            echo "<div class='img-responsive'>
                    <img src='/img/coder.jpg'>
                </div>";
            break;
}
}

$text=$_SESSION['question4text'];

if($_SESSION['question4text']!=""){

    
echo "<h4 class='mb-3 text-center'>This is what you've written: $text</h4>";
}
else{
    echo "<h4 class='mb-3 text-center'>You did not wrote anything</h4>";
   
}

?>
