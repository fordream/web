
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                
            });
            function sendPushNotification(id){
                var data = $('form#'+id).serialize();
               // alert(data);
                //var type = 
                $('form#'+id).unbind('submit');               
                $.ajax({
                    url: "send_message.php",
                    type: 'GET',
                    data: data,
                    beforeSend: function() {
                         
                    },
                    success: function(data, textStatus, xhr) {
                          $('.txt_message').val("");
						  alert("OK");
                    },
                    error: function(xhr, textStatus, errorThrown) {
                         alert("error");
                    }
                });
                return false;
            }
        </script>
        <style type="text/css">
            .container{
                width: 950px;
                margin: 0 auto;
                padding: 0;
            }
            h1{
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 24px;
                color: #777;
            }
            div.clear{
                clear: both;
            }
            ul.devices{
                margin: 0;
                padding: 0;
            }
            ul.devices li{
                float: left;
                list-style: none;
                border: 1px solid #dedede;
                padding: 10px;
                margin: 0 15px 25px 0;
                border-radius: 3px;
                -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.35);
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                color: #555;
            }
            ul.devices li label, ul.devices li span{
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                font-size: 12px;
                font-style: normal;
                font-variant: normal;
                font-weight: bold;
                color: #393939;
                display: block;
                float: left;
            }
            ul.devices li label{
                height: 25px;
                width: 50px;               
            }
            ul.devices li textarea{
                float: left;
                resize: none;
            }
            ul.devices li .send_btn{
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
                background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#0096FF), to(#005DFF));
                background: -moz-linear-gradient(center top, #0096FF, #005DFF);
                background: linear-gradient(#0096FF, #005DFF);
                text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
                border-radius: 3px;
                color: #fff;
            }
        </style>
    </head>
	<!--
	http://fundroiding.wordpress.com/2012/06/29/google-cloud-messaging-for-android-gcm-simple-tutorial/
	-->
    <body>
        <?php
        include_once 'db_functions.php';
        $db = new DB_Functions();
        $users = $db->getAllUsers();
		$users2 = $db->getAllUsers();
        if ($users != false)
            $no_of_users = mysql_num_rows($users);
        else
            $no_of_users = 0;
		
		$nam_get = "";
		if (isset($_GET["id"]) && isset($_GET["id"])) {
			$nam_get = $_GET["id"];
			
		}	
        ?>
        <div class="container">
            <h1>No of Devices Registered: <?php echo $no_of_users; ?></h1>
            <hr/>
            <ul class="devices">Select device:
                <?php
                if ($no_of_users > 0) {
                    ?>
					
					<select name="forma" onchange="location = this.options[this.selectedIndex].value;">		
						<option value="">======select device======</option>
						<?php
						while ($row = mysql_fetch_array($users)) {
							?>
							<option value="index.php?id=<?php echo $row["name"] ?>" <?php if($row["name"] == $nam_get ){ echo "selected";} ?>><?php echo $row["name"] ?></option>
						<?php }?>
					
					</select> <br />
					<br />
							<?php
								while ($row = mysql_fetch_array($users2)) {
								if($row["name"] == $nam_get){
							?>
								<li>
									<form id="<?php echo $row["id"] ?>" name="" method="post" onsubmit="return sendPushNotification('<?php echo $row["id"] ?>')">
										<label>Name: </label> <span><?php echo $row["name"] ?></span>
										<div class="clear"></div>
										<!--<label>Email:</label> <span><?php echo $row["email"] ?></span>-->
										<div class="clear"></div>
										<div class="send_container">                               
											Name <input name="doctor" type="text" value="1"/> </br>
                                            <br/>
                                            <textarea rows="3" name="message" cols="25" class="txt_message" placeholder="Type message here"> </textarea>
											<input type="hidden" name="regId" value="<?php echo $row["gcm_regid"] ?>"/>
											<input type="submit" class="send_btn" value="Send" onclick=""/>
										</div>
									</form>
								</li>
							<?php }
							}?>
                <?php } else { ?>
                    <li>
                        No Users Registered Yet!
                    </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>