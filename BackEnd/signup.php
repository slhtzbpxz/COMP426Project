<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign up</title>

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

         .col-sm-6 {
            padding-top: 20px; 
            padding-bottom: 30px;
         }
    </style>

</head>

<body>
    <!-- nav bar starts -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black; padding-top: 20px">
        <div class="container" style="padding-left: 0; padding-right: 0">


            <div class="navbar-header">
                <a class="navbar-brand" id="navbar-brand" style="padding-left: 0; font-size: 24px; color: white" href="../FrontEnd/index.html">
                    T-REFER, SINCE 2017
                </a>
            </div>


            <div id="navbar" class="collapse navbar-collapse" style="float: right; font-size: 24px;">
                <ul class="nav navbar-nav">
                    <li><a href="../FrontEnd/index.html" style="color: white">Home</a></li>
                    <li><a href="../FrontEnd/login.html" style="color: white">Log in</a></li>
                    <li><a href="../BackEnd/signup.php" style="color: white">Sign up</a></li>
                </ul>
            </div>


        </div>

    </nav>
    <!-- nav bar ends -->

    <!--********************************************************************************************-->

    <!-- main container starts -->
    <div class="container">

        <!-- row starts -->
        <div class="row">
            <div class="col-sm-12">

                 <!-- applicant/referrer nav bar starts-->
                 <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#applicant" data-toggle="tab">
                            <font color="#ED6437">Applicant (Job Hunter) Registration</font>
                        </a>
                    </li>

                    <li>
                        <a href="#referrer" data-toggle="tab">
                            <font color="#ED6437">Referrer Registration</font>
                        </a>
                    </li>
                 </ul>
                 <!-- applicant/referrer nav bar ends-->


                 <!-- tab contents starts-->
                 <div class="tab-content">

                    <!-- *********************************************************************************** -->
                    <div class="tab-pane active" id="applicant">

                         <div class="panel rounded">

                         <div class="panel-body">
                             <form id="signupForm" name="signup-form" action="../BackEnd/signuppost.php" method="post">
                                 
                                 
                                 <div class="col-sm-6">

                                     <div class="form-group row">
                                         <div class="col-sm-4"></div>
                                         <div class="col-sm-8">
                                         </div>
                                     </div>


                                      <div class="form-group row">
                                         <div class="col-sm-4"><label class="form-control-static">Email</label></div>

                                         <div class="col-sm-8">
                                             <input class="form-control" type="email" name="email"
                                              placeholder="Email" value=""
                                              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                              title="Please enter a valid email address" required />
                                         </div>
                                      </div>


                                      <div class="form-group row">
                                         <div class="col-sm-4"><label class="form-control-static">Name</label></div>
                                         <div class="col-sm-8">
                                             <input class="form-control" type="text" name="name"
                                              placeholder="Real Name" value=""
                                              pattern="[a-zA-Z-]{1,}\s[a-zA-Z]{1,}"
                                              title="Please enter your full English name (last + first)" required />
                                         </div>
                                     </div>


                                     <div class="form-group row">
                                         <div class="col-sm-4">
                                             <label class="form-control-static">Phone</label>
                                         </div>

                                         <div class="col-sm-8">
                                             <input class="form-control" type="text" id="phone"
                                              name="phone" value="" placeholder="Phone" required/>
                                         </div>

                                         <script>
                                          $("#phone").inputmask({"mask": "(999) 999-9999"});
                                          $("#phone").on('change keydown paste input', function(){
                                            if($(this).val()) {
                                              $(this).attr('placeholder', '');
                                          } else {
                                              $(this).attr('placeholder', 'Phone');
                                          } });
                                         </script>
                                     </div>


                                     <div class="form-group row">
                                         <div class="col-sm-4"><label class="form-control-static">Password</label></div>
                                         <div class="col-sm-8">
                                             <input class="form-control" type="password" name="password"
                                              id="applicant_password" placeholder="Password" pattern=".{6,}"
                                              title="Must contain at least 6 characters" required />
                                         </div>
                                     </div>

                                     <div class="form-group row">
                                         <div class="col-sm-4"><label class="form-control-static">Confirm Password</label></div>

                                         <div class="col-sm-8">
                                             <input class="form-control" type="password" name="confirm_password"
                                              id="applicant_confirm_password"
                                              placeholder="Confirm Password" pattern=".{6,}"
                                              title="Must contain at least 6 characters" required />
                                         </div>
                                     </div>



                                     <input type="hidden" name="role" value="Applicant">



                                     <div class="form-group row">
                                         <div class="col-sm-4"><label class="form-control-static">Invitation Code</div>

                                         <div class="col-sm-8">
                                             <input class="form-control" type="text" name="invitation_code"
                                              placeholder="Invitation Code" value="" />
                                         </div>
                                     </div>

                                 </div>

                                 <div class="col-sm-6">

                                     <img src="../images/home_recruit_talent.jpg" style="margin-left: 20%; margin-top: 5%">

                                     <button type="submit" class="btn btn-block btn-default"
                                      style="margin-top: 8%; width: 60%; margin-left: 20%" 
                                      onclick="return validatePassword('#applicant_password', '#applicant_confirm_password', '#applicant_signup_error');">
                                      Sign up
                                     </button>


                                     <p class="text-center text-muted">
                                         <span id="applicant_signup_error" class="error-text"></span>
                                         <br/>
                                         <small>Already have an account?<a href="../FrontEnd/login.html"> Log in</a></small>
                                         <br/>
                                         <small>Unable to register?
                                             <a href="mailto:yuting@live.unc.edu" title="yuting@live.unc.edu">Contact Us</a>
                                         </small>
                                     </p>
                                 </div>

                             </form>
                         </div><!-- panel body ends -->
                         </div><!-- panel rounded ends -->

                     </div><!-- applicant ends -->
                     <!-- *********************************************************************************** -->
                     

                     <!-- *********************************************************************************** -->
                     <div class="tab-pane" id="referrer">
                         <div class="panel">
                             <div class="panel-body">
                                     <form id="referrerSignupForm" name="referrer-signup-form" action="../BackEnd/signuppost.php" method="post">

                                         <div class="col-sm-6">

                                                 <!-- name  strats-->
                                                 <div class="form-group row">
                                                     <div class="col-sm-4"><label class="form-control-static">Name</label></div>
                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="text" name="name"
                                                                placeholder="Real Name" value=""
                                                                pattern="[a-zA-Z-]{1,}\s[a-zA-Z]{1,}"
                                                                title="Please enter your full English name (last + first)" required />
                                                     </div>
                                                 </div>
                                                 <!-- name  ends-->

                                                 <!-- Phone  strats-->
                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                         <label class="form-control-static">Phone</label>
                                                     </div>

                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="text" id="phone1"
                                                          name="phone" value="" placeholder="Phone" required/>
                                                     </div>

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
                                                 <!-- Phone  ends-->


                                                 <!-- company name  strats-->
                                                 <div class="form-group row">
                                                     <div class="col-sm-4"><label class="form-control-static">Company</label></div>
                                                     
                                                     <div class="col-sm-8">
                                                         
                                                         <input class="form-control" type="text" name="company"
                                                                placeholder="Company Name" value="" 
                                                                title="Please enter your company's name" required />
                                                     </div>

                                                 </div><!-- company name  ends-->
                                                 

                                                 <!-- corporate email starts -->
                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                         <label class="form-control-static">Corporate Email</label>
                                                     </div>

                                                     <div class="col-sm-8">
                                                          <input class="form-control" type="email" name="email"
                                                                 placeholder="Registered Email" value=""
                                                                 pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
                                                                 title="Please enter a valid email address" required />
                                                     </div>
                                                 </div>
                                                 <!-- coporate email ends -->


                                                 <!-- password starts -->
                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                         <label class="form-control-static">Password</label>
                                                     </div>

                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="password" name="password"
                                                                id="referrer_password"
                                                                placeholder="Password" pattern=".{6,}"
                                                                title="Must contain at least 6 characters" required />
                                                     </div>
                                                 </div>

                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                         <label class="form-control-static">Confirm Password</label>
                                                     </div>

                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="password" name="confirm_password"
                                                                id="referrer_confirm_password"
                                                                placeholder="Confirm Password" pattern=".{6,}"
                                                                title="Must contain at least 6 characters" required />
                                                     </div>
                                                 </div><!-- password ends -->

                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                      <label class="form-control-static">Inviter</label>
                                                     </div>

                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="text" name="inviter"
                                                                placeholder="Inviter" value="" required />
                                                     </div>
                                                  </div>


                                                  <input type="hidden" name="role" value="Referrer">


                                                 <div class="form-group row">
                                                     <div class="col-sm-4">
                                                         <label class="form-control-static">Invitation Code</label>
                                                     </div>
                                                     
                                                     <div class="col-sm-8">
                                                         <input class="form-control" type="text" name="invitation_code"
                                                             placeholder="Invitation Code (optional)" value="" />
                                                     </div>
                                                 </div>

                                             </div>
                                             <!-- col-sm-6 (left-side) ends -->
                                             

                                             <div class="col-sm-6">
                                                 <div class="form-group required">

                                                     <img src="../images/graduation.jpg" style="margin-left: 20%; margin-top: 5%; width: 320px; height: 180px">

                                                     <button type="submit" class="btn btn-block btn-default"
                                                             style="margin-top: 8%; width: 60%; margin-left: 20%"
                                                             onclick="return validatePassword('#referrer_password', '#referrer_confirm_password', '#referrer_signup_error');">
                                                            Sign up 
                                                     </button>
                                                     <br/>
                                                     <p class="text-center text-muted">
                                                         <span id="referrer_signup_error" class="error-text"></span>
                                                         <br/>
                                                         <small>Already have an account?
                                                             <a href="../FrontEnd/login.html"> Log in</a>
                                                         </small>
                                                         <br/>
                                                         <small>Unable to register?
                                                             <a href="mailto:yuting@live.unc.edu" title="yuting@live.unc.edu"> 
                                                                Contact Us</a>
                                                         </small>
                                                     </p>
                                                 </div>
                                             </div>
                                             <!-- col-sm-6 (right-side) ends -->                                   

                                     </form>
                             </div><!-- panel body ends -->
                         </div><!-- panel ends -->

                     </div><!-- referrer ends -->
                     <!-- *********************************************************************************** -->



<script>

    function validatePassword(password_id, verify_password_id, feedback_id) {
        if ($(password_id).val() != $(verify_password_id).val()) {
            $(feedback_id).text("Passwords don't match");
            return false;
        }
        return true;
    }


    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    }
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    });


    $('#signupForm input').click(function() {
        $('#applicant_signup_error').text('');
        $('#referrer_signup_error').text('');
    });

</script>


</body>

</html>

