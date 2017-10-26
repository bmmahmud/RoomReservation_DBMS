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
<li><a href="">DELETE</a></li>
</th>
<th>
<li><a href="">REPORT</a></li>
</th>
</tr>

</table>
<center><h2><font color="black">Delete Information</h2>
	<table border=1 cellpadding=1 cellspacing=1>
  <tr>
      <th>First Name:</th>
	  <th>Last Name:</th>
	  <th>Age:</th>
	  <th>Address:</th>
	  <th>Phone Number:</th>
	  <th>Birth Of Date:</th>
	  <th>Gender:</th>
	  <th>Blood Group:</th>
	  <th>Reason for visit:</th>
	  <th>Doctor's Name:</th>
	  <th>Delete</th>
  
  </tr>
  <?php
   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'virus hospital management system');
   $sql = "SELECT * FROM patient_inf";
   $records = mysqli_query($con,$sql);
   while($row = mysqli_fetch_array($records))
   {
	   echo "<tr>";
	   echo "<td>".$row['first_name']."</td>";
	   echo "<td>".$row['last_name']."</td>";
	   echo "<td>".$row['age']."</td>";
	   echo "<td>".$row['address']."</td>";
	   echo "<td>".$row['phone']."</td>";
	   echo "<td>".$row['birth_o_d']."</td>";
	   echo "<td>".$row['gender']."</td>";
	   echo "<td>".$row['blood_group']."</td>";
	   echo "<td>".$row['diseases']."</td>";
	   echo "<td>".$row['doctors_name']."</td>";
	   echo "<td><a href=delete.php?patient_id=".$row['patient_id'].">Delete</a></td>";

   }
?>
</body>
</html>