<!DOCTYPE html>
<html>

<head>
  <title>Referrer Requests</title>
</head>

<body>

<?php
include('config.php'); 
include('header.php');
?>

<style>

body {
  padding-top: 70px;
}


tr:first-child th:first-child {
    border-radius: 5px 0 0 0;
}
tr:first-child th:last-child {
    border-radius: 0 5px 0 0;
}

thead {
  background: #ED6437;
  color: white;
}


tbody tr:nth-child(even) {
  background: White;
}
tbody tr:nth-child(odd) {
  background: White;
}

th, td {
  padding:0;
  margin:0;
  border-bottom: 1px solid #ddd;
  border-right: 1px solid #ddd;
  border-spacing: 0;
  border-collapse: collapse;
  white-space: nowrap;
}

</style>


<div class="container" style="margin-top: 5%; margin-left: 10%; width: 80%;">

  <div class="container" style="margin-top: 0; margin-left: 0; width: 100%;">
    
    <div>
        <table class="table" width="100%" style="font-size: 15px;">
            
            <colgroup>
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 25%;">
                <col span="1" style="width: 35%;">
                <col span="1" style="width: 15%;">
            </colgroup>

            <thead>
            <tr>
                <th>Name</th>
                <th>Contant Number</th>
                <th>Email Address</th>
                <th>Download Resume</th>
            </tr>
            </thead>

            <tbody>

            <?php
            $cid =  $_SESSION['id'];
            $var = "SELECT * FROM applicants where gid = $cid";
            $str = $mysqli->query($var);

            while( $a = $str->fetch_array() ){
              $id = $a['uid'];
              $infoQuery ="SELECT * FROM member where id= $id ";
              $info = $mysqli->query($infoQuery);
              while ( $b = $info->fetch_array() ) {
                

            ?>

            <tr>

                <td style="white-space: normal;"><?php echo $b['name'];?></td>


                <td style="white-space: normal;"><?php echo $b['phone'];?></td>


                <td style="white-space: normal;"><?php echo $b['email'];?></td>

               <td>
                    <?php
                      if($b['resume']){
                        ?>
                        <a href="../BackEnd/downloadresume.php?url=<?php echo $b['resume'];?>" target="_blank">Download resume</a><br>
                        <?php
                      }else{
                        ?>
                        <div>no resume</div><br>
                        <?php
                      }
                    ?> 
                  
                    
                    
                  </td>

            </tr>
            
            <?php
            }
          }
            ?>

            </tbody>
        </table>
    </div>
  </div>
</div>



<style>
html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 60px;
}
</style>

</body>

</html>