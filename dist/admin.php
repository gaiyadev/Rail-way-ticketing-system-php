<!DOCTYPE html>
<html>
<head>
  <title>admin dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1 sha384-brink-to-fit=no" >
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Important Meta Data -->
      <meta charset="utf-8">
      <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
      <!-- Bootstrap Files -->
      <link  rel="stylesheet" href="css/bootstrap.min.css" >
       <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link href="dashboard.css" rel="stylesheet">
      <!-- Custom Css, Jquery and Js Files -->
      <link rel="stylesheet"  href="">
      <script src=" "></script>
      <script src=" "></script>
<style type="text/css">
  
  /*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
  font-family: arial, sans-serif;
  /*background: linear-gradient(to right, grey, #fff, grey );*/
  background-color: #fff;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;

}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;

}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;

}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

.navbar.navbar-inverse.navbar-fixed-top {
  background-color: #00004d; 
  
}
.nav.navbar-nav.navbar-right a{
  color: white;
  font-size: 1.3em;
}
.navbar-header a.navbar-brand {
  color: white;
}
.sub-header{

}

.table.table-striped {
  background: linear-gradient(to right, grey, #fff, grey. #fff );
}

.nav.nav-sidebar, .nav.nav-sidebar {
  background-color: #00004d;
  color:white;
}
.nav.nav-sidebar a{
  color: blue;
  font-size: 1.1em;
}

.nav.nav-sidebar a:hover{
  background-color:  #428bca;
  color: white;
}


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

background-image: url('background2.png');
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
box-shadow: 1px 1px 2px black, 0 0 8px black, 0 0 5px black;
color:navy;
  }
  h3{
    text-align: center;
  }
</style>

</head>
<body>
<!-- =====================================================================
                BROWSER SECTION
==================================== ====================================-->

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.html" >SUPER ADMIN</a>
        </div>

        <form class="navbar-form navbar-right" action="#" method="POST">
            <input type="text" class="form-control glyphicon glyphicon-search" placeholder="Search">
             <!-- <span class="glyphicon glyphicon-search"></span> -->
             <button type="submit" class="btn btn-primary">Search</button>
          </form>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row" >
        <div class="col-sm-3 col-md-2 sidebar"  style="background-color: #4d79ff">
          <ul class="nav nav-sidebar" >
            <li><a href="#today" style="color: white";>TODAYS BOOKING<span class="sr-only">(current)</span></a></li>
            <li ><a href="#all" style="color: white";>ALL BOOKINGS</a></li>
            <li><a href="#messages" style="color: white";>MESSAGES</a></li>
          </ul>
         
          <!-- 
          <ul class="nav nav-sidebar">
            <li><a href="doctor.html">Doctor</a></li>
            <li><a href="pharmacy.html">Pharmacy</a></li>
            <li><a href="reception.html">Reception</a></li>
            <li><a href="blood.html">Blood Bank</a></li>
            <li><a href="theatre.html">Theatre</a></li>
            <li><a href="nurse.html">Nurse</a></li>
            <li><a href="purchase.html">Purchase</a></li>
            <li><a href="laboratory.htl">Laboratory</a></li>
          </ul>

          <ul class="nav nav-sidebar">
            <li><a href="add.html">Add New User</a></li>
            <li><a href="remove.html">Remove a User</a></li>
            <li><a href="staff.html">Home</a></li>
          </ul>
           -->
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h3 class="page-header" align="center">NIGERIAN RAILWAY COPORATION ADMIN</h3>


        <div class="row">
      

          <div class="col-sm-12" align="center">
            <img src="nrc.png" height="200p" width="200" align="center"  class="img-rounded" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 60px">
          </div>
<br>
<br>
<br>
  

        </div>

          <div class="row ">
            <div class="col-sm-6 col-sm-3 placeholder">
              <img src="train1.png" width="200" height="200" class="img-rounded" class="img-rounded" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 60px">
              <h4>OBED GAIYA</h4>
              <span class="text-muted">N.R.C ADMIN</span>
            </div>
            <div class="col-sm-6 col-sm-3 placeholder">
              <img src="train2.png" width="200" height="200" class="img-rounded" class="img-rounded" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 60px">
              <h4>EZEKIEL</h4>
              <span class="text-muted">N.R.C ADMIN</span>
            </div>
                        <div class="col-sm-6 col-sm-3 placeholder">
              <img src="train1.png" width="200" height="200" class="img-rounded" class="img-rounded" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 60px">
              <h4>OBED GAIYA</h4>
              <span class="text-muted">N.R.C ADMIN</span>
            </div>
            <div class="col-sm-6 col-sm-3 placeholder">
              <img src="train2.png" width="200" height="200" class="img-rounded" class="img-rounded" style="box-shadow: 1px 1px 2px navy, 0 0 25px navy, 0 0 5px black; margin-bottom: 60px" >
              <h4>EZEKIEL</h4>
              <span class="text-muted">N.R.C ADMIN</span>
            </div>
  
          </div>
<style type="text/css">
  th {
    background-color: #00004d;
    color: white;
    font-size: 1.3em;
  }
</style>
<br>
          <br>
          <br>
         
    
          <div class="table-responsive">

                   <?php 

          include'connect.php' ;


          $Query = "SELECT * FROM booking";
          $result = mysqli_query($con, $Query);

          if(!mysqli_num_rows($result) > 0){
            die("error". mysqli_error($con));
          }else{
            echo "
                      <h3 class='sub-header' id='all' style='margin-bottom:-120px;'>ALL BOOKINGS</h3>

            <table border = '1' class='table table-hover table-stripped text center'>
              <tr>
                <th class='text-center'>reciept number</th>
                <th class='text-center'>Firstname</th>
                <th class='text-center'>Lastname</th>
                <th class='text-center'>Email</th>
                <th class='text-center'>Day</th>
                <th class='text-center'>Sex</th>
                <th class='text-center'>Sit</th>
                <th class='text-center'>Destination</th>
                <th class='text-center'>Time</th>
              </tr>";

             while ($row = mysqli_fetch_assoc($result)){
              echo 
              "<tr>".
                "<td>".$row['id']."</td>".
                "<td>".$row['firstname']."</td>".
                "<td>".$row['lastname']."</td>".
                "<td>".$row['email']."</td>".
                "<td>".$row['day']."</td>".
                "<td>".$row['sex']."</td>".
                "<td>".$row['sit']."</td>".
                "<td>".$row['destination']."</td>".
                "<td>".$row['time1']."</td>".

              "</tr>".
              "<br>";
             }
          }
          echo "</table>";


          ?>
          <br>
          <br>
          <br>
          <br>
          <br>


          <div class="table-responsive">
                   <?php 



          $Query = "SELECT * FROM messages";
          $result = mysqli_query($con, $Query);

          if(!mysqli_num_rows($result) > 0){
            die(" NO PERSONS SENT YOU A MESSAGE". mysqli_error($con));
          }else{
            echo "
          <h3 class='sub-header' id='messages' style='margin-bottom:-120px;' >ALL MESSAGES</h3>

            <table border = '1' class='table table-hover table-stripped text center' style='margin-top:4px'>
              <tr>
                <th class='text-center'>S/n</th>
                <th class='text-center'>Name</th>
                <th class='text-center'>Email</th>
                <th class='text-center'>Message</th>

              </tr>";

             while ($row = mysqli_fetch_assoc($result)){
              echo 
              "<tr>".
                "<td>".$row['id']."</td>".
                "<td>".$row['name']."</td>".
                "<td>".$row['email']."</td>".
                "<td>".$row['comment']."</td>".

              

              "</tr>".
              "<br>";
             }
          }
          echo "</table>";
mysqli_close($con);






          ?>
          <br>
          <br>
          <br>
          <br>
          <br>
    
    
          <div class="table-responsive">
                   <?php 

          include'connect.php' ;

          $Query = "SELECT * FROM booking WHERE day = CURDATE()";



          $result = mysqli_query($con, $Query);

          if(!mysqli_num_rows($result) > 0){
            die("NO PERSONS BOOKED AGAINST TODAY". mysqli_error($con));
          }else{
            echo "
            <h3 class='sub-header' id='today' style='margin-bottom:-5px;'>TODAYS BOOKINGS</h3>

            <table border = '1' class='table table-hover table-stripped text center'>
              <tr>
                <th class='text-center'>reciept number</th>
                <th class='text-center'>Firstname</th>
                <th class='text-center'>Lastname</th>
                <th class='text-center'>Email</th>
                <th class='text-center'>Day</th>
                <th class='text-center'>Sex</th>
                <th class='text-center'>Sit</th>
                <th class='text-center'>Destination</th>
                <th class='text-center'>Time</th>
              </tr>";

             while ($row = mysqli_fetch_assoc($result)){
              echo 
              "<tr>".
                "<td>".$row['id']."</td>".
                "<td>".$row['firstname']."</td>".
                "<td>".$row['lastname']."</td>".
                "<td>".$row['email']."</td>".
                "<td>".$row['day']."</td>".
                "<td>".$row['sex']."</td>".
                "<td>".$row['sit']."</td>".
                "<td>".$row['destination']."</td>".
                "<td>".$row['time1']."</td>".

              "</tr>".
              "<br>";
             }
          }
          echo "</table>";


          ?>

            <!-- <table class="table table-striped">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Surname</th>
                  <th>Other Name</th>
                  <th>Ward</th>
                  <th>Rank</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Bulus</td>
                  <td>Mark</td>
                  <td>Adult</td>
                  <td>Director</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Caleb</td>
                  <td>Ezra</td>
                  <td>Children</td>
                  <td>Nurse</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Charle</td>
                  <td>John</td>
                  <td>Adult</td>
                  <td>Surgeon</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Gaiya</td>
                  <td>Obed</td>
                  <td>Doctor</td>
                  <td>Adult</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Peace</td>
                  <td>Kelvin</td>
                  <td>Children</td>
                  <td>Nurse</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>George</td>
                  <td>Rejoice</td>
                  <td>Adult</td>
                  <td>Nurse</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Dodo</td>
                  <td>Moses</td>
                  <td>lab</td>
                  <td>Lab Technician</td>
                </tr>
                
                <tr>
                  <td>8</td>
                  <td>Dauda</td>
                  <td>Samuel</td>
                  <td>X-ray</td>
                  <td>Doctor</td>
                </tr>
                
                <tr>
                  <td>9</td>
                  <td>massa</td>
                  <td>Ali</td>
                  <td>Pharmacist</td>
                  <td>Pharmacist</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Abel</td>
                  <td>Joel</td>
                  <td>Adult</td>
                  <td>Doctor</td>
                </tr>                
              </tbody>
            </table>
             -->
          </div>
        </div>
      </div>
    </div>


























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
     <script src="jquery.min.js"></script>
      <!-- ============================
    INCHARGE OF COLLAPSE NAVIGATION BARS
    =================================-->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ================================================================
              THE END
    ================================================================== -->
</body>
</html>