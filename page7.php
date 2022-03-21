<?php include 'inc/header.php'; 



$_SESSION['question6']=$_POST['question6'];



if(isset($_POST['submit'])){

    $question7=$_POST['question7'];

    $_SESSION['question7']=$question7;

}

?>

<header>
    <div class="p-5 text-center bg-image"style="background-image: url('img/universities-healthy-habits.jpg');height: 27 0px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3 display-1">On a typical day, how many of your meals or snacks contain protein?</h1>
                </div>
            </div>
        </div> 
    </div>
</header>

<form action="page8.php" method="POST" onsubmit="return validateQuestion('number-text');">
    <div class="center-number">
        <div class="form-outline w-100 p-2">
            <label class="form-label" for="typeNumber"><h2>Select an option</h2></label>
            <input type="number" id="number-text" class="form-control" name="question7">
            
            <input type="hidden" name="lastPageID" value="question7">
            <h4 id="validation-warning" class="warning text-center"></h4>
        </div>
    </div>
    <div class="text-center button">
         <button type="submit" class="btn btn-primary mt-3"name="submit">Submit</button>
    </div>
</form>
<div class="text-center button">
    <a href="page6.php">
        <button class="btn btn-primary">Back</button>
    </a>
    <a href="page8.php">
        <button class="btn btn-primary">Next</button>
    </a>
</div>
<?php include 'inc/footer.php';?>