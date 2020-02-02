<?php
// Start the session
session_start();
?>
<?php
  include'connect.php' ;
  // Set session variables
echo "Session variables are set.";
?>

<!DOCTYPE html>
<html>
<head>

   <title>reschedule</title>
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
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
     border-top-left-radius:  60px;
   border-bottom-right-radius:  60px;
color:navy;
margin-bottom: 400px;
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
      <div class="col-sm-4"></div>

    
      <div class="col-md-4">
                <div class="panel panel-default">
              <div class="panel-heading" style="background-color:#4d79ff;   border-top-left-radius:  60px;border-top-right-radius:  30px;
"><h3>Re-Schedule</h3></div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" action="reschedule.php" method="POST">
                    <div class="form-group">
                    <label class="control-label col-sm-4" for="ticket_number">Ticket no:</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="fname" name="ticket_number" placeholder="Enter Ticket number"  required="required">
                    </div>
                    </div>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="submit" style="background-color: #4d79ff;color: white">proceed</button>
            </div>
            </div>


                    </form>
       
                    <?php
               

                    if(isset($_POST['submit'])){
                      $_SESSION['id']=$_POST['ticket_number'];


                      $ticno= $_POST['ticket_number'];
                      $sql = "SELECT * FROM booking WHERE id = '$ticno'";
                      $check = mysqli_query($con, $sql);
                      if (!$check) {
                      echo "<script>
                      alert('no does not exist')
                      window.open('reschedule.php', '_self')
                      </script>";
                      exit();
                    }else{
                      while ($row = mysqli_fetch_assoc($check)) {
                      if ($ticno === $row['id']) {
                         
                        echo "<script>


                  window.open('update.php', '_self')
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
      <div class="col-md-4">
    
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