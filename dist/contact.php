
<?php
  include'connect.php' ;
?>


<!DOCTYPE html>
<html>
<head>
   <title>contact</title>
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
.panel{background-color: none;
    color: #00004d;
  
  border-top-left-radius:  60px;
   border-bottom-right-radius:  60px;
}

h3{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
color:white;
text-align: center; 
}
p{text-align: center}

h4{ text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
color:white;
background-color: #6666ff; 
border-radius: 15px;
}
h5{
    background-color: white; color:navy;
    font-weight: 50;
    }
  body{

background-image: url('background2.png');
     background-attachment: fixed;
          background-repeat: no-repeat;
          background-size: cover;


} 



    footer{
        margin-top: 183px;
    background-color: #00004d;
    color:white;
  }
</style>
</head>
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
        <li><a href="index.php"  >Home</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="delete.php">Cancel-ticket</a></li>
        <li><a href="contact.php"  >Contact us</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>

<div class="container-fluid">
    <div class="row">
       <div class="col-md-3">
    
        </div>
       

        <div class="col-md-6">
    <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#4d79ff;   border-top-left-radius:  60px;border-top-right-radius:  30px;
"><h3 align="center">HAVING ANY ISSUE? SEND US A MESSAGE</h3></div>
                <div class="panel-body">
        

 <form class="form-horizontal" role="form" action="contact.php" method="POST" >
            <div class="form-group">
            <label class="control-label col-sm-2" for="fname">Firstname:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="fname" name="name" placeholder="Enter firstname" required="required" >
            </div>
            </div>
            <div class="form-group">
            <label class="control-label col-sm-2" for="lname">Email:</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" id="lname" name="email" placeholder="Enter Email" required="required">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="textarea">comments:</label>
            <div class="col-sm-10">
            
                 <div class="form-group">
                
                 <textarea class="form-control" rows="4" id="comment" name="comment" required="required" ></textarea>
                 </div>


            </div>
            </div>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" style="background-color: #4d79ff;color: white" name="submit" value="submit" >Submit</button>
            </div>
            </div>
</form>

<?php
if(isset($_POST['submit'])){
$Name= mysqli_real_escape_string($con,strtolower($_POST['name']));
$Email= mysqli_real_escape_string($con,strtolower($_POST['email']));
$Comment= mysqli_real_escape_string($con, strtolower($_POST['comment']));
  if(empty($Name) || empty($Email) || empty($Comment)){
    echo "<script>
                alert('fields are required')
                window.open('contact.php?=empty', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
          }else{
            if(!preg_match("/^[a-zA-Z]*$/", $Name)){
              echo "<script>
                alert('pattern missmatch')
                window.open('contact.php?=empty', '_self')
            </script>";
            //header("Location: booking.php?=error");
            exit();
            }else{
              if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                  echo "<script>
                  alert('invalid email')
                  window.open('contact.php?=invalid', '_self')
                  </script>";
            //header("Location: booking.php?=error");
            exit();
            }else{
              $sql="INSERT INTO messages (name,email,comment) VALUES ('$Name','$Email','$Comment') " ;
              $check = mysqli_query($con, $sql);
              if (!$check) {
               echo "<script>
                alert('sorry could not send message')
                window.open('contact.php?=invalid', '_self')
                </script>";
            //header("Location: booking.php?=error");
            exit();
            
            }else{
             echo "<script>
                alert('message sent!')
                window.open('contact.php?=sucess' , '_self')
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
/*$sql="INSERT INTO messages (name,email,comment) VALUES ('$Name','$Email','$Comment') " ;
!mysqli_query($con,$sql)


*/
?>

                </div>
            </div>
        </div>




          
 




              <div class="col-md-3">

       

          </div>



<br>

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