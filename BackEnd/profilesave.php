e<?php
    include('./config.php');

    $id = $_SESSION['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    
    $demo = "UPDATE member SET name='$name',email='$email',phone='$phone'  where id='$id'";
    $oule = $mysqli->query($demo);
    
    if($oule){

         
         $_SESSION['name'] = $name;
         $_SESSION['phone'] = $phone;
         $_SESSION['email'] = $email;
        
      ?>
        <script language="javascript">
        alert("Updated successfully :)");
        location.href='../BackEnd/profile.php';
        </script>
      <?php

           
    }else{
      ?>
    <script language="javascript">
      alert(":( It looks like there is a problem... The information has not been updated");
    </script>
        <?php
    }
   

?>