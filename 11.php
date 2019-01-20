<?php
function a(){
	header('Content-Type:text/html; charset=utf-8;');

	$fp = fopen("name.txt",'r');//打开文件
       if(file_exists("name.txt")){//当文件存在时，才读取内容
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
       }
       fclose($fp);//关闭文件
	   $img_path = 'test_img/' . $line;
		echo $img_path;
}
?>
<?php
	header('Content-Type:text/html; charset=utf-8;');

	$fp = fopen("name.txt",'r');//打开文件
       if(file_exists("name.txt")){//当文件存在时，才读取内容
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
       }
       fclose($fp);//关闭文件
	   $img_path = 'test_img/' . $line;
		echo $img_path;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预测结果</title>
</head>
<body>

 <span><?php a(); ?></span>
  <img id="pic" />


<script type="text/javascript" height="500" width="800" style="float:left">
 


var url=  "<?php echo $img_path?>";

alert(url);


document.getElementById("pic").src = url;


<a href="//www.jb51.net/" target="_blank"><img src=url border="0" width="500" height="800" alt="444 X 207"/><br />


</script>	

  

</body>	
</html>		