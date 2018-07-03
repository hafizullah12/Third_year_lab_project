<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Programming Project</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    
    
        
        <div class="row">
          <div class="col-lg-8">
          
            <a href="home.php"><img src="images/banner.png" alt=""></a>
          </div>

          <div class="col-md-4">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['userName']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        <br>
          <form class="navbar-form pull-right" role="search">
          <div class="input-group add-on">
            <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form
          </div>

        </div>
    
    </div>
    

	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  href="#">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="chairman-note.php">Chairman's Note</a></li>
            <li><a href="club.php">Programming Club</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
          </ul>
       
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	
  

    <div class="row">
      <div class="col-md-8">
      <img src="images/ice.jpg" alt="">
      </div>


      <div class="col-md-4">
      <h1 class="text-primary">Chairman's Note</h1>
      <hr>
      <p>Welcome to Information and Communication Engineering Department (ICE) and thank you for visiting our webpage. It is with great pleasure that we present to you the key as well as detailed information on our department.
ICE department has been begun not long in Noakhali Science and Technology University. Yet, our aim is to be a world class education centre.
The world activities are enormously associated with ICT. Each part of the civilization necessitates ICT. In a word, world cannot be presumed without ICT. </p>
<br>
<a href="chairman-note.php" class="pull-right">more</a>
      </div>
    </div>

    <div class="row">
    <div class="col-md-4">
    <h3>UNDERGRADUATE ADMISSION</h3>
    <hr>
    <ul class="nav justify-content-center|justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#">Entry Requirement of ICT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Fee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Addmission Circular</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Addmission Result</a>
        </li>
    </ul>
    
    </div>  
      <div class="col-md-4">
      
      <h3>Latest News</h3>
    <hr>
    <ul class="nav justify-content-center|justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#">২০১৩-১৪ শিক্ষাবর্ষের শিক্ষার্থীদের ব্যাকলগ প্রসজ্ঞে</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">অফিস আদেশ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">শীতকালীন ছুটি</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">টার্মের রশিদ জমা দেওয়া প্রসজ্ঞে</a>
        </li>
    </ul>
      </div> 
         <div class="col-md-4">
         
         <h3>Upcoming Events</h3>
    <hr>
    <ul class="nav justify-content-center|justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#">২০১৭-১৮ শিক্ষাবর্ষের শিক্ষার্থীদের ওরিয়েন্টশন ক্লাস ৩ জানুয়ারী</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">২০১৬-১৭  শিক্ষাবর্ষের শিক্ষার্থীদের রেজিস্ট্রেশন </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">আন্তঃডির্পাট েন্ট প্রোগামিং প্রতিযোগিতা </a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">২০১৮  ইংরেজী নববর্ষ উদযাপন </a>
        </li>
    </ul>
         </div>
    </div>
    

<?php
  include('footer.php');
  ?>