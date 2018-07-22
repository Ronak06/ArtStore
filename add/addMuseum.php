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
    $datee  = $_POST['DateOfEstablishing'];
    $loc = $_POST['Location'];
    $address   = $_POST['Address'];
    $Design   = $_POST['DesignerofMuseum'];
    $History   = $_POST['History'];
    $Famous     = $_POST['FamousPieces'];
    $picture = 'Images/Museums/' . $_POST['PicturePath'];


     $query = ("INSERT INTO Museums (MuseumName, DateOfEstablishing, Location, Address, DesignerofMuseum, History, FamousPieces, PicturePath) VALUES ('$name', '$datee', '$loc', '$address', '$Design','$History', '$Famous', '$picture')");

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
