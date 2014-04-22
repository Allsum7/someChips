<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>其他学校四六级成绩查询</title>
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
          <h1> 外校英语四六级成绩查询 </h1>
        </div>
   
  </div>
      
 <?php
   
  $year = date('Y');
   $month = date('n'); 
   if($month <= 7 && $month >= 2) {
      $year--;
      $month = 12;
   }
   else if ($month == 1){
     $year--; 
     $month = 6;
   }
   else {
     $month = 6;
   }

?>
