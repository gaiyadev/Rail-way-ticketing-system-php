<!DOCTYPE html>
<html>
<head>


   <title>booking2</title>
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
    background-color:  #000099; 
    color:white;
    border-radius: 8px;

  }  
  a{
    color:white;
    text-decoration: none;
}


h4{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
background-color: #6666ff; border-radius: 15px;}
  body{background-color:  #6666ff;
  	color: black;

  } 


  h3{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  	color: white;

  }
  .panel{
  	box-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  	border-radius: 20px
  }
  .form-horizontal{color: #00004d;}

  footer{
  	margin-top: 500px
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
        <li><a href="cancil ticket.php">Cancel-ticket</a></li>
        <li><a href="contact.php">Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-3">
			
		</div>

		<div class="col-md-6">
			
				<div class="panel panel-default">
  				<div class="panel-heading"><h3 align="center">BOOKING FORM</h3></div>
  				<div class="panel-body">
			<form class="form-horizontal" role="form">
            <div class="form-group">
            <label class="control-label col-sm-2" for="fname">Firstname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname"  name="fname" placeholder="Enter firstname">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Lastname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lastname">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="email" name="email">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" >
            </div>
            </div>



			<div class="form-group">
            <label class="control-label col-sm-2" for="gender">Sex:</label>
            <div class="col-sm-10">
            <div class="radio">
  			<label><input type="radio" name="male">Male</label>
  			<label><input type="radio" name="female">Female</label>
			</div>
			
			</div>
			</div>




        <div class="form-group">
        <label class="control-label col-sm-2" for="no. of sits">Sits:</label>
        <div class="col-sm-10">
  			<select class="form-control" id="sel2" name="sits" >
   			 <option>1</option>
    		 <option>2</option>
    		 <option>3</option>
   			 <option>4</option>
   			 <option>5</option>
    		 <option>6</option>
    		 <option>7</option>
   			 <option>8</option>
   			 <option>9</option>
    		 <option>10</option>
  			</select>
		</div>
		</div>


		 <div class="form-group">
         <label class="control-label col-sm-2" for="no. of sits">Type</label>
         <div class="col-sm-10">
  			 <select class="form-control" id="sel2" name="type" >
   			 <option>First Class</option>
    		 <option>Regular</option>
  			</select>
		</div>
		</div>




		 <div class="form-group">
         <label class="control-label col-sm-2" for="no. of sits">Destination:</label>
         <div class="col-sm-10">
  			 <select class="form-control" id="sel2" name="destination" >
   			 <option>Koraji Station - Hulori Station</option>
   			 <option>Koraji Station - Katabora Station</option>
   			 <option>Koraji Station - Malinber Station</option>
   			 <option>Koraji Station - zukura Station</option>
   			 <option>Hulori Station - Katabora Station</option>
   			 <option>Hulori Station - Malinber Station</option>
   			 <option>Hulori Station - Zukura Station</option>
   			 <option>Katabora Station - Malinber Station</option>
   			 <option>Katabora Station - Zukura Station</option>
   			 <option>Malinber Station - Zukura Station</option>
    		 


    		 <option>Kuraka Station - Malinber Station</option>
    		 <option>Kuraka Station - Katabora Station</option>
    		 <option>Kuraka Station - Hulori Station</option>
    		 <option>Kuraka Station - Koraji Station</option>

    		 <option>Malinber Station - Katabora Station</option>
    		 <option>Malinber Station - Hulori Station</option>
    		 <option>Malinber Station - Koraji Station</option>

    		 <option>Katabora Station - Hulori Station</option>
    		 <option>Katabora Station - Koraji Station</option>

    		 <option>Hulori Station - Koraji Station</option>
  			</select>
		</div>
		</div>




		 <div class="form-group">
         <label class="control-label col-sm-2" for="no. of sits">Time:</label>
         <div class="col-sm-10">
  			 <select class="form-control" id="sel2" name="time" >
   			 <option>6:00AM</option>
   			 <option>8:00AM</option>
   			 <option>10:00AM</option>
   			 <option>12:00PM</option>
   			 <option>2:00PM</option>
   			 <option>4:00PM</option>
   			 <option>6:00PM</option>
   			 <option>8:00PM</option>
   			 <option>10:00PM</option>
  			</select>
		</div>
		</div>





            <br/>







            	
 				 



 




            
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="submit" >proceed</button>
            </div>
            </div>

		</form>
  				</div>
				</div>

		</div>

		<div class="col-md-3">
			
		</div>
	</div>
	






</div>


<footer class="container-fluid text-center" style="background-color: #00004d; border-bottom: 0px;">
	<div class="row">
		<div class="col-md-4" style="color: white ;border-right: 1px solid white;">

           <h4>CARE LINES</h4> 
           <p>07058149795<br>
              08088173718<br>
              09045755672<br>
              98124536787<br>
           </p>	
		</div>
		<div class="col-md-4" style="border-right: 1px solid white;">
		<h4 style="color: white">NAVIGATIONS</h4>
			<a href="index.html">home</a><br>
			<a href="#">about</a><br>
			<a href="#">cancel ticket</a><br>
			<a href="#">booking</a><br>
			<a href="contact.html">contact us</a><br>
		</div>
		<div class="col-md-4" style="border-right: 1px solid white; color: white">
		
            <h4>ADDRESS</h4> 
            <p>Norwich railway H,Q opposite brooklyn police station of south califonia,U.S.A.</p>  

		</div>
	
	</div>
	<div class="row" style="background-color: #0080ff;">
		<div class="col-md-12" style="color: #b3b3ff;">
			&copy right 201372
		</div>
	</div>
</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>