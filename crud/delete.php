<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'phpcrud') or die(mysqli_error());
    $id = $_GET['id'];
    $sql = "DELETE from tbl_users WHERE id=".$id;
    $response = mysqli_query($conn, $sql) or die(mysqli_error($conn));

if ($response == true) {
    // echo "Successfully Done";
    header('location:../index.php');
}
else{
    echo "Failed that";
}
?>