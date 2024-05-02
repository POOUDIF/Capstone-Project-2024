<?php 

include '../Function/function.php';

$customerid = $_GET["customer_id"];

if( delete($customerid) > 0 ) {
    echo " <script>
    alert('Data is deleted');
    document.location.href = 'service_database.php';
    </script>
    ";
   
}else {
    echo " <script>
    alert('Data is failed to be deleted');
    document.location.href = 'service_database.php';
    </script>
    ";
}

?>