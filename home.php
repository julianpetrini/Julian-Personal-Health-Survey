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
<body>
    <?php include 'inc/header.php'; ?>

    <!--HEADER WITH BACKGROUND IMG-->

    <header>
 

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('img/universities-healthy-habits.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-1">“...Let the food be the medicine and the medicine be the food...”</h1>
          <h4 class="mb-3">Hippocrates</h4>
          <a class="btn btn-outline-light btn-lg" href="page1.php" role="button"
          >go to survey</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>



    <!--END HEADER -->

    <div class="main-content">
     
   

    </div>

<!--CARDS -->

<div class="card-group">
  <div class="card">
    <img src="img/run.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">Exercise</h5>
      <p class="card-text">
       Activity that enhances or maintains physical fitness and overall health and wellness. It is performed for various reasons, to aid growth and improve strength, prevent aging, develop muscles and the cardiovascular system, hone athletic skills, weight loss or maintenance, improve health, or simply for enjoyment. Many individuals choose to exercise outdoors where they can congregate in groups, socialize, and improve well-being as well as mental health.
      </p>
    </div>
  </div>
  <div class="card">
    <img src="img/eat.jpg" class="card-img-top" alt="Palm Springs Road"/>
    <div class="card-body">
      <h5 class="card-title">Healthy Eating</h5>
      <p class="card-text">An eating plan that helps manage your weight includes a variety of healthy foods. Add an array of colors to your plate and think of it as eating the rainbow. Dark, leafy greens, oranges, and tomatoes—even fresh herbs—are loaded with vitamins, fiber, and minerals. Adding frozen peppers, broccoli, or onions to stews and omelets gives them a quick and convenient boost of color and nutrients.</p>
      
    </div>
  </div>
  <div class="card">
    <img src="img/sleep.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
    <div class="card-body">
      <h5 class="card-title">Quality in the Sleeping</h5>
      <p class="card-text">
      Studies show getting quality sleep on a regular basis can help improve all sorts of issues, from your blood sugar to your workouts. When you're running low on sleep, you'll probably have trouble holding onto and recalling details. That's because sleep plays a big part in both learning and memory. Without enough sleep, it's tough to focus and take in new information. Your brain also doesn't have enough time to properly store memories so you can pull them up later.

Sleep lets your brain catch up so you're ready for what's next.
      </p>
      
    </div>
  </div>
</div>
<!--CARDS -->

<!--SUSCRIPTION FORM-->
<div
    class="p-5 text-center bg-image"
    style="background-image: url('img/universities-healthy-habits.jpg');
      height: 400px; padding:3rem;"
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.1);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 display-1">Why don't you join us for a quick quiz and start to learn more about you?</h1>
          
        </div>
      </div>
    </div>
  </div>





  

<!--END SUSCRIPTION FORM-->

    <?php include 'inc/footer.php';?>

    
</body>
</html>