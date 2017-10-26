<html>
<body style="background-color:rgb(255,255,0)">
<center>
<h1 color: blue;>PATIENT MANAGEMENT SYSTEM    <img src="images (1).jpg" style="width:120px;height:70px;"> </h1>
<br>
<center action="connectioncode.php" method="post">
<h2 style="background-color:rgb(90,90,90);color:white">HOME PAGE</h2>
<br><br>
</center>
<center>
<table style="width:80%">

<tr>
<th>
<li><a href="home.html">HOME PAGE</a></li>
</th>
<th>
<li><a href="about.html">ABOUT</a></li>
</th>
<th>
<li><a href="patient_inf.html">PATIENT REGISTRATION</a></li>
</th>
<th>
<li><a href="view.php">VIEW PAGE </a></li>
</th>
<th>
<li><a href="newsearch.php">SEARCH</a></li>
</th>
</tr>

</table>
<br><br>
	   <center><h1>Patient Details</h1></center><br><br>
	   <center>
	   
	   
	    <form method="POST">
	   <input type="text" name="search"/>
	   <input type="submit" name="submit" value="search" />
	   <br><br><br>
	   
	   
<?php	
		$output=NULL;   
	   if(isset($_POST['submit'])){
	   
	   $mysqli = new mysqli("localhost","root","","virus hospital management system");
	   
	   $search = $mysqli->real_escape_string($_POST['search']);
	   
	   $resultset=$mysqli->query("select * from patient_inf where patient_id='$search'");
	   
	    echo "<div id='prn'><table border='1' cellpadding='10' align='center' style='color:black' bgcolor='blue' >";
	   if($resultset->num_rows>0)
	   {
	   		while($rows=$resultset->fetch_assoc())
			{
             
                                  echo "<tr>";
				$NNAME=$rows['first_name'];
                              echo "<th> First name </th>";
				$output= "$NNAME";
				echo '<td>'.$NNAME.'</td>';
                                 echo "</tr>";
                                 echo "<tr>";
                                $IID=$rows['last_name'];
			        echo "<th> Last name </th>";
				echo '<td>'.$IID.'</td>';
                                    echo "</tr>";
                                    echo "<tr>";
				$CONN=$rows['age'];
                                echo "<th> Age </th>";
				echo '<td>'.$CONN.'</td>';
                                    echo "</tr>";
                                    echo "<tr>";
				$SPP=$rows['phone'];
				echo "<th> Phone Number </th>";
				echo '<td>'.$SPP.'</td>';
                                    echo "</tr>"; 
                                    echo "<tr>";
				$JJD=$rows['birth_o_d'];
				echo "<th> Birth of date </th>";
				echo '<td>'.$JJD.'</td>';
                                     echo "</tr>";
                                       echo "<tr>";
				$RRT=$rows['address'];
				echo "<th> Address </th>";
				echo '<td>'.$RRT.'</td>';
                                     echo "</tr>";
                                     echo "<tr>";

                                $RRRT=$rows['gender'];
				echo "<th>Gender </th>";
				echo '<td>'.$RRRT.'</td>';
                                     echo "</tr>";
                                     echo "<tr>";


				$VVVT=$rows['patient_id'];
				echo "<th>Patient ID </th>";
				echo '<td>'.$VVVT.'</td>';
                                      echo "</tr>";
                                      echo "<tr>";
                            


				$VVT=$rows['diseases'];
				echo "<th>Reason for visit</th>";
				echo '<td>'.$VVT.'</td>';
                                     echo "</tr>";

                                     echo "<tr>";
				$VVVVT=$rows['doctors_name'];
				echo "<th>Doctor's Name </th>";
				echo '<td>'.$VVVVT.'</td>';
                                     echo "</tr>";
			}
	   
	   
	   } else 
	   {
	   	echo $output="Sorry! No Result Found. Try with another valid ID.";
	   }
	   
	   echo "<tr><td colspan='2' align='center'><input type='button' value='Print' onclick='prnt()'></td></tr></table></div>";	   
	   }
	   
	   
?>
<script>
function prnt(){
	var divtoprint=document.getElementById('prn').innerHTML;
        var newwin=window.open('','Print-Window','');
		newwin.document.write("<center><h1>PATIENT INFORMATION</h1></center>");
        newwin.document.write(divtoprint);
        newwin.print();
}
</script>
<br><br><br>	   
<table style="width:8000%">
<tr>
<th>
<td><div style="right">
<h4><p>&copy; Created by Md. Ohidul Islam </p></h4>
</div>
</td>
</th></tr>
</b>
</table>
<footer>
<div style="right">
<h3>
<p>&copy; HELPLINE 01929322565 <br></p>
</h3>
</div>
</footer>	   
</body>
</html>
