<?php
        // put your code here
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($email == "admin" && $password="admin")
        {
           header("location:clusteradd.php");
        }
		else 
		{
			
			header("location:adminlogin.php");
			echo("login failed");
			
		}
?>
