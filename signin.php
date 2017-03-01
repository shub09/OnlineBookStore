
<!DOCTYPE html>
<html lang="en">
  <head>

    <link href="css/mycss.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="col-md-4 col-md-offset-4 text-center">
      <?php
      $mode=$_GET['mode'];
      include 'session.php';

      if($session!='Guest')
      {
        echo '<h4>'.$session.', you are already signed in!</h4>';
        echo '<br><a href="logout.php">Sign Out?</a>';

      }else{

        if($mode=='failed'){
          echo '<p>Login failed. Please try again</p>';
        }
        echo '<form class="form-signin" method="post" action="login.php">
        <h2 class="form-signin-heading">Sign In</h2>
        <div class="form-group"><input name="email" id="email" type="text" class="form-control" placeholder="Email address" autofocus></div>
        <div class="form-group"><input name="password" id="password" type="password" class="form-control" placeholder="Password"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <br><a href="index.php">Back</a>';
      }



      ?>

      
    </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="js/application.js"></script>
    <script>$('[data-toggle="checkbox"]').each(function () {
  $(this).checkbox();
});</script>
    <script src="http://vjs.zencdn.net/4.1/video.js"></script>
  </body>
</html>
