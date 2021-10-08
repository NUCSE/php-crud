<?php 

$fname =$_POST['fname'];
$lname = $_POST['lname'];

$conn = mysqli_connect('localhost', 'root', '', 'phpcrud') or die(mysqli_error());

// $select_db = mysqli_connect_db($conn, 'phpcrud') or die(mysqli_error());
$sql = "insert into tbl_users set fname='$fname',
                                  lname='$lname'";

$response = mysqli_query($conn, $sql) or die(mysqli_error());

if ($response == true) {
    // echo "Successfully Done";
    header('location:../index.php');
}
else{
    echo "Failed that";
}