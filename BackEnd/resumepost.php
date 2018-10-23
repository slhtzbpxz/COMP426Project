<?php
include('./config.php');
date_default_timezone_set("PRC");
  //$time = date('Y-m-d H:i:s');
  $shijian = date('Y-m-d H:i:s');
  $img = $_FILES['jianli'];
  $files = 'files';
  if(!file_exists($files)){
    mkdir($files,0777,true);//制作目录
  }
    
      $yue = Date('m');
      $nian = Date('y');
      $miao = Date('s');  
      $ri = Date('d');
      $shi = Date('H');
      $fen = Date('i');
  //    $hz = array_pop(@explode('.',$img['name']));
      $id = $_SESSION['id'];
      $ang = $files.'/'.$yue.$shi.$fen.$nian.$ri.$miao.'.'.'pdf' ;//变量名
    if(move_uploaded_file($img['tmp_name'],$ang)){
      }
       $id = $_SESSION['id'];
       $demo = "UPDATE member SET resume='$ang' where id=$id";
       //print($demo);
      $oule = $mysqli->query($demo);

    if($oule){
       ?>
        <script language="javascript">
        alert("Resume uploaded successfully! :)");
        location.href='javascript:history.go(-1)';
        </script>
            <?php
    }else{
      ?>
        <script language="javascript">
        alert("Oops... It seems like there is a problem :( Please try again!");
        location.href='javascript:history.go(-1)';
        </script>
            <?php
    }
?>