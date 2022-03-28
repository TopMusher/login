<!DOCTYPE html>
<html>
    <head>
    <title>Teacher Dashboard</title>
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--progress bar bootstrap-->
  <style type="text/css">
body {

	margin:auto;
	padding:10px;
}
td {
	text-align:center;
	padding:10px;
  
}
table {
	margin:auto;
	border:blue 1px solid;
  width:50%;
}
label {
	font-size:12px;
	color:blue;
    font-weight: bold;
    font-family: cursive;
}
h2 {
	color:grey;
	text-align:center;
}
th {
	color:black;
	font-size:16px;
    font-family: cursive;
}

#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

table, th, td {
    border: 1px solid black;
}
</style>


</head>




<body>
<div id="overlay" onclick="off()"></div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GibJohn Tutoring</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Your Students</a></li>
          <li><a href="#">Assign a course</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Overlay <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <button onClick="on()">Red</a></button>
          <p><button onClick="on()">Orange</a></button></p>
          <p><button onClick="on()">Green</a></button></p>
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">

      
      <li><a href="log_in.php"><span class="glyphicon glyphicon-log-in"></span> Welcome back, Tutor</a></li>
      <li><a href="#"><span class=""></span>More</a></li>
    </ul>
  </div>
</nav>



<link rel="stylesheet" href="stuDash.css">
<div class="skilltree1">
  <div class="title1">
    <h2><center>TEACHER ACCOUNT</center></h2>
    <h5><center></center></h5>
</div>

<table style="center;">
  <tr>
      <td>      
          <h4><center>Your current students:</center></h4>
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, fname, sname, email, pword FROM students";
$result = $conn->query($sql);

if (!empty($result) && $result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. " " . $row["sname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

    </td>
</tr>
</div>

  
  </table>
   


<!-- Modal content -->

  
<!--code for the maths line-->



<!--Displaying the students in the database--> 

<!--
<table border="1" cellspacing="5" cellpadding="5" width="100%">
	<thead>
		<tr>
			<th>No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>User Name</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
-->
<!--
<?php




require_once('C:\xampp\htdocs\Task-2-logan\libraries\db.php');
$result = $conn->prepare("SELECT * FROM loginsystem ORDER BY id ASC");
$result->execute();
for ($i=0; $row = $result->fetch(); $i++){

  ?>
  <tr>
    <td>
      <label><?php echo$row['id'];?></label></td>
      <td><label><?php echo$row['fname'];?></label></td>
      <td><label><?php echo$row['sname'];?></label>
    </td>
  </tr>
<?php } ?>

</tbody>

</table>

-->


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
