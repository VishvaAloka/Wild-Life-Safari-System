<!DOCTYPE html>
<html>

<head>
  <title>Gallary</title>
  <link rel="stylesheet" type="text/css" href="../css/gallary.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>

<div class = "full-img" id = "fullImgBox">
    <img src = "../images/gallary1.jpg" id ="fullImg">
    <span onclick="closeFullImg()">X</span>
</div>
<div class = "img-gallary">
  <img src = "../images/lion.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/lepord.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/tiger.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/cheetah.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/elephant.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/eagle.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/swan.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/ostrich.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/bhison.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/flamingos.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/rhino.jpg" onclick="openFullImg(this.src)">
  <img src = "../images/kingfisher.jpg" onclick="openFullImg(this.src)">




</div>

<?php
  include '../components/footer.php'
  ?>

<script>

      var fullImgBox = document.getElementsById("fullImgBox");
      var fullImg = document.getElementById("fullImg");

      function openFullImg(pic){
        fullImgBox.style.display="flex";
        fullImg.src = pic;
      }

      function openFullImg(pic){
        fullImgBox.style.display="none";
      }

</script>

</body>
</html>