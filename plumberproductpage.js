const searchFun = () => {
    let filter = document.querySelector(".search").value.toUpperCase();
    let myProducts = document.querySelector(".products");
    let productItem = myProducts.querySelectorAll(".product-item");

    for (var i = 0; i < productItem.length; i++) {
        let productTitle = productItem[i].querySelectorAll(".product-title")[0];
        if (productTitle) {
            let textValue = productTitle.textContent || productTitle.innerHTML;
            if (textValue.toUpperCase().indexOf(filter) > -1) {
                productItem[i].style.display = ""; // Show the product if it matches
            } else {
                productItem[i].style.display = "none"; // Hide the product if it doesn't match
            }
        }
    }
}

//mylogic-start
const cartButton = document.querySelector("#btn-add-to-cart a");
const addToCartButtons = document.querySelectorAll(".add-to-cart");

addToCartButtons.forEach(button => {
    const displayNext = button.querySelector(".display-next");
    const displayPrev = button.querySelector(".display-prev");
    
    // Additional logic for each button can be added here
    console.log(button);
});

// mylogic-end

// Add to cart functionality

document.addEventListener("DOMContentLoaded", function() {
    let totalCount = 0; // Total count for all products
    let totalPrices = 0; // Total price for all products
    const cartButton = document.querySelector("#btn-add-to-cart a");
    
    for (let i = 1; i <= 28; i++) {
        const addToCartButtons = document.querySelectorAll(`.display-next${i}`);
        const prevBtn = document.querySelectorAll(`.display-prev${i}`);
        const quantity = document.querySelector(`.add${i} span`);
        let count = 0;
        let totalPrice = 0;

        addToCartButtons.forEach(function(addToCartButton) {
            addToCartButton.addEventListener("click", function() {
                count++;
                totalCount++; // Increment total count for all products
                updateCartButton(); // Update cart button text
                const productItem = this.closest('.product-item');
                const priceElement = productItem.querySelector('.price');
                const price = parseFloat(priceElement.textContent.replace('Rs:', ''));
                totalPrice += price;
                totalPrices += price;
                if(count > 0){
                    $(`.display-prev${i}`).show();
                    $(`.display-next${i} button , .display-prev${i} button`).css(
                        {
                            "background-color": "#0F52BA",
                            "color": "white"
                        }
                    );
                    $(`.display-next${i}, .display-prev${i}`).css(
                        {
                            "background-color": "#0F52BA",
                            "color": "white"
                        }
                    );
                    $(`.add-to-cart${i}`).css("border", "1px solid #0F52BA");
                    $(`#product${i}`).css("border", "1px solid #0F52BA");
                    quantity.textContent = count;
                }
                $(`.display-prev${i}`).show();
                cartButton.textContent = `(${totalCount}) - Rs ${totalPrices.toFixed(2)} Continue`; // Assuming totalPrice is in rupees
                $("#btn-add-to-cart").css("display", "block");
            });
        });

        prevBtn.forEach(function(prevBtns) {
            prevBtns.addEventListener("click", function() {
                count--;
                totalCount--; // Decrement total count for all products
                updateCartButton(); // Update cart button text
                const productItem = this.closest('.product-item');
                const priceElement = productItem.querySelector('.price');
                const price = parseFloat(priceElement.textContent.replace('Rs:', ''));
                totalPrice -= price;
                totalPrices -= price;
                if(count === 0){
                    $(`.display-next${i}`).css(
                        {
                            "background-color": "#000",
                        }
                    );
                    $(`.display-next${i} button`).css(
                        {
                            "background-color": "#000",
                        }
                    );
                    $(`#product${i}`).css("border", "none");
                    $(`.add-to-cart${i}`).css("border", "1px solid #000");
                    $(`.add${i} span`).css("content","Add");
                    $(`.display-prev${i}`).hide();
                    
                    count === 0;
                }
                if(totalCount === 0){
                    $("#btn-add-to-cart").hide();
                    totalCount === 0;
                }
                quantity.textContent = count;
                cartButton.textContent = `(${totalCount}) - Rs ${totalPrices.toFixed(2)} Continue`; // Assuming totalPrice is in rupees
            });
        });
    }

    // Function to update cart button text
    function updateCartButton() {
        cartButton.textContent = `(${totalCount}) - Rs ${totalPrices.toFixed(2)} Continue`; // Update cart button text with total count and total prices
    }
});



//popup cart page
let popup = document.getElementById('PopUP');

function Openpopup() {
  popup.style.visibility = "visible";
  document.body.classList.add('no-scroll'); // Disable scrolling
}

function Closepopup() {
  popup.style.visibility = "hidden";
  document.body.classList.remove('no-scroll'); // Enable scrolling
}


// date
$(document).ready(function() {
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var currentDate = new Date();
    var currentMonth = months[currentDate.getMonth()];
    var lastDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();
    var currentDay = currentDate.getDate();

    for (var i = currentDay; i <= lastDate; i++) {
        var dateButton = $('<li class="date-item">' + currentMonth + ' ' + i + '</li>');
        if (i === currentDay) {
            dateButton.addClass('selected');
        }
        dateButton.on('click', function() {
            $('.date-item').removeClass('selected');
            $(this).addClass('selected');
        });
        $('.date-list').append(dateButton);
    }
});

  //Time
  $(document).ready(function() {
    var hours = ['9 AM', '9:30 AM', '10 AM', '10:30 AM', '11 AM', '11:30 AM', '12 PM', '12:30 PM', '1 PM'];

    for (var i = 0; i < hours.length; i++) {
        var timeButton = $('<li class="time-item">' + hours[i] + '</li>');
        if (hours[i] === '9 AM') {
            timeButton.addClass('selected');
        }
        timeButton.on('click', function() {
            $('.time-item').removeClass('selected');
            $(this).addClass('selected');
        });
        $('.time-list').append(timeButton);
    }
});



// Assuming you have a function to handle adding selected items
$(document).ready(function() {
    // Initialize an object to keep track of selected items and their quantities
    const selectedItems = {};

    // Event listener for adding items to selected items container
    for (let i = 1; i <= 28; i++) {
        $(`.add-to-cart${i}`).on("click", function() {
            // Get product details
            const productItem = $(this).closest('.product-item');
            const productName = productItem.find('.product-title').text();
            const productPrice = parseFloat(productItem.find('.price').text().replace('Rs:', ''));
            const quantity = parseInt(productItem.find(`.add${i} span`).text());
            
            // Check if the product is already selected
            if (selectedItems[productName]) {
                // If already selected, update the quantity
                selectedItems[productName].quantity += quantity;
            } else {
                // If not selected, add it to the selected items with quantity
                selectedItems[productName] = {
                    price: productPrice,
                    quantity: quantity
                };
            }

            // Clear the selected items container before adding updated items
            $(".Selected-Items").empty();
            
            // Iterate over selected items and add them to the container
            for (const [productName, item] of Object.entries(selectedItems)) {
                const selectedItem = $("<div>").addClass("Selected-Item").text(`${productName} (${item.quantity}) - Rs ${item.price.toFixed(2)}`);
                $(".Selected-Items").append(selectedItem);
            }
        });
    }
});



//problem image
document.addEventListener("DOMContentLoaded", function() {
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');

    imageInput.addEventListener('change', function() {
        const files = this.files;
        if (files && files.length > 0) {
            imagePreview.innerHTML = ''; // Clear previous content
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '50px';
                    img.style.height = '50px';
                    img.style.borderRadius = '10px';
                    img.style.border = '1px solid black';
                    img.style.marginRight = '10px'; // Add right margin for spacing
                    imagePreview.appendChild(img); // Append the image element to the container
                };
                reader.readAsDataURL(files[i]);
            }
        } else {
            imagePreview.innerHTML = 'No images selected';
        }
    });
});




$(document).ready(function() {
    let totalprice = 0;

    for (let i = 1; i <= 28; i++) {
        $(`.add-to-cart${i}`).on("click", function() {
            // Get product details
            const productItem = $(this).closest('.product-item');
            const productName = productItem.find('.product-title').text();
            const productPrice = parseFloat(productItem.find('.price').text().replace('Rs:', ''));
            const quantity = parseInt(productItem.find(`.add${i} span`).text());

            // Update total price
            totalprice += productPrice;

            // Check if the product is already in the cart
            let selectedItem = $(".product-items-cart-in-names").find(`.Selected-Itemss:contains(${productName})`);

            if (selectedItem.length > 0) {
                // If the product is already in the cart, update the quantity
                selectedItem.text(productName + ' (' + quantity + ')'+ (productPrice)+`* ${quantity} ` +`Rs:`+(productPrice* quantity)  );
            } else {
                // If the product is not in the cart, create a new selected item element
                selectedItem = $("<div>").addClass("Selected-Itemss").text(productName + ' (' + quantity + ')'+ (productPrice)+`* ${quantity} ` +`Rs:`+ (productPrice* quantity) );
                $(".product-items-cart-in-names").append(selectedItem);
            }

            // Update total amount price
            $(".total-amount-price").text('Rs:'+ totalprice.toFixed(2));
        });
    }
});



//number validation
let orderComplete = document.querySelector(".ordercomplete");
let dateList = document.querySelector(".date-list");
let timeList = document.querySelector(".time-list");


function isDateAndTimeSelected() {
    let selectedDate = dateList.querySelector(".selected");
    let selectedTime = timeList.querySelector(".selected");
    return selectedDate && selectedTime;
}
// Function to validate phone number
function validatePhoneNumber(phoneNumber) {
    return /^\d{11}$/.test(phoneNumber); // Check if the phone number has exactly 11 digits
}

// Function to show pop-up with message
function showPopup(message) {
    alert(message);
}

// Function to handle placing the order
function placeOrder() {
    const phoneNumberElement = document.getElementById('phoneNumber');
    console.log("Phone number element:", phoneNumberElement); // Debugging statement
    const phoneNumber = phoneNumberElement ? phoneNumberElement.value : null;
    console.log("Phone number:", phoneNumber); // Debugging statement
    if (!isDateAndTimeSelected()) {
        alert("Please select a date and time before placing the order.");
        return;
    }
    
    if (!phoneNumberElement) {
        showPopup("Phone number input element not found.");
        return;
    }

    if (phoneNumber.length !== 11) {
        // Show pop-up if the phone number is not 11 digits
        showPopup("Please enter a 11-digit phone number.");
    } else if (!validatePhoneNumber(phoneNumber)) {
        // Show pop-up if the phone number contains non-numeric characters
        showPopup("Please enter a valid 11-digit phone number with only numeric characters.");
    } else {
        // Proceed with placing the order
        showPopup("Your order has been successfully placed!");
    }
}

// Event listener for "Place Order" button
orderComplete.addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default link behavior
    placeOrder(); // Call function to validate and place order
});


$(document).ready(function() {
    // Event listener for Place Order button
    $(".ordercomplete a").on("click", function(e) {
        e.preventDefault(); // Prevent default link behavior

        // Get payment method
        const paymentMethod = $("input[name='paymentMethod']:checked").val();

        // Get problem image
        const problemImage = $("#imagePreview img").attr("src");

        // Get additional information
        const additionalInfo = $(".add-info textarea").val();

        // Get all selected items
        const selectedItems = $(".product-items-cart-in-names").children();

        // Iterate over each selected item and extract product details
        selectedItems.each(function(index, item) {
            const productName = $(item).text().split('(')[0].trim(); // Extract product name
            const quantity = parseInt($(item).text().split('(')[1].split(')')[0]); // Extract quantity
            const productPrice = parseFloat($(item).text().split('Rs:')[1]); // Extract product price

            // Send data to the PHP script using AJAX
            $.ajax({
                url: 'connection.php',
                method: 'POST',
                data: {
                    productName: productName,
                    productPrice: productPrice,
                    quantity: quantity,
                    paymentMethod: paymentMethod,
                    problemImage: problemImage,
                    additionalInfo: additionalInfo
                },
                success: function(response) {
                    console.log(response); // Log the response from the PHP script
                },
                error: function(xhr, status, error) {
                    console.error(error); // Log any errors
                }
            });
        });
    });
});
