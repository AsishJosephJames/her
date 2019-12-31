<?php
include('conn.php');
if($_SESSION["id"]==session_id())
{
$oid=$_POST['oid'];
$uid=$_POST['uid'];
$skid=$_POST['skid'];
$price=$_POST['price'];
$pmode=$_POST["pmode"];
$dmode=$_POST["dmode"];
$upi=$_POST["upi"];

$sql = "INSERT INTO orderreq (oid, skid, uid, price, pmode, dmode, pmd)
										VALUES ('".$oid."', '".$skid."', '".$uid."', '".$price."', '".$pmode."', '".$dmode."', '".$upi."')";
									
										if (mysqli_query($conn, $sql))
										{
										   
										   echo '<script type="text/javascript">';
                                                   echo 'window.location.href="userprofile.php";';
                                                   echo '</script>';
										  
										}
										else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
										

}
else
{
  header('Location: index.php');
}
  
  ?>
