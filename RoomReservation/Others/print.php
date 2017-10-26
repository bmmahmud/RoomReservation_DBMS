



<?php
    $Client_id=$Room_number=$Room_type=$Bed_size=NULL;
   
    
	
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "hotel_db";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);     
    
	
	$Client_id= $_GET['Client_id'];
    $Room_number=$_GET['Room_number'];
    $Room_type=$_GET['Room_type'];
    $Bed_size=$_GET["Bed_size"];
    
    // echo $name.'<br>'.$rate.'<br>'.$start_time.'<br>'.$end_time.'<br>'.$id.'<br>'.$desk_no.'<br>';
    
    
      
   
      
    $sql='UPDATE `room` SET `Room_number` = "'.$Room_number.'",`Room_type`="'.$Room_type.'",`Bed_size`="'.$Bed_size.'" WHERE `Client_id` = "'.$Client_id.'"';         
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
	
	
	<html>
	<body>
         <form action="" method="post">
            <input type="text" name="Client_id" required placeholder="Id"><br><br>
            <input type="text" name="Room_number" required placeholder="Room_number"><br><br>
            <input type="text" name="Room_type" required placeholder="Room_type"><br><br>
            <input type="text" name="Bed_size" required placeholder="Bed_size"><br><br>
			
			
            <input type="submit" name="update" required value="Update Data">
        </form> 
		
		
        <script>
            function prnt(){
                var div=document.getElementById('pnt').innerHTML  ;
                var win=window.open("", "", "width=800,height=500");
                win.document.write(div);
                win.print();
            }
        </script>
		
		
</body>		
</html>		