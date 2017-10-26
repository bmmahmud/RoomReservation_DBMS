<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'hotel_db');
   $sql = "DELETE FROM room WHERE Client_id='$_GET[Client_id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=viewdata.php");
   else
	   echo "Not Deleted!";


?>