<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Health Survey Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<div class="slider">
    <label for="customRange2" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" id="customRange2">

</div>

<form action="/result.php" method="post">

<label for="name">Name:</label>
<input type="text"id="name" name="name"><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email"><br>


<a href="page2.php">NEXT</a>
<!-- <button type="submit">SEND INFO</button> -->


</form>