<?php
include('conn.php');
if($_SESSION["id"]==session_id())
{
$item=$_POST['item'];
$count=$_POST['count'];
$date=$_POST['date'];
$time=$_POST['time'];
$sk=$_SESSION["uid"];

$sql = "INSERT INTO ordertbl (skid, item, count, date, time)
										VALUES ('".$sk."', '".$item."', '".$count."', '".$date."', '".$time."')";
									
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
