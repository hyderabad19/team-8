<?php
        // put your code here
        $email=$_POST['email'];
        $password=$_POST['password'];
        if($email == "" && $password="")
        {
           header("location:clusteradd.php");
        }
?>
