<?php
include '../Function/function.php';
//Make sure the Submit Button
if( isset($_POST["submit"]) ){
//Take Data from each element
$bookid = htmlspecialchars($_POST["book_id"]);
$customerid= htmlspecialchars($_POST["customer_id"]);
$detectorid = htmlspecialchars($_POST["detector_id"]);
$bsd= htmlspecialchars($_POST["book_start_date"]);
$btrd = htmlspecialchars($_POST["book_tr_date"]);
$cusname = htmlspecialchars($_POST["customer_name"]);
$cusadd = htmlspecialchars($_POST["customer_address"]);
$pm = htmlspecialchars($_POST["payment_method"]);

$q= mysqli_query($conn,"SELECT * FROM booking WHERE customer_id = '$customerid' ");
$cek = mysqli_num_rows($q);

if($cek==0){
    mysqli_query($conn,"INSERT INTO booking VALUES ('','$customerid','$detectorid','$bsd','$btrd','$cusname','$cusadd','$pm')");
}
else{
    echo " <script>
    alert('Your Room Already Booked by Another Tenant , Please Choose Another Room');
    document.location.href = 'book_form.php';
    </script>
    ";
}


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/tenant_form.css">
    <title>Booking Form</title>
</head>
<body>
    <ul>
    <br>
    <h2>Booking Form</h2>
    </ul>
     <br>

    <form action="" method="post">
    
    <ul>
        
    <form>
        <div class="mb-3">
            <!--Structure-->
            <!--Q1-->
            <label for="book_id" class="form-label">Book ID</label>
            <input type="text" name="book_id" class="form-control" id="book_id" aria-describedby="emailHelp">            

            <!--Q2-->
            <label for="customer_id" class="form-label">Customer ID</label>
            <input type="text" name="customer_id" class="form-control" id="customer_id" aria-describedby="emailHelp">

            <!--Q3-->
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" id="customer_name" aria-describedby="emailHelp">

            <!--Q4-->
            <label for="detector_id" class="form-label">Select Kit Detector ID</label>
            <input type="text" name="detector_id" class="form-control" id="detector_id" aria-describedby="emailHelp">

            <!--Q5-->
            <label for="customer_address" class="form-label">Customer Address</label>
            <input type="text" name="customer_address" class="form-control" id="customer_address" aria-describedby="emailHelp">

            <!--Q6-->
            <label for="paymant_method" class="form-label">Payment Method</label>
            <input type="text" name="payment_method" class="form-control" id="payment_method" aria-describedby="emailHelp">

            <!--Q7-->
            <label for="book_start_date" class="form-label">Start Date</label>
            <input type="date" name="book_start_date" class="form-control" id="book_start_date" aria-describedby="emailHelp">
            <br>

            <!--Q8-->
            <label for="book_tr_date" class="form-label">Today's Date</label>
            <input type="date" name="book_tr_date"  class="form-control" id="book_tr_date" aria-describedby="emailHelp">
             

            <br><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
            <a href ="homeuser.php" class="btn btn-primary">Back </a></form> 
            
         

        </form>
    </ul>
   
</form>
</body>
</html>