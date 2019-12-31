<?php

include('conn.php');
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$name=$_POST['fname'];
$phno=$_POST['phno'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$utype=$_POST['utype'];
//echo  $_POST['uname'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
										$aadhar=$target_file;
										$sql = "INSERT INTO user (uname, pwd, name, phno, add1, add2, aadhar, utype)
										VALUES ('".$uname."', '".$pwd."', '".$name."', '".$phno."', '".$add1."', '".$add2."', '".$aadhar."', '".$utype."')";
										echo $sql;
										if (mysqli_query($conn, $sql))
										{
										   echo '<script type="text/javascript">';
                                                echo 'window.location.href="index.php";';
                                                echo '</script>';
										  // header("location:usersignup.php");
										  
										}


else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
       // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
