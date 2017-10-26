<html>
<body style="background-color:rgb(255,255,0)">
<center>
<h1 color: blue;>VIRUS HOSPITAL MANAGEMENT SYSTEM    <img src="images (1).jpg" style="width:120px;height:70px;"> </h1>
<br>
<center action="connectioncode.php" method="post">
<h2 style="background-color:rgb(90,90,90);color:white">HOME PAGE</h2>
<br><br>
</center>
<center>
<table style="width:90%">

<tr>
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
<th>
<li><a href="">UPDATE</a></li>
</th>
<th>
<li><a href="del.php">DELETE</a></li>
</th>
<th>
<li><a href="">REPORT</a></li>
</th>
</tr>

</table>

<center><h2><font color="black">Update</h2>
<?php
echo "<br>";
   $con = mysqli_connect('localhost','root','','virus hospital management system');
   //mysqli_select_db($con,'virus hospital management system');
   $sql = "SELECT * FROM patient_inf";
   $records = mysqli_query($con,$sql);
?>
<table style="width:50%">
  
  <tr>
	  <td>First Name:</td>
	  <td>Last Name:</td>
	  <td>Age:</td>
	  <td>Address:</td>
	  <td>Phone Number:</td>
	  <td>Birth Of Date:</td>
	  <td>Gender:</td>
	  <td>Patient Id :</td>
	  <td>Blood Group:</td>
	  <td>Reason for visit:</td>
	  <td>Doctor's Name:</td>
</tr>
	 
   
   <?php
   while($row = mysqli_fetch_array($records))
   {    
	   echo "<tr><form action=vww.php method=post>";
	   echo "<td><input type=text name=first_name value='".$row['first_name']."'></td>";
	   echo "<td><input type=text name=last_name value='".$row['last_name']."'></td>";
	   echo "<td><input type=text name=age value='".$row['age']."'></td>";
	   echo "<td><input type=text name=address value='".$row['address']."'></td>";
	   echo "<td><input type=text name=phone value='".$row['phone']."'></td>";
	   echo "<td><input type=text name=birth_o_d value='".$row['birth_o_d']."'></td>";
	   echo "<td><input type=text name=gender value='".$row['gender']."'></td>";
	   echo "<td><input type=text name=patient_id value='".$row['patient_id']."'></td>";
	   echo "<td><input type=text name=blood_group value='".$row['blood_group']."'></td>";
	   echo "<td><input type=text name=diseases value='".$row['diseases']."'></td>";
	   echo "<td><input type=text name=doctors_name value='".$row['doctors_name']."'></td>";
	   echo "<td><input type=submit value='update'></td>";
	   echo "</form></tr>";
	
   }
   echo "</table>";
   
   ?>
   
</body>
</html>