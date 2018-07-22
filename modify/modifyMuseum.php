<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cps630';

$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['submit']))
{
  $name   = $_POST['MuseumName'];
  $date  = $_POST['DateOfEstablishing'];
  $loc = $_POST['Location'];
  $address   = $_POST['Address'];
  $design   = $_POST['DesignerofMuseum'];
  $history   = $_POST['History'];
  $famous     = $_POST['FamousPieces'];
  $picture = 'Images/Museums/' . $_POST['PicturePath'];
  $id = $_POST['id'];


  $query = ("UPDATE Museums SET MuseumName='$name', DateofEstablishing='$date', Location='$loc', Address='$address', DesignerofMuseum='$design', History='$history',
       PicturePath='$picture', FamousPieces='$famous' WHERE MuseumID=$id");


if(mysql_query($query))
 {
echo "<script>alert('Record inserted successfully');</script>";
}
else
 {
 echo "<script>alert('Failed to insert record');</script>";
 }

echo '<meta http-equiv="refresh" content="0.5; URL=index.php">';
 }
?>
