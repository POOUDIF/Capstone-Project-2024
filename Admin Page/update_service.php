<?php
include '../Function/function.php';

// Take Data from url//
$customerid = $_GET["customer_id"];

//query data room based on "customer id"
$qdr = query("SELECT * FROM booking WHERE customer_id = $customerid")[0];

//Make sure the Submit Button
if (isset($_POST["submit"])) {
    echo " <script>
    alert('Data is updated');
    document.location.href = 'roomdatabase.php';
    </script>
    ";
}

if (($_POST) > 0) {
} else {
}


if (isset($_POST["submit"])) {
    //Take Data from each element
    $customerid = $_POST["customer_id"];
    $customername = $_POST["customer_name"];
    $customertype = $_POST["service_type"];
    $customeraddress = $_POST["customer_address"];
    $paymentmethod = $_POST["payment_method"];
    $dataservice = $_POST["data_service"];
    $status = $_POST["ststus_service"];


    // query insert data
    $query = "UPDATE room SET
    customer_name     = '$customername',
    customer_type     = '$customertype',
    customer_address  = '$customeraddress',
    payment_method    = '$paymentmethod',
    data_service      = '$dataservice',
    status_service    = '$status'
  
  WHERE customer_id       = $customerid
";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update Room Databases</title>
</head>

<body>
    <h2>Update Room Database</h2> <br><br>

    <form action="" method="post">

        <ul>

            <form>
                <div class="mb-3">
                    <!--Structure-->
                    <!--Q1-->
                    <label for="customer_id" class="form-label">Customer ID</label>
                    <input type="text" name="customer_id" class="form-control" id="customer_id" aria-describedby="emailHelp">
                    <br>
                    <!--Q2-->
                    <label for="customer_name" class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" id="customer_name" aria-describedby="emailHelp">
                    <br>
                    <!--Q3-->
                    <label for="service_type" class="form-label">Service Type</label>
                    <input type="text" name="service_type" class="form-control" id="service_type" aria-describedby="emailHelp">
                    <br>
                    <!--Q4-->
                    <label for="customer_address" class="form-label">Customer Address</label>
                    <input type="text" name="customer_address" class="form-control" id="customer_address" aria-describedby="emailHelp">
                    <br>
                    <!--Q5-->
                    <label for="payment_method" class="form-label">Payment Method</label>
                    <input type="text" name="payment_method" class="form-control" id="payment_method" aria-describedby="emailHelp">
                    <br>
                    <!--Q6-->
                    <label for="status_service" class="form-label">Status Service</label>
                    <input type="text" name="status_service" class="form-control" id="status_service" aria-describedby="emailHelp">
                    <br>
                    <!--Q7-->
                    <label for="data_service" class="form-label">Date Service</label>
                    <input type="text" name="data_service" class="form-control" id="data_service" aria-describedby="emailHelp">
                    <br>

                    <br><br>

                    <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
                    <a href="service_database.php" class="btn btn-primary">Back to Room Database</a>


            </form>
        </ul>

    </form>
</body>

</html>