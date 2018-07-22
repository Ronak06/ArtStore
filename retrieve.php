<?php
$connection = mysqli_connect('localhost','root','','cps630');
$option1 = $_POST['type'];
$id = $_POST['id'];

if($option1 == "Artwork"){

  $query = "SELECT * FROM ArtWorks WHERE ArtWorkID = '". $id ."'";
  $result = mysqli_query($connection, $query);
  while($row = mysqli_fetch_array($result))
  {
  ?>
  <form class="addArt" name="addForm" action="modifyArtwork.php" method="post">
     <label><b>Artwork Name</b></label>
     <br />
     <input type="text" name="ArtworkName" value="<?php echo $row["ArtworkName"] ?>" placeholder="Enter Artwork Name" required>
     <br />
     <label><b>Date Of Production</b></label>
     <br />
     <input type="text" name="DateofProduction" value="<?php echo $row["DateofProduction"] ?>" placeholder="Enter Date Of Production" required>
     <br />
     <label><b>Type</b></label>
     <br />
     <input type="text" name="TypeofPainting" value="<?php echo $row["TypeofPainting"] ?>" placeholder="Enter Type of Painting" required>
     <br />
     <label><b>Dimensions</b></label>
     <br />
     <input type="text" name="Dimensions" value="<?php echo $row["Dimensions"] ?>" placeholder="(i.e. 50cm X 10cm)" required>
     <br />
     <label><b>Painting Location</b></label>
     <br />
     <input type="text" name="PaintingLocation" value="<?php echo $row["PaintingLocation"] ?>" placeholder="Enter Painting Location" required>
     <br />
     <label><b>Genre</b></label>
     <br />
     <input type="text" name="Genre" value="<?php echo $row["Genre"] ?>" placeholder="Enter Genre" required>
     <br />
     <label><b>Artist</b></label>
     <br />
     <input type="text" name="Artist" value="<?php echo $row["Artist"] ?>" placeholder="Enter Artist" required>
     <br />
     <label><b>Price</b></label>
     <br />
     <input type="text" name="Price" value="<?php echo $row["Price"] ?>" placeholder="Enter Price" required>
     <br />
     <label><b>Artwork ID</b></label>
     <br />
     <input type="text" name="id" value="<?php echo $id ?>" readonly>
     <br />
     <label><b>Modify ArtWork Picture</b></label>
     <br />
     <input id="inputfile" style="text-align="center"" type="file" value="<?php echo $row["PicturePath"] ?>" name="PicturePath" accept="image/jpg" >
     <br />
     <input type="submit" value="Modify" name="submit">
   </form>
 <?php }
   ?>
     <?php
}

elseif($option1 == "Artist"){
  $query = "SELECT * FROM Artists WHERE ArtistID = '". $id ."'";
  $result = mysqli_query($connection, $query);
  while($row = mysqli_fetch_array($result))
  {
  ?>
  <form class="add" action="modifyArtist.php" method="post">
    <label><b>Artist Name</b></label>
    <br />
    <input type="text" name="ArtistName" value="<?php echo $row["ArtistName"] ?>" placeholder="Enter Artist Name" required>
    <br /><br />
    <label><b>Date of Birth</b></label>
    <br />
    <input type="text" name="DateOfBirth" value="<?php echo $row["DateofBirth"] ?>" placeholder="Enter Date of Birth" required>
    <br /><br />
    <label><b>Date of Death</b></label>
    <br />
    <input type="text" name="DateOfDeath" value="<?php echo $row["DateofDeath"] ?>" placeholder="Enter Date of Death" required>
    <br /><br />
    <label><b>Place of Living</b></label>
    <br />
    <input type="text" name="PlaceofLiving" value="<?php echo $row["PlaceofLiving"] ?>" placeholder="Enter Place of Living" required>
    <br /><br />
    <label><b>Genre of Painting</b></label>
    <br />
    <input type="text" name="PaintingGenre" value="<?php echo $row["PaintingGenre"] ?>" placeholder="Enter Painting Genre" required>
    <br /><br />
    <label><b>Famous Pieces</b></label>
    <br />
    <input type="text" name="FamousPieces" value="<?php echo $row["FamousPieces"] ?>" placeholder="Enter Famous Pieces" required>
    <br /><br />
    <label><b>Artwork ID</b></label>
    <br />
    <input type="text" name="id" value="<?php echo $id ?>" readonly>
    <br /><br />
    <label><b>Modify Artist Picture</b></label>
    <br />
    <input id="inputfile" style="text-align="center"" type="file" value="<?php echo $row["PicturePath"] ?>" name="PicturePath" accept="image/jpg">
    <br /> <br />
    <input type="submit" value="Modify" name="submit">
  </form>
  <?php
}
}
else{
  $query = "SELECT * FROM Museums WHERE MuseumID = '". $id ."'";
  $result = mysqli_query($connection, $query);
  while($row = mysqli_fetch_array($result))
  {
  ?>
  <form class="add" action="modifyMuseum.php" method="post">
    <label><b>Museum Name</b></label>
    <br />
    <input type="text" name="MuseumName" value="<?php echo $row["MuseumName"] ?>" placeholder="Enter Museum Name" required>
    <br /><br />
    <label><b>Date of Establishment</b></label>
    <br />
    <input type="text" name="DateOfEstablishing" value="<?php echo $row["DateofEstablishing"] ?>" placeholder="Enter Date of Establishment" required>
    <br /><br />
    <label><b>Location</b></label>
    <br />
    <input type="text" name="Location" value="<?php echo $row["Location"] ?>" placeholder="Enter Location" required>
    <br /><br />
    <label><b>Address</b></label>
    <br />
    <input type="text" name="Address" value="<?php echo $row["Address"] ?>" placeholder="Enter Address" required>
    <br /><br />
    <label><b>Architect(s)</b></label>
    <br />
    <input type="text" name="DesignerofMuseum" value="<?php echo $row["DesignerofMuseum"] ?>" placeholder="Enter Architect(s)" required>
    <br /><br />
    <label><b>History</b></label>
    <br />
    <input type="text" name="History" value="<?php echo $row["History"] ?>" placeholder="Enter History" required>
    <br /><br />
    <label><b>Famous Pieces</b></label>
    <br />
    <input type="text" name="FamousPieces" value="<?php echo $row["FamousPieces"] ?>" placeholder="Enter Famous Pieces" required>
    <br /><br />
    <label><b>Artwork ID</b></label>
    <br />
    <input type="text" name="id" value="<?php echo $id ?>" readonly>
    <br /><br />
    <label><b>Modify Museum Picture</b></label>
    <br />
    <input id="inputfile" style="text-align="center"" type="file" value="<?php echo $row["DateOfDeath"] ?>" name="PicturePath" accept="image/jpg">
    <br /><br />
    <input type="submit" value="Modiy" name="submit">
  </form>
  <?php
}
}
?>
