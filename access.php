<?php
	$con = mysqli_connect('localhost','root','');
	
	if(!$con)
	{
	echo 'Not Connneted To Server';
	}

	if(!mysqli_select_db($con,'users'))
	{
	echo 'Database Not selected';
	}
	
	
	
	$name=$_POST['uname'];
	$Pass=$_POST['passw'];
	
	#$query = "SELECT Name,Password FROM Info";
		
	$sql = "SELECT * FROM info";
	
	$fetch = mysqli_query($con,$sql);
	
	#$row=mysqli_fetch_array($res);
	
	while ( $row = mysqli_fetch_array($fetch))
	{
	#echo "$row[Name],$row[Password] <br>";
	$na = $row['Name'];
	$pa = $row['Password'];
	#echo "$na <br> $Pass";
	
	
	$flag=0;
	
	if($name==$na&&$Pass==$pa)
	{
		$flag=1;
	header("refresh:1; url=hello.html");
	
	break;

	}	
		else
		{
			
			$flag=0;
			
		}
	
	}
	
	if($flag==0)
	{
		echo "invalid user or password";
		header("refresh:2; url=Login.html");
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