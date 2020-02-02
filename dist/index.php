<?php
  require'connect.php' ;
?>


<!DOCTYPE html>
<html>
<head>


   <title>home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">


    .navbar.navbar-inverse {
    background-color:#00004d;
    color:white;
    font-size: 20px;
    font-family: sans-serif;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
    width: 100%;

}

  #myNavbar a{
    background-color: #00004d;
    color:white;
    opacity: 0.9;
}
#myNavbar li a:hover{
    background-color: #4d79ff; 
    color:white;
    border-radius: 8px;

  }  
  a{
    color:white;
    text-decoration: none;
}
.jumbotron{background-color: red;
    color: white;
box-shadow: 1px 1px 2px navy, 0 0 8px navy, 0 0 5px black;
    background-color: #4d79ff;
}
.
}

h4{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
; border-radius: 15px;}
h5{
	background-color: white; color:navy;
	font-weight: 50;
}

  body{

background-image: url('background2.png');
     background-attachment: fixed;
          background-repeat: no-repeat;
          background-size: cover;
  	color:#6666ff;

  } 


  h3{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  	color: white

  }
  footer{
  	background-color: #00004d;
  	color:white;
  }


img{
	box-shadow: 1px 1px 2px black, 0 0 25px navy, 0 0 5px blue;

}


  
</style>
</head>
<body>
<!--nav bar -->

 


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="logo.png" height="30" width="30" id="logo"></a>
    </div>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="delete.php" >Cancel-ticket</a></li>
        <li><a href="contact.php">Contact us</a></li>
     <li>

      </ul>
    </div>
  </div>
</nav>
<style type="text/css">
    

    @media (max-width: 700px) {
       #myCarousel{
            display: none;

  
        }


</style>

<!--carousel -->
<div class="container-fluid">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="train1.png" height="100" width="1500">

    </div>
     
    <div class="item">
      <img src="train2.png" height="100" width="1500" >
    </div>

    <div class="item">
      <img src="train3.png" height="100" width="1500" >
    </div>

    <div class="item">
      <img src="train4.png" height="100" width="1500">
    </div>
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<div class="jumbotron" style="background-color: #4d79ff;color: white">
			<h3 align="center" id="sto">
			NIGERIAN RAILWAY COOPORATION</h3>
		</div>

<div class="row">
  <div class="col-md-4">
    
  </div>
    <div class="col-md-4">
      <h3 align="center">Admin login</h3>
      <div>

     <form class="form-horizontal" role="form" action="index.php" method="POST" >
            <div class="form-group">
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" name="username" placeholder="Enter Username" required="required" >
            </div>
            </div>
            <div class="form-group">
            <div class="col-sm-10">
            <input type="password" class="form-control" id="lname" name="password" placeholder="Enter Password" required="required">
            </div>
            </div>

  

            <div class="form-group">
            <div class="col-sm-10">

            <button type="submit" class="btn btn-default" style="background-color: #4d79ff;color: white" name="login" value="submit" >Login</button>
            </div>
            </div>
</form>
</div>

  </div>
  <?php
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      if ($username !== $row['username'] || $password !==$row['password'] )  {

  echo "<script>
      alert('acess denied')
      window.open('index.php',_self)
      </script>";

    }else{
      echo "<script>
      window.open('admin.php', '_self')
      </script>";

          }

}
}
  ?>

<hr>
    <div class="col-md-4">
    
  </div>
</div>



<div class="row">
	<div class="col-md-4" align="center">
		<img src="train5.png" height="200" width="200" class="img-reponsive" style="border-radius: 150px" >
		<h3>PASSANGER'S VOYAGE</h3>
		<p><b>We offer a condusive transit for all our passangers,and we convey people in confort...try us today...</b></p>
		
	</div>


		<div class="col-md-4" align="center" >

		<img src="NRC.png" height="200" width="200" class="img-reponsive" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 15px">
		<h3>NIGERIAN RAILWAY COPORATION</h3>
		
	
	</div>
	

      <div class="col-md-4" align="center">
    <img src="train6.png" height="200" width="200" class="img-reponsive" style="border-radius: 150px" >
    <h3>GOODS VOYAGE</h3>
    <p><b>We also offer services for logadges like agricultural produce</b></p>
    
  </div>

	</div>


<br>
<br>





<div class="jumbotron"  style="background-color: #4d79ff;">

	<div class="row">
		<div class="col-md-12">

		
		</div>
	</div>

	<div class="row" >
		<div class="col-md-4" align="center">
			<h3 id="sto">BOOKING</h3>
			<p >after a series of analisis we carried out on our system,we here by offer the solutions....passangers can now book for their tickets online in order to avart delay in our train routines</p>
		</div>
		<div class="col-md-4" align="center">
				<h3  id="sto">ROUTINE</h3>
				<P>Our routine every day is within an interval of 2 hours.starting frrom early hours of the day.<br>
					
				</P>	
		</div>
		<div class="col-md-4" align="center">
					<h3 id="sto">CANCELING TICKET</h3>
					<P >You can also cancel your tickets incase you have a change of mind,and your fund will be duely refunded. In cases where you have a change of time you can also rescedule your routine. </P>
		</div>

	</div>

</div>


</div>



    <footer class="footer">
      <div class="container" align="center">
  <p>Contact information: <a href="mailto:nrc@gmail.com">nrc@gmail.com</a>.</p>
      </div>
    </footer>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>