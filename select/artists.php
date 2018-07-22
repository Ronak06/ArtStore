<?php
 if(isset($_POST["artist_id"]))
 {
      $output = '';
      $connect = mysqli_connect('localhost','root','','cps630');
      $query = "SELECT * FROM Artists WHERE ArtistID = '".$_POST["artist_id"]."'";
      $result = mysqli_query($connect, $query);
      $output .= '
      <div class="table-responsive">
      <table "width:100%">';
      while($row = mysqli_fetch_array($result))
      {
        $output .= '

        <td width="40%"> <img src=\'' . $row["PicturePath"] . '\' height=\'400\' width=\'300\'/></td>
        <td height = "100%">
           <table height:"100%"; width="90%";>

               <tr>
                    <th height="57"><label>Name</label></th>
                    <td>'.$row["ArtistName"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Date of Birth</label></th>
                    <td>'.$row["DateofBirth"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Date of Death</label></th>
                    <td>'.$row["DateofDeath"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Place of Living</label></th>
                    <td>'.$row["PlaceofLiving"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Genre of Painting</label></th>
                    <td>'.$row["PaintingGenre"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Famous Pieces</label></th>
                    <td>'.$row["FamousPieces"].'</td>
               </tr>
                ';
      }
      $output .= "</table></td></table></div>";
      echo $output;
 }
 ?>
