<?php
global $con;
global $row;
	
	
	
	
	
	
	
	
		
	
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
	echo 'Not Connneted To Server';
	}

	if(!mysqli_select_db($con,'users'))
	{
	echo 'Database Not selected';
	}
	
	
	
	$name=$_POST['username'];
	$password=$_POST['pass'];
	$emai=$_POST['email'];
	
	echo "$name<br>";
	echo "$emai";
	
	
	
	#$query = "SELECT Name,Password FROM Info";
		
	$sql = "SELECT * FROM Info";
	
	$fetch = mysqli_query($con,$sql);
	
	#$row=mysqli_fetch_array($res);
	
	
	while ( $row = mysqli_fetch_array($fetch))
	{
		
	#echo "$row[Name],$row[Password] <br>";
	$na = $row['Name'];
	$em = $row['Email'];
	
	#echo "$na <br> $Pass";
	
	}
	#$query = "SELECT Name,Password FROM Info";
	if($na==$name)
	{
            echo "Username already exists!!";
			#break;
	}

     elseif($em==$emai)
	 {
           echo "Email already exists!!";
		   #break;
	}

     elseif($na!==$name && $em!==$emai)
	 {
          insert();
			#break;
	}
		
        else
		{ 
			
              echo "Email already exists!!";
		   #break;
			 
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
	
	function insert()
	{
		global $Name;
		global $Email;
		global $Password;
		
		$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
	echo 'Not Connneted To Server';
	}

	if(!mysqli_select_db($con,'users'))
	{
	echo 'Database Not selected';
	}
	
		
		
	$Name=$_POST['username'];
	$Password=$_POST['pass'];
	$Email=$_POST['email'];
	
	$sql1 = "INSERT INTO Info (Name,Password,Email) VALUES ('$Name','$Password','$Email')";
	
	
	if(!mysqli_query($con,$sql1))
	{
	echo 'Not Inserted';
	}
	else
	{
	
	
	
	
    $file = fopen("creds.csv","a+") ;
	fwrite($file,"\n");
    fwrite($file,$Name );
   fwrite($file,",");
    fwrite($file,$Password  );
    fwrite($file,",");
    fwrite($file,$Email);
    fclose($file);
	
	echo 'Inserted';
	
	}
	header("refresh:2; url=Login.html");
	
	}
	
	
	
	
	
	?>