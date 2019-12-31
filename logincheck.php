<?php
include('conn.php');
$uname = $_POST['uname'];
$pword = $_POST['pwd'];

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  $sql = "SELECT * from user where phno ='".$uname."'";
  if($rows = mysqli_query($conn,$sql))
  {
	  //echo $_POST['uname'];
     $row=mysqli_fetch_array($rows);
     if($row['pwd']==$pword)
      {
        if($row['utype']=="user")
      {
      
        $_SESSION["id"]=session_id();
		$_SESSION["uname"]=$row['uname'];
		$_SESSION["uid"]=$row['uid'];
		$_SESSION["fname"]=$row['name'];
		$_SESSION["add1"]=$row['add1'];
		$_SESSION["add2"]=$row['add2'];
		$_SESSION["phno"]=$row['phno'];
		$_SESSION["aadhar"]=$row['aadhar'];
		echo $_SESSION["uname"];
      // header('Location: userprofile.php');
      echo '<script type="text/javascript">';
       echo 'window.location.href="userprofile.php";';
       echo '</script>';
     
      }
	   else if($row['utype']=="admin")
      {
      
        $_SESSION["id"]=session_id();
		$_SESSION["uname"]=$row['utype'];
		$_SESSION["uid"]=$row['uid'];
       //header('Location: admin.php');
       echo '<script type="text/javascript">';
       echo 'window.location.href="admin.php";';
       echo '</script>';
     
      }
	  else if($row['utype']=="sk")
      {
      
        $_SESSION["id"]=session_id();
		$_SESSION["uname"]=$row['uname'];
		$_SESSION["uid"]=$row['uid'];
		$_SESSION["fname"]=$row['name'];
		$_SESSION["add1"]=$row['add1'];
		$_SESSION["add2"]=$row['add2'];
		$_SESSION["phno"]=$row['phno'];
		$_SESSION["aadhar"]=$row['aadhar'];
       //header('Location: skprofile.php');
       echo '<script type="text/javascript">';
       echo 'window.location.href="skprofile.php";';
       echo '</script>';
     
      }
     
      }
      else
      {
        //header('Location: login.php');
        echo"<script> alert('Invalid credentials'); window.location.href='index.php'</script>";
      }
   }
  else
  {
      
  }
    
    
}
   
?>