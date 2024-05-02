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
            <label for="room_id" class="form-label">Room ID</label>
            <input type="text" name="room_id" class="form-control" id="room_id" required value="<?= $qdr["room_id"];?>"aria-describedby="emailHelp">
            <!--Q2-->
            <label for="room_gender" class="form-label">Room Gender</label>
            <input type="text" name="room_gender" class="form-control" id="room_gender" required value="<?= $qdr["room_gender"];?>" aria-describedby="emailHelp">
            <!--Q3-->
            <label for="room_label" class="form-label">Room Label</label>
            <input type="text" name="room_label" class="form-control" id="room_label" required value="<?= $qdr["room_label"];?>" aria-describedby="emailHelp">
            <!--Q4-->
            <label for="room_location" class="form-label">Room Location</label>
            <input type="text" name="room_location" class="form-control" id="room_location" required value="<?= $qdr["room_location"];?>" aria-describedby="emailHelp">
            <!--Q5-->
            <label for="room_window" class="form-label">Room Window</label>
            <input type="text" name="room_window" class="form-control" id="room_window" required value="<?= $qdr["room_window"];?>" aria-describedby="emailHelp">
            <!--Q6-->
            <label for="room_monthly_cost" class="form-label">Room Monthly Cost</label>
            <input type="text" name="room_monthly_cost" class="form-control" id="room_monthly_cost" required value="<?= $qdr["room_monthly_cost"];?>"aria-describedby="emailHelp">
            <!--Q7-->
            <label for="room_availabality" class="form-label">Room Availabality</label>
            <input type="text" name="room_availabality" class="form-control" id="room_availabality" required value="<?= $qdr["room_availabality"];?>" aria-describedby="emailHelp">
            <!--Q8-->
            <label for="room_description" class="form-label">Room Description</label>
            <input type="text" name="room_description" class="form-control" id="room_description" required value="<?= $qdr["room_description"];?>" aria-describedby="emailHelp">

            <br><br>
            
            <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
            <a href="roomdatabase.php" class="btn btn-primary">Back to Room Database</a>
         

        </form>
    </ul>
   
</form>
</body>
</html>

