<!DOCTYPE html>
<html>
    <head>
    <title>test</title>
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--progress bar bootstrap-->
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GibJohn Tutoring</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Content <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Your Content</a></li>
          <li><a href="#">New Content</a></li>
          <li><a href="#">Feedback from you</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Overlay <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <button><a id="overlay" onClick="on()">Red</a></button>
          <li><a href="#">Green</a></li>
          <li><a href="#">Orange</a></li>
        </ul>
      </li>
      <li><a href="StudentAssignments.php">Your assignments</a></li>
      <li><a href="#"><span class=""></span>Shop</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">

      
      <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Welcome back, name</a></li>
      <li><a href="#"><span class=""></span>More</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <h4><center>Current Task Progress</center></h4>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</div>

<link rel="stylesheet" href="stuDash.css">
<div class="skilltree1">
  <div class="title1">
    <h2><center>TEACHER ACCOUNT</center></h2>
    <h5><center></center></h5>
</div>

<!--task options-->

<div class="fillerImg1">
  <img src="filler_img.JPG">
</div>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</body>
</html>