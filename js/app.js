 // Utils to manage and correct user input
 function ucFirst(str) {
     if (str.length > 0) {
         return str[0].toUpperCase() + str.substring(1);
     } else {
         return str;
     }
 }

 // THIS FUNCTION AIMS TO HIDE THE ENTIRE BEER_LIST
 displayText = (value) => {
     if (value == false) {
         let allBeers = document.getElementById("allBeers");
         let oneBeer = document.getElementById("oneBeer");
         document.getElementById("beersTable").removeChild(allBeers);
     }

     if (value == true) {
         alert("merci d'entrer un nom de bière");
         window.location.reload();
     }
 }

 search = (query) => {
     //get the user Input
     let input = document.querySelector(".form-control");

     //request to JSON Data
     let myRequest = new XMLHttpRequest();
     query = input.value;
     myRequest.open('GET', '../api/search.php?q=' + query);
     myRequest.responseType = "json";
     myRequest.send(null);
     myRequest.onreadystatechange = function () {

         //data management
         if (myRequest.readyState === 4) {
             let authorizedNames = myRequest.response;
             let authorizedNamesArray = [];
             let beerName;

             if (query != "") {
                 displayText(false);

                 //get and store all BEER_NAMES in an array
                 for (let name in authorizedNames) {
                     let elt = authorizedNames[name];
                     beerName = elt.BEER_NAME;
                     authorizedNamesArray.push(beerName);

                     //display data, depending on user input
                     let id = document.querySelector(".id");
                     id.textContent = elt.BEER_ID;
                     let Bname = document.querySelector(".name");
                     Bname.textContent = beerName;
                     let TagLine = document.querySelector(".tagline");
                     TagLine.textContent = elt.BEER_TAGLINE;
                     let price = document.querySelector(".price");
                     price.textContent = elt.BEER_PRICE;
                     let picture = document.querySelector(".table__img");
                     picture.src = elt.BEER_PICTURE;

                 }
                 //if user do not fill the search input but still search
             } else if (query == "") {
                 displayText(true);
             }
         }

     }

 }