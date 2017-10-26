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
<center><h2><font color="black"> Update</h2>
<?php

   $con = mysqli_connect('localhost','root','');
   mysqli_select_db($con,'virus hospital management system');
   $sql = "UPDATE patient_inf SET 
   first_name='$_POST[first_name]', 
   last_name='$_POST[last_name]',
   age='$_POST[age]',
   address='$_POST[address]',
   phone='$_POST[phone]',
   birth_o_d='$_POST[birth_o_d]',
   gender='$_POST[gender]',
   blood_group='$_POST[blood_group]',
   diseases='$_POST[diseases]',
   doctors_name='$_POST[doctors_name]' 
   WHERE patient_id='$_POST[patient_id]'
   ";
   if (mysqli_query($con,$sql))
	  // header("refresh:1; url=up.php");
  echo '<script>open("up.php","_self")</script>';
 
    else
		echo "Not UPDATE!";


?>
</body>
</html>