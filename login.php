<?php
    $user = htmlspecialchars($_POST["login"]);
	$password = htmlspecialchars($_POST["password"]);
    $strMessage = "";
    $loginForm =
        '<!DOCTYPE html>
        <!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
        <!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
        <!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
        <!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title>Login Form</title>
          <link rel="stylesheet" href="css/style.css">
          <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        </head>
        <body>
          <section class="container">
            <div class="login">
              <h1>Login</h1>
              <form method="post" action="login.php">
                <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
                <p class="submit"><input type="submit" name="commit" value="Login"></p>
              </form>
            </div>
        
          </section>
        </body>
        </html>';
    if($_SESSION['login'] == true){
        
    }else if($user == null){
        echo $loginForm;
    }else{
        $con=mysqli_connect("mysql.hostinger.vn","u874938612_vnp","truongba","u874938612_vnp");
       	if (mysqli_connect_errno()) {
		    //echo "Failed to connect to MySQL: " . mysqli_connect_error();
            $strMessage = "Failed to connect to MySQL: " . mysqli_connect_error();
    	}else{
    	    $query = 'SELECT * FROM `user` WHERE `user1`="'.$user.'"';
            $result = mysqli_query($con,$query);
    		$haveAacount = false;
            while($row = mysqli_fetch_array($result)) {
    			if($row['user1'] == $user && $row['name1'] == $password && $row['user1'] !=''){
    				$date =time();
    				$tooken = $row['user1'].$date;
    				$update = "UPDATE user	SET tooken='".$tooken."'WHERE id='".$row['id'] ."'";
    				mysqli_query($con,$update);
                    $haveAacount = true;
    				break;
    			}
    		}
            
            if($haveAacount){
                 $_SESSION['login'] = true;
                 session_write_close();
            }else{
                $strMessage ="Have not account!";
            }
    	}
    
    	mysqli_close($con);
        
        if($strMessage == ""){
            
        }else{
            echo $loginForm;
        }
    }
?>
