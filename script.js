var artmodal = document.getElementById("ArtWorks");
var artistmodal = document.getElementById("Artists");

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
  document.getElementById("dateofbirth").innerHTML = 'Date of Birth';
  document.getElementById("dateofdeath").innerHTML = 'Date of Death';
  document.getElementById("placeofliving").innerHTML = 'Place of Living';
  document.getElementById("paintinggenre").innerHTML = 'Genre of Painting';
  document.getElementById("famouspieces").innerHTML = 'Famous Pieces';
}
function grantWood()
{
  artistCase();
  document.getElementById("modalHeader1").innerHTML = "Grant Wood";
  document.getElementById("modalBody1").innerHTML = '<img src=\'Images/Artists/GrantWood.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("datebirth").innerHTML = 'February 13, 1891';
  document.getElementById("datedeath").innerHTML = 'February 12, 1942';
  document.getElementById("placeliving").innerHTML = 'Iowa City, Iowa, United States';
  document.getElementById("genrepainting").innerHTML = 'Gothic';
  document.getElementById("famepieces").innerHTML = 'American Gothic, Woman with Plants, Young Corn';
  $(artistmodal).modal();

}
function leonardo()
{
  artistCase();
  document.getElementById("modalHeader1").innerHTML = "Leonardo da Vinci";
  document.getElementById("modalBody1").innerHTML = '<img src=\'Images/Artists/LeonardodaVinci.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("datebirth").innerHTML = 'April 15, 1452';
  document.getElementById("datedeath").innerHTML = 'May 2, 1519';
  document.getElementById("placeliving").innerHTML = 'Clos Lucé, Amboise, France';
  document.getElementById("genrepainting").innerHTML = 'Renaissance';
  document.getElementById("famepieces").innerHTML = 'Mona Lisa, The Last Supper, Vitruian Man';
  $(artistmodal).modal();
}
function vincent()
{
  artistCase();
  document.getElementById("modalHeader1").innerHTML = "Vincent Van Gogh";
  document.getElementById("modalBody1").innerHTML = '<img src=\'Images/Artists/VincentvanGogh.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("datebirth").innerHTML = 'March 30, 1853';
  document.getElementById("datedeath").innerHTML = 'July 29, 1890';
  document.getElementById("placeliving").innerHTML = 'Auvers-sur-Oise, France';
  document.getElementById("genrepainting").innerHTML = 'Western Art';
  document.getElementById("famepieces").innerHTML = 'The Starry Night, Irises, The Potato Eaters';
  $(artistmodal).modal();
}
function dali()
{
  artistCase();
  document.getElementById("modalHeader1").innerHTML = "Salvador Dali";
  document.getElementById("modalBody1").innerHTML = '<img src=\'Images/Artists/SalvadorDali.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("datebirth").innerHTML = ' May 11, 1904';
  document.getElementById("datedeath").innerHTML = 'January 23, 1989';
  document.getElementById("placeliving").innerHTML = 'Figueres, Spain';
  document.getElementById("genrepainting").innerHTML = 'Surrealism, Cubism, Modern Art';
  document.getElementById("famepieces").innerHTML = 'The Persistence of Memory, The Burning Giraffe, The Great Masturbator';
  $(artistmodal).modal();
}
function picasso()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Pablo Picasso";
  document.getElementById("modalBody1").innerHTML = '<img src=\'Images/Artists/PabloPicasso.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("datebirth").innerHTML = ' October 25, 1881';
  document.getElementById("datedeath").innerHTML = 'April 8, 1973';
  document.getElementById("placeliving").innerHTML = 'Mougins, France';
  document.getElementById("genrepainting").innerHTML = 'Surrealism, Cubism, Modern Art';
  document.getElementById("famepieces").innerHTML = 'Guernica, The Old Guitarist, Chicago Picasso';
  $(artistmodal).modal();
}
function monaLisa()
{
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "Mona Lisa";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/ArtWork/monalisa.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1503';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimention").innerHTML = '77 X 53 cm';
  document.getElementById("location").innerHTML = 'The Louvre';
  document.getElementById("artist").innerHTML = 'Leonardo da Vinci';
  document.getElementById("price").innerHTML = '$225.00';
  document.getElementById("genre").innerHTML = 'Portrait';
  $(artmodal).modal();
}
function americangothic()
{
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "American Gothic";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/ArtWork/americangothic.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1930';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimention").innerHTML = '74 X 62 cm';
  document.getElementById("location").innerHTML = 'Royal Academy of Arts';
  document.getElementById("artist").innerHTML = 'Grant Wood';
  document.getElementById("price").innerHTML = '$103.50';
  document.getElementById("genre").innerHTML = 'Portrait';
  $(artmodal).modal();
}
function starrynight()
{
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "Starry Night";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/ArtWork/starrynight.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1889';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimention").innerHTML = '74 X 92 cm';
  document.getElementById("location").innerHTML = 'Museum of Modern Art';
  document.getElementById("artist").innerHTML = 'Vincent van Gogh';
  document.getElementById("price").innerHTML = '$200.00';
  document.getElementById("genre").innerHTML = 'Modern';
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
  document.getElementById("dimention").innerHTML = '24 X 33 cm';
  document.getElementById("location").innerHTML = 'Museum of Modern Art';
  document.getElementById("artist").innerHTML = 'Salvador Dali';
  document.getElementById("price").innerHTML = '$150.00';
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
  document.getElementById("dimention").innerHTML = '3.49 X 7.7 m';
  document.getElementById("location").innerHTML = 'Paris';
  document.getElementById("artist").innerHTML = 'Pablo Picasso';
  document.getElementById("price").innerHTML = '$100.00';
  document.getElementById("genre").innerHTML = 'Surrealism';
  $(artmodal).modal();
}
