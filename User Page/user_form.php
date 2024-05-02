<?php
include '../Function/function.php';

//Make sure the Submit Button is clicked
if( isset($_POST["submit"]) ){
    //Take Data from each element
    $customerid = $_POST["customer_id"];
    $customername= $_POST["customer_name"];
    $customeradd = $_POST["customer_address"];
    $customerktp = $_POST["customer_ktp_no"];
    $customerphone = $_POST["customer_phone"];
    $customeremail = $_POST["customer_email"];

    // Create a connection to the database
    $conn = mysqli_connect("localhost", "root", "", "capstonedb");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // query insert data
    $query = "INSERT INTO registuser
                VALUES
                ('$customerid','$customername','$customeradd','$customerktp','$customerphone','$customeremail')
                ";

    // Execute query
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/user_form.css">
    <title>Registration Form</title>
</head>
<body>
    <ul>
        <br>
    <h2>Customer Form Registration</h2>
    </ul>
    <br>

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
            <label for="customer_address" class="form-label">Customer Address</label>
            <input type="text" name="customer_address" class="form-control" id="customer_address" aria-describedby="emailHelp">
            <br>
            <!--Q4-->
            <label for="customer_ktp_no" class="form-label">Customer KTP Number</label>
            <input type="text" name="customer_ktp_no" class="form-control" id="customer_ktp_no" aria-describedby="emailHelp">
            <br>
            <!--Q5-->
            <label for="customer_phone" class="form-label">Customer Phone Number</label>
            <input type="text" name="customer_phone" class="form-control" id="customer_phone" aria-describedby="emailHelp">
            <br>
            <!--Q6-->
            <label for="customer_email" class="form-label">Customer E-mail</label>
            <input type="text" name="customer_email" class="form-control" id="customer_email" aria-describedby="emailHelp">
            <br>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href ="home_user.php" class="btn btn-primary">Back </a></form>    
    
            <ul>
      </form>
</form>
</body>
</html>