<?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'virus hospital management system');
   $sql = "DELETE FROM patient_inf WHERE patient_id='$_GET[patient_id]'";
   if(mysqli_query($con,$sql))
	   header("refresh:1; url=del.php");
   else
	   echo "Not Deleted!";


?>