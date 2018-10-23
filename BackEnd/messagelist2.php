<!DOCTYPE html>
<html>
<head>
  <title>Referrer Resources</title>
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


<div class="container" style="margin-top: 5%; margin-left: 5%; width: 90%;">

  <div class="container" style="margin-top: 0; margin-left: 0; width: 100%;">
    
    <div>
        <table class="table" width="100%" style="font-size: 15px;">
            
            <colgroup>
                <col span="1" style="width: 11%;">
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 15%;">
                <col span="1" style="width: 35%;">
                <col span="1" style="width: 15%;">
            </colgroup>

            <thead>
            <tr>
                <th></th>
                <th>Company</th>
                <th>Headquarter</th>
                <th>Referrer Notice</th>
                <th>Last Update</th>
            </tr>
            </thead>

            <tbody>

            <?php
            $var = "SELECT * FROM message ";
            $str = $mysqli->query($var);

            while( $a = $str->fetch_array() ){
            ?>

            <tr>

                <td style="vertical-align: middle;">
                  <?php
                  if(is_null($a['img'])){
                  ?>
                  <a target="_blank"><img src="../BackEnd/img/default.jpg" style="width: 100%; height: 45%"></a>
                  <?php
                  }else{
                  ?>
                  <a target="_blank"><img src="<?php echo $a['img'];?>" style="width: 100%; height: 45%"></a>
                  <?php
                  }
                  ?>
                  
                </td>

                <td style="white-space: normal;"><?php echo $a['Company'];?></td>


                <td style="white-space: normal;"><?php echo $a['Headquarter'];?></td>


                <td style="text-align: left; white-space: normal;">
                    <?php echo $a['Notice'];?>
                </td>

                <td> 
                  <?php echo $a['time'];?>
                </td>

            </tr>
            
            <?php
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