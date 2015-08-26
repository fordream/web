<?php
function querry($table, $where){
	$resultStr = 
	'{
		"status":"0",
		"message":"connect fail",
		"tooken" : "",
		"data":[]
	}';
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
	
	
	
	if (mysqli_connect_errno()) {
		echo $resultStr;
	}else{
		$query = 'SELECT * FROM `'.$table.'` ';
		
		
		
		if($where != null){
			$query = $query . ' ' . $where; 
		}
		
		
		$result = mysqli_query($con,$query);
		
		
		
		$rows=array(); 
		while($row = mysqli_fetch_array($result)) {	
			$rows[]=$row;	
		}  
		
		
		echo
		'{
		"status":"1",
		"message":"connect success",
		"tooken" : "",
		"data":'.json_encode($rows).'	
		}';
		
	}

	mysqli_close($con);	
}
	
function querryContentTable($table, $where){
	$resultStr = '[]';
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
	
	
	
	if (mysqli_connect_errno()) {
		echo $resultStr;
	}else{
		$query = 'SELECT * FROM `'.$table.'` ';	
		if($where != null){
			$query = $query . ' ' . $where; 
		}
		$result = mysqli_query($con,$query);
		
		$rows=array(); 
		while($row = mysqli_fetch_array($result)) {	
			$rows[]=$row;	
		} 

		echo json_encode($rows);			
	}

	mysqli_close($con);	
}


function querryContentTableResult($table, $where){
	$resultStr = '[]';
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
	
	$result = null;
	if (mysqli_connect_errno()) {
		//echo $resultStr;
	}else{
		$query = 'SELECT * FROM `'.$table.'` ';	
		if($where != null){
			$query = $query . ' ' . $where; 
		}
		
		$result = mysqli_query($con,$query);
		
		//$rows=array(); 
		//while($row = mysqli_fetch_array($result)) {	
		//	$rows[]=$row;	
		//} 

		//echo json_encode($rows);			
	}

	mysqli_close($con);	
	
	return $result;
}		
?>