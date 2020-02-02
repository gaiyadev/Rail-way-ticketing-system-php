<?php
session_start();
  include'connect.php' ;


  $id = $_SESSION['number'];
     $sql = "SELECT * FROM booking WHERE id = '$id'";
                      $check = mysqli_query($con, $sql);
                      if (!$check) {
                      echo "<script>
                      alert('no does not exist')
                      window.open('reschedule.php', '_self')
                      </script>";
                      exit();
                    }else{
                      if (!mysqli_num_rows($check) >0) {
                        die();
                      } else {
                        while ($row = mysqli_fetch_assoc($check)) {
                          $name = ucfirst($row["firstname"]);
                          $lname = ucfirst($row["lastname"]);
                          $id = $row["id"];
                          $tdate = $row["day"];
                          $sit = $row["sit"];
                          $destination = ucfirst($row["destination"]);
                          $type = ucfirst($row["type"]);
                          $day = date('y/m/d');
                          $time1 = $row['time1'];
                    
                    include 'fpdf/fpdf.php';
$pdf = new FPDF();
$pdf -> AddPage();
// setfont(name, type, font-size)
$pdf -> SetFont('Times','B', 20);
$pdf -> SetTextColor(0, 0, 102);
//$pdf ->SetFillColor(int r, int g, int b);
//cell( width, height, content, border, new line, alignment total cell width = 190px)
//$pdf -> setLineWidth(0.4);
$pdf -> Cell(0, 20, 'NIGERIA RAILWAY COPORATION (N.R.C)', 1, 1, 'C');
$pdf -> SetFont('Courier','B', 25);

//setting font-ccolor
$pdf -> SetTextColor(0, O ,102);
//$pdf -> setLineWidth(0.1);
$pdf -> Cell(0, 12, 'BOOKING RECIEPT',  1,1, 'C');
//$pdf->Image('OBED2.jpeg',10,10,-300);
$pdf -> SetFont('Courier', '', 11);
//$pdf -> Cell(190, 12,$date, 1, 1);
$pdf -> SetTextColor(0, 0, 102);
$pdf -> SetFont('Courier','B', 18);
$pdf -> Image('nrc.png',13,13,15);


$pdf -> Cell(50, 12,'NAME:'  , 1, 0);
$pdf -> Cell(80, 12,$name." "." ".$lname , 1, 0);
$pdf -> Cell(20, 12,'NO.:'  , 1, 0);
$pdf -> Cell(40, 12,$id, 1, 1);
$pdf -> Cell(50, 12,'BOOKED SITS:'  , 1, 0);
$pdf -> Cell(20, 12,$sit, 1, 0);
$pdf -> Cell(60, 12,'TRANSIT TYPE:'  , 1, 0);
$pdf -> Cell(60, 12,$type, 1, 1);
$pdf -> Cell(60, 12,'TRANSIT DATE:'  , 1, 0);
$pdf -> Cell(60, 12,$tdate, 1, 0);
$pdf -> Cell(30, 12,'TIME:'  , 1, 0);
$pdf -> Cell(40, 12,$time1, 1, 1);

$pdf -> Cell(50, 12,'DESTINATION:'  , 1, 0);
$pdf -> Cell(140, 12,$destination, 1, 1);
$pdf -> Cell(60, 12,'PRINTED DATE:'  , 1, 0);
$pdf -> Cell(40, 12,$day, 1, 0);
$pdf -> Cell(90, 12,'SIGNED:'  , 1, 0);
$pdf -> Image('sign.png',155,85,20);
$pdf -> Image('stamp.png',150,85,25);


/*


$pdf -> Cell(95, 12, $id, 1, 1);
//$pdf -> Cell(190, 12,'sname'. $name , 1, 1);
$pdf -> Cell(190, 12, $lname, 1, 1);
$pdf -> Cell(190, 12, $destination, 1, 1);

$pdf -> Cell(95, 12, $Type, 0, 0);
$pdf -> Cell(95, 12, 'Amount:  $7967', 1, 1);
$pdf -> Cell(190, 12, $day, 1, 1);

//$pdf->Cell(80); // Move to 8 cm to the righ
//$pdf->Write(5,'www.fpdf.org','http://www.fpdf.org');
//$pdf -> Cell(95, 12, 'Security Code:', 1, 0);
//$pdf -> Cell(95, 12, 'nrc1fe.nrckaduna', 1, 1);
//$pdf -> Cell(0, 10, 'Hello Obed M. Gaiya', 1, 0, 'C');
*/
//output the pdf
$pdf -> Output();

                    }
                }
            }
?>