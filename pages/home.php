<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>
  <div class="slider">
        <figure>
            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/lion.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/tiger.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/lepord.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/elephant.jpg">
            </div>

            <div class="slide">
                <!-- <p>Image one</p>-->
                <img src="../images/cheetah.jpg">
            </div>
        </figure>
  </div>


  <br>
  <div class="promotions-container">
    <div class="promotion">
      <img src="../images/flamingos.jpg" alt="Promotion 1">
    </div>
    <div class="promotion">
      <img src="../images/eagle.jpg" alt="Promotion 2">
    </div>
  </div>

  <div class="smoke">
    <section class="features">
      <div class="feature-item">
        <img src="../images/zebras&giraffs.jpg">
      </div>
      <div class="feature-item">
        <img src="../images/panda.jpg">
      </div>
      <div class="feature-item">
        <img src="../images/chameleon.jpg">
      </div>
    </section>
  </div>


  <?php
  include '../components/footer.php'
  ?>
</body>

</html>