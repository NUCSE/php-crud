<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="../css/update.css" type="text/css">
</head>
<body>
        <div class="header">
            <h2>Update your data</h2>
        </div>

        <?php
            $id = $_GET['id'];
            $conn = mysqli_connect('localhost', 'root', '', 'phpcrud') or die(mysqli_error());
            $sql = "SELECT * FROM tbl_users where id=". $id;

            $response = mysqli_query($conn, $sql);
            if ($response == true){
                $row = mysqli_fetch_assoc($response);
                $fname = $row['fname'];
                $lname = $row['lname'];
            }
        ?>
        <div class="main">
            <h2>Update your data in here</h2>
                <form method="POST" id="from" action="update_action.php">
                    <label for="fname" class="formitem">First Name:</label>
                    <td><input type="text" id="fname" name="fname" class="formitem" value="<?php echo $fname; ?>"></td> 
                    <label for="lname" class="formitem">Last name:</label>
                    <td><input type="text" id="lname" name="lname" class="formitem" value="<?php echo $lname; ?>"></td> 
                    <tr>
                        <td>&nbsp;<input type="hidden" name="id" value="<?php echo $id;?>"></td>
                        <td><input type="submit" value="Update" class="submitbtn formitem"></td>
                    </tr> 
                </form>
            <h3>Back to home</h3>
        <div id="footer">
            All right Reserved. &COPY; 2021 Mahmudul Hasan
        </div>
</body>
</html>