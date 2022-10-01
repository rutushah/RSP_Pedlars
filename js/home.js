var btn = document.getElementById("btn");
var getQuote = document.getElementById("getQuote");



btn.addEventListener("click",function(){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','https://type.fit/api/quotes');
    ourRequest.onload = function(){
        //console.log(ourRequest.responseText);
        var ourData = JSON.parse(ourRequest.responseText)
        //used to generate the random quote from api we use this line of Math.random
        var randomQuote = Math.floor(Math.random() * ourData.length);
        getQuote.innerHTML = `<p> ` + ourData[randomQuote].text + `</p>`;
          console.log(ourData[randomQuote]); 
    
    };

    ourRequest.send();
});



