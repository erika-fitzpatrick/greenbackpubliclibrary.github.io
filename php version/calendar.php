<!DOCTYPE html>
<html>
<head>
<title>Greenback Public Library | Calendar</title>
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
    <h3>Upcoming Events at Greenback Public Library</h3>
      </br>
      <iframe src="https://calendar.google.com/calendar/embed?src=en.usa%23holiday%40group.v.calendar.google.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </br></br>
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<?php
  include("footer.php");
?>

</body>
</html>
