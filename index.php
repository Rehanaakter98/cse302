<html>
<body>
<form action="index.php" method="post">
Name: <input type="text" name="Name"><br>
E-mail: <input type="text" name="email"><br>
<input type="Submit">
</form>
</body>
</html>
<?php echo $_POST["Name"]; ?> <br>
<?php echo $_POST["email"]; ?>

<!doctype html>
<html>
	<h1 style="text-align:center;">
	<h1 style="color:Blue;">University Database</h1>
	
		<button><table border=1 h3 style="color:Green;"> Output</button></h3><br>

	<body>


	</body>
</html>



<?php
    $servername = "localhost";//servername
    $username = "root";//name of mysql database
    $password = "";
    $db_name = "universitydb";

    $dbcon = mysqli_connect($servername, $username, $password, $db_name);

    // Check connection whether connection has been successfully executed
    if(mysqli_connect_errno()) {//if there is error
      echo "Failed to connect to MySQL: ". mysqli_connect_error();
      exit();
    }
    //echo "MySQL has been connected successfully.";
	
	//$q = "INSERT INTO department VALUES('EEE', 'North', 110000)";
	//mysqli_query($dbcon, $q);//one parameter is for connection pointer another for query or $errormsg = mysqli_error()//if there is error in executing the query
	$errormsg="";
	if($errormsg!="")//if $errormsg is not empty then the errormsg would be printed
	{
		
		echo $errormsg;
		
	}
	
	//$q = "UPDATE department SET budget=3000 WHERE dept_name='Finance'";
	
	//mysqli_query($dbcon, $q);//one parameter is for connection pointer another parameter for query
	
	
	$q = "SELECT *FROM department ";//returning value
	$result = mysqli_query($dbcon, $q) ;//returns different values collect multiple rows
	
	//whether row has been collected how many row has been collected
	 $num_rows = mysqli_num_rows($result);
    if($num_rows>0){
        echo "<table border=1 'text-align:center;font-size:5;'>";
            echo "<tr><td>Dept Name</td><td>Buidling</td><td>Budget</td></tr>";
            while(($row=mysqli_fetch_array($result))!=0){
                echo "<tr>";
                    echo "<td>".$row['dept_name']."</td>";
                    echo "<td>".$row['building']."</td>";
                    echo "<td>".$row['budget']."</td>";
                echo "</tr>";
            }
        echo "</table>";
	}
?>
