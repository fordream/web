<?php		
	$con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");		
    if (mysqli_connect_errno()) {				
        echo "Failed to connect to MySQL: " . mysqli_connect_error();		
    	}else{					
    	   $m = "DELETE  FROM `crash`";						
           	$result = mysqli_query($con,$m);        				
               	if($result){
               	    
               	}				
            }     		
            mysqli_close($con);	
            	
                                
                                
?>