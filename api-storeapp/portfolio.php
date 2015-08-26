<?php 
   
	header('Content-Type: application/json; charset=utf-8');
    $title = 'Loren Lpsum portfoliositem';
    $sub_title = 'By Mercedes-Bens company';
    $background_color = '#f8f7f4';
    //htmlentities
    $link = base64_encode("<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html>");
            
   echo '{
    "portfolios":[';
   
   for ($i = 1; $i <= 10; $i++) {
        echo '{';
        echo '
          "title":"'.$title.'",';
        echo '
          "sub_title":"'.$sub_title.'",';
        echo '
          "background-color":"'.$background_color.'",';
        echo '
          "link":"'.$link.'"';
        echo '}
        ';
        if($i < 10) echo ',';
   }
   
   echo ']
   }';
            
         //   echo utf8_encode($html);

?>
<?php
/*
{
  "portfolios": [
    {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
			"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
			"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    },
     {
    	"title":"Loren Lpsum portfolios",
    	"sub_title":"By Mercedes-Bens company",
    	"background-color":"#f8f7f4",
    	"link":
		"<html>
			<head>
			<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge' />
			<title>Mescerdes</title>

			<link type='text/css' rel='StyleSheet' href='/.s/src/css/971.css' />
			</head>

			<body style='background-color:#FFFFFF; margin:0;padding:0;'>
				<center >
					<table width ='80%'>
						<tr>
							<td colspan=''><b><br><br>Lorem lpsum news</b><br/><br/></td>
						</tr>
						<tr>
							<td>
								<span width='80%'>
									<img    style=' float:left; display:inline; padding:10px;'  src='http://app-server.googlecode.com/svn/trunk/storeapp/block/image/mecerdes.png' width ='40%' />
									orem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget suscipit risus, eget bibendum nisi. Praesent at vehicula odio, id consectetur risus. Suspendisse dapibus urna ut commodo commodo. Donec a tortor nibh. Morbi dapibus ultrices congue. Curabitur ultricies nisi id mauris ornare ultricies. Nam euismod tempus tincidunt. Aliquam erat volutpat. Nulla mattis est enim, in ullamcorper odio mattis ac<br>
			<br>
								</span>
							</td>
						</tr>
					</table>		    
				</center>
				
			</body>

			</html><div><script type='text/javascript'>new Image().src = 'http://ucounter.ucoz.net/'+Math.random()+'.gif?cid=ucoz&r64='+window.btoa(document.referrer)+'&cb='+Math.random();</script></div>


			"
    }
  ]
}
*/

?>
