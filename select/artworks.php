<?php
 if(isset($_POST["artwork_id"]))
 {
      $output = '';
      $connect = mysqli_connect('localhost','root','','cps630');
      $query = "SELECT * FROM ArtWorks WHERE ArtWorkID = '".$_POST["artwork_id"]."'";
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
                    <td>'.$row["ArtworkName"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Date</label></th>
                    <td>'.$row["DateofProduction"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Type</label></th>
                    <td>'.$row["TypeofPainting"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Dimensions</label></th>
                    <td>'.$row["Dimensions"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Location</label></th>
                    <td>'.$row["PaintingLocation"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Genre</label></th>
                    <td>'.$row["Genre"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Artist</label></th>
                    <td>'.$row["Artist"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Price</label></th>
                    <td>$'.$row["Price"].'.00 </td>
               </tr>

                ';
      }
      $output .= "</table></td></table></div>";
      echo $output;
 }
 ?>
