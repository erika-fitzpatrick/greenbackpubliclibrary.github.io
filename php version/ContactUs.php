<!DOCTYPE html>
<html>
<head>
<title>Greenback Public Library | Contact Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<?php
  include("navbar.php");
?>

<!-- Header -->
<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="assets/banner.jpg" alt="Library" width="1500" height="300">
</header>
<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Welcome -->
  <div class="w3-container w3-margin-top">
    <h3>Contact Greenback Public Library</h3>
    <div class="w3-container w3-margin-top w3-half">
      <h5>Have a question for the library? You can call us at (865) 856-2841, <a target="_blank" href="mailto:bakerj@loudoncounty-tn.gov">email library director Jordan Baker</a>, or send us a message using our "Ask the Librarian" form.</h5>
      <img class="w3-image w3-hide-small" src="assets/director.jpg" alt="Library" width="1500" height="300">
    </div>
    <div class="w3-container w3-margin-top w3-half">
      <h5>Ask the Librarian:</h5>
      <form action="mailto:bakerj@loudoncounty-tn.gov" method="post" enctype="text/plain">
        <h6>Name: <input type="text" name="name" style="width: 100%" required></h6>
        <h6>Email: <input name="mail" type="email" style="width: 100%" required></h6>
        <h6>Library Card Number (optional):</h6>
        <input type="text" name="accountnumber" style="width: 100%"><br>
        <h6>Message:<br></h6>
        <textarea type="text" name="comment" style="width: 100%" rows="5" required></textarea><br><br>
        <input type="submit" value="Send">
      </form>
      </br></br>
    </div>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<?php
  include("footer.php");
?>

</body>
</html>
