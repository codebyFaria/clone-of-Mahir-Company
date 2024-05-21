

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mainpage.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>


 
    <div id="Mnav">
      <div class="Mlogo">  
          <img src="images/logo.png" alt="" srcset="">
      </div>

      <div class="Msubnav">
        <ul>
            <!-- Add your list items here -->
            <li>
              <a class="active" href="#"><b>Home</b>
            </a>
            </li>
            <li>
             <i id="Icon" class="fa fa-phone" aria-hidden="true"></i>
            </li>
            </ul>
          </div>
    </div>

  
  <nav>
<div id="navbar">
        <div class="logo">  
            <img src="images/logo.png" alt="" srcset="">
        </div>
        <div class="nav">
        
            <ul class="ul">
                <!-- Add your list items here -->
                <li>
                  <a class="active" href="#">Home
                </a>
                </li>

                <li >
                  <a href="projAboutus.php">About
                </a> 
                </li>

                <li>
                    <a href="#" onclick="toggleSubmenu()">Services
                 
                    </a>
                    <span onclick="toggleSubmenu()"><i class="fa fa-caret-down" aria-hidden="true" style="color: #8e8e93; cursor: pointer;"></i></span>
                 <ul class="submenu">
                    <li> <a href="plumberproductpage.php">Plumber Services</a></li>
                    <li><a href="https://mahircompany.com/carpet-cleaning-services">Car Washing Services</a></li>
                    <li><a href="https://mahircompany.com/carpet-cleaning-services">Carpet Cleansing Services</a></li>
                    <li><a href="https://mahircompany.com/chair-cleaning-services">Chair Cleansing Service</a></li>
                    <li><a href="https://mahircompany.com/sofa-cleaning-services">Sofa Cleansing Service</a></li>
                 </ul>   
                </li>

                <li>
                  <a href="https://mahircompany.com/blog/">Blog
                </a>
              </li>
            </ul>

            <div class="buttons">
                <select id="city-selector">
                    <option value="lahore">Lahore</option>
                    <option value="karachi">Karachi</option>
                    <option value="islamabad">Islamabad</option>
                    <option value="rawalpindi">Rawalpindi</option>
                </select>

                <button class="btn">signin/signup</button>
                
            </div>    
        </div>
    </div>
  </nav>

    <div class="Popupcontainer" id="PopUP">
      <div class="close" onclick="Closepopup()">
      <p style="cursor: pointer;">  x</p>
      </div>
      <form class="form">
        <h4>Please fill in the information below</h4>
     <input type="text" placeholder="Your Name">
    <input type="number" name="number" id="number" placeholder="Mobile Number">
   <div class="send">
   <button onclick="Closepopup">Send</button>
  </form>
</div>
    </div>
 
    <section>
    <div class="heroSection">

        <div class="container1">
          <div class="heroText">
       <h1 class="bold">Home</h1>
       <h1 class="bold">Maintenance</h1>
       <h1 class="bold">Made Easy!!</h1>
       <p class="herodetail">Connecting customers and technicians for quick, safe, and affordable bookings.</p>
       
        <button class="herobutton">BookNow</button>
        <button class="icon" onclick="Openpopup()"><i class="fa fa-phone" aria-hidden="true"></i></button>
      
        <input class="search" id="searchInput1" type="text" placeholder="Search ">
        <div id="searchResults1" class="hidden"></div>
      </div>

        </div>
       
        <div class="container">
            <div class="slide active">
              <img src="images/home-img1.jpg" alt=""/>
            </div>
            <div class="slide">
              <img src="images/home-img2.jpg" alt=""/>
            </div>
            <div class="slide">
              <img src="images/home-img-4.jpg" alt=""/>
            </div>
          
          <div class="dots-container">
            <div class="dot activeDot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
          </div> 
        </div>   

        <div class="container-2">
          <div class="Con2Buttons">
          <button class="herobutton">BookNow</button>
          <button class="icon" onclick="Openpopup()"><i class="fa fa-phone" aria-hidden="true"></i></button>
        </div>
        <input class="search" id="searchInput2" type="text" placeholder="Search ">
        <div id="searchResults2" class="hidden"></div>
       
</div>
    </div>
  </section>

<section class="ServiceSection">
   
      <h1>Services</h1>
      <div  class="Stext">
      <p>Choose from our wide range of services</p>
    </div>
   
      <ul class="service-cards">
        <li class="sc-item">
         <a href="https://mahircompany.com/ac-repair-services" target="_blank"> <img src="images/ac.svg" alt="" srcset=""></a>
          <p>AC Services</p>
        </li>

        <li class="sc-item">
          <img src="images/plumber.svg" alt="" srcset="">
          <p>Plumber</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/electrician-services" target="_blank"> <img src="images/electrician.svg" alt="" srcset=""></a>
          <p>Electrician</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/handyman-services" target="_blank"> <img src="images/handyman.svg" alt="" srcset=""></a>
          <p>Handyman</p>
        </li>
        
        <li class="sc-item">
          <a href="https://mahircompany.com/carpenter-services" target="_blank"> <img src="images/carpenter.svg" alt="" srcset=""></a>
          <p>Carpenter</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/painter-services" target="_blank"><img src="images/painter.svg" alt="" srcset=""></a>
          <p>Painter</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/home-appliances-repair" target="_blank"> <img src="images/appliance-repair.svg" alt="" srcset=""></a>
           <p>Home Appliances</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/geyser-services" target="_blank"><img src="images/geyser.svg" alt="" srcset=""></a>
          <p>Geyser</p>
        </li>

        <li class="sc-item">
          <a href="https://mahircompany.com/pest-control-services" target="_blank"> <img src="images/pest-control.svg" alt="" srcset=""></a>
          <p>pest-control</p>
        </li>

        <li class="sc-item">
         <a href="https://mahircompany.com/home-inspection-services" target="_blank"> <img src="images/house_inspection_updated.svg" alt="" srcset=""></a>
          <p>house_inspection</p>
        </li>

      </ul>
    </section>

      <section class="section-4">
        <div class="line">
        <div class="subcontainer1">
          <p class="ts">Trending Services</p>
          <h2>Hot-sellers are up <br> for grabs!</h2>
          <p class="section-4Text">The high customer repeat rate & <br> excellent reviews show how much our <br> customers love these Mahir Company <br> (Mr.Mahir) services!</p>

        </div>
        <div class="subcontainer3">
          <p class="ts">Trending Services</p>
          <h2>Hot-sellers are up  for grabs!</h2>
          <p class="section-4Text">The high customer repeat rate &  excellent reviews show how much our  customers love these Mahir Company (Mr.Mahir) services!</p>

        </div>

        <div class="subcontainer2">
          <div class="AllCards">

            <div class="card active" id="Card1">
              <div class="cardimg">
              <img src="images/handfree.png" alt="" srcset="">
            </div>
              <h4>Muslim Shower Replacement</h4>
              <ul class="star">
                <li><i class="fa fa-star"></i></li>
                <li>4.3</li>
              </ul>
              <h2 class="price">Rs:850</h2>
            </div>

            <div class="card active" id="Card2">
              <div class="cardimg">
              <img src="images/handyman.svg" alt="" srcset="">
            </div>
              <h4>Muslim Shower Replacement</h4>
              <ul class="star">
                <li><i class="fa fa-star"></i></li>
                <li>4.3</li>
              </ul>
              <h2 class="price">Rs:850</h2>
            </div>

            <div class="card" id="Card3">
              <div class="cardimg">
              <img src="images/washing machin.png" alt="" srcset="">
            </div>
              <h4>Muslim Shower Replacement</h4>
              <ul class="star">
                <li><i class="fa fa-star"></i></li>
                <li>4.3</li>
              </ul>
              <h2 class="price">Rs:850</h2>
            </div>

            <div class="card" id="Card4">
              <div class="cardimg">
              <img src="images/ups.jpg" alt="" srcset="">
            </div>
              <h4>Muslim Shower Replacement</h4>
              <ul class="star">
                <li><i class="fa fa-star"></i></li>
                <li>4.3</li>
              </ul>
              <h2 class="price">Rs:850</h2>
            </div>



          </div>

          <div class="Alldots-section-4">
            <div class="activeSection-4dot section-4-dot" ></div>
            <div class="section-4-dot"></div>
            <div class="section-4-dot"></div>
          
          
          </div>
          
        </div> 

       

      </div>

      </section>


      <section class="section-5">
       
        <div class="sec5container1">
       <img src="images/double-iphone.webp" alt="" srcset="">

        </div>

        <div class="sec5container2">
          <div class="featuredlist">
            <p>Why Choose Us?</p>
            <ul class="items">
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span>Connects you to <b> Verified and Trained 
                  <br> Technicians.</b></span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span><b>Saves Your Time </b> through an easy and <br> efficient booking process.</span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span>Ensures <b>Cost-effectiveness.</b></span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span>Offers <b>Impeccable Customer Support.</b></span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span> Provides <b> High-quality, Reliability and Safety.</b></span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span> Promises <b> Doorstep Services,</b> saves travelling costs.</span>
              </li>
              <li class="item1">
                <span><i class="fa fa-check"></i></span>
                <span>Guarantees <b> Secure Transactions.</b>
                </span>
              </li>
              <li class="item1">
                <a class="app-store-btn me-1" href="https://apps.apple.com/pk/app/mr-mahir-home-maintenance/id1576178647" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="171" height="51" viewBox="0 0 130 40" fill="none">
                   <rect x="0.25" y="0.25" width="129.285" height="39.4337" rx="9.75" stroke="black" stroke-width="0.5"></rect>
                  
                  </a>
                  <a class="play-store-btn" href="https://play.google.com/store/apps/details?id=com.mrmahir.customer&amp;utm_source=website&amp;utm_medium=home-page&amp;utm_campaign=app-clicks-from-web&amp;utm_term=app-clicks-from-web" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="171" height="51" viewBox="0 0 171 51" fill="none">
<rect x="0.617188" y="0.25" width="169.173" height="50.5" rx="9.75" stroke="black" stroke-width="0.5"></rect>

</a>
              </li>
          
            </ul>
          </div>
          
        </div>
   
      </section>

      <section class="section-6">
        <div class="full-video">
          <div class="thumbnail-container">
            <img src="images/thumbnail.webp" alt="Video Thumbnail" class="thumbnail">
            <!-- Play button icon -->
            <div class="play-button"></div>
          </div>
          <iframe class="video-iframe" width="1000" height="600" src="https://www.youtube.com/embed/Ot04wNOffOs?si=qPGMO8DBLxZ54f4E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>


      <section class="section-9">
        <div class="container9">
          <h1> <b>Our Customers Speak for Us!</b></h1>
          <div class="box9">

          <div class="Subcontainer9">
           <div class="profil">
            <i class="fa fa-user"></i>
            <Span>Faria Khaliq</Span>
           </div>
           <p>Effective service with a seamless user experience, ensuring customer satisfaction.
        <div class="dateRating">
          <span class="date">
            <p>8-12-20021 7:56 </p>
          </span>
          <span class="rating">
            <i class="fa fa-star" ></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        </div>
      </div>

      <div class="Subcontainer9">
        <div class="profil">
          <i class="fa fa-user"></i>
          <Span>Faria Khaliq</Span>
         </div>
         <p>Effective service with a seamless user experience, ensuring customer satisfaction.
      <div class="dateRating">
        <span class="date">
          <p>8-12-20021 7:56 </p>
        </span>
        <span class="rating">
          <i class="fa fa-star" ></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
      </span>
      </div>
      </div>

      <div class="Subcontainer9">
      <div class="profil">
        <i class="fa fa-user"></i>
        <Span>Faria Khaliq</Span>
       </div>
       <p>Effective service with a seamless user experience, ensuring customer satisfaction.
    <div class="dateRating">
      <span class="date">
        <p>8-12-20021 7:56 </p>
      </span>
      <span class="rating">
        <i class="fa fa-star" ></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
    </span>
    </div>
   </div>

          </div>
        </div>
      </section> 

   
      <section class="section-7">
        <div class="line">
          <div class="subcontainer1 subcontainer7-1">
            <h2>Resolving your <br> complaints! </h2>
            <p class="section-4Text">TLeave your complaint here to help us <br>  make our services better for you.</p>
          </div>
          <div class=" subcontainer7-3">
            <h2>Resolving your complaints! </h2>
            <p class="section-4Text">TLeave your complaint here to help us make our services better for you.</p>
          </div>
  
          <div class=" subcontainer7-2">
            <form class="form">
              <div class="fields2">
           <input type="text" placeholder="Name*">
          <input type="number" name="number" id="number" placeholder="Number*">
        </div>
         <textarea name="message" id="message" cols="10" rows="6" placeholder="Message*"></textarea>
         <div class="submit">
         <button>Submit</button>
        </div>
        </form>
          </div>
        </div>

      </section>

      <secttion class="section-8">
      <div class="container-8">
        <h2>Top Services</h2>
        <ul class="Allservices">
          <li class="servic">
           <a href="https://mahircompany.com/ups-installation-services" target="_blank">Ups-Installation-Services</a>
          </li>
          <li class="servic">
            <a href="https://mahircompany.com/furniture-repairing-services" target="_blank">Furniture repair services</a>

           </li>
           <li class="servic">
            <a href="https://mahircompany.com/geyser-installation-and-repair" target="_blank">Geyser Installation And Repair</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/washing-machine-installation-and-repair-services" target="_blank">Washing Machine Installation And Repair Services</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/refrigerator-services" target="_blank">Refrigerator Services</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/furniture-polish-service" target="_blank">Furniture Polish Service</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/door-lock-replacement" target="_blank">Door Lock Replacement</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/mixer-tap-installation-and-repair" target="_blank">Mixer Tap Installation And Repair</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/water-tank-leakage-services" target="_blank">Water Tank Leakage Services</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/ac-repair-services" target="_blank">Ac Repair Services</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/kitchen-hood-installation-and-repairing" target="_blank">Kitchen Hood Installation And Repairing</a>
           </li>
           <li class="servic">
            <a href="https://mahircompany.com/washroom-accessories-installation" target="_blank">Washroom Accessories Installation</a>
           </li>
        </ul>
      </div>

      </secttion>

      <section class="Last-Section">
        <div class="bottomNavigation">
          <ul class="bottom">
            <li class="BElement">
              <i class='bx bx-home-alt nav__icon' id="icon"></i> 
              <span>Home</span>    
            </li>
            <li class="BElement">
              <i class='bx bx-user nav__icon' id="icon"></i>  
              <span>Services</span>   
            </li>
            <li class="BElement">
              <i class='bx bx-book-alt nav__icon' id="icon"></i> 
              <span>Orders</span>   

            </li>
            <li class="BElement">
              <i class='bx bx-briefcase-alt nav__icon' id="icon"></i>
              <span>Profile</span> 
            </li>
          </ul>
        </div>
      </section>

      <?php
          include 'footer.php';
       ?>


    <script src="mainpage.js"></script>
   

</body>
</html>