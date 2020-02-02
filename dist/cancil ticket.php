
<?php
  include'connect.php' ;
?>


<!DOCTYPE html>
<html>
<head>

   <title>cancil ticket</title>
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
    color: navy;
    background-color: #B3B3FF;
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

background-image: url('background3.png');
     background-attachment: fixed;
          background-repeat: no-repeat;
          background-size: cover;


} 
  h3{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
  	color: white

  }
  footer{
  	background-color: #00004d;
  	color:white;
  }

  .panel{
  	border-radius: 20px;
color:navy;
  }
  h3{
  	text-align: center;
  }
</style>





</head>




<body>
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
        <li><a href="cancil ticket.php" >Cancel-ticket</a></li>
        <li><a href="contact.php">Contact us</a></li>
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


	<div class="container-fluid">

		<div class="row">

		
			<div class="col-md-6">
				        <div class="panel panel-default">
  						<div class="panel-heading" style="background-color:#4d79ff;   border-top-left-radius:  60px;border-top-right-radius:  30px;
"><h3>CANCIL TRANSIT</h3></div>
  						<div class="panel-body">
  							<form class="form-horizontal" role="form" action="cancil ticket.php" method="post">
            				<div class="form-group">
            				<label class="control-label col-sm-4" for="ticket_number">Ticket no:</label>
            				<div class="col-sm-6">
            				<input type="text" class="form-control" id="fname" name="ticket_number" placeholder="Enter Ticket number"  required="required">
            				</div>
            				</div>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="submit" style="background-color: #4d79ff;color: white">cancil transit</button>
            </div>
            </div>


            				</form>
  				<?php
            if (isset($_POST['submit'])) {
              $id = $_POST['ticket_number'];
              $sql = "SELECT * FROM messages WHERE id = '$id'";
              $check = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_assoc($check)) {
                if ($id === $row['id']) {
                  $delete = "DELETE FROM messages WHERE id ='$id'";
                 if( mysqli_query($con, $delete)) {
                  echo "<script>
                  alert('deleted')
                  window.open('delete.php', '_self')
                  </script>";
                  exit();
                 }
                }
              }

              }


          ?>
 					    </div>
            
        </div>
       
				
			</div>
			<div class="col-md-6">
			        <div class="panel panel-default">
  					<div class="panel-heading" style="background-color:#4d79ff;color:#4d79ff"><h3>RESCHEDULE TRANSIT</h3></div>
 				    <div class="panel-body">
  			<form class="form-horizontal" role="form">
            <div class="form-group">
            <label class="control-label col-sm-2" for="fname">Firstname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname" required="required">
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Lastname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lastname" required="required">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="lname" name="email" placeholder="Enter Email" required="required">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Date:</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="lname" name="date" placeholder="dd/mm/yyyy" required="required">
            </div>
            </div>



			<div class="form-group">
            <label class="control-label col-sm-2" for="lname">Sex:</label>
            <div class="col-sm-10">
            <div class="radio">
  			<label><input type="radio" name="male" required="required">Male</label>
  			<label><input type="radio" name="female" required="required">Female</label>
			</div>
			
			</div>
			</div>




        <div class="form-group">
        <label class="control-label col-sm-2" for="no. of sits" >Sits:</label>
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
            <button type="submit" class="btn btn-default" style="background-color: #4d79ff;color: white">proceed</button>
            <button type="submit" class="btn btn-default" style="background-color: #4d79ff;color: white">Re-Sechedule</button>
            </div>
            </div>

		</form>
 		 			</div>
            
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