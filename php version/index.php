<!DOCTYPE html>
<html>
<head>
<title>Greenback Public Library</title>
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
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="assets/library.jpg" alt="Library" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-container w3-white w3-padding-16">
      <h3 class="w3-center">What would you like to find?</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <input class="w3-input w3-border" type="text" placeholder="Search">
        </div>
        <div class="w3-half">
          <button class="w3-button w3-dark-grey">Search the catalog</button>
          <button class="w3-button w3-dark-grey">Search the site</button>
        </div>
      </div>
      <p></p>
    </div>

</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Welcome -->
  <div class="w3-container w3-margin-top">
    <h3>Welcome to Greenback Public Library!</h3>
    <h6>[welcome message from the director]</h6>
    <h5 style="text-align:right">Jordan Baker, Library Director</br></br></h5>
  </div>

  <!-- Hours, Location, and Events -->
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-container w3-white">
        <h3 style="text-align:center">Location & Hours</h3>
        <p>Hours:</p>
        <p class="w3-opacity">Tuesday through Friday 9:00-5:00</p>
        <p>Address:</p>
        <p class="w3-opacity">6889 Morganton Rd, Greenback, TN 37742</p>
        <p>Phone Number:</p>
        <p class="w3-opacity">(865) 856-2841</p>
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
      <div class="w3-container w3-white">
        <h3 style="text-align:center">Upcoming Events</h3>
        <p>Regularly scheduled events will be highlighted here.</p>
        <p class="w3-opacity">Check out the events page or calendar for more events and details!</p>
        <button class="w3-button w3-margin-bottom w3-right"><i class="fa fa-calendar"></i> Events Calendar</button>
      </div>
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
