<?php
    $link=NULL;
    $delete_id=$_POST['d'];
	
	$link = mysqli_connect("localhost", "root", "","hotel_db");
	if(!$link){
	echo"not connected";
	}else{
		echo "connected";
	}
    $flag=mysqli_query($link,"DELETE FROM 'room' WHERE 'Client_id'=$delete_id");
    if($flag==TRUE){
        echo file_get_contents('view date.php');
        echo "successfully DELETE ".$delete_id." to the database";
    }else{
        echo '<br>';
        echo mysqli_error($link);        
    }
?>