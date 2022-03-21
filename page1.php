<?php
 
include 'inc/header.php';

session_destroy();

if(isset($_POST['submit'])){

    $question1=$_POST['question1'];

    $_SESSION['question1']=$question1;

}

?>

<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">How healthy are you physically?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>




<form name="form1" action="page2.php" method="POST" onsubmit="return validateQuestion('range-slider');">  
    <div class="slider">
        <input type="range"  class="form-range" min="0" max="5" id="range-slider" value="none" name="question1" onchange="sliderChanged();">

        <input type="hidden" name="lastPageID" value="index">
        <input type="hidden" name="range-slider-changed" id="range-slider-changed">

        <h4 id="validation-warning" class="warning text-center"></h4>
    
        <div class="container">
            <div class="row align-items-start">
                <div class="col-2">Healthy what is that?</div>
                <div class="col-2">Not at all healthy</div>
                <div class="col-2">Standard could say</div>
                <div class="col-2">Good shape</div>
                <div class="col-2">Super fit</div>
                <div class="col-2">Ideal</div> 
            </div>
        </div>
    </div>    
        
    <div class="text-center button">
         <button type="submit" class="btn btn-primary mt-3"name="submit">Submit</button>
    </div>
</form>

<div class="text-center button">
    <a href="index.php">
        <button class="btn btn-primary">Back</button>
    </a>
    <a href="page2.php">
        <button class="btn btn-primary" name="next">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>





