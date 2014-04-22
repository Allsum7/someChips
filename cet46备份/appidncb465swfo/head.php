<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>江西财经大学四六级成绩查询</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/docs.css" type="text/css">
   
  <script src="js/cet.js" type="text/javascript"></script>
  <!-- Dependencies -->
  <script src="js/jquery.js" type="text/javascript"></script>
  
  <script src="js/jquery.ui.draggable.js" type="text/javascript"></script>
		
  <!-- Core files -->
  <script src="js/jquery.alerts.js" type="text/javascript"></script>
  <link href="css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />


</head>
	<body>
<div class="jumbotron masthead">
      
    <div class="container">
          <h1> 江财英语四六级成绩查询 </h1>
        </div>
   
  </div>
<?php

 include_once("config.php");
if($IS_MYSQL=="SAE")
 {
   
   $link = mysql_connect ( SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS );
 
   mysql_select_db ( SAE_MYSQL_DB, $link );
 }
 else  if($IS_MYSQL=="BAE")
 {
   /*接着调用mysql_connect()连接服务器*/
  $link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
   if(!$link) {
      die("Connect Server Failed: " . mysql_error($link));
    }
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
   if(!mysql_select_db($dbname,$link)) {
    die("Select Database Failed: " . mysql_error($link));
   }
 }
   else 
 {
 
   $link = mysql_connect ( $DB_HOST . ':' . $DB_PORT, $DB_USER, $DB_PASSWD );
 
    mysql_select_db ( $DB_NAME, $link );
 }
 ?>