<?php include 'inc/header.php'; 



$_SESSION['question4']=$_POST['question4'];
$_SESSION['question4text']=$_POST['question4text'];



if(isset($_POST['submit'])){

    $question5=$_POST['question5'];

    $_SESSION['question5']=$question5;

}

?>

<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">Do you feel you do too little, just enough or way too much additional physical activity?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>

<form action="page6.php" method="POST" onsubmit="return validateQuestion('range-slider');">
    <div class="slider">
        <input type="range" class="form-range" min="0" max="5" id="range-slider" value="none" name="question5" onchange="sliderChanged();">
        
        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">

        <h4 id="validation-warning" class="warning text-center"></h4>
        
        <div class="container">
            <div class="row align-items-start">
                <div class="col">Far too little</div>
                <div class="col">Just right</div>
                <div class="col">Always giving more</div>
                <div class="col">A lot</div>
                <div class="col">Far too much</div>
            </div>
        </div>
    </div>
    <div class="text-center button">
         <button type="submit" class="btn btn-primary mt-3"name="submit">Submit</button>
    </div>
</form>

<div class="text-center button">
    <a href="page4.php">
        <button class="btn btn-primary">Back</button>
    </a>
    <a href="page6.php">
        <button class="btn btn-primary" name="next">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>