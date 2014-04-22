<?php
   include_once("heada.php");
   
?>

 <div class="well" style="width:800px; margin-left:auto; margin-right:auto;">
  <div class="well" style="width:600px; margin-left:auto; margin-right:auto; text-align:center;">
  <div style="float:right;margin-right:50px;font-size:18px;"><?php echo $year."年".$month."月四六级成绩查询"?></div>
</div>
<div style="margin-left:auto; margin-right:auto; margin-top:50px; margin-bottom:0px;">
  <div class="container" style="text-align:center; width:400px;">
    <form id="form" action="show_another_info.php" method="post"  onsubmit="return checkAnother(this.stu_id.value, this.stu_name.value);"  >
      <div class="clearfix">
        <label >你的准考证号(15位)：</label>
        <div class="input">
          <input class="large" id="stu_id" name="stu_id" size="30" type="text"
          />
        </div>
      </div>
      <div class="clearfix">
        <label >你的姓名(前两位)：</label>
        <div class="input">
          <input class="largr" id="stu_name" name="stu_name" size="30" type="text" 
          />
          
        </div>
      </div>
        
	 
      
      <div style="margin-top:50px;">
        <span><input class="btn primary" value="查询你的信息"  type="submit" /></span>
       
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
  </div>
   <div style="float:right;font-size:10px;" > <a href="javascript:history.go(-1);"><span class="btn primary">返回</span></a></div>
  

<?php
   include_once("footer.php");
?>