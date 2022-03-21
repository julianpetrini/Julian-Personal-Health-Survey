<?php include 'inc/header.php'; 



$_SESSION['question1']=$_POST['question1'];



if(isset($_POST['submit'])){

    $question2=$_POST['question2'];

    $_SESSION['question2']=$question2;

}

?>


<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">Do you take nutritional supplements?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>

<form action="page3.php"method="POST" onsubmit="return validateQuestion('single-choice-0', 'question2');"> 
    <div class="containered">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question2" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0"><h4>YES</h4></label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question2" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1"><h4>NO</h4></label>
        </div>
    </div>

    <input type="hidden" name="lastPageID" value="question2">
    <h4 id="validation-warning" class="warning text-center"></h4>

    <div class="text-center button">
         <button type="submit" class="btn btn-primary mt-3"name="submit">Submit</button>
    </div>
</form>

<div class="text-center button">
    <a href="page1.php">
        <button class="btn btn-primary"name="back">Back</button>
    </a>
    <a href="page3.php">
        <button class="btn btn-primary" name="next">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>