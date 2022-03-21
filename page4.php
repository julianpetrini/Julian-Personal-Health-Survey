<?php include 'inc/header.php'; 



$_SESSION['question3']=$_POST['question3'];



if(isset($_POST['submit'])){

    $question4=$_POST['question4'];

    $_SESSION['question4']=$question4;

    $question4text=$_POST['question4text'];

    $_SESSION['question4text']=$question4text;

}

?>


<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">What additional physical activity do you do most?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>





<form action="page5.php" method="POST" onsubmit="return validateQuestion('question4', 'question4');">

    <div class="containered">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="question4" id="question4" value="no-additional-sport">
            <label class="form-check-label" for="question41">No additional physical activity</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="lifting">
                <label class="form-check-label" for="question42">Lifting</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Weights">
                <label class="form-check-label" for="question42">Weights</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Walking">
                <label class="form-check-label" for="question42">Walking</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Jogging">
                <label class="form-check-label" for="question42">Jogging</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Running">
                <label class="form-check-label" for="question42">Running</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Swimming">
                <label class="form-check-label" for="question42">Swimming</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Dancing">
                <label class="form-check-label" for="question42">Dancing</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Aerobics">
                <label class="form-check-label" for="question42">Aerobics</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Pilates">
                <label class="form-check-label" for="question42">Pilates</label>
        </div>
        <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question4" id="question4"  value="Team sports">
                <label class="form-check-label" for="question42">Team sports</label>
            </div>
        <div class="containered ">
            <div class="form-group w-100 text-center">
                <label for="comment"><h4>Comment</h4></label>
                <textarea class="form-control" rows="5" id="comment" name="question4text"></textarea>
            </div>
        </div>
    </div>

    <input type="hidden" name="lastPageID" value="question4">
    <h4 id="validation-warning" class="warning text-center"></h4>

    <div class="text-center button">
         <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
        </div>
</form>

<div class="text-center button">
    <a href="page3.php">
        <button class="btn btn-primary">Back</button>
    </a>
    <a href="page5.php">
        <button class="btn btn-primary" name="next">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>