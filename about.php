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
     


      <div class="col-md-12">
      <h1 class="text-primary">Histrory OF ICT</h1>
      <hr>
 <p> The Department of Information and Communication Technology (ICT) is a new department at the Noakhali Science and Technology University. The department provides an outstanding opportunity to students to get quality education in Information and Communication Technology. It started its academic activities from 2012. Since then, it has been widely recognized for its excellent research and teaching capabilities.</p>

 <p>The Department of ICT is energized by a group of committed teachers. We are giving special emphasis to uplift the quality of our students with respect to their knowledge building capacity having well balanced moral values of life. We all know that, today, ICT can play the most important role in the development of economy of developing countries. There are a lot of scopes of setting up more andmore software industries in our country. </p>

 <p> The department has ambitious plans to become a role model in Bangladesh and in the region. It possesses the basic ingredients for achieving this goal in terms of the qualifications of its department members and staff, and in terms of its IT infrastructure. The department of ICT is committed to maintaining the outstanding quality of its academic programs, research, faculty and graduates</p>
      </div>
    </div>
    
	

    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>
<?php
  include('footer.php');
  ?>