
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
	
	
	$Name=$_POST['username'];
	$Password=$_POST['pass'];
	$Email=$_POST['email'];
	
	$sql = "INSERT INTO info (Name,Password,Email) VALUES ('$Name','$Password','$Email')";
	
	
	if(!mysqli_query($con,$sql))
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
	
	?>
	
	
	