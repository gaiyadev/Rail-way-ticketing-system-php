<?php
  session_start();
    include'connect.php' ;

  $num = $_SESSION['number'];
  $query =  "SELECT * FROM booking 	WHERE id  = '$num' ";
  $result=mysqli_query($con,$query);
  echo $num;
  if(!$result){
  	echo "<script>
  	alert('not connected')
  	</script>";
  }else{
  	while ($row = mysqli_fetch_assoc($result)) {
  	 if ($num === $row['id'] && $row['type'] ==='regular'){
  	 	echo "regular";
          }elseif($num === $row['id'] && $row['type'] ==='Firstclasss'){
          	echo "firstclass";
          }else {
          	echo "none";
          }
  }
}
 
//require('fpdf/fpdf.php');
//$pdf= new FPDF();
//$pdf -> AddPage();
echo $_SESSION['number'];

//$pdf -> Output();


?>

