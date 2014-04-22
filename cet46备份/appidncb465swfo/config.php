<?php
  
   $IS_MYSQL="BAE";   
//$IS_MYSQL="SAE"; 
//$IS_MYSQL="LOCAL"; 
   $DB_HOST ="localhost";
   $DB_PORT=3306;
   $DB_NAME_ALL="cet201212all";
   $DB_NAME="cet201212";
   $DB_USER="root";
   $DB_PASSWD="root";

/*  BAE 连接数据库 */
/*从平台获取查询要连接的数据库名称*/
     //$dbname = 'WBxduSiUccUSWSwuySym';
   $dbname = 'cWXBgZIgLejommHRptzP';
 
/*从环境变量里取出数据库连接需要的参数*/
    $host = getenv('HTTP_BAE_ENV_ADDR_SQL_IP');
	$port = getenv('HTTP_BAE_ENV_ADDR_SQL_PORT');
	$user = getenv('HTTP_BAE_ENV_AK');
	$pwd = getenv('HTTP_BAE_ENV_SK');
/*  BAE  */
?>