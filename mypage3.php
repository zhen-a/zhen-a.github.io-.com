<!doctype html>
<html lang="less">
 <head>
        <meta charset="UTF-8">
        <meta name="Generator" content="EditPlus®">
        <meta name="Author" content="王震">
        <meta name="Keywords" content="17020031073">
        <meta name="Description" content="计算机科学与技术2班">
        
        <title>My House</title>

        <link rel="stylesheet" type="text/css" href="myhouse1.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        

      
        <script src="jquery-3.4.1.min.js"></script><!--jquery最新的库-->
  
    <script>
    $(document).ready(function(){
         $(".linkcopy").click(function(){
            $(".magnet").select();
            document.execCommand("copy");
         });  
    });

    $(document).ready(function(){
         $("#linkcopy1").click(function(){
            $(".magnet1").select();
            document.execCommand("copy");
         });  
    });

    $(document).ready(function(){
         $("#linkcopy2").click(function(){
            $(".magnet2").select();
            document.execCommand("copy");
         });  
    });

    $(document).ready(function(){
         $("#linkcopy3").click(function(){
            $(".magnet3").select();
            document.execCommand("copy");
         });  
    });
 
    $(document).ready(function(){
         $("#linkcopy4").click(function(){
            $(".magnet4").select();
            document.execCommand("copy");
         });  
    });
     
    $(document).ready(function(){
         $("#linkcopy5").click(function(){
            $(".magnet5").select();
            document.execCommand("copy");
         });  
    });
        
    $(document).ready(function(){
         $("#linkcopy6").click(function(){
            $(".magnet6").select();
            document.execCommand("copy");
         });  
    });
    
    $(document).ready(function(){
         $("#linkcopy7").click(function(){
            $(".magnet7").select();
            document.execCommand("copy");
         });  
    });
        
    $(document).ready(function(){
         $("#linkcopy8").click(function(){
            $(".magnet8").select();
            document.execCommand("copy");
         });  
    });
    </script>
 
 </head>

<body>

<!--头部----------------------->
<div class="container-head"><!--网页最上面的部分--0------->
    <div class="container-head-p">
    <p class="p"><</p><p class="p">/br></p>
<br>
    <p style="font-weight:lighter;">We should <p style="font-weight:900;">break </p></p><p style="font-weight:lighter;">up</p>
</div>
</div>
<!--导航栏------------------------>
<div class="manu">
    <ul>
        <li ><a  href="index.html">个人信息</a></li>
        <li><a href="mypage2.htm">教程专栏</a></li>
        <li><a href="mypage3.php"style="color:rgb(135, 175, 175)">学习资料</a></li>
        </ul>
</div>  
<!--内容部分-------------------->
<div class="main">
<div class="siderbarmiddle">
        <div class="link">
                <p class="linknameInput" >名称： <form  name="myForm" onsubmit="return submita()" method="post" >
                    <input autocomplete="off" id="LinknamevalueInput" type="text" name="LinknameInput">
                    <input autocomplete="off" id="LinklinkvalueInput" type="text" name="LinklinkInput">
                    <input autocomplete="off" id="LinksizevalueInput" type="text" name="LinksizeInput">
                    <input autocomplete="off" id="LinkcodevalueInput" type="text" name="LinkcodeInput">
                   
                    <input class="linkcopyInput" type="submit" value="提交上传">
                 
                </form>
            </p>
               
                <p class="linksizeInput" >大小:</p>
                
                <p class="linkcodeInput" >密码:</p>
                
                <p class="linklinkInput" >链接：</p> 
                
              
            </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue0"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue0" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue0" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet" id="linklinkvalue0" ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" >复制链接</a>
       
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue1"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue1" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue1" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet1" id="linklinkvalue1"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy1" >复制链接</a>
     
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue2"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue2" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue2" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet2" id="linklinkvalue2"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy2" >复制链接</a>
     
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue3"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue3" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue3" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet3" id="linklinkvalue3"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy3" >复制链接</a>
      
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue4"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue4" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue4" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet4" id="linklinkvalue4"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy4" >复制链接</a>
      
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue5"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue5" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue5" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet5" id="linklinkvalue5"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy5" >复制链接</a>
     
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue6"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue6" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue6" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet6" id="linklinkvalue6"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy6" >复制链接</a>
     
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue7"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue7" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue7" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet7" id="linklinkvalue7"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy7" >复制链接</a>
      
    </div>
    <div class="link" >
        <p class="linkname" >名称： <a id="linknamevalue8"></a></p>
       
        <p class="linksize" >大小:<a id="linksizevalue8" ></a></p>
        
        <p class="linkcode" >密码:<a id="linkcodevalue8" ></a></p>
        
        <p class="linklink" >链接：</p> <textarea readonly 	spellcheck =“false”  class="magnet7" id="linklinkvalue8"  ></textarea>
        
        <a  href="javascript:void(0)" style="text-decoration: none" onclick="copyMagnetLink()" class="linkcopy" id="linkcopy8" >复制链接</a>
      
    </div>
</div>
</div>

<?php 
$servername = "118.25.102.253";
$username = "vine";
$password = "wzzuilihai1";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password,$dbname);
 
// 检测连接
if ($conn->connect_error) {
   echo "数据库链接失败";
} 


@$name1=$_POST["LinknameInput"];


@$size=$_POST["LinksizeInput"];
@$code=$_POST["LinkcodeInput"];
@$link=$_POST["LinklinkInput"];

if (!empty($name1)&&!empty($size)&&!empty($link)&&!empty($code)){

	$sql = "INSERT INTO `mypage` (`name1`, `size`, `code`, `link`) VALUES ('$name1', '$size', '$code', '$link')";
	if ($conn->query($sql) === TRUE) {

       
	} 
    /*else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}*/
}

?>

<!--末尾部分-->
<div id="bottom">
        <div class="copyright">copyright@Azhen 备案号:</div>
</div>

<div class="fixed-btn">
    <a class="go-top" href="javascript:void(0)" title="返回顶部" style="display: inline-block;"> <i class="fa fa-angle-up">^</i></a>
</div>
<script src="main.min.js"></script>
<script src="myScript.js"></script>
 </body>
</html>

