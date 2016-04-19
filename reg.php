<?php
include("index.php");
 mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 mysql_select_db("dimension4") or die(mysql_error()) ; 
	
	$uname=$_GET["uname"];
	$usn=$_GET["usn"];
	$event=$_GET["event"];
	$phone=$_GET["phone"];
    
    if($event=="$event")
		{
            $q1="insert into $event values('$uname','$usn','$event','$phone',0)";
			$result=mysql_query($q1);
                       if (mysql_error())
            {
                echo "<script type='text/javascript'>
                   alert('Error, The USN & Contact you entered already exists.  Please try Again.');
                </script>";
            }
            else
            {
            
				echo "<script type='text/javascript'>alert('Registration Successfull'); </script>";  
            }
		}
        exit();
?>