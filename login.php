<?php 
include('connection.php');
$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
if(isset($_POST['submit']))
{
    $emailquery="select * from form1_table where email='$email'";
    $query=mysqli_query($con,$emailquery);
    if($query)
    {
        if(mysqli_num_rows($query)>0)
        {
            echo "Record found";
            header("refresh:5;url=homepage.php");
        }
        else
        {
            echo "Record not found";
        }
    }
}
?>