<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "hotel_db";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
    $Client_id=$_POST['Client_id'];
	$Room_number=$_POST['Room_number'];
	$Room_type=$_POST['Room_type'];
	$Bed_size=$_POST['Bed_size'];

           
   // mysql query to Update data
   $query = "UPDATE 'room' SET `Room_number`='".$Room_number."',`Room_type`='".$Room_type."',`Bed_size`=$Bed_size WHERE `Client_id` = $Client_id";
 
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="" method="post">
            <input type="text" name="Client_id" required placeholder="Id"><br><br>
            <input type="text" name="Room_number" required placeholder="Room_number"><br><br>
            <input type="text" name="Room_type" required placeholder="Room_type"><br><br>
            <input type="text" name="Bed_size" required placeholder="Bed_size"><br><br>
			
			
            <input type="submit" name="update" required value="Update Data">
        </form> 

    </body>


</html>