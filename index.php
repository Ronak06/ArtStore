<?php
$connection = mysqli_connect('localhost','root','','cps630');

if(!$connection){
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>﻿

<!DOCTYPE html>
<html>
<head>
  <title>Art Gallery Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
  <link rel="stylesheet" href="ArtGallery.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="maintain_artwork()">Maintain</a>
        </li>
        <li class="nav-item">
                <a class="glyphicon glyphicon-shopping-cart" href="#" onclick="return cart()"></a>
        </li>
      </ul>

      <form action="" method="POST">
        <label>
          Search
          <input type="text" name="search">
        </label>
          <input type="submit" value="search">
      </form>

      <div id="dataModal" class="modal fade">
            <div class="modal-dialog">
                 <div class="modal-content">
                      <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Details</h4>
                      </div>
                      <div class="modal-body" id="employee_detail">
                      </div>
                      <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                 </div>
            </div>
       </div>

       <div id="maintainModal" class="modal fade">
             <div class="modal-dialog">
                  <div class="modal-content">
                       <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Maintain Mode</h4>
                       </div>
                       <div class="modal-body" id="maintain_modal">
                      <form name="myForm" class="class1">
                          <fieldset id="group1">
                            <h4> Choose one of the following: </h4>
                            <input type="radio" name="gallery" value="Artwork"> Artwork
                            <input type="radio" name="gallery" value="Artist"> Artist
                            <input type="radio" name="gallery" value="Museum"> Museum
                          </fieldset>

                          <fieldset id="group2">
                            <h4> What would you like to do? </h4>
                            <input type="radio" name="changeoption" value="Add"> Add
                            <input type="radio" name="changeoption" value="Modify"> Modify
                            <input type="radio" name="changeoption" value="Delete"> Delete
                          </fieldset>
                          <br />
                          <input type="submit">
                      </form>
                      <script>
                      $(document).ready(function(){
                          $('.class1').submit(function(event){
                          $('#maintainModal').modal('hide')
                          event.preventDefault();
                        var x = document.forms["myForm"]["gallery"].value;
                        var y = document.forms["myForm"]["changeoption"].value;
                        $.ajax({
                             url:"maintain.php",
                             method:"post",
                             data:{x:x,y:y},
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

                       </div>
                       <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       </div>
                  </div>
             </div>
        </div>


      <div class="modal fade" id="cart" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 id= "modalHeader" class="modal-title">Shopping Cart</h1>
              </div>

      <div class="item">
      <div class="buttons">
                  <span class="delete-btn"></span>
      </div>

        <div class="image">
          <img src="Images/ArtWork/guernica.jpg" height="100" width="100" alt="" />
        </div>

        <div class="description">
          <span>Guernica</span>
          <span>By: Pablo Picasso</span>
        </div>
            <div class="testclass">
                  <span class="quantity">
                    <button class="plus-btn1" type="button" name="button">
                      <img src="plus.svg" alt="" />
                    </button>
                    <input type="text" name="name" value="0">
                    <button class="minus-btn1" type="button" name="button">
                      <img src="minus.svg" alt="" />
                    </button>
                  </span>
                  <span name="cartp" class="total-price" value="100">$100</span>
          </div>
        </div>

                <!-- Product #2 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
        </div>

        <div class="image">
          <img src="Images/ArtWork/thepersistenceofmemory.png" height="100" width="100" alt="" />
        </div>

        <div class="description">
          <span>The Persistence of Memory</span>
          <span>By: Salvador Dali</span>
        </div>

        <div class="testclass">
              <span class="quantity">
                <button class="plus-btn1" type="button" name="button">
                  <img src="plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="0">
                <button class="minus-btn1" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </span>
              <span name="cartp" class="total-price"value="150">$150</span>
      </div>
      </div>

      <!-- Product #3 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
        </div>

        <div class="image">
          <img src="Images/ArtWork/americangothic.jpg" height="100" width="100" alt="" />
        </div>

        <div class="description">
          <span>American Gothic</span>
          <span>By: Grant Wood</span>
        </div>

        <div class="testclass">
              <span class="quantity">
                <button class="plus-btn1" type="button" name="button">
                  <img src="plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="0">
                <button class="minus-btn1" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </span>
              <span name="cartp" class="total-price"value="125">$125</span>
      </div>
      </div>
      <!-- Product #4 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
        </div>

        <div class="image">
          <img src="Images/ArtWork/monalisa.jpg" height="100" width="100" alt="" />
        </div>

        <div class="description">
          <span>Mona Lisa</span>
          <span>By: Leonardo da Vinci</span>
        </div>

        <div class="testclass">
              <span class="quantity">
                <button class="plus-btn1" type="button" name="button">
                  <img src="plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="0">
                <button class="minus-btn1" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </span>
              <span name ="cartp"class="total-price"value="225">$225</span>
      </div>
      </div>
      <!-- Product #5 -->
      <div class="item">
        <div class="buttons">
          <span class="delete-btn"></span>
        </div>

        <div class="image">
          <img src="Images/ArtWork/starrynight.jpg" height="100" width="100" alt="" />
        </div>

        <div class="description">
          <span>Starry Night</span>
          <span>By: Vincent van Gogh</span>
        </div>

        <div class="testclass">
              <span class="quantity">
                <button class="plus-btn1" type="button" name="button">
                  <img src="plus.svg" alt="" />
                </button>
                <input type="text" name="name" value="0">
                <button class="minus-btn1" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </span>
              <span name="cartp" class="total-price" value="200">$200</span>
      </div>
      </div>
      <div align="center" id="imageinfo" class="modal-body">
      <div class="modal-footer">
        <button type="button" class="btn btn-default check">Checkout</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
      <div class="modal fade" id="shipping" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 id= "modalHeader" class="modal-title"></h1>
            </div>
            <div align="center" id="imageinfo" class="modal-body">
              <div>
                         <h3 id= "modalHeader"><strong>Shipping Information</strong></h3>
                    		<br />

                    		 <label><b>First Name</b></label>
                            <br />
                            <input type="text" id="fname" placeholder="Enter First Name" name="fname" required>
                            <br /><br />
                            <label><b>Last Name</b></label>
                            <br />
                            <input type="text" id="lname" placeholder="Enter Last Name" name="lname" required>
                            <br /><br />
                            <label><b>Address</b></label>
                            <br />
                            <input type="text" id="address" placeholder="Enter Address" name="address" required>
                            <br /><br />
                          <label><b>Postal Code</b></label>
                    			<br />
                    		    <input type="text" id="postalc" placeholder="Enter Postal Code" name="postalcode" pattern="[a-zA-Z][0-9][a-zA-Z][0-9][a-zA-Z][0-9]" required>
                    			<br /><br />
                          <label><b>City</b></label>
                    			<br />
                    		    <input type="text" id="city" placeholder="Enter City" name="city" required>
                    			<br /><br />
                    		    <label><b>Email</b></label>
                    			<br />
                    		    <input type="text" id="email" placeholder="Enter Email" name="email" required>
                    			<br /><br />
                    		    <label><b>Phone Number</b></label>
                    			<br />
                    		    <input type="text" id="phone" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{10}" required>
                            <br /><br />
                            <div class="modal-footer">
                        <button type="button" id="finalinvoice" class="btn btn-default invoice" data-dismiss="modal">Final Invoice</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="final" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 id= "modalHeader" class="modal-title"></h1>
            </div>
            <div align="center" id="imageinfo" class="modal-body">
              <div>
                  <h3 id= "modalHeader"><strong>Final Invoice</strong></h3>
                  <div class="item">
                                        <div class="description">
                                          <span>Total</span>
                                          <span id='total'></span>
                                        </div>

                                        <div class="description">
                                          <span>Tax</span>
                                          <span id='tax'></span>
                                        </div>

                                        <div class="description">
                                          <span>Subtotal</span>
                                          <span id='sub'></span>
                                        </div>

                                        <br />
                                        <br />
                                        </div>
                                       <div class="invoice">
                                    First Name: <span id="showfname"></span><br />
                                    Last Name: <span id="showlname"></span><br />
                                    Address: <span id="showaddress"></span><br />
                                    Postal Code: <span id="showpostal"></span><br />
                                    City: <span id="showcity"></span><br />
                                    Email: <span id="showemail"></span><br />
                                    Phone: <span id="showphone"></span><br />
                                    </div>
                  <br />
              </div>
            </div>
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </nav>

  <br />
  <h4>View an Art Work:</h4>
  <div class="dropdown">
    <button class="dropbtn">Art Works</button>
    <div class="dropdown-content">

      <?php
      $sql = 'SELECT * FROM ArtWorks';
      $query = mysqli_query($connection, $sql);
          while($row = mysqli_fetch_array($query))
          {
?>
<input type="button " name="view" value="<?php echo $row["ArtworkName"]; ?>" id="<?php echo $row["ArtworkID"]; ?>" class="view_artwork" />
        <?php
      }
        ?>
    </div>
  </div>
  <br /><br />

<h4>View an Artist:</h4>
<div class="dropdown">
  <button class="dropbtn">Artists</button>
  <div class="dropdown-content">

    <?php
    $sql = 'SELECT * FROM Artists';
      $query = mysqli_query($connection, $sql);

        while($row = mysqli_fetch_array($query))
        {
?>
<input type="button " name="view" value="<?php echo $row["ArtistName"]; ?>" id="<?php echo $row["ArtistID"]; ?>" class="view_artist" />
      <?php
    }
      ?>
  </div>
</div>

  <br /><br />
<h4>View a Museum:</h4>
<div class="dropdown">
  <button class="dropbtn">Museums</button>
  <div class="dropdown-content">

    <?php
    $sql = 'SELECT * FROM Museums';
      $query = mysqli_query($connection, $sql);

        while($row = mysqli_fetch_array($query))
        {
?>
<input type="button " name="view" value="<?php echo $row["MuseumName"]; ?>" id="<?php echo $row["MuseumID"]; ?>" class="view_museum" />
      <?php
    }
      ?>
  </div>
</div>



  <?php
  $connection = mysqli_connect('localhost','root','','cps630');
  $output='';
  if(isset($_POST['search'])){
      $searchkey= $_POST['search'];
        if($searchkey!=""){
          $query = mysqli_query($connection,"SELECT ArtworkName,Price,Artist FROM ArtWorks
          WHERE ArtworkName LIKE '$searchkey'");

          $count = mysqli_num_rows($query);

              while($row=mysqli_fetch_array($query)){
                $fname=$row['ArtworkName'];
                $artprice=$row['Price'];
                $artistname=$row['Artist'];

                $output .=
                '<h4 style="text-align:center;"> You searched for ' .$fname. '</h4>
                <h4 style="text-align:center;"> The Artist of this ArtWork is: <strong>' . $artistname . ' </strong> and
                Price is: $ <strong>' . $artprice . '.00 </strong><br />
                You can find more information about <strong>' . $fname . ' </strong> under the Artworks dropdown menu </h4>';
                echo "<p>$output</p>";
              }
        }
        else{
          echo '<h4 style="text-align:center;">Search not found, Please enter a valid entry</h4>';
        }
      }

  ?>﻿
  <h1> <strong> Our Team (Group 39)</strong> </h1>
  <h2> <strong> Manrag Nagra </strong> - Student Number: 500693122 </h2>
  <br />
  <h2> <strong> Ronak Patel </strong> - Student Number: 500702320</h2>
  <br />
  <h2> <strong> Gurkirat Singh </strong> - Student Number: 500695229 </h2>
  <br />
  <footer>Copyright &copy; by Manrag/Ronak/Gurkirat</footer>
  <script type="text/javascript">$(document).ready(function(){
      $('.view_artwork').click(function(){
           var artwork_id = $(this).attr("id");
           $.ajax({
                url:"select/artworks.php",
                method:"post",
                data:{artwork_id:artwork_id},
                success:function(data){
                     $('#employee_detail').html(data);
                     $('#dataModal').modal("show");
                }
           });
      });
 });</script>

 <script type="text/javascript">$(document).ready(function(){
     $('.view_artist').click(function(){
          var artist_id = $(this).attr("id");
          $.ajax({
               url:"select/artists.php",
               method:"post",
               data:{artist_id:artist_id},
               success:function(data){
                    $('#employee_detail').html(data);
                    $('#dataModal').modal("show");
               }
          });
     });
});</script>

<script type="text/javascript">$(document).ready(function(){
    $('.view_museum').click(function(){
         var museum_id = $(this).attr("id");
         $.ajax({
              url:"select/museums.php",
              method:"post",
              data:{museum_id:museum_id},
              success:function(data){
                   $('#employee_detail').html(data);
                   $('#dataModal').modal("show");
              }
         });
    });
});</script>

<script>
function maintain_artwork() {
    $('#maintainModal').modal("show");
}
</script>

</body>
</html>
