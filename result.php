<!--    
    THIS IS WHAT I USED TO CHECK IF THE INFO WAS SAVED IN A PROPER WAY

    echo "This is the answer : " . $_SESSION['question1'] ."<br>"; 
    echo "This is the answer : " . $_SESSION['question2']."<br>";
    echo "This is the answer : " . $_SESSION['question3']."<br>";
    echo "This is the answer : " . $_SESSION['question4']."<br>";
    echo "This is the answer : " . $_SESSION['question5']."<br>";
    echo "This is the answer : " . $_SESSION['question6']."<br>";
    echo "This is the answer : " . $_SESSION['question7']."<br>";
    echo "This is the answer : " . $_SESSION['question8']."<br>";
    echo "This is the answer : " . $_SESSION['question9']."<br>";
    echo "This is the answer : " . $_SESSION['question10']."<br>";

    echo "ESTA ES EL TEXTO " . $_SESSION['question4text']."<br>"; 

-->


<?php include 'inc/header.php'; 
$_SESSION['question10']=$_POST['question10'];
?>


<?php 








    $a=array($_SESSION['question1'],$_SESSION['question2'],$_SESSION['question3'],$_SESSION['question5'],$_SESSION['question6'],$_SESSION['question7'],$_SESSION['question8'],$_SESSION['question9'],$_SESSION['question10']);
    //echo "esta es la suma de todo " .array_sum($a);


    
    if (array_sum($a)<1)
    {
        echo "<h1 class='mb-3 text-center texto-up'>Welcome</h1>";
        
    }
    else if (array_sum($a) <5){
        echo "<h1 class='mb-3 text-center texto-up'>You should improve your health routines</h1>";
    }

    else {
        echo "<h1 class='mb-3 text-center texto-up'>You are in a good shape</h1>";
    }

    

    include 'inc/utils.php';
    printAgeImageTag();
    echo "<br>";
    


?>

<div class="text-blue text-center">
    <h4 class="mb-3">Press the button twice to delete session</h4>
</div>
<div class="text-center button">
    <form action="result.php" method="POST">
        <button class="btn btn-primary" type="submit"name="delete" >Delete</button>
    </form>
</div>

<div class="text-center button">
    <a href="index.php">
        <button class="btn btn-primary">Home</button>
    </a>
    <a href="contact.php">
        <button class="btn btn-primary">Contact</button>
    </a>
</div>



<?php 
if(isset($_POST['delete'])){

session_destroy();
}
?>

<?php include 'inc/footer.php';?>