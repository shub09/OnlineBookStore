<?php
$email = $_POST["email"];
$password = $_POST["password"];
// Create connection
$con=mysqli_connect("localhost","root","","bookdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM user WHERE email = '".$email."'");

while($row = mysqli_fetch_array($result))
  {
    $pass=$row['password'];
    $name=$row['fname'];
  }

  if($password==$pass){
    $session = $name;
    $var_str = var_export($session, true);
    $var = "<?php\n\n\$session = $var_str;\n\n?>";
    file_put_contents('session.php', $var);
    header("Location: index.php");
  }else{
    header("Location: signin.php?mode=failed");
  }
}

?>