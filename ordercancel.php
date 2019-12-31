<?php
include('conn.php');
if($_SESSION["id"]==session_id())
{
$oid=$_GET['oid'];
$skid=$_GET['skid'];
$uid=$_GET['uid'];
$sts=$_GET['sts'];

										  $sql = "UPDATE orderreq SET status=$sts WHERE oid=$oid and uid=$uid";
									
										if (mysqli_query($conn, $sql))
										{
										   
										  echo '<script type="text/javascript">';
                                                   echo 'window.location.href="skprofile.php";';
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
