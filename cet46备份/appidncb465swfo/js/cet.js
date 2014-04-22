var id_blank = "请输入学号";
var name_blank = "请输入姓名";
var check_blank = "请输入验证码";
function id_focus(con){
    if(con.value == id_blank){
        con.value = "";
        con.style.color = "#000";
    }
    con.style.border = "1px solid #049cd9";
}
function id_blue(con){
    if(con.value == ""){
        con.value = id_blank;
        con.style.color = "#999";
    }
    con.style.border="1px solid #9a9a9a";
}

function name_focus(con){
    if(con.value == name_blank){
        con.value = "";
        con.style.color = "#000";
    }
    con.style.border = "1px solid #049cd9";
}
function name_blue(con){
    if(con.value == ""){
        con.value = name_blank;
        con.style.color = "#999";
    }
    con.style.border="1px solid #9a9a9a";
}

function checkSE(start,end)
{
   var reg1 = /^[A-Za-z0-9]{7,8}$/; //7到8个数字或字母
    if(!reg1.test(start))
     {
        jAlert("亲, 学号只能是7到8个数字或字母哦!","友情提醒");
        document.getElementById("start").focus();
        return  false;
     }
     if(!reg1.test(end))
     {
        jAlert("亲, 学号只能是7到8个数字或字母哦!","友情提醒");
        document.getElementById("end").focus();
        return  false;
     }
}

function checkAll(stu_num,stu_name)
{
   
     var reg1 = /^[A-Za-z0-9]{7,8}$/; //7到8个数字或字母
     var reg2 =  /^[\u4e00-\u9fa5]+$/;  //是否是汉字
     
     if(!reg1.test(stu_num))
     {
        alert("亲, 学号只能是7到8个数字或字母哦!","友情提醒");
        document.getElementById("stu_num").focus();
        return  false;
        
     }
     if(!reg2.test(stu_name))
     {
       alert("亲, 姓名只能是中文哦!","友情提醒");
       document.getElementById("stu_name").focus();
       return  false;
     }
  
}


function checkAnother(stu_id,stu_name)
{
   
     var reg1 = /^[0-9]{15}$/; //15个数字
     var reg2 =  /^[\u4e00-\u9fa5]{2}$/;  //两个汉字
     
     if(!reg1.test(stu_id))
     {
        alert("亲, 准考证号只能是15个数字哦!","友情提醒");
        document.getElementById("stu_id").focus();
        return  false;
        
     }
     if(!reg2.test(stu_name))
     {
       alert("亲, 姓名只能是两个中文字符哦!","友情提醒");
       document.getElementById("stu_name").focus();
       return  false;
     }
  
}