<?php
   include_once("head.php");

?>

 <div class="well" style="width:800px; margin-left:auto; margin-right:auto;">
  <div class="well" style="width:600px; margin-left:auto; margin-right:auto; text-align:center;">
  <div style="float:right;margin-right:50px;font-size:18px;">2012年12月四六级成绩查询</div>
</div>
<div style="margin-left:auto; margin-right:auto; margin-top:50px; margin-bottom:0px;">
  <div class="container" style="text-align:center; width:400px;">
    <form id="form" action="show_info.php" method="post" onsubmit="return checkAll(this.stu_num.value, this.stu_name.value);" >
      <div class="clearfix">
        <label >你的学号(7位)：</label>
        <div class="input">
          <input class="large" id="stu_num" name="stu_num" size="30" type="text" onfocus="javascript:id_focus(this);"
           onblur="javascript:id_blue(this);" value="请输入学号" 
          />
        </div>
      </div>
      <div class="clearfix">
        <label >你的姓名：</label>
        <div class="input">
          <input class="largr" id="stu_name" name="stu_name" size="30" type="text" onfocus="javascript:name_focus(this);"
           onblur="javascript:name_blue(this);"value="请输入姓名"
          />
          
        </div>
      </div>
        
	 
      
      <div style="margin-top:50px;">
        <span><input class="btn primary" value="查询你的信息"  type="submit" /></span>
        <a href="show_class.php"><span class="btn primary" >班级批量查询入口 </span></a>
        <a href="indexa.php"><span class="btn primary" >外校查询入口 </span></a>
      </div>
    </form>
  </div>
</div>
<div> 
  <div class="well" style="background-color:#FAE5E3; margin-top:0px; margin-left:auto; margin-right:auto; width:600px; height:auto; ">
  <h5>需要说明：</h5>
  <div style="padding-left:60px;"> 
    1. 数据来源99宿舍网，推荐查到自己的准考证号登陆99宿舍网验证下！<br>
    2. 推荐使用谷歌,火狐,Safari浏览器浏览。<br>
  </div>
</div>
  <div class="well" style="margin-top:0px; margin-left:auto; margin-right:auto; width:670px; height:auto; ">
  <h5>我们还可以帮他们找到回家的路</h5>
  <script type="text/javascript">var yibo_id="29064";</script><script src="http://yibo.iyiyun.com/yibo.js" type="text/javascript"></script>
  </div>
  </div>
  

<?php
   include_once("footer.php");
?>