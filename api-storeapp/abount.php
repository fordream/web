<?php
	header('Content-Type: application/json; charset=utf-8');
	$content = '<h3>Create an android app in minus</h3>'
.'Compose your own Android app here in minutes.'
.'Simple, modular and affordable. Add the Qubes you like to your App and publish it to the Playstore.<br>'
.'Why QUPPS? We give you six reason:'
.'<ul>'
	.'<li>Create your app in minutes</li>'
	.'<li>Create your app in minutes</li>'
	.'<li>Create your app in minutes</li>'
	.'<li>Create your app in minutes</li>'
.'<ul>'
.'<input type=\'submit\' value=\'BUTTON\'>';
$resultStr = 
'{
		"img":"http://vnpmanager.esy.es/api-storeapp/img/about1.png",
		"content":"'.$content.'"
}';
echo $resultStr;
?>
