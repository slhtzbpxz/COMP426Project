<?php
  session_start();
  unset($_SESSION);
  //echo $_SESSION['user'];
  header('content-type:text/html;charset="utf-8"');
  session_destroy();
  
  if(1){
?>

  <script language="javascript">
  alert("You have loggged out successfully :)");
  location.href='../FrontEnd/login.html';
  </script>
  
<?php
  }
?>