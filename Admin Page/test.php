<?php
include '../Functions/functions.php';
//Make sure the Submit Button
if( isset($_POST["submit"]) ){
//Take Data from each element
$customerid = $_POST["customer_id"];
$customergen= $_POST["customer_gender"];
$customerlab = $_POST["customer_label"];
$customerloc = $_POST["customer_location"];
$customerwin = $_POST["customer_window"];
$customermc = $_POST["customer_monthly_cost"];
 

// query insert data
$query = "INSERT INTO customer
            VALUES
            ('$customerid','$customergen','$customerlab','$customerloc','$customerwin','$customermc')
            ";
            mysqli_query($conn,$query); 
}
?>