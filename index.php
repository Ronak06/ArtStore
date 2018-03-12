<!DOCTYPE html>
<html lang="en">
<head>
  <title>Art Gallery Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
  <link rel="stylesheet" href="cssfile.css">
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
                <a class="glyphicon glyphicon-shopping-cart" href="#" onclick="return cart()"></a>
        </li>
      </ul>

      <div class="modal fade" id="ArtWorks" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h1 id= "modalHeader" class="modal-title"></h1>
            </div>
            <div align="center" id="imageinfo" class="modal-body">
              <table "width:100%">
                <td id ="modalBody"; width="40%"></td>
                <td height = "100%">
                  <table height:"100%"; width="90%";>
                    <tr>
                      <th id="datetitle" height="57">Date</th>
                      <td id="date"></td>
                    </tr>
                    <tr>
                      <th id="typetitle" height="57">Type</th>
                      <td id="type"></td>
                    </tr>
                    <tr>
                      <th id="dimensionstitle" height="57">Dimensions</th>
                      <td id="dimension"></td>
                    </tr>
                    <tr>
                      <th id="locationtitle" height="57">Location</th>
                      <td id="location"></td>
                    </tr>
                    <tr>
                      <th id="artisttitle" height="57">Artist</th>
                      <td id="artist"></td>
                    </tr>
                    <tr>
                      <th id="pricetitle" height="57">Price</th>
                      <td id="price"></td>
                    </tr>
                    <tr>
                      <th id="genretitle" height="57">Genre</th>
                      <td id="genre"></td>
                    </tr>
                  </table>
                </td>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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
                    <input type="text" name="name" value="1">
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
                <input type="text" name="name" value="1">
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
                <input type="text" name="name" value="1">
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
                <input type="text" name="name" value="1">
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
                <input type="text" name="name" value="1">
                <button class="minus-btn1" type="button" name="button">
                  <img src="minus.svg" alt="" />
                </button>
              </span>
              <span name="cartp" class="total-price" value="200" >$200</span>
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

                    		<form action="index.php" class="gurkirat" method="post">
                    			<label><b>First Name</b></label>
                    			<br />
                    		    <input type="text" placeholder="Enter First Name" name="fname" required>
                    			<br /><br />
                    			<label><b>Last Name</b></label>
                    			<br />
                    		    <input type="text" placeholder="Enter Last Name" name="lname" required>
                    			<br /><br />
                    			<label><b>Address</b></label>
                    			<br />
                    		    <input type="address" placeholder="Enter Address" name="address" required>
                    			<br /><br />
                          <label><b>Postal Code</b></label>
                    			<br />
                    		    <input type="postalcode" placeholder="Enter Postal Code" name="postalcode" pattern="[a-zA-Z][0-9][a-zA-Z][0-9][a-zA-Z][0-9]" required>
                    			<br /><br />
                          <label><b>City</b></label>
                    			<br />
                    		    <input type="city" placeholder="Enter City" name="city" required>
                    			<br /><br />
                    		    <label><b>Email</b></label>
                    			<br />
                    		    <input type="email" placeholder="Enter Email" name="email" required>
                    			<br /><br />
                    		    <label><b>Phone Number</b></label>
                    			<br />
                    		    <input type="phone" placeholder="Enter Phone Number" name="phone" pattern="[0-9]{10}" required>
                            <br /><br />
                            <div class="modal-footer">
                            <input type="submit" class="btn btn-default">
                            <button type="button" class="btn btn-default checking">Checking</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                    		</form>
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
                  <h3 id= "modalHeader"><strong>Final</strong></h3>
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
                                        <div name="manrag">
                                        Welcome <?php echo $_POST["fname"]; ?><br>
                                        Your Last Name is: <?php echo $_POST["lname"]; ?><br>
                                        Your Address is: <?php echo $_POST["address"]; ?><br>
                                        Your Postal Code is: <?php echo $_POST["postalcode"]; ?><br>
                                        Your City is: <?php echo $_POST["city"]; ?><br>
                                        Your Email Address is: <?php echo $_POST["email"]; ?><br>
                                        Your Phone Number is: <?php echo $_POST["phone"]; ?>
                                      </div>
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
      <a href="#" onclick="return monaLisa()">Mona Lisa</a>
      <a href="#" onClick="return americangothic()">American Gothic</a>
      <a href="#" onClick="return starrynight()">Starry Night</a>
      <a href="#" onClick="return thepersistenceofmemory()">The Persistence Of Memory</a>
      <a href="#" onClick="return guernica()">Guernica</a>
    </div>
  </div>
<br /><br />
<h4>View an Artist:</h4>
  <div class="dropdown">
    <button class="dropbtn">Artists</button>
    <div class="dropdown-content">
      <a href="#" onclick="return grantWood()">Grant Wood</a>
      <a href="#" onclick="return leonardo()">Leonardo da Vinci</a>
      <a href="#" onclick="return vincent()">Vincent Van Gogh</a>
      <a href="#" onclick="return dali()">Salvador Dali</a>
      <a href="#" onclick="return picasso()">Pablo Picasso</a>
    </div>
  </div>
<br /><br />
<h4>View a Museum:</h4>
  <div class="dropdown">
    <button class="dropbtn">Museums</button>
    <div class="dropdown-content">
      <a href="#">Smithsonian Institution</a>
      <a href="#">The Lourve</a>
      <a href="#">Old Acropolis Museum</a>
      <a href="#">British Museum</a>
      <a href="#">The Prado</a>
    </div>
  </div>

  <h1> <strong> Our Team (Group 39)</strong> </h1>
  <h2> <strong> Manrag Nagra </strong> - Student Number: 500693122 </h2>
  <br />
  <h2> <strong> Ronak Patel </strong> - Student Number: 500702320</h2>
  <br />
  <h2> <strong> Gurkirat Singh </strong> - Student Number: 500695229 </h2>
  <br />

  <footer>Copyright &copy; by Manrag/Ronak/Gurkirat</footer>
  <script type="text/javascript" src="script.js"></script>

</body>
</html>
