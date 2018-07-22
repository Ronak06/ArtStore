<?php
$connection = mysqli_connect('localhost','root','','cps630');

 $option1 = $_POST["x"];
 $option2 = $_POST["y"];

 if ($option2 == "Delete") {
   $sql = 'SELECT * FROM ' . $option1 . "s";
   $query = mysqli_query($connection, $sql);

?>
  <h3> Choose which one you would like to delete: </h3>
  <form class="delete" id="myForm2">
  <select id="testing">

<?php
   while($row = mysqli_fetch_array($query))
   {
     ?>

    <option value=<?php echo $row[$option1 . "ID"]?> id=<?php echo $option1 ?>> <?php echo $row[$option1 . "Name" ]?></option>
     <br />

     <?php
   }
   ?>
     </select>
     <br><br>
   <input type="submit" value="Delete">

   </form>

 <script>
 $(document).ready(function(){
     $('.delete').submit(function(event){
     $('#maintainModal').modal('hide')

     var e = document.getElementById("testing");
     var id = e.options[e.selectedIndex].value;
     var type = e.options[e.selectedIndex].id;

   $.ajax({
        url:"delete.php",
        method:"post",
        data:{id:id, type:type},

   });
 });
 });
 </script>


 <?php
}
elseif ($option2 == "Add"){

  if($option1 == "Artwork"){
    ?>
    <form class="addArt" name="addForm" action="add/addArtwork.php" method="post">
       <label><b>Artwork Name</b></label>
       <br />
       <input type="text" name="ArtworkName" placeholder="Enter Artwork Name" required>
       <br /><br />
       <label><b>Date Of Production</b></label>
       <br />
       <input type="text" name="DateofProduction" placeholder="Enter Date Of Production" required>
       <br /><br />
       <label><b>Type</b></label>
       <br />
       <input type="text" name="TypeofPainting" placeholder="Enter Type of Painting" required>
       <br /><br />
       <label><b>Dimensions</b></label>
       <br />
       <input type="text" name="Dimensions" placeholder="(i.e. 50cm X 10cm)" required>
       <br /><br />
       <label><b>Painting Location</b></label>
       <br />
       <input type="text" name="PaintingLocation" placeholder="Enter Painting Location" required>
       <br /><br />
       <label><b>Genre</b></label>
       <br />
       <input type="text" name="Genre" placeholder="Enter Genre" required>
       <br /><br />
       <label><b>Artist</b></label>
       <br />
       <input type="text" name="Artist" placeholder="Enter Artist" required>
       <br /><br />
       <label><b>Price</b></label>
       <br />
       <input type="text" name="Price" placeholder="Enter Price" required>
       <br /><br />
       <label><b>Add ArtWork Picture</b></label>
       <br />
       <input id="inputfile" style="text-align="center"" type="file" name="PicturePath" accept="image/jpg" required>
       <br /><br />
       <input type="submit" value="AddArt" name="submit">
     </form>
       <?php
  }

  elseif($option1 == "Artist"){
    ?>
    <form class="add" action="add/addArtist.php" method="post">
      <label><b>Artist Name</b></label>
      <br />
      <input type="text" name="ArtistName" placeholder="Enter Artist Name" required>
      <br /><br />
      <label><b>Date of Birth</b></label>
      <br />
      <input type="text" name="DateOfBirth" placeholder="Enter Date of Birth" required>
      <br /><br />
      <label><b>Date of Death</b></label>
      <br />
      <input type="text" name="DateOfDeath" placeholder="Enter Date of Death" required>
      <br /><br />
      <label><b>Place of Living</b></label>
      <br />
      <input type="text" name="PlaceofLiving" placeholder="Enter Place of Living" required>
      <br /><br />
      <label><b>Genre of Painting</b></label>
      <br />
      <input type="text" name="PaintingGenre" placeholder="Enter Painting Genre" required>
      <br /><br />
      <label><b>Famous Pieces</b></label>
      <br />
      <input type="text" name="FamousPieces" placeholder="Enter Famous Pieces" required>
      <br /><br />
      <label><b>Add Artist Picture</b></label>
      <br />
      <input id="inputfile" style="text-align="center"" type="file" name="PicturePath" accept="image/jpg" required>
      <br /> <br />
      <input type="submit" value="Add" name="submit">
    </form>
    <?php
  }
  else{
    ?>
    <form class="add" action="add/addMuseum.php" method="post">
      <label><b>Museum Name</b></label>
      <br />
      <input type="text" name="MuseumName" placeholder="Enter Museum Name" required>
      <br /><br />
      <label><b>Date of Establishment</b></label>
      <br />
      <input type="text" name="DateOfEstablishing" placeholder="Enter Date of Establishment" required>
      <br /><br />
      <label><b>Location</b></label>
      <br />
      <input type="text" name="Location" placeholder="Enter Location" required>
      <br /><br />
      <label><b>Address</b></label>
      <br />
      <input type="text" name="Address" placeholder="Enter Address" required>
      <br /><br />
      <label><b>Architect(s)</b></label>
      <br />
      <input type="text" name="DesignerofMuseum" placeholder="Enter Architect(s)" required>
      <br /><br />
      <label><b>History</b></label>
      <br />
      <input type="text" name="History" placeholder="Enter History" required>
      <br /><br />
      <label><b>Famous Pieces</b></label>
      <br />
      <input type="text" name="FamousPieces" placeholder="Enter Famous Pieces" required>
      <br /><br />
      <label><b>Add Museum Picture</b></label>
      <br />
      <input id="inputfile" style="text-align="center"" type="file" name="PicturePath" accept="image/jpg" required>
      <br /><br />
      <input type="submit" value="Add" name="submit">
    </form>
    <?php
  }
}
else{

  $sql = 'SELECT * FROM ' . $option1 . "s";
  $query = mysqli_query($connection, $sql);

?>
 <h3> Choose which one you would like to modify: </h3>
 <form class="modify" id="myForm3">
 <select id="testing2">

<?php
  while($row = mysqli_fetch_array($query))
  {
    ?>

   <option value=<?php echo $row[$option1 . "ID"]?> id=<?php echo $option1 ?>> <?php echo $row[$option1 . "Name" ]?></option>
    <br />

    <?php
  }
  ?>
    </select>
    <br><br>
  <input type="submit" value="Modify">

  </form>
  <script>
  $(document).ready(function(){
      $('.modify').submit(function(event){
      $('#maintainModal').modal('hide')
      event.preventDefault();
      var e = document.getElementById("testing2");
      var id = e.options[e.selectedIndex].value;
      var type = e.options[e.selectedIndex].id;

    $.ajax({
         url:"retrieve.php",
         method:"post",
         data:{id:id, type:type},
         success:function(data){
              $('#employee_detail').html(data);
              $('#dataModal').modal("show").on('hide', function() {
              $('#dataModal').modal('hide')
              });
         }

    });
  });
  });
  </script>

  <?php
}
?>
