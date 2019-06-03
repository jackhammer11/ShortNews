<?php
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
	echo 'Not Connneted To Server';
	}

	if(!mysqli_select_db($con,'users'))
	{
	echo 'Database Not selected';
	}
	
	
	
	
	
	#$query = "SELECT Name,Password FROM Info";
		
	$sql = "SELECT Name,Password FROM info";
	
	$fetch = mysqli_query($con,$sql);
	
	#$row=mysqli_fetch_array($res);
	
	while($row = mysqli_fetch_array($fetch))
	{
	echo "$row[Name],$row[Password] <br>";
	}
	
	
	
	

	
	#$sql = "INSERT INTO Info (Name,Password,Email) VALUES ('$Name','$Password','$Email')";
	
	
	#if(!mysqli_query($con,$query))
	#{
	#echo 'Not Access';
	#}
	#else
	#{
	#	echo "$query";
	#	
	#$name=$_GET['Name'];
	#$Pass=$_GET['Password'];
	
	
	
    #echo "$name" ;
	
	#echo "$Pass";
	
	#}
	#header("refresh:2; url=Login.html");
	
	?>