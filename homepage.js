let image = document.getElementById("image");
let images = ['images/banner-homecare.webp', 'images/banner-homeservice.png'];

setInterval(function() {
    let random = Math.floor(Math.random() * 2);
    image.src = images[random];
}, 500);

// dynamically changed location selector 
function styleElementshide() {
    $("#service3, #service3 a").css({
        "background-color": "white",
        "color": "black",
        "pointer-events": "auto"
      });    
    $(".button").hide();    
    }
function styleElementsshow() {
    $("#service4, #service5, #service6, #service4 a, #service5 a, #service6 a").css({
      "background-color": "#F7F7F5",
      "pointer-events": "none",
      "color": "gray",
      "user-select": "none"
    });
  }
  
  // Call the function when needed

  
let services=document.querySelector("#city-select");
services.addEventListener('change', function() {
    if(this.value==="lahore"){
        $("#service3, #service4, #service5, #service6, #service3 a, #service4 a, #service5 a, #service6 a").css({
            "background-color": "white",
            "color": "black",
            "pointer-events": "auto"
          }); 
          $(".button").show(); 
           }
    else if(this.value==="karachi"){
        $("#service3, #service4, #service5, #service6, #service3 a, #service4 a, #service5 a, #service6 a").css({
            "background-color": "#F7F7F5",
            "pointer-events": "none",
            "color": "gray",
            "user-select": "none"
          });
          $(".button").hide();  
          
          
    }
    else if(this.value==="islamabad"){
          styleElementsshow()
          styleElementshide();
          
    }
    else if(this.value==="rawalpindi"){
        styleElementsshow()
        styleElementshide();
          
    }
    else{
        console.log("error");
    }
  });


  // functionality for login popup
  let popup = document.getElementById('PopUP');

  function Openpopup() {
    popup.style.visibility = "visible";
    document.body.classList.add('no-scroll'); // Disable scrolling
  }
  
  function Closepopup() {
    popup.style.visibility = "hidden";
    document.body.classList.remove('no-scroll'); // Enable scrolling
  }

 