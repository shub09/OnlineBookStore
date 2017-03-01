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

    
    <script type="text/javascript">
      $(function() {
        $("form.cart_form").submit(function() {
          var title = "Your Shopping Cart";
          var orderCode = $("input[name=order_code]", this).val();
          var quantity = $("input[name=quantity]", this).val();
          var url = "cart_action.php?order_code=" + orderCode + "&quantity=" + quantity + "&TB_iframe=true&height=400&width=780";
          tb_show(title, url, false);
          
          return false;
        });
      });
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
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="cart.php?KeepThis=true&TB_iframe=true&height=400&width=780" title="Your Shopping Cart" class="thickbox"><img src="images/cart.png" height="51px"></a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>

      </div>
</div>

<?php
$book = $_GET['book'];
// Create connection
$con=mysqli_connect("localhost","root","","bookdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM book WHERE book_id = ".$book);

while($row = mysqli_fetch_array($result))
  {
    $book_id=$row['book_id'];
    $title=$row['title'];
    $author=$row['author'];
    $price=$row['price'];
    $isbn_no=$row['isbn_no'];


  echo '
<div class="row">
  <div class="col-md-4 tile" style="min-height:450px">
    <img src="images/books/'.$book_id.'.jpg" style="max-width: 100%;width: 350px;max-height: 100%;"/>
  </div>
  <div class="col-md-6">
    <h3>'.$title.'</h3>
    <h5>By: '.$author.'</h5>
    <h5>Price: '.$price.'</h5>
    <form class="cart_form" action="cart_action.php" method="get">
      <input type="hidden" name="order_code" value="'.$book_id.'" />
      <input type="hidden" name="quantity" value="1" />
      <input type="hidden" name="unit_price" value="'.$price.'" />
      <input class="btn btn-primary" type="submit" name="submit" value="Add to cart" />
    </form>
  </div>
</div>
          ';
  }

mysqli_close($con);
}
?>



  	</div>

  </body>
  </html>
