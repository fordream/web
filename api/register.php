<?php
	$user = htmlspecialchars($_GET["user"]);
	$password = htmlspecialchars($_GET["password"]);
    $resultStr = 
		"{
			'status':'0',
			'message':'register fail',
			'tooken' : ''
		}";
    
    if($user =='' || $password == ''){
            
    }else{	
    	// Create connection
    	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
    	// Check connection
    	if (mysqli_connect_errno()) {
    		
    	}else{
            $query = 'SELECT * FROM `user` WHERE `user1`="'.$user.'"'; 
           	
            $resultSearch = mysqli_query($con,$query);
            
            $canInsearch = true;
            while($row = mysqli_fetch_array($resultSearch)) {
			     if($row['user1'] == $user && $row['user1'] !=''){
				    $canInsearch = false;
				    break;
			     }
            }
            
            if($canInsearch){
                $m = "INSERT INTO `user`(`user1`, `name1`)VALUES ('".$user ."','" . $password. "')";
                $result = mysqli_query($con,$m);
                if($result){
                     $resultStr = 
        					"{
        						'status':'1',
        						'message':'OK',
        						'tooken' : '".$tooken."'
        					}";
                }
            }else{
                $resultStr = 
        					"{
        						'status':'0',
        						'message':'have a acount',
        						'tooken' : '".$tooken."'
        					}";
                
            }
           
    	}
    	mysqli_close($con);
    }

	echo $resultStr;
?>