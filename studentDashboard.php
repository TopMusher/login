<!DOCTYPE html>
<html>
    <head>
    <title>Student Dashboard</title>
            <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--progress bar bootstrap-->
  <style> 
    .icon-bar {
    position: fixed;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 16px;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
    background: #3B5998;
    color: white;
}

.twitter {
    background: #55ACEE;
    color: white;
}

.google {
    background: #dd4b39;
    color: white;
}

.linkedin {
    background: #007bb5;
    color: white;
}

.youtube {
    background: #bb0000;
    color: white;
}

.content {
    margin-left: 75px;
    font-size: 30px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GibJohn Tutoring</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Content <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="studentContent.php">Your Content</a></li>
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
    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <span class="sr-only">30% Complete</span>
    </div>
  </div>
</div>

<link rel="stylesheet" href="stuDash.css">
<div class="skilltree1">
  <div class="title1">
    <h2><center>Carry on the Adventure!</center></h2>
    <h5><center>Choose your task below</center></h5>
</div>
</div>

<!--task options-->
<table style="margin-left: 30px; margin-right: 30px; float: leftt">
  <tr>
      <td>
        <div class="fillerImg1">
          <div class="engLang">
          <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">   
            <span class="close">&times;</span>
            <h2>English Language assessment:</h2>
            <p>Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
            <input type="textbox"/>
            <p>Question 2: Lorem ipsum dolor sit amet, consectetur adipiscing?</p>
            <input type="textbox"/>
            <p>Question 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit.?</p>
            <input type="textbox"/>
            <p>Question 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat ac.?</p>
            <input type="textbox"/>
            <p>Question 5: Lorem ipsum dolor sit amet.?</p>
            <input type="textbox"/>
            <p><button type="submit" style=margin-top:10px>Submit</button></p>
          </div>
</div>
          <a id="myBtn">
          <img src="https://maxcdn.icons8.com/Share/icon/ios7/Files/open_book1600.png" href="#" width=200px float=left>
          <h4><center>English Language</center></h4>
            </a>  
        </div>
      </td>

    <td>
      <div class="fillerImg1">
        
      <div id="myModal1" class="modal">

<!-- Modal content -->
      <div class="modal-content">   
        <span class="close">&times;</span>
        <h2>English Literature assessment:</h2>
        <p>Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
        <input type="textbox"/>
        <p>Question 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
        <input type="textbox"/>
        <p>Question 3: Lorem ipsum dolor amet, consectetur adipiscing elit?</p>
        <input type="textbox"/>
        <p>Question 4: Lorem ipsum dolor sit amet,  elit?</p>
        <input type="textbox"/>
        <p>Question 5: Lorem ipsum  sit amet, consectetur adipiscing elit?</p>
        <input type="textbox"/>
        <p><button type="submit" style=margin-top:10px>Submit</button></p>
      </div>
      </div>
<a id="myBtn2">
        <img src="https://th.bing.com/th/id/R.ca0f6a4cae066e86e621cf4a4c2dfda5?rik=cU%2b8pHEtJymUzQ&riu=http%3a%2f%2fcdn.onlinewebfonts.com%2fsvg%2fimg_323457.png&ehk=91YEMY56QJorGF5v14MXmXm57FUD3%2bTmmdM5JsVsUBE%3d&risl=&pid=ImgRaw&r=0" width=200px height="200px" float=left>
        <h4><center>English Literature</center></h4>
</a>
        
      </div>
    </td>


    <td>
      <div class="fillerImg1">
      <div id="myModal2" class="modal">

<!-- Modal content -->
      <div class="modal-content">   
        <span class="close">&times;</span>
        <h2>English Literature assessment:</h2>
        <p>Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus quis metus.?</p>
        <input type="textbox"/>
        <p>Question 2: Lorem ipsum dolor sit.?</p>
        <input type="textbox"/>
        <p>Question 3: Lorem ipsum dolor amet, consectetur adipiscing elit?</p>
        <input type="textbox"/>
        <p>Question 4: Lorem ipsum dolor sit amet,  elit?</p>
        <input type="textbox"/>
        <p>Question 5: Lorem ipsum dolor sit amet, consectetur.?</p>
        <input type="textbox"/>
        <p><button type="submit" style=margin-top:10px>Submit</button></p>
      </div>
      </div>
<a id="myBtn3">
        <img src="https://cdn4.iconfinder.com/data/icons/academic-disciplines-color/64/poetry-512.png"  width=200px float=left>
        <h4><center>Poetry</center></h4>
      </a>
      </div>
    </td>
</tr>
</div>

  <!--Code for the right hand side margin-->

   <div class="youtubeVid" style="float: right">
   <h2 style="margin-right: 30px"><strong><u><center>Recent News!</center></u></strong></h2>
  <iframe width="300" style="margin-right: 30px" src="https://www.youtube.com/embed/qSbpz7NmIEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  <h4 style="margin-right: 30px"><center>New Content Added!</center></h4>
  
  </div>
  
  </table>

<div class="fillerImg1">
           
        
      </div>
      <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">   
  <span class="close">&times;</span>
  <h2>English Language assessment:</h2>
  <p>Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</p>
  <input type="textbox"/>
  <p>Question 2: Lorem ipsum dolor sit amet, consectetur adipiscing?</p>
  <input type="textbox"/>
  <p>Question 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit.?</p>
  <input type="textbox"/>
  <p>Question 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat ac.?</p>
  <input type="textbox"/>
  <p>Question 5: Lorem ipsum dolor sit amet.?</p>
  <input type="textbox"/>
  <p><button type="submit" style=margin-top:10px>Submit</button></p>
</div>
</div>
  </table>
<!--code for the maths line-->
<table style="margin-left: 30px; margin-right: 30px; float: left">
  <img src="https://cdn3.iconfinder.com/data/icons/education-ultimate-set/512/algebra-512.png" width=150px float=left>
  <h4><center>Mathematics</center></h4>
</a>
</div>
  </table>
<table style="margin:0 auto">
  <tr>
    <td>
      <div class="fillerImg1">
      <a href="#">
        <img src="https://th.bing.com/th/id/OIP.u3D42LiNnRVw9NQsk7WSdgHaIb?pid=ImgDet&rs=1" width=150px>
        <h4><center>Physics</center></h4>
      </a>
      </div>
    </td>
    <td>
      <div class="fillerImg1">
      <a href="#">
        <img src="https://cdn.onlinewebfonts.com/svg/img_490832.png" width=150px>
        <h4><center>Chemistry</center></h4>
      </a>      
      </div>
    </td>     
    <td>
      <div class="fillerImg1">
      <a href="#">
        <img src="https://th.bing.com/th/id/OIP.kL_ef35dVUKzXmYWRPUIiQHaHa?pid=ImgDet&rs=1" width=150px>
        <h4><center>Physics</center></h4>
      </a>  
      </div>
      </td>
  </tr>
  </tbody>
</table>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//code for the second modal form, cannot use the same one multiple times

var modal1 = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal1.style.display = "none";
  }
}

//third modal

var modal2 = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

 
btn.onclick = function() {
  modal2.style.display = "block";
}


span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal2.style.display = "none";
  }
}
</script>

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
</body>
</html>
