<?php
include('secutiry.php');
session_start();
include('database/dbconfig.php');
if($connect)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(!$_SESSION['userName'])
{
    header('Location: loignForm.php');
}
?>