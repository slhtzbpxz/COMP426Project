<!DOCTYPE html>
<html>

<head>
  <title>Post Positions</title>

  <style>
  .right-side .row button:hover{
    color: white !important;
  }

</style>

</head>
<body>

<?php
  include('header.php'); 
?>

<div class="container">
  <div class="row">
    <div class="panel panel-default col-sm-10 col-sm-offset-1" style="width: 60%; margin-left: 20%">
      <div class="panel-body">

        <h3>Post Positions</h3>

        <hr>


        <form enctype="multipart/form-data" name="applicant-profile-form" action="../BackEnd/jobpost.php" method="post">

          <div class="col-sm-6">
            
            <input type="hidden" name="uid" value="<?php echo $id;?>">
             <div class="form-group row">                    
              <label>Company</label>
              <input class="form-control" type="text" name="Company">            
            </div>


            <div class="form-group row">
            
              <label>Headquarter</label>
              <input class="form-control" type="text" name="Headquarter">           
            </div>

            <div class="form-group row">           
              <label>Referrer Notice</label>
              <textarea class="form-control" type="text" name="Notice" rows="5"></textarea>              
            </div>


            <div class="form-group row"> 
              <label>Upload Company Logo</label>
              <input class="form-control" type="file" name="img"
                     style="padding-top: 0px; padding-bottom: 0px; margin-top: 5px; margin-bottom: 5px">           
            </div>

          </div> <!-- col-sm-6 -->


          <!-- ********************************************************* -->
          <!-- post button -->
          <div class="col-sm-6 right-side" style="width: 30%; margin-left: 10%; margin-top: 2%">
            <div class="form-group row">
              <button type="submit" class="btn btn-block btn-primary"
                      style="margin-top: 10px; font-size: 15px">
                   Post
              </button>
            </div>
          </div>
              
          <!-- post button -->
          <!-- ********************************************************* -->

        </form>

      </div> <!-- panel-body -->
    </div> <!-- panel -->
  </div> <!-- row -->
</div> <!-- container -->

</body>

</html>

 
         