<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cps630';

$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['submit']))
{
  $name   = $_POST['ArtistName'];
  $dateb  = $_POST['DateOfBirth'];
  $dated = $_POST['DateOfDeath'];
  $place   = $_POST['PlaceofLiving'];
  $genre   = $_POST['PaintingGenre'];
  $picture = 'Images/Artists/' . $_POST['PicturePath'];
  $famous   = $_POST['FamousPieces'];
  $id = $_POST['id'];

  $query = ("UPDATE Artists SET ArtistName='$name', DateofBirth='$dateb', DateofDeath='$dated', PlaceofLiving='$place', PaintingGenre='$genre', PicturePath='$picture', FamousPieces='$famous' WHERE ArtistID=$id");

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
