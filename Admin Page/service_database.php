<?php
include '../Function/function.php';

//query data from the "room" table
$result = mysqli_query($conn, "SELECT * FROM tenant");

?>


<!DOCTYPE html>
<html lang="en">
<head>    

    <title>Room Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/room_database.css">
</head>
<body>
    <ul>
        <br>
    <h2>Room Database</h2>
    <br>
    <div class ="btn1">
    <button><a href="service_form.php">Add Room Data</a></button> 
    
    <button><a href="home_admin.php">Back</a></button>  
    </ul>
    <br>
    </div>
    

    
    <table border="3" cellpadding="1" cellspacing="0" class="table table-striped">
        <!--Structure-->
        <tr>
            <th>No.</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Service Type</th>
            <th>Customers Address</th>
            <th>Payment Method</th>
            <th>Date Service</th>
        </tr>
        <?php $i= 1; ?>
        <?php  foreach( $result as $row) : ?>
        
            <tr>
            <td>
            <?= $i; ?>
            </td>
            <td>
            <?= $row["room_id"]; ?>
            </td>
            <td>
            <?= $row["room_gender"]; ?>
            </td>
            <td>
            <?= $row["room_label"]; ?>
            </td>
            <td>
            <?= $row["room_location"]; ?>
            </td>
            <td>
            <?= $row["room_monthly_cost"]; ?>
            </td>
            <td>
                
                <button><a href="updateroom.php?room_id=<?= $row["room_id"]; ?>"> Update  </a></button>
                <br>
                <button><a href="deleteroom.php?room_id=<?= $row["room_id"]; ?>"> Delete </a></button>
               
                
            </td>
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
    
     
</body>
</html>