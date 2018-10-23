<?php

     include('./config.php');
     $role = $_POST['role'];

     // for Applicant 
     if($role=='Applicant'){
       
       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $pwd = $_POST['password'];
       $email = $_POST['email'];
       $groupid = 1;
       $invitation_code = $_POST['invitation_code'];

       $str_emaila = $mysqli->query(" SELECT * FROM member
                   WHERE email='" . ($email) . "'");

       if($str_emaila->num_rows == 0){

         //****************************************************************
       if($invitation_code=='whereisdook'){
         $nav = $mysqli->query
         ("INSERT INTO member (name,phone,pwd,email,groupid) VALUES ('$name','$phone','$pwd','$email','$groupid')");

         //*************************************************
         if($nav){
          
?>
            <script language="javascript">
             alert("You have signed up successfully :)");
             location.href='../FrontEnd/login.html';
            </script>
<?php        
         }else{
?>
               <script language="javascript">
                 alert("Oops... It looks like there is a problem :( Please try again...");
                 location.href='../BackEnd/signup.php';
               </script> 
<?php
         }
         //**************************************************


       }else{


?>
           <script language="javascript">
           alert("The invitaton code is incorrect. Please try again...");
           location.href='../BackEnd/signup.php';
           </script>
<?php
       }

       }else{
?>
           <script language="javascript">
           alert("The email has already been registered :( See you next time!");
           location.href='../FrontEnd/index.html';
          </script>         
<?php
       }
      //****************************************************************


     // for Referrer
     }else{

       $name = $_POST['name'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $pwd = $_POST['password'];
       $company = $_POST['company'];
       $inviter = $_POST['inviter'];
       $invitation_code = $_POST['invitation_code'];
       $groupid = 2;


       $str_company = $mysqli->query(" SELECT * FROM member
                   WHERE company='" . ($company) . "'");

       $str_email = $mysqli->query(" SELECT * FROM member
                   WHERE email='" . ($email) . "'");

       //*************************************************************************************
       if($str_company->num_rows == 0 && $str_email->num_rows == 0){


          //****************************************
          if($invitation_code=='whereisdook'){
            $nav = $mysqli->query("INSERT INTO member (name,phone, email,pwd,company,inviter,invitation_code,groupid) VALUES ('$name','$phone','$email','$pwd','$company','$inviter','$invitation_code','$groupid')");

            //*************************
            if($nav){
?>
             <script language="javascript">
               alert("You have signed up successfully :)");
               location.href='../FrontEnd/login.html';
             </script>
<?php
            }else{

?>
               <script language="javascript">
                 alert("Oops... It looks like there is a problem :( Please try again...");
                 location.href='../BackEnd/signup.php';
               </script>  
<?php
            }
           //**************************
           

          }else{
?>
            
             <script language="javascript">
                alert("The invitaton code is incorrect. Please try again...");
                location.href='../BackEnd/signup.php';
             </script>
<?php
          }

          //****************************************

      }else if($str_company->num_rows !== 0){
?>
         <script language="javascript">
           alert("The company has already been registered :( See you next time!");
           location.href='../FrontEnd/index.html';
         </script>
<?php
      }else{
?>
         <script language="javascript">
           alert("The email has already been registered :( See you next time!");
           location.href='../FrontEnd/index.html';
         </script>
<?php
      }
      //*************************************************************************************
    }
?>


      