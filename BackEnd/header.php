<!DOCTYPE html>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/stylew.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/jquery.inputmask.js"></script>

    <style>
         body {
             padding-top: 220px;
         }

    </style>

</head>

<body>
   <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black; padding-top: 20px">
       <div class="container" style="padding-left: 0; padding-right: 0">
           
           <div class="navbar-header">
               <a href="../FrontEnd/index.html" class="navbar-brand" id="navbar-brand" style="padding-left: 0; font-size: 24px; color: white">
                    T-REFER, SINCE 2017
               </a>
           </div>

           <div id="navbar" class="navbar-collapse collapse" style="float: right; font-size: 24px;">
          
             <ul class="nav navbar-nav navbar-right">           
        

<?php
              include('./config.php');
              $groupid = $_SESSION['groupid'];
              $name = $_SESSION['name'];
              $phone = $_SESSION['phone'];
              $email = $_SESSION['email'];
              $company = $_SESSION['company'];
              $inviter = $_SESSION['inviter'];
              $code = $_SESSION['invitation_code'];
              $id = $_SESSION['id'];

              if($groupid==1){
?>

               
               <li><a class="tab-menu" href="../BackEnd/messagelist.php" style="color: white">Referrer Resources</a></li>

<?php
              }else{
?>
               <li><a class="tab-menu" href="../BackEnd/requests.php" style="color: white">Referrer Requests</a></li>
               <li><a class="tab-menu" href="../BackEnd/messagelist2.php" style="color: white">Referrer Resources</a></li>

             <?php
             }?>
            
            
               <li><a class="tab-menu" href="../BackEnd/profile.php" style="color: white">Profile</a></li>


                     <!-- ********************************** -->
                     <?php
                     if($groupid==1){
                     ?>
                     <!-- <li><a class="text_center" href="../BackEnd/resume.php" style="color: white">Upload Resume</a></li> -->
                     <li><a href="../BackEnd/logout.php">Log out</a></li> 
                     <?php

                     }else{

                     ?>
                     <li><a class="text_center" href="../BackEnd/job.php" style="color: white">Post Positions</a></li>
                     <li><a href="../BackEnd/logout.php">Log out</a></li> 
                     <?php

                     }
                     ?>
                     <!-- ********************************** -->
            
               </li>
            
             </ul> <!-- navbar-right ends -->

           </div> <!-- navbar ends -->

         </div> <!-- container ends -->

    </nav>
