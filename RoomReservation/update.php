<!doctype html>
<html>
<head>
    <title>Hotel Star Palace(Room) </title>
    <link type="text/css" rel="stylesheet" href="style.css"/>

<!--TABLE -->	
	
<style>
table {
    width:60%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
	
</head>


<body>
                             
<section id="first">
    <div class="container">
	                            <center><h1 style="font-family: Aristocrat;color:#45171d">Room Reservation System</h1></center> 
	    <div class="full-width">
		     <!--Logo-->
		    <div class="logo">
			     <img src="images/ash.png" width="150" hight="150"/>
				 <h3 style="color:#45171d">Room Reservation System</h3>
			</div>
			<!--Menu-->
			<div class="menu">
			<ul>
			     <li><a href="home.html">Home</a></li>
				 <li><a href="Room.html">Room</a></li>
			     <li><a href="viewdata.php">View</a></li>
				 <li><a href="search.php">Search</a></li>
				 <li><a href="report.php">Report</a></li>
		    </ul>
		</div>   
	</div>
</section>

                                 <!--Menu End-->
<div style="background-color:#fecea8;  padding:4px; width:80%;hight: 500px; margin:0 auto;" align="middle"> <!--Block style-->

<h1 style="color:White">View All data:</h1>

<hr style="color:white"/>



            
			
<center><h1>Client Room Details</h1></center><br><br>
	   
	   
	   
	   
	   
	                                <!--Update Data Start-->
  
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
    $Number_of_Room=$_POST['Number_of_Room'];
           
   // mysql query to Update data
    $query='UPDATE `room` SET `Room_number` = "'.$Room_number.'",`Room_type`="'.$Room_type.'",`Bed_size`="'.$Bed_size.'" ,`Number_of_Room`="'.$Number_of_Room.'" WHERE `Client_id` = "'.$Client_id.'"';
  
 
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
  
  
  
  
  
  
  
  <form action="" method="post">
            <input type="text" name="Client_id" required placeholder="Id"><br><br>
            <input type="text" name="Room_number" required placeholder="Room_number"><br><br>
            <input type="text" name="Room_type" required placeholder="Room_type"><br><br>
            <input type="text" name="Bed_size" required placeholder="Bed_size"><br><br>
			<input type="text" name="Number_of_Room" required placeholder="Number_of_Room"><br><br>
			
            <input type="submit" name="update" required value="Update Data">
        </form> 

    </body>
  
  
                                <!--Update Data End-->

<!--footer-->
<footer id="footer">
     <p>@all rights reserved by B.M.Ashik Mahmud / 15103052</p>
</footer>	<!--footer end--> 
</body>
</head>