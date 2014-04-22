<?php

   include_once("head.php");
  

 $stu_num=$_POST["stu_num"];
 $stu_name=$_POST["stu_name"];

 $flag=true;
 $nolog = true;

 $reg1 = '/^[A-Za-z0-9]{7,8}$/'; //7到8个数字或字母
 $reg2 = '/^[\u4e00-\u9fa5]+$/';  //是否是汉字
 

 $html="可能是你输入的学号和姓名不匹配！或者你没报名参加这次考试!</br>";

 if($stu_num==NULL ||$stu_name==NULL||!preg_match($reg1,$stu_num))
  $nolog=false;
 else
 {

   /*sql ="SELECT avg( zf ) AS avgzf, avg( `yd` ) AS avgyd, avg( `tl` ) AS avgtl, avg( `zh` ) AS avgzh, avg( `xz` ) AS avgxz, count( * ) AS cnt
FROM `cet201212all` "*/
   
    $sql = "SELECT * FROM $DB_NAME where stu_num='$stu_num'";
    $result = mysql_query ( $sql );
    $data1 = mysql_fetch_array ( $result, MYSQL_NUM );
 
    $zkzh=$data1[0];
    $xh=$data1[1];
    $xm=$data1[2];
  
    $sql = "SELECT * FROM $DB_NAME_ALL where xh='$stu_num'";
    $result = mysql_query ( $sql );
    $array = mysql_fetch_array ( $result, MYSQL_NUM );
    
    
    
    $cet = substr($zkzh,9,1);
    if($cet=="1") 
    $cet_text="四级";
    else if($cet=="2")
    $cet_text="六级";
    else 
    $cet_text="未知";
     
    $xm = mb_convert_encoding($xm, "UTF-8", "GBK");
    if($xm!=$stu_name)$flag=false;
    

  if($array[5]>=425) {
     $is_pass="恭喜你！你这次通过了！";
  }
  else {
     $is_pass="真遗憾！你这次没通过！再接再厉！";
  }
  
}


$html.="实在人品不行再联系我吧<a href=\"mailto:Lee.Huan92@gmail.com\">Gmail</a><br>";

?>
</br>

        
<div class="well" style="width:500px; margin-left:auto; margin-right:auto;">
  
  
  <div  style="float:right;margin-right:50px;font-size:18px;">2012年12月四六级信息</div>
  <br>
  <?php 
if($flag==true&&$nolog==true){
  echo "
  <div class=\"well\" style=\"background-color:#FAE5E3; margin-left:50px;margin-top:0px; margin-left:auto; margin-right:auto; width:400px; height:auto;\">
  <h1> <center>$xm 同学的信息</center></h1>
  <table width=\"400px\" border=\"0\">
  <tr>
   <td>学号:$xh</td>
   <td>考试等级：$cet_text</td> 
  </tr>
  <tr>
    <td>准考证号:$zkzh</td>
    <td><h2>总分:$array[5]</h2></td>
  </tr>
  <tr>
    <td>听力:$array[1] (校平均分:117.9303)</td>
    <td>阅读:$array[2] (校平均分:138.9622)</td>
  </tr>
  <tr>
    <td>综合:$array[3] (校平均分:34.3372)</td>
    <td>写作:$array[4] (校平均分:71.3788)</td>
  </tr>
  <tr>
    <td>校平均总分:362.6086</td>
    <td>此次全校参考人数:17266</td>
   </tr>
  </table>
  <h2><center>$is_pass</center></h2>
  </div>
  
  ";
   echo "<div style=\"float:right;font-size:10px;\" > <a href=\"javascript:history.go(-1);\"><span class=\"btn primary\">返回</span></a></div>";
}
  
  else  if($nolog==true)
  {
    echo "<strong>很遗憾,没查到你的信息.</strong>"."</br></br>";
    echo $html;
    echo "<div style=\"float:right;font-size:10px;\" > <a href=\"javascript:history.go(-1);\"><span class=\"btn primary\">返回</span></a></div>";
  }
  else 
 {
   echo "你没有填写信息,请填写信息<div style=\"font-size:10px;\" > <a href=\"http://jxufecet.duapp.com\"><span class=\"btn primary\">去填写信息</span></a></div>";
 }
  ?>



<?php

   include_once("footer.php");
   
?>