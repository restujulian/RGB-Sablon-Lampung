<?Php
	$dbhost_name = "localhost";
	$database = "rgb_sablon";// database name
	$username = "root"; // user name
	$password = ""; // password 

	try 
	{
		$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	} 
	catch (PDOException $e) 
	{
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
?> 

