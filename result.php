<body>

    <?php include 'inc/header.php'; ?>

    <div class="title-rs">
        <p>Welcome <?php echo $_POST["name"]; ?></p>
        <br><br>
    </div>

    <div class="text-rs">

        <?php
        session_start();

        $age = $_POST["age"];
        $color = $_POST["color"];

        $_SESSION["age"] = $age;
        $_SESSION["color"] = $color;

        //?????? WHAT THE FUCK
        $_SESSION["last-post"] = $_POST;


        echo "Your age is: " . $age;
        echo "<br>";

        include "inc/utils.php";

        printAgeImageTag();
        echo "<br>";
        echo "<br>";

        echo "Your favourite color is: " . $color;
        echo "<br>";

        echo "<div style = 'width:50px; height:50px; background-color:$color;' ></div>";

        echo "<a href = 'color.php;' >Next</a>";

        echo "<br>";
        echo "<br>";
        ?>

        Your email adress is: <?php echo $_POST["email"]; ?><br><br>

    </div>

    <?php include 'inc/footer.php'; ?>


</body>


