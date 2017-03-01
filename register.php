<?php
   include('ajaxRegistrationModule.class.php');
   $ajaxRegistrationModule = new ajaxRegistrationModule;
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Registration </title>
<link href="css/register.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

<?php echo $ajaxRegistrationModule->initScript();?>
</head>
<body>
<div class="container" >
  <div class="col-md-6 col-md-offset-3">
  <h3 class="text-center">Registration</h3>
  <br>
  <div class="ajax_notify"> 
    <img src="files/error.jpg" /> Error : Please complete this registration form.
    <!--don't delete this div class="ajax_notify"-->
  </div>
  <form action="" method="post" class="ajax_form form-horizontal">
    <div class="form-group"><label class="col-md-4 control-label">First Name <span class="desc"> required</span></label>
      <div class="col-md-6"><input name="fname" type="text" class="validate_blank form-control"/></div>
    </div>
    <div class="form-group"><label class="col-md-4 control-label">Last Name <span class="desc"> required</span></label>
      <div class="col-md-6"><input name="lname" type="text" class="validate_blank form-control"/></div>
    </div>
    <div class="form-group"><label class="col-md-4 control-label">Email Address <span class="desc"> should be a valid email address</span></label>
      <div class="col-md-6"><input name="email" type="text" class="validate_email form-control" id="email" /></div>
    </div>
    <div class="form-group"><label class="col-md-4 control-label">Password <span class="desc"> minimum of 6 characters long</span></label>
      <div class="col-md-6"><input name="password" type="password" class="validate_password form-control"/></div>
    </div>
    <div class="form-group"><label class="col-md-4 control-label">Confirm Password <span class="desc"> please re-type your password</span></label>
      <div class="col-md-6"><input name="password" type="password" class="validate_password_confirm form-control"/></div>
    </div>
    <div class="form-group"><label class="col-md-4 control-label">Address <span class="desc"> required</span></label>
      <div class="col-md-6"><input name="address" type="text" class="validate_blank form-control"/></div>
    </div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
        <br><a href="#"  class="btn btn-primary" onclick="$('.<?php echo AJAX_FORM_ELEMENT?>').submit();">Submit</a>
      </div>
    </div>
      <span class="ajax_wait">
        <!--don't delete this span class="ajax_wait"-->
      </span> 
      
    
    <div class="ajax_target">
      <!--don't delete this div class="ajax_target" -->
    </div>
    </div>
  </form>
  <?php 
   echo $ajaxRegistrationModule->initRegistration();
 ?>
</div>
</body>
</html>
