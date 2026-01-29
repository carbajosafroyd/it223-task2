<?php include "db.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT223 - Task 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>
<body>


<?php
     $sql = "SELECT * From usertbl";
     
     $result = mysqli_query($conn, $sql);
     
     if ($result->num_rows > 0) {

        ?>
            <div class="container mt-5 d-">
            <table class = 'table table-bordered justify-content-start'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Contact</th>
                    <th>Gender</th>
                </tr>


        <?php
       

        $rows = $result->fetch_all(MYSQLI_ASSOC);

        foreach ($rows as $row) {

            ?>
                <tr>
                    <td> <?= $row["id"] ?></td>
                    <td> <?= $row["Name"] ?></td>
                    <td> <?= $row["Email"] ?></td>
                    <td> <?= $row["Password"] ?></td>
                    <td> <?= $row["Contact"] ?></td>
                    <td> <?= $row["Gender"] ?></td>
                  </tr>

            <?php
            
        }
        ?>
            </div>
            </table>
        <?php


        
    } else {
        echo "0 results";
    }
    
    $conn->close();
?>

    
</body>
</html>