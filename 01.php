<?php
	header('Content-Type:text/html; charset=utf-8;');

	$fp = fopen("name.txt",'r');//打开文件
       if(file_exists("name.txt")){//当文件存在时，才读取内容
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
       }
       fclose($fp);//关闭文件
	   $img_path = 'uploads/2018-12-28/' . $img_path.'.png';
		echo '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预测结果</title>
</head>
<body>
<img src="uploads/2018-12-28/1.png"  height="500" width="800" />
</body>	
</html>';		

		
       echo "<br/>预测文本：<br/>";
		$fp = fopen("predict.txt",'r');//打开文件
       if(file_exists("predict.txt")){//当文件存在时，才读取内容
          while(!feof($fp)){//判断文件指针是否到达末尾
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
             echo $line."<br/>";//输出获取到的一行文本
          }
       }
       fclose($fp);//关闭文件

		echo "<br/>";
		echo "真实文本：<br/>";

	$fp = fopen("gold.txt",'r');//打开文件
       if(file_exists("gold.txt")){//当文件存在时，才读取内容
          while(!feof($fp)){//判断文件指针是否到达末尾
             $line = fgets($fp);//返回一行文本，并将文件指针移动到下一行头部
             echo $line."<br/>";//输出获取到的一行文本
          }
       }
       fclose($fp);//关闭文件

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

