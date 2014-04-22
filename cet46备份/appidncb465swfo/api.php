<?php

/**
 * @author allsum7
 * @copyright 2013
 */

/*************************
*/
include_once ("config.php");
if ($IS_MYSQL == "SAE") {

    $link = mysql_connect(SAE_MYSQL_HOST_M . ':' . SAE_MYSQL_PORT, SAE_MYSQL_USER,
        SAE_MYSQL_PASS);

    mysql_select_db(SAE_MYSQL_DB, $link);
} else
    if ($IS_MYSQL == "BAE") {
        /*接着调用mysql_connect()连接服务器*/
        $link = @mysql_connect("{$host}:{$port}", $user, $pwd, true);
        if (!$link) {
            die("Connect Server Failed: " . mysql_error($link));
        }
        /*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
        if (!mysql_select_db($dbname, $link)) {
            die("Select Database Failed: " . mysql_error($link));
        }
    } else {

        $link = mysql_connect($DB_HOST . ':' . $DB_PORT, $DB_USER, $DB_PASSWD);

        mysql_select_db($DB_NAME, $link);
    }


$stu_num = $_GET["stu_num"];
$reg1 = '/^[A-Za-z0-9]{7,8}$/'; //7到8个数字或字母
if(!preg_match($reg1,$stu_num)){
  die("你输入的学号不是7到8个数字或字母！请重新输入");
}

$sql = "SELECT * FROM $DB_NAME where stu_num='$stu_num'";
$result = mysql_query($sql);
$data1 = mysql_fetch_array($result, MYSQL_NUM);

$zkzh = $data1[0];
$xh = $data1[1];
$xm = $data1[2];

$sql = "SELECT * FROM $DB_NAME_ALL where xh='$stu_num'";
$result = mysql_query($sql);
$array = mysql_fetch_array($result, MYSQL_NUM);


$cet = substr($zkzh, 9, 1);
if ($cet == "1")
    $cet_text = "四级";
else
    if ($cet == "2")
        $cet_text = "六级";
    else
        $cet_text = "未知";

$xm = mb_convert_encoding($xm, "UTF-8", "GBK");

if ($array[5] >= 425) {
    $is_pass = "恭喜你！你这次通过了！";
} else {
    $is_pass = "真遗憾！你这次没通过！再接再厉！";
}

if($zkzh)
{
    echo ("江财四六级信息：准考证号:$zkzh \n 姓名：$xm 等级：$cet_text \n 听力: $array[1] 阅读:$array[2] \n 综合:$array[3] 写作:$array[4]\n 总分:$array[5] $is_pass");
}
else echo ("很抱歉，数据库里没有你的信息，你是否没参加这次考试？！");

?>