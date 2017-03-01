<?php
// Create connection
$con=mysqli_connect("localhost","root","","bookdb");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  $result = mysqli_query($con,"SELECT * FROM book");

while($row = mysqli_fetch_array($result))
  {
    $title=$row['title'];
    // Fill up array with names
    $a[]=$title;

  }
}

//get the q parameter from URL
$q=$_GET["q"];
$hint[]="";
//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  for($i=0,$c=1; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
        $hint[$c]=$a[$i];
        $c++;
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if (count($hint) == 1)
  {
  echo 'No result found :(';
  }
else
  {echo 'Results:';
  for($i=1; $i<count($hint); $i++)
{

$result2 = mysqli_query($con,'SELECT * FROM book WHERE title = "'.$hint[$i].'"');
while($row = mysqli_fetch_array($result2))
  {
    $title=$row['title'];
    $id=$row['book_id'];
  }
  
echo '<br><a href="book.php?book='.$id.'">'.$hint[$i]."</a>";


}
  }


?>