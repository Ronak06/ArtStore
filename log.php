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
  <script>
  $(document).ready(function(){
    open();
});
</script>
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
                                        First Name: <?php echo $_POST["fname"]; ?><br>
                                        Last Name: <?php echo $_POST["lname"]; ?><br>
                                        Address: <?php echo $_POST["address"]; ?><br>
                                        Postal Code: <?php echo $_POST["postalcode"]; ?><br>
                                        City: <?php echo $_POST["city"]; ?><br>
                                        Email Address: <?php echo $_POST["email"]; ?><br>
                                        Phone Number: <?php echo $_POST["phone"]; ?>
                                        </div>
                  <br />
              </div>
            </div>
              <button type="button" class="btn btn-default" onclick="goBack()">Close</button>
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
