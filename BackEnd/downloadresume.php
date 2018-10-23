<?php

$filename = $_GET['url'];
header('Content-Type:pdf'); //specify the type of download document
header('Content-Disposition: attachment; filename="'.$filename.'"'); //descrption of document
header('Content-Length:'.filesize($filename)); //specify size of document
  
//将文件内容读取出来并直接输出，以便下载
//read file to be downloaded
readfile($filename);

?>