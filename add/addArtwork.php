<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cps630';

$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['submit']))
{
    $name   = $_POST['ArtworkName'];
    $datep  = $_POST['DateofProduction'];
    $typep = $_POST['TypeofPainting'];
    $dim   = $_POST['Dimensions'];
    $location   = $_POST['PaintingLocation'];
    $artist   = $_POST['Artist'];
    $price     = $_POST['Price'];
    $picture = 'Images/ArtWork/' . $_POST['PicturePath'];
    $genre = $_POST['Genre'];


     $query = ("INSERT INTO ArtWorks (ArtworkName, DateofProduction, TypeofPainting, Dimensions, PaintingLocation, Artist, Price, PicturePath, Genre) VALUES ('$name', '$datep', '$typep', '$dim', '$location','$artist', '$price', '$picture', '$genre')");

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
