
<?php
  include'connect.php' ;
?>

<!DOCTYPE html>
<html>
<head>


   <title>booking</title>
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


h4{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
background-color: #6666ff; border-radius: 15px;}


  } 


  h3{ 
    color: white;
    text-shadow: 2px 2px 4px #000000;
  }
  .panel{
   border-top-left-radius:  60px;
   border-bottom-right-radius:  60px;

  }
  .form-horizontal{color: #00004d;}
  footer{
    background-color: #00004d;
    color:white;
    margin-top: 20px;
  }

  body{

background-image: url('background.png');
     background-attachment: fixed;
          background-repeat: no-repeat;
          background-size: cover;


} 
  }
  
.panel.panel-body button #buton{
  background-color: #4d79ff;
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
        <li><a href="reciept.php">Print Reciept</a></li>
 
        
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
          <div class="panel-heading" style="background-color:#4d79ff;   border-top-left-radius:  60px;border-top-right-radius:  30px;
"><h3 align="center"> BOOKING FORM</h3></div>
          <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST"  action="booking.php" >
            <div class="form-group">
            <label class="control-label col-sm-2" for="fname">Firstname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname" >
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Lastname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lastname">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="lname" name="email" placeholder="Enter Email" >
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Date:</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" id="lname" name="date">
            </div>
            </div>



      <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Sex:</label>
            <div class="col-sm-10">
            <div class="radio" >
        <label><input type="radio" name="sex" value="male" required="required">Male</label>
        <label><input type="radio" name="sex" value="female" required="required">Female</label>
      </div>
      
      </div>
      </div>




        <div class="form-group">
        <label class="control-label col-sm-2" for="no. of sits">Sits:</label>
        <div class="col-sm-10">
        <select class="form-control" id="sel2" name="sit" >
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="8">9</option>
         <option value="10">10</option>
        </select>
    </div>
    </div>


     <div class="form-group">
         <label class="control-label col-sm-2" for="no. of sits">Type</label>
         <div class="col-sm-10">
         <select class="form-control" id="sel2" name="type" >
         <option value="firstClass">First Class</option>
         <option value="regular">Regular</option>
        </select>
    </div>
    </div>




     <div class="form-group">
         <label class="control-label col-sm-2" for="no. of sits">Destination:</label>
         <div class="col-sm-10">
         <select class="form-control" id="sel2" name="destination" required="required">
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
         <select class="form-control" id="sel2" name="time" required="required">
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
            <button id="buton" type="submit" name="submit" class="btn btn-default" style="background-color: #4d79ff;color: white">proceed</button>
            <button id="buton"  type="Reset" class="btn btn-default" style="background-color: #4d79ff;color: white">Reset</button>
            </div>
            </div>

    </form>

    <?php
if (isset($_POST['submit'])) {
    $Firstname =  mysqli_real_escape_string($con, strtolower(  $_POST['fname']));
    $Lastname = mysqli_real_escape_string($con, strtolower( $_POST['lname']));
    $Email = mysqli_real_escape_string($con, strtolower( $_POST['email']));
    $Date =  mysqli_real_escape_string($con, strtolower($_POST['date']));
    $Sex =  mysqli_real_escape_string($con, strtolower($_POST['sex']));
    $Sit =  mysqli_real_escape_string($con, strtolower($_POST['sit']));
    $Type =  mysqli_real_escape_string($con, strtolower($_POST['type']));
    $Destination =  mysqli_real_escape_string($con, strtolower($_POST['destination']));
    $Time =  mysqli_real_escape_string($con, strtolower($_POST['time']));

    if (empty($Firstname) || empty($Lastname) || empty($Email) || empty($Date) || empty($Sex) || empty($Sit) || empty($Type) || empty($Destination) || empty($Time)) {
      echo "<script>
                alert('fields are required')
                window.open('booking.php?=empty', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
    }else {
      if (!preg_match("/^[a-zA-Z]*$/", $Firstname) || !preg_match("/^[a-zA-Z]*$/", $Lastname)) {
        echo "<script>
                alert('pattern mismatch')
                window.open('booking.php?=invalid', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
      }else {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
         echo "<script>
                alert('invalid email')
                window.open('booking.php?=invalid', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
        }else {
          $sql= "INSERT INTO booking (firstname, lastname, email, day, sex, sit, type, destination, time1) VALUES ('$Firstname','$Lastname','$Email','$Date','$Sex','$Sit','$Type','$Destination','$Time')";
         $check = mysqli_query($con, $sql);
         if (!$check) {
               echo "<script>
                alert('not successful')
                window.open('booking.php?=invalid', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
         }else{
            $last_id = mysqli_insert_id($con);
             echo "<script>
                alert('booking sucessful your reciept number is:' + $last_id)
                window.open('reciept.php?=sucess' + $last_id, '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
         }
        }
      }
    }
}else {
  @header("Location: booking.php?=error");
  exit();
}

?>

          </div>



        </div>

    </div>

    <div class="col-md-3">
      
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