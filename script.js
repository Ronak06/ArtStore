var artmodal = document.getElementById("firstArtWork");
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
  document.getElementById("artisttitle").innerHTML = 'Famous Peices';
  document.getElementById("pricetitle").innerHTML = '';
  document.getElementById("genretitle").innerHTML = '';
  document.getElementById("price").innerHTML = '';
  document.getElementById("genre").innerHTML = '';
}
function grantWood()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Grant Wood";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Artists/GrantWood.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = 'February 13, 1891';
  document.getElementById("type").innerHTML = 'February 12, 1942';
  document.getElementById("dimention").innerHTML = 'America';
  document.getElementById("location").innerHTML = 'Gothic';
  document.getElementById("artist").innerHTML = 'American Gothic, Woman with Plants, Young Corn';
  $(artmodal).modal();

}
function leonardo()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Leonardo da Vinci";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Artists/LeonardodaVinci.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = 'April 15, 1452';
  document.getElementById("type").innerHTML = 'May 2, 1519';
  document.getElementById("dimention").innerHTML = 'Anchiano, Italy';
  document.getElementById("location").innerHTML = 'Renaissance';
  document.getElementById("artist").innerHTML = 'Mona Lisa, The Last Supper, Vitruian Man';
  $(artmodal).modal();
}
function vincent()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Vincent Van Gogh";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Artists/VincentvanGogh.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = 'March 30, 1853';
  document.getElementById("type").innerHTML = 'July 29, 1890';
  document.getElementById("dimention").innerHTML = 'France';
  document.getElementById("location").innerHTML = 'Western Art';
  document.getElementById("artist").innerHTML = 'The Starry Night, Irises, The Potato Eaters';
  $(artmodal).modal();
}
function dali()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Salvador Dali";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Artists/SalvadorDali.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = ' May 11, 1904';
  document.getElementById("type").innerHTML = 'January 23, 1989';
  document.getElementById("dimention").innerHTML = 'Figueres, Spain';
  document.getElementById("location").innerHTML = 'Surrealism, Cubism, Modern Art';
  document.getElementById("artist").innerHTML = 'The Persistence of Memory, The Burning Giraffe, The Great Masturbator';
  $(artmodal).modal();
}
function picasso()
{
  artistCase();
  document.getElementById("modalHeader").innerHTML = "Pablo Picasso";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/Artists/PabloPicasso.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = ' October 25, 1881';
  document.getElementById("type").innerHTML = 'April 8, 1973';
  document.getElementById("dimention").innerHTML = 'Málaga, Spain';
  document.getElementById("location").innerHTML = 'Surrealism, Cubism, Modern Art';
  document.getElementById("artist").innerHTML = 'Guernica, The Old Guitarist, Chicago Picasso';
  $(artmodal).modal();
}
function monaLisa()
{
  //artmodal.img = "Images/monalisa.jpg";
  paintingCase();
  document.getElementById("modalHeader").innerHTML = "Mona Lisa";
  document.getElementById("modalBody").innerHTML = '<img src=\'Images/ArtWork/monalisa.jpg\' height=\'400\' width=\'300\'/>';
  document.getElementById("date").innerHTML = '1503';
  document.getElementById("type").innerHTML = 'Oil';
  document.getElementById("dimention").innerHTML = '77 X 53 cm';
  document.getElementById("location").innerHTML = 'The Louvre';
  document.getElementById("artist").innerHTML = 'Leonardo da Vinci';
  document.getElementById("price").innerHTML = '620 million';
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
  document.getElementById("price").innerHTML = '620 million';
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
  document.getElementById("price").innerHTML = '620 million';
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
  document.getElementById("price").innerHTML = '620 million';
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
  document.getElementById("price").innerHTML = '620 million';
  document.getElementById("genre").innerHTML = 'Surrealism';
  $(artmodal).modal();
}
