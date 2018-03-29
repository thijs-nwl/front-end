var provincie = ["Groningen", "Friesland", "Drenthe", "Overijssel", "Flevoland" , "Gelderland", "Utrecht", "Noord-Holland", "Zuid-Holland", "Zeeland", "Noord-Brabant", "Limburg"];
var firstName = ["Gavin","Dustin","Paris","Kayleigh","Yamilet","Aden","Keith","Aileen","Simon","Kaleb","Maggie","Adalynn","Luka","Trystan","Mathias","Azaria","Alfonso","Cooper","Mya","Cole","Frankie","Blake","Madeleine"];
var lastName = ["Keller","Stout","Porter","Wilson","Waller","Sparks","Acevedo","Huffman","Solis","Barajas","Bright","Frey","Preston","Woods","Olson","Wong","Wells","Stanley","Shields","Mccarthy","Landry","Ellison","Hunt","Villanueva"
,"Hart","Travis","Riddle","Stein","Clayton","Fitzgerald","Adkins","Shaw","Gallegos","Shields","Casey"];
var hobbys  = ["Aircraft Spotting","Acting","Astronomy","Beachcombing","Arts","Compose Music","Darts","Geocaching","Glowsticking","Knotting","Letterboxing","R/C Helicopters","Roleplaying","Shopping","Ziplining","Woodworking","Wine Making","Skeet Shooting","Racing Pigeons","Origami","Matchstick Modeling","Martial Arts","Juggling","Ghost Hunting"
, 'Gardening',"Gyotaku","Games","Frisbee Golf","Herping","Handwriting Analysis","Crochet","Cross-Stitch","Electronics","Dominoes","Fast cars","Coin Collecting","Casino Gambling","Canoeing","Chess","Piano","Parkour"];
var ages = ["74","67","84","27","94","37","26","87","23","28","4","35","48","9","2","14","49","45","47","61","55","46","19","53",
"49","69","66","48","59","43","68","65","30","21","67","34","24","18","44","64","45","51","83"];

function getdata(key){
  var rand = Math.floor((Math.random() * key.length));
  return key[rand];
}

function person(int){
  var person = {
    provincie: getdata(provincie),
    voornaam: getdata(firstName),
    achternaam: getdata(lastName),
    hobbies: getdata(hobbys),
    leeftijd: getdata(ages),
  }
  console.log(person, int)
}

for(var i=0; i<10000;i++){
  person(i)
}
