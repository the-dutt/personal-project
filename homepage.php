<?php
include('connection.php');
include('login.php');
$selectquery="select firstname, lastname from form1_table where email='$email' and password='$password'";
$newquery=mysqli_query($con,$selectquery);
if($newquery)
{
    if(mysqli_num_rows($newquery)>0)
    {
        while($row=mysqli_fetch_assoc($newquery))
        {
            echo "Welcome ".$row['$fname'].$row['$lname']."<br>";
        }
    }
    else
    {
        echo "No results found";
    }
}
$con->close();
?>