<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'form1db');
if(!$con)
{
    echo "Not connected to database";
}
else
{
    echo "Connected to database";
}
?>