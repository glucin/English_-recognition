<?php
	header('Content-Type:text/html; charset=utf-8;');

	$fp = fopen("name.txt",'r');//打开文件
       if(file_exists("name.txt")){//当文件存在时，才读取内容
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
       }
       fclose($fp);//关闭文件
	   $img_path = 'test_img/' . $line;
		echo $img_path;


		echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预测结果</title>
</head>
<body>

<img id="pic" />
<text id = "p" />

<script type="text/javascript">

var url=  $img_path;; 
alert(url);


document.getElementById("pic").src = u;

</script>		
</body>	
</html>';		
?>