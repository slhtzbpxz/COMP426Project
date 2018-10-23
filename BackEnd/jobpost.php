<?php
    include('./config.php');
      $uid = $_POST['uid'];
      $Company = $_POST['Company'];
      $Headquarter = $_POST['Headquarter'];
     $Notice = $_POST['Notice'];
      $img = $_FILES['img'];
      date_default_timezone_set("PRC");
      $time = date('Y-m-d');
      $logo = 'img';
      if(!file_exists($logo)){
        mkdir($logo,0777,true);//制作目录
      }
     $yue = Date('m');
      $nian = Date('y');
      $miao = Date('s');  
      $ri = Date('d');
      $shi = Date('H');
      $fen = Date('i');
      //$hz = array_pop(@explode('.',$img['name']));
      $ang = $logo.'/'.$yue.$shi.$fen.$nian.$ri.$miao.'.'.'jpg';//变量名
       if(move_uploaded_file($img['tmp_name'],$ang)){
      }
      $nav =  $mysqli->query("INSERT INTO message (uid,Company,Headquarter,Notice,img,time) VALUES ('$uid','$Company','$Headquarter','$Notice','$ang','$time')");

        if($nav){
        ?>
            <script language="javascript">
            alert("Position posted successfully! :)");
            location.href='../BackEnd/messagelist2.php';
            </script>
                <?php
        }
?>