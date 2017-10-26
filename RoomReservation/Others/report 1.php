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
			     <img src="images/ash.png" width="200" hight="200"/>
				 <h4 style="color:#45171d">Hotel Reservation System</h4>
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
	   
	   
	   <!--Report start-->
	   
	   
	    <form method="post">
	   <input type="text" name="search"/>
	   <input type="submit" name="submit" value="search" />
	   </br> </br> </br>
	              <!--Report Print start-->
				  
				  
				  
	   <div id="pnt">
	   
	   <img src="images/ash.png" width="100" hight="100"/></br>
	   <h3 style="font-family: Aristocrat;color:#45171d">Room Reservation System</h3>
	   
	   
<?php	
		$output=NULL;   
	   if(isset($_POST['submit'])){
	   
	   $mysqli = new mysqli("localhost","root","","hotel_db");
	   
	   $search = $mysqli->real_escape_string($_POST['search']);
	   
	   $resultset=$mysqli->query("select * from room where Client_id='$search'");
	   
	   if($resultset->num_rows>0)
	   {

   
   
			
	   		while($rows=$resultset->fetch_assoc())
			{
				$Client_id=$rows['Client_id'];
				$output= "Client_id = $Client_id<br>";
				echo $output;
				$Room_number=$rows['Room_number'];
				$output= "Room_number = $Room_number<br>";
				$Room_type=$rows['Room_type'];
				$output= "Room_type = $Room_type<br>";
				echo $output;
				$Bed_size=$rows['Bed_size'];
				$output= "Bed_size = $Bed_size<br>";
				
				
				
				
				$Client_id=$rows['Client_id'];
				$output= "$Client_id<br>";
				echo "<td>". $output ."</td>"; 
				
				$Room_number=$rows['Room_number'];
				$output= "$Room_number<br>";
				echo "<td>".$output."</td>";
				
				$Room_type=$rows['Room_type'];
				$output= "$Room_type<br>";
				echo "<td>". $output."</td>";
                
				$Bed_size=$rows['Bed_size'];
                $output="$Bed_size<br>";
                echo "<td>".$output ."</td>";
			}
			
	  
           
    
	   
	   } else 
	   {
	   	$output="No result";
	   }
	   
	   }
	   
?>	
</table> 
<br><br><br><br><br><br><br><br>
</div>
           <form>
              <input type="submit" value="Print" onclick="prnt()">
   </div>
           </form>
        <script>
            function prnt(){
                var div=document.getElementById('pnt').innerHTML  ;
                var win=window.open("", "", "width=800,height=500");
                win.document.write(div);
                win.print();
            }
        </script>


<!--footer-->
<footer id="footer">
     <p>@all rights reserved by B.M.Ashik Mahmud / 15103052</p>
</footer>	<!--footer end--> 
</body>
</head>