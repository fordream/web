<?php include './connectdb.php'; ?>
<html>
	<header>
		<link type="text/css" rel="stylesheet" media="all" href="css/style.css">
		<title>
			VNP Resource
		</title>
	</header>
	<body>
		<div id = "main">
			<div id ="header">
				VNP Resource
			</div>
			<div id = "main-content">
			<!--
				<?php
					$result = querryContentTableResult('mproject', null);	
					if($result != null){
						while($row = mysqli_fetch_array($result)) {	
							 echo $row['name'].'<br>' ;
						} 
					}
				?>
			-->
				<div id= 'row'>
					<div id= 'item-main'>
						<img src = '' />
						<div id ='item-main-text-footer'> AAA</div>
					</div>
					<div id= 'item-main'>
						<img src = '' />
					</div>
					<div id= 'item-main'> 
						<img src = '' />
					</div>
				</div>
			</div>
			<div id = "footer">
				@VNP Resource
			</div>
		</div>
	</body>
</html>
