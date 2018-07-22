var artmodal = document.getElementById("ArtWorks");
var cartmodal = document.getElementById("cart");
var checkout = document.getElementById("shipping");
var final = document.getElementById("final");

function cart()
{
  $(cartmodal).modal();
}

function paintingCase()
{
  document.getElementById("datetitle").innerHTML = 'Date';
  document.getElementById("typetitle").innerHTML = 'Type';
  document.getElementById("dimensionstitle").innerHTML = 'Dimensions';
  document.getElementById("locationtitle").innerHTML = 'Location';
  document.getElementById("artisttitle").innerHTML = 'Artist';
  document.getElementById("pricetitle").innerHTML = 'Price';
  document.getElementById("genretitle").innerHTML = 'Genre';
}

function artistCase()
{
  document.getElementById("datetitle").innerHTML = 'Date of Birth';
  document.getElementById("typetitle").innerHTML = 'Date of Death';
  document.getElementById("dimensionstitle").innerHTML = 'Place of Living';
  document.getElementById("locationtitle").innerHTML = 'Genre of Painting';
  document.getElementById("artisttitle").innerHTML = 'Famous Pieces';
  document.getElementById("pricetitle").innerHTML = '';
  document.getElementById("genretitle").innerHTML = '';
  document.getElementById("price").innerHTML = '';
  document.getElementById("genre").innerHTML = '';
}

function museumCase()
{
  document.getElementById("datetitle").innerHTML = 'Date of Establishing';
  document.getElementById("typetitle").innerHTML = 'Location and Address';
  document.getElementById("dimensionstitle").innerHTML = 'Architects';
  document.getElementById("locationtitle").innerHTML = 'History';
  document.getElementById("artisttitle").innerHTML = 'Famous Artworks';
  document.getElementById("pricetitle").innerHTML = '';
  document.getElementById("genretitle").innerHTML = '';
  document.getElementById("price").innerHTML = '';
  document.getElementById("genre").innerHTML = '';
}

function grantWood()
{
  artistCase();
  $(artmodal).modal();
}
function leonardo()
{
  artistCase();
  $(artmodal).modal();
}
function vincent()
{
  artistCase();
  $(artmodal).modal();
}
function dali()
{
  artistCase();
  $(artmodal).modal();
}
function picasso()
{
  artistCase();
  $(artmodal).modal();
}

function monaLisa()
{
  paintingCase();
  $(artmodal).modal();
}
function americangothic()
{
  paintingCase();
  $(artmodal).modal();
}
function starrynight()
{
  paintingCase();
  $(artmodal).modal();
}

function thepersistenceofmemory()
{
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "The Persistence Of Memory";
  document.getElementById("modalBody").innerHTML =
  '<img src=\'Images/ArtWork/thepersistenceofmemory.png\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1931';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimension").innerHTML = '24 X 33 cm';
  document.getElementById("location").innerHTML = 'Museum of Modern Art';
  document.getElementById("artist").innerHTML = 'Salvador Dali';
  document.getElementById("price").innerHTML = '150.00';
  document.getElementById("genre").innerHTML = 'Surrealism';
  $(artmodal).modal();
}
function guernica()
{
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "Guernica";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/ArtWork/guernica.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1937';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimension").innerHTML = '3.49 X 7.7 m';
  document.getElementById("location").innerHTML = 'Museo Nacional Centro de Arte Reina Sofía';
  document.getElementById("artist").innerHTML = 'Pablo Picasso';
  document.getElementById("price").innerHTML = '100.00';
  document.getElementById("genre").innerHTML = 'Surrealism';
  $(artmodal).modal();
}

function smithsonian()
{
  museumCase();
  document.getElementById("modalHeader").innerHTML = "Smithsonian American Art Museum";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Museums/smithsonian.jpg\' height=\'200\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1829';
  document.getElementById("type").innerHTML = 'F St NW & 8th St NW, Washington, DC 20004, USA';
  document.getElementById("dimension").innerHTML = 'James Renwick Jr';
  document.getElementById("location").innerHTML = 'The Smithsonian Institute today has 19 museums and galleries, nine research facilities, and the National Zoological Park, making it the largest museum and research center in the world.';
  document.getElementById("artist").innerHTML = 'Aurora Borealis, Elizabeth Winthrop Chanler (Mrs. John Jay Chapman), Stevenson Memorial';
  $(artmodal).modal();
}

function louvre()
{
  museumCase();
  document.getElementById("modalHeader").innerHTML = "The Louvre";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Museums/thelouvre.jpg\' height=\'200\' width=\'300\'/>';
  document.getElementById("date").innerHTML = 'August 10, 1793';
  document.getElementById("type").innerHTML = 'Rue de Rivoli, 75001 Paris, France';
  document.getElementById("dimension").innerHTML = 'Pierre Lescot, Hector Lefuel, Louis Visconti, Louis Le Vau';
  document.getElementById("location").innerHTML = 'The Louvre was built in 1190 as a defense against Viking raids.';
  document.getElementById("artist").innerHTML = 'Mona Lisa, Venus de Milo, Winged Victory of Samothrace';
  $(artmodal).modal();
}

function acropolis()
{
  museumCase();
  document.getElementById("modalHeader").innerHTML = "Old Acropolis Museum";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Museums/acropolis.jpeg\' height=\'200\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1865';
  document.getElementById("type").innerHTML = 'Ethniki Odos 1 9, Athina 106 74, Greece';
  document.getElementById("dimension").innerHTML = 'Panagis Kalkos';
  document.getElementById("location").innerHTML = '';
  document.getElementById("artist").innerHTML = '';
  $(artmodal).modal();
}

function museonacional()
{
  museumCase();
  document.getElementById("modalHeader").innerHTML = "Museo Nacional Centro de Arte Reina Sofía";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Museums/museonacionalcentro.jpg\' height=\'200\' width=\'300\'/>';
  document.getElementById("date").innerHTML = 'September 10, 1992';
  document.getElementById("type").innerHTML = 'Calle de Santa Isabel, 52, 28012 Madrid, Spain';
  document.getElementById("dimension").innerHTML = 'Jean Nouvel, Francesco Sabatini, José de Hermosilla';
  document.getElementById("location").innerHTML = 'The building functioned as the Centro del Arte (Art Center) from 1986 until established as the Museo Nacional Centro de Arte Reina Sofía in 1988.';
  document.getElementById("artist").innerHTML = 'Guernica, Portrait of Josette Gris, The Bottle of Anís del Mono';
  $(artmodal).modal();
}

function prado()
{
  museumCase();
  document.getElementById("modalHeader").innerHTML = "Museo del Prado";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Museums/prado.jpg\' height=\'200\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1819';
  document.getElementById("type").innerHTML = 'Paseo del Prado, s/n, 28014 Madrid, Spain';
  document.getElementById("dimension").innerHTML = 'Rafael Moneo, Juan de Villanueva';
  document.getElementById("location").innerHTML = 'In 1981, Pablo Picasso\'s (1937) was added to the Prado\'s collection.';
  document.getElementById("artist").innerHTML = 'Las Meninas, The Garden of Earthly Delights, The Third of May 1808';
  $(artmodal).modal();
}

$('.minus-btn1').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());
        var $price = $this.closest('div').find("span[class='total-price']");
        //var $price = $("span[name='price']");
        var pri = parseInt($price.attr("value"));
        //alert(pri);
    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}
        $input.val(value);
        $price.html("$"+(value*pri));

    	});

    	$('.plus-btn1').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find("input[name='name']");
    		var value = parseInt($input.val());
        var $price = $this.closest("div").find("span[name='cartp']");
        var pri = parseInt($price.attr("value"));
    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}
    		$input.val(value);
        $price.html("$"+(value*pri));
    	});

      $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });

$('.check').on('click', function(e) {
  e.preventDefault();
  $(cartmodal).modal("hide");
  $(checkout).modal();
});

$(document).ready(function() {
  $("form").submit(function() {

    return false;
  })
});
$('.invoice').on('click', function(e) {
  var total = 0;
  var tax = 0;
$('span[name="cartp"]').each(function(index,item){
  var temp = parseInt($(item).html().substring(1));
  total += temp;
});
var beforeTax = total;
tax = (total*0.13).toFixed(2);
total = (total*1.13).toFixed(2);
$('span[id="total"]').html("$"+beforeTax);
$('span[id="tax"]').html("$"+tax);
$('span[id="sub"]').html("$"+total);
  e.preventDefault();
  $(checkout).modal("hide");
  $(final).modal();
});

$(document).ready(function(){

   $("#finalinvoice").click(function(e){
    e.preventDefault();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var address = $("#address").val();
    var postal = $("#postalc").val();
   var city = $("#city").val();
   var email = $("#email").val();
   var phone = $("#phone").val();


        $("#showfname").text(fname);
        $("#showlname").text(lname);
        $("#showaddress").text(address);
	$("#showpostal").text(postal);
        $("#showcity").text(city);
        $("#showemail").text(email);
        $("#showphone").text(phone);
        $("#final").modal("show");
   });

});
