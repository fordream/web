<a href='deletecrash.php'>Delete ALl Crash</a>
<Br>
<?php		
	$search = htmlspecialchars($_GET["search"]);	
	echo "Search for : ".$search;	
	
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");			
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();			
	}else{						
		$m = "SELECT * FROM `crash`";		
		$resultAll = mysqli_query($con,$m);
		echo "<form action=''><select name='search' width='200'>";
		echo "<option value=''></option>";
		while($row = mysqli_fetch_array($resultAll, MYSQL_ASSOC)){
			echo "<option name='".$row["apppackage"]."'>".$row["apppackage"]."</option>";
		}
		echo "</select><input type='submit' value='search'/></form>";
		
		$m = "SELECT * FROM `crash` where apppackage like '%".$search."%'";
		$result = mysqli_query($con,$m);        					
		if($result){
		}		
		
		echo "<table border='1'>";
		echo "<th  colspan='7' height='50'>Search for : ".$search."</th>";
		echo "<tr>";
		echo "<th width='100'>appname</th>";
		echo "<th width='100'>devicename</th>";
		echo "<th width='100'>androidversion</th>";
		echo "<th width='100'>versionapp</th>";
		echo "<th width='100'>apppackage</th>";
		echo "<th width='100'>Time</th>";
		echo "<th width='1000'>Error</th>";
		echo "</tr>";
		
		while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){	
		
			echo "<tr>";
			echo "<td>".$row["appname"]."</td>";
			echo "<td>".$row["devicename"]."</td>";
			echo "<td>".$row["androidversion"]."</td>";
			echo "<td>".$row["versionapp"]."</td>";
			echo "<td>".$row["apppackage"]."</td>";
			echo "<td>".$row["time"]."</td>";
			echo "<td>".$row["log"]."</td>";
			echo "</tr>";	
		}	
		echo "</table>";
		
	}

	
	mysqli_close($con);			
?>