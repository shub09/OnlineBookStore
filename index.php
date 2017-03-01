
<!DOCTYPE html>
<html lang="en">
  <head>

    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/flat-ui.css" rel="stylesheet">

    <script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <script src="js/jquery.color.js" type="text/javascript"></script>
    <script src="js/thickbox.js" type="text/javascript"></script>
    <script src="js/cart.js" type="text/javascript"></script>

    <link href="css/custom.css" rel="stylesheet">
    <script>
function showHint(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gethint.php?q="+str,true);
xmlhttp.send();
}
</script>
    
  </head>

  <body>

    <div class="container">
      <div class="row">
      <div class="col-md-6">
        <h3>Online Book Store</h3>
      </div>
      <div class="col-md-6">



    <div class="navbar navbar-inverse pull-right">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="cart.php?KeepThis=true&TB_iframe=true&height=400&width=780" title="Your Shopping Cart" class="thickbox"><img src="images/cart.png" height="51px"></a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>






      </div>
</div>

      <div class="row">
      <div class="jumbotron">
        <div class="row">
        <div class="col-md-8">
        <h1>Reader's Choice</h1>
        <p class="lead"> A virtual Book Store where you can find all the books right from fiction to non-fiction to college text books</p>
        <p><a class="btn btn-lg btn-success" href="register.php">Sign up today</a></p>
        </div>
        <div class="col-md-4">
          <div class="tile inverse">
          <?php include 'session.php'; if($session!='Guest') : ?>
          <h4 class="form-signin-heading">Already signed in</h4>
          <div class="form-group"><input name="email" id="email" type="text" class="form-control flat" placeholder="Disabled" disabled></div>
          <div class="form-group"><input name="password" id="password" type="password" class="form-control flat" placeholder="Disabled" disabled></div>
          <a class="btn btn-lg btn-primary btn-block" href="logout.php">Sign Out</a>
          <?php else: ?>
          <form class="form-signin" method="post" action="login.php">
          <h4 class="form-signin-heading">Sign In</h4>
          <div class="form-group"><input name="email" id="email" type="text" class="form-control flat" placeholder="Email address"></div>
          <div class="form-group"><input name="password" id="password" type="password" class="form-control flat" placeholder="Password"></div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
          <?php endif; ?>
          </div>
        </div>
        </div>
      </div>
</div>

    <div class="row">
      <div class="row marketing">
        <div class="col-lg-6">
          <h4><a href="fiction.php">Fiction</a></h4>
          <h4><a href="nonfiction.php">Non-fiction</a></h4>
          <h4><a href="technical.php">Technical Books</a></h4>
        </div>
        <div class="col-lg-3">
          <h5>Quick Search: </h5>
          <form action=""> 
          <input class="form-control" type="text" id="txt1" onkeyup="showHint(this.value)" />
          </form>
          <p> <span id="txtHint"></span></p> 
        </div>
      </div>
    </div>
      <div class="row">
      <div class="footer">
        <hr class="top bottom">
        <p style="font-size:12px">&copy; Online Book Store 2013</p>
      </div>
    </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
