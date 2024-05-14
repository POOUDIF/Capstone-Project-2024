<?php
include '../Function/function.php';

//query data from the "room" table
$result = mysqli_query($conn, "SELECT * FROM booking");

?>


<!DOCTYPE html>
<html lang="en">
<head>    

    <title>Room Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/service_database.css">
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
            <th>Customer Address</th>
            <th>Payment Method</th>
            <th>Status Service</th>
            <th>Date Service</th>
            <th>Action</th>
        </tr>
        <?php $i= 1; ?>
        <?php  foreach( $result as $row) : ?>
        
            <tr>
            <td>
            <?= $i; ?>
            </td>
            <td>
            <?= $row["customer_id"]; ?>
            </td>
            <td>
            <?= $row["customer_name"]; ?>
            </td>
            <td>
            <?= $row["detector_id"]; ?>
            </td>
            <td>
            <?= $row["customer_address"]; ?>
            </td>
            <td>
            <?= $row["payment_method"]; ?>
            </td>
            <td>
            <?= $row["status_service"]; ?>
            </td>
            <td>
            <?= $row["book_start_date"]; ?>
            </td>
            <td>
                
                <button><a href="updateroom.php?customer_id=<?= $row["customer_id"]; ?>"> Update  </a></button>
                <br>
                <button><a href="deleteroom.php?customer_id=<?= $row["customer_id"]; ?>"> Delete </a></button>
               
                
            </td>
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
    
     
</body>
</html>