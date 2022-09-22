<?php
$servername="localhost";
$username="root";
$password="";
$database_name="pune fitness";

$conn = mysqli_connect('localhost', 'root','','punefitness');
if(!$conn)
    {
		die("connection failed".mysqli_connect_error());
	}
	if(isset($_post['save']))
	{
		$NAME =$_post["NAME"];
        $AGE = $_post["AGE"];
        $GENDER =$_post["GENDER"];
        $LOCALITY =$_post["LOCALITY"];
        $EMAIL_ID =$_post["EMAIL_ID"];
        $PHONE_NO =$_post["PHONE_NO"];
		$sql_query="INSERT INTO punefitnessregistration(NAME,AGE,GENDER,LOCALITY,EMAIL_ID,PHONE_NO)
	    VALUES('$NAME','$AGE','$GENDER','$LOCALITY','$EMAIL_ID','$PHONE_NO')";
		
		if(mysqli_quert($conn,$sql_query))
		{
			  echo "Registration successfully";
		}
		else
		{
			echo "error:" .$sql ."".mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>