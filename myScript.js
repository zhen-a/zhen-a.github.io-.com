function studylinks(name,size,link,code){
    this.name=name;
    this.size=size;
    this.link=link;
    this.code=code;
}
lssu0=new studylinks('离散数学','89M','https://pan.baidu.com/s/1-t_kOqqmpBD22vhblyEmmQ','r2pu');
cjj0=new studylinks('c++教学','1.2G','https://pan.baidu.com/s/1X_Ec8H7SStBVzolWojSF_g','none');
zpdx=new studylinks('纸牌大学','0.9G','https://pan.baidu.com/s/1gElaBlE-f_eHIvdofJ5vQw','vzfx');
gsjc=new studylinks('高数基础','11G','https://pan.baidu.com/s/1g4kN1SOWaLEKsI7NKKA2_Q','8e3o');
syjc=new studylinks('摄影教学','45G','https://pan.baidu.com/s/1yPGzC_lQS62ah3PiILjCrQ','k85a');
MFCjc=new studylinks('MFC教程','0.4G','https://pan.baidu.com/s/1xqQ3c4d8CHAaFowyIBVABg','djn5');
szw=new studylinks('狮子王','4.5G','https://pan.baidu.com/s/1wJQnPu8Cxg6rr9z_D9Q6xQ','sp44');
jtzt=new studylinks('吉他指弹','8G','https://pan.baidu.com/s/1mUTuiMow5Hdjc_5a6T_xLQ','3w1z');
jchz=new studylinks('基础化妆','9G','https://pan.baidu.com/s/1yB1MQ-DeAtY8EUYqwMFKuQ','qcx4');

document.getElementById("linknamevalue0").innerHTML=lssu0.name;
document.getElementById("linksizevalue0").innerHTML=lssu0.size;
document.getElementById("linkcodevalue0").innerHTML=lssu0.code;
document.getElementById("linklinkvalue0").innerHTML=lssu0.link;

document.getElementById("linknamevalue1").innerHTML=cjj0.name;
document.getElementById("linksizevalue1").innerHTML=cjj0.size;
document.getElementById("linkcodevalue1").innerHTML=cjj0.code;
document.getElementById("linklinkvalue1").innerHTML=cjj0.link;

document.getElementById("linknamevalue2").innerHTML=zpdx.name;
document.getElementById("linksizevalue2").innerHTML=zpdx.size;
document.getElementById("linkcodevalue2").innerHTML=zpdx.code;
document.getElementById("linklinkvalue2").innerHTML=zpdx.link;

document.getElementById("linknamevalue3").innerHTML=gsjc.name;
document.getElementById("linksizevalue3").innerHTML=gsjc.size;
document.getElementById("linkcodevalue3").innerHTML=gsjc.code;
document.getElementById("linklinkvalue3").innerHTML=gsjc.link;

document.getElementById("linknamevalue4").innerHTML=syjc.name;
document.getElementById("linksizevalue4").innerHTML=syjc.size;
document.getElementById("linkcodevalue4").innerHTML=syjc.code;
document.getElementById("linklinkvalue4").innerHTML=syjc.link;

document.getElementById("linknamevalue5").innerHTML=MFCjc.name;
document.getElementById("linksizevalue5").innerHTML=MFCjc.size;
document.getElementById("linkcodevalue5").innerHTML=MFCjc.code;
document.getElementById("linklinkvalue5").innerHTML=MFCjc.link;

document.getElementById("linknamevalue6").innerHTML=szw.name;
document.getElementById("linksizevalue6").innerHTML=szw.size;
document.getElementById("linkcodevalue6").innerHTML=szw.code;
document.getElementById("linklinkvalue6").innerHTML=szw.link;

document.getElementById("linknamevalue7").innerHTML=jtzt.name;
document.getElementById("linksizevalue7").innerHTML=jtzt.size;
document.getElementById("linkcodevalue7").innerHTML=jtzt.code;
document.getElementById("linklinkvalue7").innerHTML=jtzt.link;

document.getElementById("linknamevalue8").innerHTML=jchz.name;
document.getElementById("linksizevalue8").innerHTML=jchz.size;
document.getElementById("linkcodevalue8").innerHTML=jchz.code;
document.getElementById("linklinkvalue8").innerHTML=jchz.link;


function submita(){
    var x=document.forms["myForm"]["LinknameInput"].value;
    var y=document.forms["myForm"]["LinksizeInput"].value;
    var z=document.forms["myForm"]["LinklinkInput"].value;
    var m=document.forms["myForm"]["LinkcodeInput"].value;

    if ((x==null || x=="")||(y==null || y=="")||(z==null || z=="")||(m==null || m==""))
    {
        $(".link").fadeIn();
      alert("请输入完整信息");
      return false;

    }

    else {
        alert("上传成功！请耐心等待审核\n");
        

       /* var txt2=document.createElement("p");
        txt2.className="linkname";
        txt2.innerHTML="名称：";
        $(".link").append(txt2);

        var txt3=document.createElement("p");
        txt3.className="linksize";
        txt3.innerHTML="大小：";
        $(".link").append(txt3);

        var txt4=document.createElement("p");
        txt4.className="linkcode";
        txt4.innerHTML="密码：";
        $(".link").append(txt4);    

        var txt5=document.createElement("p");
        txt5.className="linklink";
        txt5.innerHTML="链接：";
        $(".link").append(txt5);  */
    }
 
}
function copyMagnetLink(){
    alert("复制成功！\n");
}
function In(){
  //  document.getElementById('azhen').style.display='inline';
    $("#azhen").fadeIn();
}
function Out(){
    $("#azhen").fadeOut();
}

$(function () { $("[data-toggle='tooltip']").tooltip(); });