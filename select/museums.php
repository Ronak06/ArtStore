<?php
 if(isset($_POST["museum_id"]))
 {
      $output = '';
      $connect = mysqli_connect('localhost','root','','cps630');
      $query = "SELECT * FROM Museums WHERE MuseumID = '".$_POST["museum_id"]."'";
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
                    <td>'.$row["MuseumName"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Date of Establishment</label></th>
                    <td>'.$row["DateofEstablishing"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Location</label></th>
                    <td>'.$row["Location"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Address</label></th>
                    <td>'.$row["Address"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>Architect(s)</label></th>
                    <td>'.$row["DesignerofMuseum"].'</td>
               </tr>
               <tr>
                    <th height="57"><label>History</label></th>
                    <td>'.$row["History"].'</td>
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
