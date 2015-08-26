<?php
	$user = htmlspecialchars($_GET["user"]);
	$password = htmlspecialchars($_GET["password"]);
	$resultStr = 
		"{
			'status':'0',
			'message':'login fail',
			'tooken' : ''
		}";
	// Create connection
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
	// Check connection
	if (mysqli_connect_errno()) {
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
	    $query = 'SELECT * FROM `user` WHERE `user1`="'.$user.'"'; 
		
        $result = mysqli_query($con,$query);
		
        while($row = mysqli_fetch_array($result)) {
			if($row['user1'] == $user && $row['name1'] == $password && $row['user1'] !=''){
				$date =time();
				$tooken = $row['user1'].$date;
				$update = "UPDATE user
					SET tooken='".$tooken."'
					WHERE id='".$row['id'] ."'";
				mysqli_query($con,$update);
				
				$resultStr = 
					"{
						'status':'1',
						'message':'OK',
						'tooken' : '".$tooken."'
					}";
				break;
			}
		}
	}

	mysqli_close($con);
	echo $resultStr;
?>