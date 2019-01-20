<?php
	header('Content-Type:text/html; charset=utf-8;');

	$fp = fopen("name.txt",'r');//打开文件
       if(file_exists("name.txt")){//当文件存在时，才读取内容
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
       }
       fclose($fp);//关闭文件
	   $img_path = 'test_img/' . $line;

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预测结果</title>
</head>
<body>
  
  <div height="500" width="800" style="float:left">
    <img id="pic" height="500" width="800" style="float:left"/>
    <script type="text/javascript">
 
	var url=  "<?php echo $img_path?>";

	document.getElementById("pic").src = url;

</script>	
  </div>

  <div style="float:left">
  <?php
	header('Content-Type:text/html; charset=utf-8;');

	

		
       echo "<br/>预测文本：<br/>";
		$fp = fopen("predict.txt",'r');//打开文件
       if(file_exists("predict.txt")){//当文件存在时，才读取内容
          while(!feof($fp)){//判断文件指针是否到达末尾
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
             echo $line."<br/>";//输出获取到的一行文本
          }
       }
       fclose($fp);//关闭文件

		echo "真实文本：<br/>";

	$fp = fopen("gold.txt",'r');//打开文件
       if(file_exists("gold.txt")){//当文件存在时，才读取内容
          while(!feof($fp)){//判断文件指针是否到达末尾
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
             echo $line."<br/>";//输出获取到的一行文本
          }
       }
       fclose($fp);//关闭文件
    ?>
    
  <?php

		echo "<br/>";
		echo "预测准确率：<br/>";

	$fp = fopen("accuracy.txt",'r');//打开文件
       if(file_exists("accuracy.txt")){//当文件存在时，才读取内容
          while(!feof($fp)){//判断文件指针是否到达末尾
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
             echo $line."<br/>";//输出获取到的一行文本
          }
       }
       fclose($fp);//关闭文件


		


?>
    </div>


	
</body>	
</html>	
