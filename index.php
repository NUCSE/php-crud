<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
        <div class="header">
            <h2>Insert, Update & Delete</h2>
        </div>

        <div class="main">
            <h2>Adding First and Last Name</h2>

            <div class="content">

                <div class="contentLeft">
                    <h2 id="clheader">Input your value</h2>
                    <form method="POST" action="./crud/action.php" id="from">
                        <label for="fname" class="formitem">First Name:</label>
                        <input type="text" id="fname" name="fname" class="formitem">
                        <label for="lname" class="formitem">Last name:</label>
                        <input type="text" id="lname" name="lname" class="formitem">
                        <input type="submit" value="Submit" class="submitbtn formitem">
                    </form>
                </div>

                <div class="contentRight">
                    <h3 class="crheader">Submited Data</h1>

                    <table>
                        <tr class="tableheader">
                            <th>S.N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Actions</th>
                        </tr>

                        <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'phpcrud') or die(mysqli_error());
                            // $select_db = mysqli_select_db($conn, $phpcrud) or die(mysqli_error());

                            $sql = "SELECT * from tbl_users";
                            $response = mysqli_query($conn, $sql) or die(mysqli_error());
                            $sn=1;

                            if ($response == true){
                                while($row = mysqli_fetch_assoc($response))
                                {
                                    $id = $row['id'];
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    ?>
                                    <tr>
                                        <td><?php echo($id)?></td>
                                        <td><?php echo($fname)?></td>
                                        <td><?php echo($lname)?></td>
                                        <td>
                                            <a href="crud/update.php?id=<?php echo $id; ?>"><button>Edit</button></a>
                                            <a href="crud/Delete.php?id=<?php echo $id; ?>"><button>Delete</button></a>
                                        </td>
                                    </tr>
                                    
                                    <?php
                                }    
                            }
                        ?>
                                                    
                    </table>
                </div>
            </div>

        </div>

        <div id="footer">
            All right Reserved. &COPY; 2021 Mahmudul Hasan
        </div>
</body>
</html>