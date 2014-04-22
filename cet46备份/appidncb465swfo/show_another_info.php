<?php

include_once("heada.php");
include_once("post.php");

$html     = "不好意思哦！网络太拥堵,数据在来这的路上走丢了！::>_<:: (●-●) </br>也有可能是真的没找到你的成绩信息。</br> 请确认你输入的准考证号及姓名无误!";
$flag     = true;
$id       = $_POST["stu_id"];
$name     = $_POST["stu_name"];
$getStr   = getCet($id, $name);
$array    = explode(',', $getStr);
$array[6] = mb_convert_encoding($array[6], "UTF-8", "GBK");
$array[7] = mb_convert_encoding($array[7], "UTF-8", "GBK");
if ($array[0] != '6')
    $flag = false;
else {
    $cet = substr($id, 9, 1);
    if ($cet == "1")
        $cet_text = "四级";
    else if ($cet == "2")
        $cet_text = "六级";
    else
        $cet_text = "未知";
    if ($array[5] >= 425) {
        $is_pass = "恭喜你！你这次通过了！";
    } else {
        $is_pass = "真遗憾！你这次没通过！再接再厉！";
    }
}

?>
</br>

        
<div class="well" style="width:500px; margin-left:auto; margin-right:auto;">
  
  
 <div style="float:right;margin-right:50px;font-size:18px;"><?php
echo $year . "年" . $month . "月四六级成绩查询";
?></div>
  <br>
  <br>
  <?php
if ($flag == true) {
    echo "
  <div class=\"well\" style=\"background-color:#FAE5E3; margin-left:50px;margin-top:0px; margin-left:auto; margin-right:auto; width:400px; height:auto;\">
  <h1> <center>$array[7]同学的信息</center></h1>
  <table width=\"400px\" border=\"0\">
  <tr>
   <td>学校:$array[6]</td>
   <td>考试等级：$cet_text</td> 
  </tr>
  <tr>
    <td>准考证号:$id</td>
    <td><h2>总分:$array[5]</h2></td>
  </tr>
  <tr>
    <td>听力:$array[1] </td>
    <td>阅读:$array[2] </td>
  </tr>
  <tr>
    <td>综合:$array[3] </td>
    <td>写作:$array[4] </td>
  </tr>
  </table>
  <h2><center>$is_pass</center></h2>
  </div>
  
  ";
    echo "<div style=\"float:right;font-size:10px;\" > <a href=\"javascript:history.go(-1);\"><span class=\"btn primary\">返回</span></a></div>";
} else {
    echo $html . "<div style=\"float:right;font-size:10px;\" > <a href=\"javascript:history.go(-1);\"><span class=\"btn primary\">返回</span></a></div>";
}

?>



<?php

include_once("footer.php");

?>