<html>
<body>
<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("student",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM stud";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$roll[$i]=$rows['rollno'];
$i++;
}
$total_elmt=count($roll);
?>
<form method="POST" action="">
Select the Roll No. to Update: <select name="sel">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $roll[$j];
?></option><?php
}
?>
</select><br />
Name: <input name="name" type="text" /><br />
Total Marks: <input name="marks" type="text" /><br />
Course: <input name="course" type="text" /><br />
<input name="submit" type="submit" value="Update"/><br />
<input name="reset" type="reset" value="Reset"/>
</form>

<?php

if(isset($_POST['submit']))
{
$value=$_POST['sel'];
$name=$_POST['name'];
$marks=$_POST['marks'];
$course=$_POST['course'];

$query2 = "UPDATE stud SET name='$name',mark='$marks',course='$course' WHERE rollno='$value'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
echo "Successfully Updated";
}
?>
<p align=right><a href="view.php">VIEW RECORDS</a></p>
<p align=right><a href="index.php">HOME</a></p>