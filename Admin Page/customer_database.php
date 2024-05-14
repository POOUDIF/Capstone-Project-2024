<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Customer Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/Customer_database.css">
</head>
<body>
    <ul>
        <br>
    <h2>Customer Database</h2>
    </ul>
    <ul>

    <div class ="btn1">
      <button><a href="home_admin.php">Back</a></button>
      </div>
    </ul>
    <br><br>

    
    <table border="1" cellpadding="3" cellspacing="0" class="table table-striped">
        
        <!--Structure-->
        <tr>
            <th>No.</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer KTP Number</th>
            <th>Customer Phone Number</th>
            <th>Customer E-mail</th>
            <th>Action</th>
        </tr>
        <?php $i= 1; ?>
        <?php foreach( $result as $row ) : ?>
        
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
            <?= $row["customer_address"]; ?>
            </td>
            <td>
            <?= $row["customer_ktp_no"]; ?>
            </td>
            <td>
            <?= $row["customer_phone"]; ?>
            </td>
            <td>
            <?= $row["customer_email"]; ?>
            </td>
            

                <button>
                <a href="updateCustomer.php?customer_id=<?= $row["customer_id"]; ?>"> Update </a></button>
                <br>
                <button>
                <a href="deleteCustomer.php?customer_id=<?= $row["customer_id"]; ?>"> Delete </a>
                </button>
            </td>
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
   
</body>
</html>