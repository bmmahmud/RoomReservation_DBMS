<html>
    <head>
        <title> cyber cafe report</title>
                <link rel="shortcut icon" href="rsc/favicon.ico">
    </head>
    <body>
        <style>
            body{
                /*background-image: url('rsc/back.png');*/
                background-repeat: no-repeat;
                background-size: cover;
            }
            table{
                margin: auto;
                background-color: rgba(255, 51, 51, 0.7);
                box-shadow: 0 4px 10px 4px rgba(255, 51, 51, 1.0);
            }            
            th{
                font-size:medium;
                border: 1px dotted black;
            }
            td{
                font-size:xx-large;
                cursor: alias;            }
            input{
                padding: 10px 10px;
                height: 30px;
                width: 300px;
                font-size: x-large;
            }
            .button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 5px 0;
  font-size: 1rem;
  font-weight: 200;
  text-transform: uppercase;
  letter-spacing: .5em;
  background: darkslategray;
  color: #ffffff;
  width: 50%;
   transition: .5s ease;
}
.button:hover, .button:focus {
    background: #006600;
  cursor: pointer;
}
.tooltip{
    display: inline-block;
    border-bottom: 1px dotted beige;
}
.tooltip .tooltiptext{
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: white;
    text-align: center;
    border-radius: 5px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    font-size: small;
}
.tooltip:hover .tooltiptext{
    visibility: visible;
}
        </style>
<?php
    $id=$spent_time=$cost=$end_time=$start_time=$name=$desk_no=$signature=$rate=$min=NULL;
    $f=$_SERVER['DOCUMENT_ROOT'].'/pro/rsc/links.xml';
    $xml= simplexml_load_file($f);
    $host=$xml->server;
    $user=$xml->username;
    $pass=$xml->password;
    $database=$xml->databasename;
    $link= mysqli_connect($host, $user, $pass, $database);       
    $id= $_GET['id'];
    $end_time=$_GET['end_time'];
    $desk_no=$_GET['d_n'];
    $name=$_GET["name"];
    $rate=$_GET['rate'];
    $start_time=$_GET['start_time'];
    $min=$_GET['spent_time'];
    // echo $name.'<br>'.$rate.'<br>'.$start_time.'<br>'.$end_time.'<br>'.$id.'<br>'.$desk_no.'<br>';
    $spent_time= floor($min/60).'h '. ($min%60).'m ';
    $cost=$min*$rate;
    
      
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bill=$_POST['paid'];  
    $sql='UPDATE `customer_info` SET `end_time` = "'.$end_time.'",`bill`="'.$bill.'",`spent`="'.$spent_time.'" WHERE `id` = "'.$id.'"';         
    $ik=  mysqli_query($link,$sql);
    $sql2='UPDATE `desk_info` SET `status` = "Free" WHERE `desk_no` = "'.$desk_no.'"';
    $ik2=  mysqli_query($link,$sql2);
    if(!$ik2 && !$ik){
        echo '1 '. mysqli_error($link);
    }else{
        header("Location:welcome.php");
    }
    }
    ?>
        <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
            <div id="pnt">
        <table style="margin: auto;">
            <tr><td colspan="2" align="center"><img src="rsc/banner.png" height="75px"></td></tr>
            <tr>
                <th>Name:</th><td><?php echo $name;?></td>
            </tr><tr>
                <th>ID:</th><td><?php echo $id;?></td>
            </tr><tr>
                <th>Start Time:</th><td><?php echo $start_time;?></td>
            </tr><tr>
                <th>End Time</th><td><?php echo $end_time;?></td>
            </tr><tr>
                <th>Spent</th><td><?php echo $spent_time;?></td>
            </tr><tr>
                <th>Rate</th><td><?php echo $rate;?></td>
            </tr><tr>
                <th>Cost</th><td class="tooltip"><?php echo $cost;?><span class="tooltiptext"><?php echo 'you spent '.$min.' min';?></span></td>
            </tr><tr>
                <th>Paid</th><td><input type="text" name="paid"></td>
            </tr> <tr>
                <td colspan="2" align="center"><input type="submit" value="paid & print" class="button" onclick="prnt()"></td>
            </tr>
        </table>
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
    </body>
</html>
