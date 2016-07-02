<?php 
	include("dbcon.php");
	?>
<!DOCTYPE html>
<html>
<head>
  <title>Personal Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="porfolio.css" media="all">
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><h2>JBportfolio</h2></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">About me</a></li>
          <li><a href="#section3">Skills</a></li>
          
              <li><a href="#section4">Contacts</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div id="section1" class="container-fluid">
<div class="toparea">
 <h1 style="font-family:forte; color:brown;">Jagriti Bajpai</h1>
 <p style="font-size:25px;">Knowledge is like ocean,it never ends...</p>
 </div>
</div>
<div id="section2" class="container-fluid">
  <h1>About me</h1>
  <div class="row">
  <div class="col-xs-8 about">
  <p>I am Jagriti Bajpai, an enthusiastic web developer.
I'm a self-taught web developer with experience in using HTML, CSS, PHP & jQuery.
I have a passion for the web and love learning new things.
I enjoy developing websites that are responsive to desktop, tablet and mobile devices.
When making websites, I'm a big fan of creating everything from scratch. I like to keep my designs simple so they're easy to read and even easier to navigate.
 I feel using my own designs gives me more flexibility.</p>
  </div>
  <div class="col-xs-4 imagesc">
 <img src="images/jagriti.jpg" class="img-circle mar " alt="Cinque Terre" width="250" height="250">
  </div>
  </div>
</div>
<div id="section3" class="container-fluid">
  <h1>Skills</h1>
  <div class="row">
  
  <div class="col-xs-5 well" id ="left">
  <h3>Programming languages-C,C++,Java.</h3>
	<h3>Web Technologies-</h3>
	<h3>Front-end-HTML,CSS,Bootstrap,JavaScript</h3>
	<h3>Back-end-PHP.</h3>	
	<h3>My SQL</h3>
	<h3>Data Structure.</h3>
</div>
<div class="col-xs-5 well" id ="right">
<p><b>Online Shopping-</b>Developed a web project for online
shopping of materials.</p>
<p> <b>Game Of Stakes-</b>Developed a web project for the event
organized by E-Cell committee of NIT Raipur.</p>
<p>Developed a project <b>Library Management</b> that keeps
record of books issued by students in library.</p>
</div>
</div>
<div class="a">
<div class="row well">
<p>You can find all these project from my github account.The link for the github account is given in contact area.</p>
</div>
</div>
</div>
</div>
<div id="section4" class="container-fluid">
  <h1>Contact details</h1>
  <div class="row">
  <div class="col-sm-6 mar">
  
	<p>E-mail id:</p><p><a href="mailto:jagritibajpai2606@gmail.com">jagritibajpai2606@gmail.com</a></p>
	<p>Github Account:</p><p><a href="https://github.com/jagriti26">https://github.com/jagriti26</a>
	<p>LinkedIn Account:</p><p><a href="https://in.linkedin.com/in/jagriti-bajpai-2439a810a">https://in.linkedin.com/in/jagriti-bajpai-2439a810a</a>
	<p>Facebook Account:</p><p><a href="https://www.facebook.com/jagriti.bajpai.1">https://www.facebook.com/jagriti.bajpai.1</a>
  </div>
  <div class="col-sm-5">
  <p>You can register here by entering your details and I will contact you asap!!</p>
 <div class="col-sm-6 mar">
	<form method="post" action="">
	<input class="form-control marg"type="text" name="name"placeholder="Name" required>
	<input class="form-control marg"type="text" name="email"placeholder="Email"required>
	<button type="submit" name="submit"class="btn btn-primary btn-block">Submit</button>
	
	</form>
  </div></div>
 
  </div>
  <div class="row">
  <center>
   <div class="footer"><a class="btn btn-social-icon btn-twitter">
   <span class="fa fa-google-plus"style="font-size:36px; margin-right:20px;" ></span>
   <span class="fa fa-facebook-square"style="font-size:36px; margin-right:20px;" ></span>
   <span class="fa fa-linkedin"style="font-size:36px;margin-right:20px;" ></span>
    <span class="fa fa-github"style="font-size:36px;margin-right:20px;" ></span>
  </a></div></div>
</div>


</body>
</html>
<?php 
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$store="insert into register (c_name,c_email) values('$name','$email')";
	$runquery=mysqli_query($conn,$store);
	if($runquery){
	echo"<script>alert('Thanks for registering');</script>";
	echo"<script>window.open('index.php','_self');</script>";
	}
}
?>
