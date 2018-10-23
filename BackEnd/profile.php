<!DOCTYPE html>

<head>
  <title>Profile</title>
</head>

<?php
include('header.php'); 
?>

<style>
  body {
    padding-top: 100px;
    margin-bottom: 60px;
  }

  html {
  position: relative;
  min-height: 100%;
  }

  .right-side .row button:hover{
    color: white !important;
  }

</style>


<body>

<div class="container">
  <div class="row">
    <div class="panel panel-default col-sm-10 col-sm-offset-1" style="margin-top: 5%; width: 60%; margin-left: 20%">
      <div class="panel-body">

<!-- **************************** -->
<!-- Header -->
<?php
        if($groupid==1){
?>

        <h3>Applicant Profile</h3>
<?php
        }else{
?> 

        <h3>Referrer Profile</h3>
<?php
        }
?>
<!-- Header -->
<!-- **************************** -->

        <hr>

<!-- ************************************************* -->
        <div class="form-group row">

          <div class="col-sm-4">
            <label>Name</label>: <?php echo $name;?>
          </div>

          <div class="col-sm-4">
            <label>Email</label>: <?php echo $email;?>
          </div>

          <?php
           if($groupid==1){
          ?>
          <div class="col-sm-4">
            <label>Phone</label>: <?php echo $phone;?>
          </div>

          <?php
            }else{
          ?>
          <div class="col-sm-4">
            <label>Company</label>: <?php echo $company;?>
          </div>
          <?php
          }
          ?>
        </div>
<!-- ************************************************* -->

        <hr>





        <form enctype="multipart/form-data" name="profile-form" 
        action="..//BackEnd/profilesave.php" method="post">

<!-- applicant -->
<?php
        if($groupid==1){
?>
        <div class="col-sm-6 left-side">
          <div class="form-group row">
                    
              <label>Name</label>
              <input class="form-control" type="text" name="name" value=" <?php echo $name;?>" 
                     placeholder=" <?php echo $name;?>">
            
          </div>


          <div class="form-group row">
           
              <label>Phone</label>
              <input class="form-control" type="text" name="phone" value="<?php echo $phone;?>"
                     id="phone1"
                     placeholder="<?php echo $phone;?>" >
            

                                                  <script>
                                                      $("#phone1").inputmask({"mask": "(999) 999-9999"});
                                                      $("#phone1").on('change keydown paste input', function(){
                                                        if($(this).val()) {
                                                          $(this).attr('placeholder', '');
                                                      } else {
                                                          $(this).attr('placeholder', 'Phone');
                                                      } });
                                                  </script>
          </div>

          
          <div class="form-group row">
            
              <label>Email</label>
              <input class="form-control" type="text" name="email" value="<?php echo $email;?>" 
                     placeholder="<?php echo $email;?>" >
           
          </div>

        </div>
<!-- applicant -->
    


<?php
        }else{
?> 


<!-- company -->
        <div class="col-sm-6 left-side">
          <div class="form-group row">
                
                  <label>Name</label>
                  <input class="form-control" type="text" name="name" value="<?php echo $name;?>" 
                         placeholder="<?php echo $name;?>">
                
          </div>

          <div class="form-group row">
                
                  <label>Phone</label>
                  <input class="form-control" type="text" name="phone" value="<?php echo $phone;?>"
                         id="phone2" 
                         placeholder="<?php echo $phone;?>">
                
                                                    <script>
                                                      $("#phone2").inputmask({"mask": "(999) 999-9999"});
                                                      $("#phone2").on('change keydown paste input', function(){
                                                        if($(this).val()) {
                                                          $(this).attr('placeholder', '');
                                                      } else {
                                                          $(this).attr('placeholder', 'Phone');
                                                      } });
                                                  </script>
          </div>

          <div class="form-group row">
                
                  <label>Email</label>
                  <input class="form-control" type="text" name="email" value="<?php echo $email;?>" 
                         placeholder="<?php echo $email;?>">
                
          </div>

        </div>
<?php
        }
?>            
        
          <!-- ********************************************************* -->
          <!-- update button -->
        <div class="col-sm-6 right-side" style="width: 30%; margin-left: 10%; margin-top: 2%">
          <div class="form-group row">
                  <button type="submit" class="btn btn-block btn-primary"
                          style="margin-top: 10px; font-size: 15px">
                   Update
                  </button>
          </div>
        </div>
              
          <!-- update button -->
          <!-- ********************************************************* -->
      
      
          </div>

        </form>



        <hr>
<?php
        if($groupid==1){
?>

        <form enctype="multipart/form-data" name="applicant-profile-form" action="../BackEnd/resumepost.php" method="post" style="margin-left: 2%">

          <div class="form-group row">
            <div class="col-sm-6">
              <label>Resume (PDF)</label>
              
              <?php
                  $id = $_SESSION['id'];
                  $var = "SELECT * FROM member WHERE id='$id'";
                  $str = $mysqli->query($var);
                  $a = $str->fetch_array();
              ?>
             </div>
          </div>
            

            <div class="form-group row">
              <div class="col-sm-6">
              <input class="form-control" type="file" name="jianli" id="fileToUpload"
                     style="padding-top: 0px; padding-bottom: 0px; margin-top: 5px; margin-bottom: 5px">
              <input type="hidden" name="MAX_FILE_SIZE" value="50000000000000000000000000000000000000">

            
              <button type="submit" class="btn btn-block btn-primary" 
                      style="margin-top: 10px; font-size: 15px">
              Save file
              </button>
              </div>
            </div>

      </form>

<?php
        }else{
?> 



<?php
        }
?>

      </div>
    </div>
  </div>
</div>

</body>
</html>