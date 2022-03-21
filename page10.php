<?php include 'inc/header.php'; 



$_SESSION['question9']=$_POST['question9'];



if(isset($_POST['submit'])){

    $question10=$_POST['question10'];

    $_SESSION['question10']=$question10;

}

?>

<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">On a typical day, how many of your meals are microwaved or prepared?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>

<form action="result.php" method="POST" onsubmit="return validateQuestion('number-text');">
    <div class="center-number">
        <div class="form-outline w-100 p-2">
            <label class="form-label" for="typeNumber"><h2>Number input</h2></label>
            <input type="number" id="number-text" class="form-control" name="question10">
            
            <input type="hidden" name="lastPageID" value="question10">
            <h4 id="validation-warning" class="warning text-center"></h4>
        </div>
    </div>
    <div class="text-center button">
         <button type="submit" class="btn btn-primary"name="submit">Submit</button>
    </div>
</form>


<div class="text-center button">
    <a href="page9.php">
        <button class="btn btn-primary">Back</button>
    </a>
    <a href="result.php">
        <button class="btn btn-primary">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>