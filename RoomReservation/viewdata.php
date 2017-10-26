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
				 <h4 style="color:#45171d">Room Reservation System</h4>
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

<h1 style="color:White">View All Room Reservation:</h1>

<hr style="color:white"/>
 

                                   <!--TABLE START-->
<br>								   
<?php

/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("hotel_db");

        // get results from database
        $result = mysql_query("SELECT * FROM room") 
                or die(mysql_error());  
                
        // display data in table
       
        
        echo "<table border='2' cellpadding='10'>";
        echo "<tr> <th>Client_id</th> <th>Room_number</th><th>Room_type</th><th>Bed_size</th><th>Number_of_Room</th><th>Delete</th><th>Update</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result)) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['Client_id'] . '</td>';
                echo '<td>' . $row['Room_number'] . '</td>';
				echo '<td>' . $row['Room_type'] . '</td>';
				echo '<td>' . $row['Bed_size'] . '</td>';
				echo '<td>' . $row['Number_of_Room'] . '</td>';
				echo "<td><a href= delete.php?Client_id=".$row['Client_id'].">Delete</a></td>";
				echo "<td><a href= update.php?Client_id=".$row['Client_id'].">Update</a></td>";
				

				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>
                    <!--View End-->



             

<br><br><br><br><br><br><br><br>

</div>




<!--footer-->
<footer id="footer">
     <p>@all rights reserved by B.M.Ashik Mahmud / 15103052</p>
</footer>	<!--footer end-->						
							  
</body>
</html>