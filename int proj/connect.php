<?php
$a=$_POST["n"];
$con=mysql_connect("localhost","root","");
mysql_select_db("27july");
mysql_query("insert into class(n,a,d,g,e,pn,p,c,sa)values('$a')");
echo("register done");
include("register.php");
mysql_close($con);
?>