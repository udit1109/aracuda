<?php

	$fnm=ucfirst($_POST['fnm']);
	$lnm=ucfirst($_POST['lnm']);
	$des=strtoupper($_POST['designation']);
	$r1=$_POST['r1'];
	$eid=strtolower($fnm.'.'.$lnm.'@suryaanshsanstha.org');
	$mobile=$_POST['mobile'];
	$pass=md5($_POST['pass']);


	include('dbconnection.php');
		
			$s="insert into memberreg values(null,'$fnm','$lnm','$des','$r1','$eid',$mobile,'$up','$pass')";
			
			$r=mysqli_query($con,$s);
			if($r)
			{
				header('location:viewmember.php');
			}
			else	
				echo "Not Inserted";
	
	
?>