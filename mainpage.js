let slides = document.getElementsByClassName("slide");
let navlinks = document.getElementsByClassName("dot");
let currentSlide = 0;
let intervalId; // To store the interval ID

// Function to change slide
function changeSlide(moveTo) {    
  if (moveTo >= slides.length) {
    moveTo = 0;
  }
  if (moveTo < 0) {
    moveTo = slides.length - 1;
  }

  // Remove active classes from current slide and nav link
  slides[currentSlide].classList.remove("active");
  navlinks[currentSlide].classList.remove("activeDot");

  // Add active classes to the new slide and nav link
  slides[moveTo].classList.add("active");
  navlinks[moveTo].classList.add("activeDot");

  currentSlide = moveTo; 
}

// Function to move to the next slide automatically
function autoChangeSlide() {
  changeSlide(currentSlide + 1);
}

// Start automatic slide change
intervalId = setInterval(autoChangeSlide, 3000); // Change slide every 3000 milliseconds (3 seconds)

// Stop automatic slide change when a dot is clicked
document.querySelectorAll(".dot").forEach((bullet, bulletIndex) => {
  bullet.addEventListener("click", () => {
    clearInterval(intervalId); // Stop the interval
    if (currentSlide !== bulletIndex) {
      changeSlide(bulletIndex);
    }
  });
});


// this functionality is for video's section
document.querySelectorAll('.play-button, .thumbnail').forEach(function(element) {
  element.addEventListener('click', function() {
    // Replace the thumbnail with the video iframe when play button is clicked
    document.querySelector('.thumbnail').style.display = 'none';
    document.querySelector('.video-iframe').style.display = 'block';
  });
});
// 

let cards = document.getElementsByClassName("card");
let dots = document.getElementsByClassName("section-4-dot");
let currentCard = 0;
let intervalI; // To store the interval ID

// Function to change card
function changeCard(moveTo) {
  if(moveTo == cards.length-1){
    cards[moveTo].classList.remove("active");
    cards[moveTo-1].classList.remove("active");
    dots[moveTo-1].classList.remove("activeSection-4dot");

    moveTo=0;
    cards[moveTo].classList.add("active");
    dots[moveTo].classList.add("activeSection-4dot");
    cards[moveTo+1].classList.add("active");
    dots[moveTo].classList.add("activeSection-4dot");

  }
  // Remove active classes from current card and dot
  else{
  cards[moveTo-1].classList.remove("active");
  dots[moveTo-1].classList.remove("activeSection-4dot");

  // Ensure circular indexing for moveTo
 


  // Add active classes to the new card and dot
  cards[moveTo+1].classList.add("active");
  dots[moveTo].classList.add("activeSection-4dot");
  }
  currentCard = moveTo;
}

// Function to move to the next card automatically
function autoChangeCard() {
  changeCard(currentCard + 1);
}

// Start automatic card change
intervalI = setInterval(autoChangeCard, 3000); // Change card every 3000 milliseconds (3 seconds)

// Stop automatic card change when a dot is clicked
document.querySelectorAll(".section-4-dot").forEach((bullet, bulletIndex) => {
  bullet.addEventListener("click", () => {
    clearInterval(intervalI); // Stop the interval
    if (currentCard !== bulletIndex) {
      changeCard(bulletIndex);
    }
  });
});

let popup = document.getElementById('PopUP');
let heroSection=document.getElementsByClassName("heroSection")[0]

function Openpopup(){
  popup.style.visibility = "visible";
  heroSection.style.opacity = 0.4;
  heroSection.style.backgroundColor = "rgba(0, 0, 0, 0.8)";

}

function Closepopup(){
  popup.style.visibility = "hidden";
  heroSection.style.backgroundColor = "white";
  heroSection.style.opacity = 1;
}




const services = [
  "Ups Installation Services",
  "Furniture repair services",
  "Geyser Installation And Repair",
  "Washing Machine Installation And Repair Services",
  "Refrigerator Services",
  "Furniture Polish Service",
  "Door Lock Replacement",
  "Mixer Tap Installation And Repair",
  "Water Tank Leakage Services",
  "Ac Repair Services",
  "Kitchen Hood Installation And Repairing",
  "Washroom Accessories Installation"
];

// Function to perform search
function performSearch(searchInput, searchResults) {
  // Clear previous search results
  searchResults.innerHTML = "";

  // Get the search query from the input
  const query = searchInput.value.trim().toLowerCase();

  // Hide search results if query is empty
  if (query === "") {
    searchResults.classList.add("hidden");
    return;
  }

  // Filter services based on the search query
  const matchedServices = services.filter(service => service.toLowerCase().includes(query));

  // Display matched services
  if (matchedServices.length === 0) {
    searchResults.innerHTML = "<p>No results found.</p>";
  } else {
    const resultsHTML = "<ul>" + matchedServices.map(service => `<li class="servic"><a href="https://mahircompany.com/${service.replace(/\s+/g, '-').toLowerCase()}" target="_blank">${service}</a></li>`).join("") + "</ul>";
    searchResults.innerHTML = resultsHTML;
    // Show search results container
    searchResults.classList.remove("hidden");
  }
}

// Get references to the search inputs and search results containers
const searchInput1 = document.getElementById("searchInput1");
const searchResults1 = document.getElementById("searchResults1");
const searchInput2 = document.getElementById("searchInput2");
const searchResults2 = document.getElementById("searchResults2");

// Event listeners for keyup event in the search inputs
searchInput1.addEventListener("keyup", function() {
  performSearch(searchInput1, searchResults1);
});

searchInput2.addEventListener("keyup", function() {
  performSearch(searchInput2, searchResults2);
});






let submenu = document.querySelector(".submenu");
  let submenuVisible = false;

  function toggleSubmenu() {
    if (submenuVisible) {
      submenu.style.visibility = "hidden";
    } else {
      submenu.style.visibility = "visible";
    }
    submenuVisible = !submenuVisible;
  }
