<html>
	<head>		
		<title>API LIST</title>	
		<link href="css/m.css" rel="stylesheet">
		<script type="text/javascript" src="js/jv.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!--
		<script type="text/javascript" src="js/jquery.mobile-1.4.2.min.js"></script>
		-->
		<script>
			var _type = 'Block' ; 
			function menu(type){
				_type = type;
				// update menu
				document.getElementById('Block').setAttribute('class','menu_unselected');
				document.getElementById('News').setAttribute('class','menu_unselected');
				document.getElementById('Gallery').setAttribute('class','menu_unselected');
				document.getElementById('Portfolio').setAttribute('class','menu_unselected');
				document.getElementById('Contact').setAttribute('class','menu_unselected');
				document.getElementById('Abount').setAttribute('class','menu_unselected');
				document.getElementById('checkstatus').setAttribute('class','menu_unselected');
				
				document.getElementById(type).setAttribute('class','menu_selected');
				
				// hidden and show block
				//display('Block-main', false);
				//display('News-main', false);
				//display('Gallery-main', false);
				//display('Portfolio-main', false);
			
				//display(type + '-main', true);
				
				//
				updateContent(type);
			}
			
			$(document).ready(function(){
				updateContent(_type);
			});
			
			function updateContent(_type){	
				var urlAPI = "http://vnpmanager.esy.es/api-storeapp/block.php";
				if(_type == 'Block'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/block.php";
				}else if(_type == 'News'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/news.php";
				}else if(_type == 'Gallery'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/gallery.php";
				}else if(_type == 'Portfolio'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/portfolio.php";
				}else if(_type == 'Contact'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/contact.php";
				}else if(_type=='Abount'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/abount.php";
				}else if(_type=='checkstatus'){
					urlAPI = "http://vnpmanager.esy.es/api-storeapp/checkstatus.php";
				}
				
				
				
				
				document.getElementById("api_text").innerHTML = urlAPI;
				
				$("#api_text_parser tr").remove(); 
				$("#table tr").remove(); 
				
				var jsonStr= "{}";
				$.ajax({type: "POST",url: urlAPI,data:jsonStr,
					success: function(data1){ 

						document.getElementById("data-textarea").value = JSON.stringify(data1);
						
						if(_type == 'Block'){
							block(data1);
						}else if(_type == 'News'){
							news(data1);
						}else if(_type == 'Gallery'){
							gallery(data1);
						}else if(_type == 'Portfolio'){
							portfolio(data1);
						}else if(_type == 'Contact'){
							contact(data1);
						}else if(_type == 'Abount'){
							abount(data1);
						}else if(_type == 'checkstatus'){
							checkstatus(data1);
						}
						
						
							
							
					},dataType: "json"
					}).fail(function (jqXHR, textStatus) {alert( textStatus);   });
			}

			function abount(json){
			}
			
			function checkstatus(json){
			}
			
			function block(json){
				var table = document.getElementById("api_text_parser");
				insertHeader(table,'header',0);
				insertRowTable(table,'backgound-color',json["header"]["backgound-color"] ,1);
				insertRowTable(table,'title-header',json["header"]["title-header"] ,2);

				insertHeader(table,'main-bin',3);
				insertRowTable(table,'type',json["main-bin"]["type"] ,4);
				insertRowTable(table,'image',json["main-bin"]["image"] ,5);
				insertRowTable(table,'icon-logo',json["main-bin"]["icon-logo"] ,6);
				insertRowTable(table,'header-description',json["main-bin"]["header-description"] ,7);
				insertRowTable(table,'short-description',json["main-bin"]["short-description"] ,8);
				
				var bins = json["bins"];
				
				var _table = document.getElementById("table");
				for( i = 0; i < bins.length; i ++){
					
				}
			}
			
			function news(json){
			}
			
			function gallery(json){
			}
			
			function portfolio(json){
			}
			
			function contact(json){}
			
		</script>
	</head>		
	<body>
        <center>
    		<div id="main">
    			API LIST
    		</div>	
			<div>
				<div id="menu">
					<div id="Block" class="menu_selected" onClick="menu('Block');">Block</div>
					<div id="News" class="menu_unselected"onClick="menu('News');">News</div>
					<div id="Gallery" class="menu_unselected" onClick="menu('Gallery');">Gallery</div>
					<div id="Portfolio" class="menu_unselected" onClick="menu('Portfolio');">Portfolio</div>
					<div id="Contact" class="menu_unselected" onClick="menu('Contact');">Contact</div>
					<div id="Abount" class="menu_unselected" onClick="menu('Abount');">Abount</div>
					<div id="checkstatus" class="menu_unselected" onClick="menu('checkstatus');">checkstatus</div>
				</div>
				<div id ="content">
					<div> 
						<b>API : <span id="api_text"></span></b>
					</div>
					
					<div> 
						<b>API : Response text</b>
					</div>
					
					<textarea id = "data-textarea" rows="10"  readonly>
					
					</textarea>
					<div> 
						<b>API : Response parser</b>
					</div>
					
					
					<table id = "api_text_parser"  border="1">
						<colgroup>
							<col  style="width:30%">
							<col  style="width:70%">
						</colgroup>
					</table>
					
					<table id = "table" border="1">
						<colgroup>
							<col  style="width:30%">
							<col  style="width:70%">
						</colgroup>
					</table>
					
				</div>
			</div>
			
			
		</center>
	</body>
</html>