<!DOCTYPE html>
<html>

<head>
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="../css/feedback.css">
  <link rel="stylesheet" type="text/css" href="./style/footer&header.css">
  <script src="./myScript.js"></script>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>


<div class="wrapper">
  <div class="review-form">
    <h2>Write a Feedback</h2>
    <textarea id="reviewText" placeholder="Write your feedback here"></textarea>
  </div>
  <div>
    <button id="submitReview">Submit</button>
  </div>
  <div class ="Content">
    <h1>Feedbacks</h1>
    <ul id="reviewList" class="review-list">
      <li>While booking tickets for any movie this website FilmLane.com is a great help. 
      It is easy to book through this portal as time is saved and tickets are booked from the comfort of your house. 
      Highly recommended!".</li>
      <li>"This is a very nice site FilmLane.com and hies site is help to book movies tikect and shows tickets also.
      This site are most use to book tickets and all things and I really liked this site so much. It is very popular and provide good services.
      This site also provide easy payment mathod to book tickets and I really happy to use this FilmLane.com.I wanna also use this site and hies site also provide FilmLane app on android and ios operating systems.
      Overall this is easy to book tickets and enjoy watch movie.Thank you."</li>
      <li>t is very good website to book your tickets for movies with out wasting time and money for petrol,going to theater and standing in line is very boring .
      So better use this app friends it also has my wallet option in which you can save your money so you can pay instantaneous .
      We can also book many other things like camps , festivals , audio launches etc . . . . . . . .
      I only buy movie tickets but it is good for other things also it has an app too which is also a good one.So friends better go for this to save lotof money and time .
      I recommend this to every one .</li>

    </ul>
  </div>
</div>


<script>
  // Get references to HTML elements
  var reviewText = document.getElementById('reviewText');
  var submitButton = document.getElementById('submitReview');
  var reviewList = document.getElementById('reviewList');

  // Add event listener to the submit button
  submitButton.addEventListener('click', function() {
    // Get the review text value
    var text = reviewText.value;

    // Create a new list item for the review
    var listItem = document.createElement('li');
    listItem.innerText = text;

    // Append the new list item to the review list
    reviewList.appendChild(listItem);

    // Clear the review text area
    reviewText.value = '';
  });
</script>

<?php
  include '../components/footer.php'
  
  ?>

</body>
</html>