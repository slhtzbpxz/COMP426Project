<?php
    include('./config.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
   
    $var = "SELECT * FROM member WHERE email='$email' and pwd='$password'"; 

    $str = $mysqli->query($var);
    $a = $str->fetch_array();
   
    if($a){
        
         $_SESSION['id'] = $a['id'];
         $_SESSION['groupid'] = $a['groupid'];
         $_SESSION['name'] = $a['name'];
         $_SESSION['phone'] = $a['phone'];
         $_SESSION['email'] = $a['email'];
         $_SESSION['company'] = $a['company'];
         $_SESSION['inviter'] = $a['inviter'];
         $_SESSION['invitation_code'] = $a['invitation_code'];

         if($a['groupid'] == 1){
?>
         <script language="javascript">
          alert("You have logged in successfully :)");
          location.href='../BackEnd/messagelist.php';
         </script>
<?php       
         }else{           
?>
          <script language="javascript">
          alert("You have logged in successfully :)");
          location.href='../BackEnd/requests.php';
         </script>
<?php    }
?>

        
<?php
    }else{
?>
    <script language="javascript">
    alert("Email or Password incorrect :( Please try again!");
    location.href='../FrontEnd/login.html';
    </script>
<?php
    }
?>