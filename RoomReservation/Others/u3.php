<?php

if(isset($_POST['submit']))
{
    $Client_id=$_POST['id'];
	$Room_number=$_POST['Room_number'];
	$Room_type=$_POST['Room_typ'];
	$Bed_size=$_POST['Bed_size'];
	$Number_of_Room=$_POST['Number_of_Room'];

$query2 = "UPDATE 'room' SET Room_number="$Room_number",Room_type="$Room_type",Bed_size="$Bed_size" WHERE Client_id="$Client_id";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
echo "Successfully Updated";
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