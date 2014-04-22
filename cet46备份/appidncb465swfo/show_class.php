<?php

 	 include_once("head.php");
	 $start=$_POST["start"];
	 $end=$_POST["end"];
     
     if($start > $end) {
       $temp = $start;
       $start = $end;
       $end = $temp;
     }
    
     $sql ="SELECT * FROM `cet201212all` WHERE `xh`>='$start' and `xh`<='$end' ";
     $result = mysql_query ( $sql );
    
?>
        
<div class="well" style="width:900px; margin-left:auto; margin-right:auto;">
 
  <div  style="float:right;margin-right:50px;font-size:18px;">2012年12月班级四六级信息</div>
 <br>
 <br>
 <form id="form" action="show_class.php" method="post" onsubmit ="return checkSE(this.start.value, this.end.value);">
  班级起始学号：
        
          <input id="start" name="start" size="30" type="text" onfocus="javascript:id_focus(this);"
           onblur="javascript:id_blue(this);" value="<? echo $start;?>" 
          />
  班级终止学号：
          <input id="end" name="end" size="30" type="text" onfocus="javascript:id_focus(this);"
           onblur="javascript:id_blue(this);" value="<? echo $end; ?>" 
          />
        <input class="btn primary" value="查询"  type="submit" />
</form>
<table width="600px">
  <thead>
    <th width="10%">序号</th>
    <th width="20%">学号</th>
    <th width="20%">姓名</th>
    <th width="10%">听力</th>
    <th width="10%">阅读</th>
    <th width="10%">综合</th>
    <th width="10%">写作</th>
    <th width="10%">总分</th>
  </thead>
  <?php
     $total_num = 0;
     $pass_num = 0;
     $max_name ="";
     $max_num  ="";
     $max = 0;
     while($row=mysql_fetch_array($result)) {
       $total_num++;
       $xm = mb_convert_encoding($row[7], "UTF-8", "GBK");
       if($row[5]>=425) $pass_num++;
       if($row[5]>$max) {$max = $row[5];$max_num = $row[8];$max_name = $xm;}
       echo " 
      <tr>
      <td>$total_num</td>
      <td>$row[8]</td>
      <td>$xm</td>
	  <td>$row[1]</td>
	  <td>$row[2]</td>
	  <td>$row[3]</td>
	  <td>$row[4]</td>
      <td>$row[5]</td>
     </tr>
      "  ;
     }
   ?>
</table>
<table>
 <tr>
    <th width="15%">总人数：<? echo $total_num; ?></th>
    <th width="15%">通过人数：<? echo $pass_num; ?></th>
    <th width="20%">通过率：<? echo round(($pass_num/$total_num)*100,2).'%'; ?></th>
    <th width="20%">最高分：<? echo $max; ?></th>
    <th width="30%">学号：<? echo $max_num."  "; ?>姓名：<? echo $max_name; ?></th>
  </tr>
</table>


<div style="float:right;font-size:10px;" > <a href="javascript:history.go(-1);"><span class="btn primary">返回</span></a></div>

<?php

   include_once("footer.php");
   
?>