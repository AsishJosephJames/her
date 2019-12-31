<?php
include('conn.php');
if($_SESSION["id"]==session_id())
{
$it=$_POST['item'];

$sql = "INSERT INTO item (itemname)VALUES ('".$it."')";
									
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