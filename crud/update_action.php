<?php
    $conn = mysqli_connect('localhost', 'root', '', 'phpcrud') or die(mysqli_error());
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "UPDATE tbl_users SET fname='$fname',lname='$lname' WHERE id='$id'"; 

    $response = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    if ($response == true){
        header('location:../index.php');
    }
    else{
        echo "Error";
    }
?>