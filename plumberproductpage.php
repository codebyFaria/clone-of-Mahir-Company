<?php
 include 'connection.php';
?>
<?php
 include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plumberproductpage.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Plumber servies | Best plumber services</title>
</head>
<body>
    <div class="Popupcontainer" id="PopUP">
        <div class="close" onclick="Closepopup()">
          <p style="cursor: pointer; color: white;">x</p>
        </div>
        <div class="popupForm">
            <div class="cart-container">
                <div class="container-cart1">
                <div id="container-cart1-headdng">
                    <h2>Select Date and Time</h2>
                    <i class="fa-solid fa-calendar-days"></i>
                    <p>May, 2024</p>      
                </div>
                <div class="date-selector">
                    <ul class="date-list">
                      <!-- Date items will be added here -->
                    </ul>
                  </div>
                  <div class="time-selector">
                    <ul class="time-list">
                        <!-- Time items will be added here -->
                    </ul>
                </div>
                <div class="Selected-Items">
                    <h2>Items</h2><br>
                    <!-- Selected items will be added here -->
                </div>
                <div class="Paymentmethods">
                    <h2>Payment Method</h2>
                    <div class="cash-box">
                        <div class="cash-img">
                            <img src="images/wallet-cash.svg" alt="wallet-cash.svg">
                            <p>Cash</p>
                        </div>
                        <input type="radio" name="paymentMethod" id="flexRadioDefault2" value="cash" checked="">
                    </div>
                </div>
                
                  <div class="problem-section">
                    <h2>Problem Image</h2>
                    <caption style="margin-top: 1rem;">Add Screenshots</caption>
                    <div class="image-select">
                        <div id="imagePreview"></div>
                        <label for="imageInput" class="custom-file-input">
                            <input type="file" id="imageInput" accept="image/*">
                            <span class="plus-sign">+</span>
                        </label>
                    </div>
                </div>
                <div class="add-info">
                    <h2 class="app-heading">Additional Information</h2>
                    <textarea rows="4" class="form-control" placeholder="Problem message"></textarea>
                </div>
                    </div>
                    <div class="container-cart2">
                                <div class="cart-container-2">
                                    <div class="cartline1">
                                        <h2>Deliverying Too</h2>
                                    </div>
                                    <div class="cartline2">
                                        <input type="text" placeholder="Your shipping address">
                                    </div> 
                                </div>
                                <div class="cart-box-2">
                                    <p>Phone Number*</p>
                                    <input type="number" placeholder="e.g: 03096661919" id="phoneNumber">
                                </div>
                                <div class="promo-billing">
                                    <h2>Apply Promo Code</h2>
                                        <div id="apply-coupon">
                                            <input type="text">
                                            <a href="#">Apply</a>
                                        </div>
                                    <h2 style="margin-top: 2rem;font-weight: 300;">Billing</h2>
                                        <div id="calcute-the-acmount" style="margin-top: 1rem;font-weight: 300;">
                                            <div class="product-items-cartin">
                                                <div class="product-items-cart-in-names"></div>
                                                <p class="product-items-cart-in-price"></p>
                                            </div>
                                        
                                                <hr>
                                            <div class="total-amount" style="margin-top: 1rem;font-weight: 300;">
                                                <p>Amount</p>
                                                <p class="total-amount-price"></p>
                                                </div>
                                        
                                                <hr>
                                            <div class="total-price" style="margin-top: 1rem;font-weight: 300;">
                                                <strong>Total price</strong>
                                                <strong class="total-amount-price"></strong>
                                            </div>
                                        
                                        </div>
                                </div>
                                <div class="ordercomplete">
                                    <a href="#">Place Order</a>
                                </div>
                                
                    </div>
            </div>
           
        </div>
      </div>



    <div class="product-page">
      
        <div id="btn-add-to-cart">
            <a class="btn" onclick="Openpopup()"></a>
        </div>
        <section class="section-heading">
            <div class="heading-and-rating">
                <h1>Plumber Services</h1>
                <h5>From Plumbing Installs, Repairs, and Upgrades - We Fix it All</h5>
                <div class="rating">
                    <div id="box1">
                            <div class="icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="content">
                                <p class="content-para">4.4/5</p>
                                <p class="rating-average">Average rating</p>
                            </div>
                    </div>
                    <div id="box2">
                        <div class="icon">
                            <i class="fa-solid fa-rupee-sign"></i>
                        </div>
                        <div class="content">
                            <p class="content-para">200</p>
                                <p class="rating-average">Start from</p>
                        </div>
                    </div>
                    <div id="box3">
                        <div class="icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="content">
                            <p class="content-para">42918</p>
                                <p class="rating-average">Done order</p>
                        </div>
                    </div>
                </div>
            </div>
         
        </section>
     


        

        <section class="product-add" >
       
            <div class="inner-box">
                <div class="line1">
                    <h5 class="plumberheading">Plumber Services</h5>
                    <input type="text" placeholder="Search.." class="search" onkeyup="searchFun()">
                </div>
                <div class="products">
                    <div class="product-item" id="product1">
                        <div class="product-img">
                            <img src="products/Mixer Tap Installation.png" alt="Mixer Tap Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Mixer Tap Installation</span>
                            <span class="vendor">- Per Tap</span>
                            <span class="price">Rs:850</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="add-to-cart1">
                                    <div class="display-prev1">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add1">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next1">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product2">
                        <div class="product-img">
                            <img src="products/Single tap Installation.png" alt="Single tap Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Single tap Installation</span>
                            <span class="vendor">- Starting From</span>
                            <span class="price">Rs:750</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="add-to-cart2">
                                    <div class="display-prev2">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add2">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next2">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product3">
                        <div class="product-img">
                            <img src="products/Sink Spindle Change.png" alt="Sink Spindle Change.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Sink Spindle Change</span>
                            <span class="vendor">- Starting From</span>
                            <span class="price">Rs:700</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="add-to-cart3">
                                    <div class="display-prev3">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add3">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next3">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product4">
                        <div class="product-img">
                            <img src="products/Muslim Shower Replacement.png" alt="Muslim Shower Replacement.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Muslim Shower Replacement</span>
                            <span class="vendor">- Per Muslim Shower</span>
                            <span class="price">Rs:850</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.4</span>
                                </div>
                                <div class="add-to-cart4">
                                    <div class="display-prev4">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add4">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next4">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product5">
                        <div class="product-img">
                            <img src="products/Water Motor Installation.png" alt="Water Motor Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Water Motor Installation</span>
                            <span class="vendor">- Vary After Inspection</span>
                            <span class="price">Rs:1200</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4</span>
                                </div>
                                <div class="add-to-cart5">
                                    <div class="display-prev5">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add5">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next5">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product6">
                        <div class="product-img">
                            <img src="products/Kitchen Leakage Repairing.png" alt="Kitchen Leakage Repairing.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Kitchen Leakage Repairing</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="add-to-cart6">
                                    <div class="display-prev6">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add6">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next6">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product7">
                        <div class="product-img">
                            <img src="products/Commode Tank Machine Repairing.png" alt="Commode Tank Machine Repairing.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Commode Tank Machine Repairing</span>
                            <span class="vendor">- Per Tank</span>
                            <span class="price">Rs:1200</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.2</span>
                                </div>
                                <div class="add-to-cart7">
                                    <div class="display-prev7">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add7">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next7">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product8">
                        <div class="product-img">
                            <img src="products/Hot or Cold Water Piping.png" alt="Hot or Cold Water Piping.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Hot or Cold Water Piping</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="add-to-cart8">
                                    <div class="display-prev8">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add8">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next8">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product9">
                        <div class="product-img">
                            <img src="products/Washroom Accessory Installation.png" alt="Washroom Accessory Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Washroom Accessory Installation</span>
                            <span class="vendor">- Bathroom Shelves, Soap Dispensers, Towel Rails, Toothbrush Holders</span>
                            <span class="price">Rs:1500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.8</span>
                                </div>
                                <div class="add-to-cart9">
                                    <div class="display-prev9">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add9">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next9">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product10">
                        <div class="product-img">
                            <img src="products/Kitchen Drain Blockage.png" alt="Kitchen Drain Blockage.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Kitchen Drain Blockage</span>
                            <span class="vendor">- Vary After Inspection</span>
                            <span class="price">Rs:1000</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.2</span>
                                </div>
                                <div class="add-to-cart10">
                                    <div class="display-prev10">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add10">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next10">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product11">
                        <div class="product-img">
                            <img src="products/Automatic Washing Machine Installation (With Wiring).png" alt="Automatic Washing Machine Installation (With Wiring).png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Automatic Washing Machine Installation (With Wiring)</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:2500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="add-to-cart11">
                                    <div class="display-prev11">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add11">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next11">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product12">
                        <div class="product-img">
                            <img src="products/Commode Tank Machine Replacement.png" alt="Commode Tank Machine Replacement.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Commode Tank Machine Replacement</span>
                            <span class="vendor">- Per Tank</span>
                            <span class="price">Rs:1000</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="add-to-cart12">
                                    <div class="display-prev12">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add12">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next12">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product13">
                        <div class="product-img">
                            <img src="products/Water Motor Repairing.png" alt="Water Motor Repairing.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Water Motor Repairing</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:850</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.3</span>
                                </div>
                                <div class="add-to-cart13">
                                    <div class="display-prev13">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add13">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next13">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product14">
                        <div class="product-img">
                            <img src="products/Oven Range Service.png" alt="Oven Range Service.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Oven Range Service</span>
                            <span class="vendor">- Per Oven Range</span>
                            <span class="price">Rs:1500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.2</span>
                                </div>
                                <div class="add-to-cart14">
                                    <div class="display-prev14">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add14">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next14">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product15">
                        <div class="product-img">
                            <img src="products/Water Tank Supply Issue.png" alt="Water Tank Supply Issue.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Water Tank Supply Issue</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:800</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.3</span>
                                </div>
                                <div class="add-to-cart15">
                                    <div class="display-prev15">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add15">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next15">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product16">
                        <div class="product-img">
                            <img src="products/Gas Pipe Wiring.png" alt="Gas Pipe Wiring.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Gas Pipe Wiring</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.4</span>
                                </div>
                                <div class="add-to-cart16">
                                    <div class="display-prev16">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add16">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next16">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product17">
                        <div class="product-img">
                            <img src="products/House Plumbing Work.jpg" alt="House Plumbing Work.jpg">
                        </div>
                        <div class="product-details">
                            <span class="product-title">House Plumbing Work</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:600</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.4</span>
                                </div>
                                <div class="add-to-cart17">
                                    <div class="display-prev17">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add17">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next17">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product18">
                        <div class="product-img">
                            <img src="products/Commode Installation.png" alt="Commode Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Commode Installation</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:2500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.4</span>
                                </div>
                                <div class="add-to-cart18">
                                    <div class="display-prev18">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add18">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next18">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product19">
                        <div class="product-img">
                            <img src="products/Pipeline Water Leakage.png" alt="Pipeline Water Leakage.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Pipeline Water Leakage</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:800</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="add-to-cart19">
                                    <div class="display-prev19">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add19">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next19">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product20">
                        <div class="product-img">
                            <img src="products/Drain Pipe Installation.png" alt="Drain Pipe Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Drain Pipe Installation</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:800</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.8</span>
                                </div>
                                <div class="add-to-cart20">
                                    <div class="display-prev20">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add20">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next20">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product21">
                        <div class="product-img">
                            <img src="products/Sink Installation.jpg" alt="Sink Installation.jpg">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Sink Installation</span>
                            <span class="vendor">- Starting From/span>
                                <div style="display: flex; flex-direction: row; gap: 4%;">
                                    <span class="price" style=" text-decoration: line-through;">Rs:1800</span>
                                    <span class="price">Rs:1500</span>
                                </div>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="add-to-cart21">
                                    <div class="display-prev21">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add21">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next21">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product22">
                        <div class="product-img">
                            <img src="products/Sink Pipe Replacement.png" alt="Sink Pipe Replacement.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Sink Pipe Replacement</span>
                            <span class="vendor">- Vary After Inspection</span>
                            <span class="price">Rs:700</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="add-to-cart22">
                                    <div class="display-prev22">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add22">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next22">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product23">
                        <div class="product-img">
                            <img src="products/Water Tank Installation.png" alt="Water Tank Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Water Tank Installation</span>
                            <span class="vendor">- Visit and Inspection Charges</span>
                            <span class="price">Rs:500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.7</span>
                                </div>
                                <div class="add-to-cart23">
                                    <div class="display-prev23">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add23">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next23">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more product items here -->
                    <div class="product-item" id="product24">
                        <div class="product-img">
                            <img src="products/Automatic Washing Machine Installation (Without Wiring).png" alt="Automatic Washing Machine Installation (Without Wiring).png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Automatic Washing Machine Installation (Without Wiring)</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:1650</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.9</span>
                                </div>
                                <div class="add-to-cart24">
                                    <div class="display-prev24">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add24">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next24">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item" id="product25">
                        <div class="product-img">
                            <img src="products/Handle Valve Replacement.png" alt="Handle Valve Replacement.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Handle Valve Replacement</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:800</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="add-to-cart25">
                                    <div class="display-prev25">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add25">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next25">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item" id="product26">
                        <div class="product-img">
                            <img src="products/Handle Valve installation.png" alt="Handle Valve installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Handle Valve installation</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:800</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="add-to-cart26">
                                    <div class="display-prev26">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add26">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next26">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item" id="product27">
                        <div class="product-img">
                            <img src="products/Bath Shower Installation.png" alt="Bath Shower Installation.png">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Bath Shower Installation</span>
                            <span class="vendor">- Vary After inspection</span>
                            <span class="price">Rs:1500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.6</span>
                                </div>
                                <div class="add-to-cart27">
                                    <div class="display-prev27">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add27">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next27">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item" id="product28">
                        <div class="product-img">
                            <img src="products/Washbasin Installation.jpg" alt="Washbasin Installation.jpg">
                        </div>
                        <div class="product-details">
                            <span class="product-title">Washbasin Installation</span>
                            <span class="vendor">- Starting From</span>
                            <span class="price">Rs:1500</span>
                            <div class="rating-cart">
                                <div class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <span>4.9</span>
                                </div>
                               <div class="add-to-cart28">
                                    <div class="display-prev28">
                                        <button type="button">-</button>
                                    </div>
                                    <div class="add28">
                                        <span>Add</span>
                                    </div>
                                    <div class="display-next28">
                                        <button type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Add more product items as needed -->
        
                </div>
            </div>
        </section>


        <section class="page-content">
<div class="serv-details-desc">
    <h1><strong>Best Plumber Services in Pakistan</strong></h1>
    <p><em>Tired of unclogging your kitchen/washroom drain blockage now and then?</em></p>
    <p><em>Is the drippy washbasin's tap becoming a constant pain?</em></p>
    <p><em>Is that commode still leaking even after you fixed it?</em></p>
    <p><em>What could get worse than noticing seepage through your bedroom's ceiling due to a pipeline water leakage?</em></p>
    <p><em>Are you thinking of switching to an instant geyser?</em></p>
    <p>Whether it's routine maintenance or an emergency at hand, Mahir's Company (Mr Mahir) <strong>plumbing services</strong> is your absolute need of the hour. We're just a call away to put all your worries to rest.</p>
    <p>Our reliable team of professionals will be there and then troubleshoot your plumbing or other maintenance issues at hand. If you're looking for the best plumbing services in Lahore and Karachi, you won't need to go anywhere else.</p>
    <p>Next time you search for 'plumbing services near me', don't think twice and let Mahir Company (Mr Mahir) fix all your problems in a jiffy.</p>
    <p>Our <strong>plumbing professionals</strong> are available at the time of need to attend all your home maintenance or repair needs throughout Lahore city and surroundings.</p>
    <p>Book your service today!</p>
    <h2><strong>Services we offer</strong></h2>
    <p>From minor repairs and routine maintenance to installing a brand-new plumbing system, our team of licensed plumbers is skilled to fix it right there and then.</p>
    <h3><strong>Mixer Tap Installation Repairing</strong></h3>
    <p>Whether renovating your existing kitchen or washroom or building a new kitchen, get your mixer tap installed from the finest plumbers in town.</p>
    <h3><strong>Water Motor Installation</strong></h3>
    <p>Get your water motor installation or repair done from our trustworthy and trained experts and put an end to your motor breakdown nightmare.</p>
    <h3><strong>Washroom Accessory Installation</strong></h3>
    <p>If you're experiencing leaking Muslim showers, or need repairing or installation of new faucets, showerheads, or pipes, let us do it for you.</p>
    <h3><strong>Water geyser Installation & Repairing</strong></h3>
    <p>Whether it's a broken knob, pilot not lightening up, rusty or smelly water, or replacing a new water geyser, after all, call us for your quick and effective installation and repair services.</p>
    <h3><strong>Instant Geyser Installation & Repairing</strong></h3>
    <p>Get your <a href="https://mahircompany.com/geyser-installation-and-repair" style="color: blue; text-decoration: none;"><strong>instant geysers repaired</strong></a> or a new one installed through our professionals at an affordable rate.</p>
    <h3><strong>Gas Geyser Services</strong></h3>
    <p>If your old gas geyser has been demanding maintenance, call us and we'll be there in no time.</p>
    <h3><strong>Commode installation services</strong></h3>
    <p>Whether it's leakage or broken, we have made your commode installation and repairing services much easier than you thought.</p>
    <h3><strong>Kitchen/Washroom drain blockage</strong></h3>
    <p>Say no to the dirty kitchen and pesky smell! Call us to get that kitchen or washroom drain blockage fixed without a further delay.</p>
    <h3><strong>Pipeline Water Leakage</strong></h3>
    <p>Leaking pipes can ruin your home's foundation. Call us or book our services to fix the problem once and for all.</p>
    <h3><strong>Water Tank cleaning (Plastic Tank)</strong></h3>
    <p>Don't remember when was the last time you got your  <a href="https://mahircompany.com/geyser-installation-and-repair" style="color: blue; text-decoration: none;"><strong>water tank cleaned? </strong></a> Let Mahir Company (Mr Mahir) experts do their magic for your peace and comfort.</p>
    <h4 style="font-size: 1.5rem; font-weight: 100;">Why Choose Mahir Company (Mr Mahir)?</h4>
    <p>Because Mahir Company (Mr Mahir) is all about offering affordable and plumbing services accountable to serve you rightfully without any worries. We offer a wide range of <strong>plumbing services</strong>, which also includes installation or fixing of bathroom accessories, kitchen or washroom drains, leaking pipelines, etc.</p>
    <p>Since our job demands providing Grade A customer service, we make sure that we finish up the tasks on time and leave behind no mess for you to clean up later.</p>
    <p>We understand the value of your money, and that's why we make sure to charge you a reasonable amount that you are happy to pay.</p>
    <p>To sum it up in one phrase, our services are all about guaranteeing you the satisfaction to get the job done right, without making your pocket light.</p>
    <p>Feel free to reach us out through call, or book our <strong>Plumbing service online</strong> for every last-minute plumbing emergency.</p>
</div>

        </section>
        
    </div>

    <?php
          include 'footer.php';
       ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="plumberproductpage.js"></script>
</body>
</html>