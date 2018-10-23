<?php
    include('./config.php');


    $gid = $_GET['uid'];
    $uid = $_SESSION['id'];

    $var = "SELECT * FROM applicants WHERE uid='$uid' and gid='$gid'";

    $str = $mysqli->query($var);
    $a = $str->fetch_array();

    if($a){
?>
        <script language="javascript">
        checkConfirm = confirm("You already applied!");
        if(!checkConfirm){
           window.close();
        }else{
           window.close();
        }
        </script>
<?php
        die;
}
    
    $nav = $mysqli->query("INSERT INTO applicants (uid,gid) VALUES ('$uid','$gid')");
    
   if($nav){
?>
        <script language="javascript">
        checkConfirm = confirm("Your application has been submitted!");
        if(!checkConfirm){
           window.close();
        }else{
           window.close();
        }
        </script>
<?php
   }else{
?>
        <script language="javascript">
        checkConfirm = confirm("Oops...You application is not submitted. Please try again!");
        if(!checkConfirm){
           window.close();
        }else{
           window.close();
        }
        </script>
<?php
   }
?>