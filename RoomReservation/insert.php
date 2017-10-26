<?php
    $link=NULL;
    $Client_id=$_POST['a'];
	$Room_number=$_POST['b'];
	$Room_type=$_POST['c'];
	$Bed_size=$_POST['d'];
	$Number_of_Room=$_POST['e'];
	$link = mysqli_connect("localhost", "root", "","hotel_db");
	if(!$link){
	echo"not connected";
	}else{
		echo "connected";
	}
    $flag=mysqli_query($link,"INSERT INTO room (Client_id,Room_number,Room_type,Bed_size,Number_of_Room)VALUES('$Client_id','$Room_number','$Room_type','$Bed_size','$Number_of_Room')");
    if($flag==TRUE){
        echo file_get_contents('Room.html');
        echo "successfully added ".$Client_id." to the database";
    }else{
        echo '<br>';
        echo mysqli_error($link);        
    }
?>