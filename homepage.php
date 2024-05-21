
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="homepage.css">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Home Maintenance Service</title>
</head>
<body>
<div class="Popupcontainer" id="PopUP">
    <div class="close" onclick="Closepopup()">
        <p style="cursor: pointer; color: white;">x</p>
    </div>
    <div class="popupForm">
        <form class="form" method="POST" action="" id="otpForm">
            <h2>Welcome to Mahir Company</h2>
            <h6>Get started!</h6>
            <input type="number" name="num" id="num" placeholder="Phone Number" required>
            <div class="send">
           <button class="btn" type="submit" name="btn">Continue</button>
        </div>
            <p>Here you can see Terms & Conditions. Visit our Privacy Policy</p>
        </form>


        <?php
        include "connect.php";

if (isset($_POST['btn'])) {
    $no = $_POST['num'];

    // Validate the phone number length
    if (strlen($no) < 11) {
        echo "<div class='error'>Phone number must be at least 11 digits.</div>";
    } else {
        // Prepare the SQL statement with placeholders for the phone number
        $query = "INSERT INTO `sign-up` (`phone-number`) VALUES ('$no')";

        // Execute the query
        $rs = mysqli_query($conn, $query);

        if ($rs) {
            echo "<div class='success'>Phone number successfully added!</div>";
        } else {
            echo "<div class='error'>There was an error adding the phone number.</div>";
        }
    }
}

  
?>
    </div>
</div>

  
  <div class="welcome-container">
    <div class="welcome-blue">
      <div class="top-nav">
        <div class="contained">
          <img src="images/logo.png" alt="logo" class="logo">
          <div class="login-container">
            <a onclick=" Openpopup()">Login</a>
          </div>
        </div>

      </div>
      <div class="banner">
        <div class="banner1">
          <h2 style="margin-bottom: 2%;">On Time, Done Right.</h2>
          <p style="margin-bottom: 2%;">Connecting customers and technicians for quick, safe, and affordable bookings.</p>
          <h5 style="margin-bottom: 2%;">Select city</h5>
          <select id="city-select">
            <option value="lahore">Lahore</option>
            <option value="karachi">Karachi</option>
            <option value="islamabad">Islamabad</option>
            <option value="rawalpindi">Rawalpindi</option>
          </select>






          <div id="services-container">
            <!-- Services section -->
            <!-- Service 1 -->
            <div class="service">
              <div id="service1" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 1.webp" alt="Home Services" />
                  <span>Home Services</span>
                </a>
              </div>
              <!-- Service 2 -->
              <div id="service2" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 2.webp" alt="Cleaning Services" />
                  <span>Cleaning Services</span>
                </a>
              </div>
            </div>

            <!-- Service 3 -->
            <div class="service" style="margin-top: 2rem">
              <div id="service3" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 3.png" alt="Personal Care" />
                  <span>Personal Care</span>
                </a>
              </div>
              <!-- Service 4 -->
              <div id="service4" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 4.webp" alt="Solar Services" />
                  <span>Solar Services</span>
                </a>
              </div>
            </div>

            <!-- Service 5 -->
            <div class="service" style="margin-top: 2rem">
              <div id="service5" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 5.webp" alt="Home Inspection" />
                  <span>Home Inspection</span>
                </a>
              </div>
              <!-- Service 6 -->
              <div id="service6" class="service-item">
                <a href="mainpage.php">
                  <img src="services/service 6.png" alt="Smart Home" />
                  <div id="subline">
                  <span style="margin-left: 60%;">Smart Home</span>
                  <div class="button">
                  <p>New</p>
                </div>
                </div>
                </a>
              </div>
            </div>






          </div>

          
        </div>







        <div id="content2">
          <img src="" id="image" />
        </div>


      </div>
    </div>
    <div class="contained">
    <div id="container2">
      <!-- Container-2 content1 -->
      <div id="container-2-content1">
        <!-- Mr. Mahir heading -->
        <h3>Mr. Mahir is Now Mahir Company!</h3>
        <!-- Description -->
        <p>
          Previously known as Mr. Mahir. Mahir Company is your go-to and
          on-demand expert for all your Home & Personal Care Services. We are
          serving you 24/7 since 2019. The trust and love you have shown us
          over this period, has inspired us to go bigger & better. Now
          accelerating & expanding our operations to become even more
          accessible, reliable, fast, safe, and pocket-friendly for you, our
          users. And a pioneer of enablement and empowerment to our vendors.
        </p>
        <!-- Read more link -->
        <a href="#">Read more <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Container-2 content2 -->
      <div id="container-2-content2">
        <img src="images/megaphone.webp" alt="" />
      </div>
    </div>
    </div>
    <!-- Container2 end -->
    <div class="contained marginpage">
      <div class="full-width">
        <div id="innercontainer">
            <h2 class="title-heading">Book a Mahir</h2>
            <p class="para-line"><strong>100,000 + </strong>Active Users</p>
                 <!-- download-apps start -->
            <div id="download-apps">
              <a href="#">
              <div id="apple">
                <!-- Apple logo -->
                <i class="fa-brands fa-apple" class="icon"></i>
                <div id="apple-text">
                  <!-- Available on the App Store -->
                  <p>
                    <strong style="font-size: 12px">Available on the</strong>
                  </p>
                  <strong style="font-size: 18px; font-weight: bolder"
                    >App Store</strong
                  >
                </div>
              </div>
              </a>
              <a href="#">
              <div id="google">
                <!-- Google Play logo -->
                <i
                  class="fa-brands fa-google-play"
                  style="color: #ffd43b"
                  class="icon"
                ></i>
                <div id="google-text">
                  <!-- GET IT ON Google Play -->
                  <p><strong style="font-size: 12px">GET IT ON</strong></p>
                  <strong style="font-size: 18px; font-weight: bolder"
                    >Google Play</strong
                  >
                </div>
              </div>
              </a>
              <!-- download-apps end -->
             
            </div>
            
        </div>
        <div class="right-arrow">
          <svg width="313" height="38" viewBox="0 0 313 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M234.809 22.7201C253.273 21.0315 271.924 19.7242 290.772 19.1919C291.826 19.1532 292.95 18.6672 294.045 19.6418C294.159 20.3391 293.664 20.6969 293.332 21.079C290.598 24.1895 287.815 27.2794 285.131 30.4103C283.109 32.7769 283.427 35.2052 285.803 36.8423C288.146 38.4221 291.028 38.1465 293.231 35.8985C299.568 29.389 304.882 22.1509 311.087 15.5432C313.698 12.7284 311.576 9.50717 306.788 8.12437C304.516 7.48405 302.313 6.95849 300.057 6.28122C294.659 4.55891 289.277 2.79967 283.809 1.52468C282.503 1.19865 281.148 0.852201 279.811 0.600073C278.262 0.303175 276.82 0.440989 276.265 1.63994C275.694 2.87585 276.693 3.94089 277.981 4.86596C279.318 5.81145 280.797 6.55569 282.337 7.1521C284.63 8.01804 286.889 8.82658 289.28 9.73338C288.5 10.3624 287.489 10.159 286.662 10.2055C278.604 10.5842 270.543 10.8316 262.571 11.4194C237.07 13.3907 211.708 15.7227 186.186 17.4683C154.148 19.6269 62.3657 22.2815 31.0542 26.3016C22.1054 27.4367 13.0859 28.3258 4.51232 30.2234C3.43064 30.4673 2.38279 30.7685 1.33494 31.0698C0.738813 31.2554 0.357885 31.6171 0.438054 32.257C0.58588 33.0117 1.19765 33.4825 2.06442 33.7559C3.94549 34.3641 5.81092 34.3158 7.62717 34.2471C20.9709 33.638 34.2993 33.0658 47.4184 31.8867C65.768 30.1942 144.155 28.6904 162.747 27.6621C186.884 26.3374 210.953 24.8978 234.809 22.7201Z" fill="white"></path></svg>
        </div>
       
        <div class="image">
           
            <img src="images/app-view.webp" alt="app-view.webp">
        </div>
       
    </div>
</div>


<div class="contained margin-top-section" >
        <div id="whycose">
              <div id="float">
                  <div id="box1">
                    <i class="fa-solid fa-rupee-sign"></i>
                    <p>Fair Services Charges</p>
                  </div>
                  <div id="box2">
                    <i class="fa-solid fa-door-open"></i>
                    <p>Doorstep Services</p>
                  </div>
                  <div id="box3">
                    <i class="fa-brands fa-buromobelexperte"></i>
                    <p>Verified Experts</p>
                  </div>
                  <div id="box4">
                    <i class="fa-solid fa-couch"></i>
                    <p>Guaranteed Results</p>
                  </div>
                  <div id="box5">
                    <i class="fa-solid fa-masks-theater"></i>
                    <p>Adherence to SOPs</p>
                  </div>
                  <div id="box6">
                    <i class="fa-solid fa-clock"></i>
                    <p>60 mins Arrival Time</p>
                  </div>
              </div>
              <div id="heading-para">
                <div id="heading-title">
                  <h2>Our Unique Selling Points Make Us the Most Reliable Choice
                  </h2>
                </div>
                <div id="paraheading">
                    <p>We understand your fears about letting a stranger come inside your home. We know that you cannot trust just any Tom, Dick, Or Harry with your home possessions and your family’s safety. That is why we have come up with services that cater to all your fears and concerns</p>
                </div>
              </div>
        </div>
</div>

<div class="contained margin-top-mobile">
  <div id="boxes">
  <div id="box7">
    <i class="fa-solid fa-rupee-sign"></i>
    <p>Fair Services Charges</p>
  </div>
  <div id="box8">
    <i class="fa-solid fa-door-open"></i>
    <p>Doorstep Services</p>
  </div>
  <div id="box9">
    <i class="fa-brands fa-buromobelexperte"></i>
    <p>Verified Experts</p>
  </div>
  <div id="box10">
    <i class="fa-solid fa-couch"></i>
    <p>Guaranteed Results</p>
  </div>
  <div id="box11">
    <i class="fa-solid fa-masks-theater"></i>
    <p>Adherence to SOPs</p>
  </div>
  <div id="box12">
    <i class="fa-solid fa-clock"></i>
    <p>60 mins Arrival Time</p>
  </div>
  <div id="heading-para">
    <div id="heading-title">
      <h2>Our Unique Selling Points Make Us the Most Reliable Choice
      </h2>
    </div>
    <div id="paraheading">
        <p>We understand your fears about letting a stranger come inside your home. We know that you cannot trust just any Tom, Dick, Or Harry with your home possessions and your family’s safety. That is why we have come up with services that cater to all your fears and concerns</p>
    </div>
  </div>
  
</div>

</div>


<!-- second -->
    <div class="contained margin-top-section">
      <div class="full-width">

        <div class="image1">
           
          <img src="images/become-mahir2.webp" alt="app-view.webp">
      </div>
      <div class="arrow-left">
        <svg width="313" height="46" viewBox="0 0 313 46" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M78.4717 22.1659C59.9452 21.4494 41.2821 20.3306 22.5239 18.4178C21.4737 18.3196 20.2956 18.6559 19.3366 17.5478C19.3138 16.8416 19.8506 16.5509 20.229 16.2149C23.3427 13.4847 26.5024 10.7811 29.57 8.0243C31.8806 5.93934 31.8802 3.49035 29.7359 1.5593C27.6177 -0.310475 24.7237 -0.410425 22.2486 1.53336C15.1217 7.16743 8.91544 13.6565 1.90685 19.4051C-1.04674 21.8581 0.640104 25.3269 5.20941 27.3182C7.37875 28.2472 9.4959 29.0537 11.6452 30.0175C16.7741 32.4242 21.8829 34.8655 27.1396 36.8378C28.3926 37.3302 29.6918 37.8493 30.9849 38.2724C32.4824 38.7674 33.9294 38.8174 34.6357 37.7005C35.3621 36.5489 34.5092 35.3635 33.3517 34.2794C32.1482 33.1687 30.7784 32.2393 29.3287 31.4485C27.1671 30.2929 25.0317 29.1986 22.7779 27.9898C23.6332 27.4671 24.6095 27.7998 25.4352 27.8607C33.4743 28.5286 41.4994 29.3271 49.4802 29.7765C75.0216 31.124 100.472 32.0958 126.006 33.6699C158.053 35.678 249.407 44.9307 280.975 44.9991C289.996 45.0323 299.054 45.3187 307.801 44.5472C308.906 44.4455 309.984 44.2824 311.062 44.1194C311.677 44.0125 312.101 43.7032 312.105 43.0583C312.056 42.2908 311.51 41.7448 310.686 41.3614C308.9 40.5148 307.044 40.3211 305.234 40.1541C291.924 39.0302 278.633 37.8716 265.472 37.342C247.058 36.6441 169.136 27.9849 150.567 26.5969C126.462 24.7851 102.409 23.0957 78.4717 22.1659Z" fill="white"></path></svg>      </div>


        <div id="innercontainer">
            <h2 class="title-heading">Book a Mahir</h2>
 <p class="para-line"><strong>161+ </strong>Home Maintenance Services</p>
          <p class="para-line"><strong>38+ </strong>Personal Care Services</p>
                 <!-- download-apps start -->
            <div id="download-appss">
              <a href="#">
              <div id="google">
                <!-- Google Play logo -->
                <i
                  class="fa-brands fa-google-play"
                  style="color: #ffd43b"
                  class="icon"
                ></i>
                <div id="google-text">
                  <!-- GET IT ON Google Play -->
                  <p><strong style="font-size: 12px">GET IT ON</strong></p>
                  <strong style="font-size: 18px; font-weight: bolder"
                    >Google Play</strong
                  >
                </div>
              </div>
              </a>
              <!-- download-apps end -->
            </div>
        </div>
    </div>
</div>

<!-- second end -->
   <!-- Container2 end -->
   <div class="contained display">
    <div class="full-width">
      <div id="innercontainer">
          <h2 class="title-heading">Book a Mahir</h2>
          <p class="para-line"><strong>161+ </strong>Home Maintenance Services</p>
          <p class="para-line"><strong>38+ </strong>Personal Care Services</p>
               <!-- download-apps start -->
          <div id="download-apps">
            <a href="#">
            <div id="google">
              <!-- Google Play logo -->
              <i
                class="fa-brands fa-google-play"
                style="color: #ffd43b"
                class="icon"
              ></i>
              <div id="google-text">
                <!-- GET IT ON Google Play -->
                <p><strong style="font-size: 12px">GET IT ON</strong></p>
                <strong style="font-size: 18px; font-weight: bolder"
                  >Google Play</strong
                >
              </div>
            </div>
            </a>
            <!-- download-apps end -->
           
          </div>
          
      </div>
      <div class="right-arrow">
        <svg width="313" height="38" viewBox="0 0 313 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M234.809 22.7201C253.273 21.0315 271.924 19.7242 290.772 19.1919C291.826 19.1532 292.95 18.6672 294.045 19.6418C294.159 20.3391 293.664 20.6969 293.332 21.079C290.598 24.1895 287.815 27.2794 285.131 30.4103C283.109 32.7769 283.427 35.2052 285.803 36.8423C288.146 38.4221 291.028 38.1465 293.231 35.8985C299.568 29.389 304.882 22.1509 311.087 15.5432C313.698 12.7284 311.576 9.50717 306.788 8.12437C304.516 7.48405 302.313 6.95849 300.057 6.28122C294.659 4.55891 289.277 2.79967 283.809 1.52468C282.503 1.19865 281.148 0.852201 279.811 0.600073C278.262 0.303175 276.82 0.440989 276.265 1.63994C275.694 2.87585 276.693 3.94089 277.981 4.86596C279.318 5.81145 280.797 6.55569 282.337 7.1521C284.63 8.01804 286.889 8.82658 289.28 9.73338C288.5 10.3624 287.489 10.159 286.662 10.2055C278.604 10.5842 270.543 10.8316 262.571 11.4194C237.07 13.3907 211.708 15.7227 186.186 17.4683C154.148 19.6269 62.3657 22.2815 31.0542 26.3016C22.1054 27.4367 13.0859 28.3258 4.51232 30.2234C3.43064 30.4673 2.38279 30.7685 1.33494 31.0698C0.738813 31.2554 0.357885 31.6171 0.438054 32.257C0.58588 33.0117 1.19765 33.4825 2.06442 33.7559C3.94549 34.3641 5.81092 34.3158 7.62717 34.2471C20.9709 33.638 34.2993 33.0658 47.4184 31.8867C65.768 30.1942 144.155 28.6904 162.747 27.6621C186.884 26.3374 210.953 24.8978 234.809 22.7201Z" fill="white"></path></svg>
      </div>
     
      <div class="image">
         
          <img src="images/app-view.webp" alt="app-view.webp">
      </div>
     
  </div>
</div>

<div id="trustbadgets">
  <div id="heading">
    <h2>Our Affiliations</h2>
  </div>

  <div class="logos">
    <div class="logos-slide">
      <img src="logos/bol.svg" alt="bol.svg">
      <img src="logos/Avient_Logo.jpg" alt="Avient_Logo.jpg">
      <img src="logos/hardess.png" alt="hardess.png">
      <img src="logos/gul ahmed.png" alt="gul ahmed.png">
      <img src="logos/tasdeek pakistan.png" alt="hardess.png">
      <img src="logos/albaraka.png" alt="albaraka.png">
      <img src="logos/easy paisa.png" alt="easy paisa.png">
      <img src="logos/tpl maps.png" alt="tpl maps.png">
      <img src="logos/kfc.png" alt="kfc.png">
      <img src="logos/emporium.svg" alt="emporium.svg">
      <img src="logos/ilaan.png" alt="hardess.png">
      <img src="logos/packages mall.gif" alt="ilaan.png">
      <img src="logos/sir ganga raam hospital.jpg" alt="sir ganga raam hospital.jpg">
    </div>

    <div class="logos-slide">
      <img src="logos/bol.svg" alt="bol.svg">
      <img src="logos/Avient_Logo.jpg" alt="Avient_Logo.jpg">
      <img src="logos/hardess.png" alt="hardess.png">
      <img src="logos/gul ahmed.png" alt="gul ahmed.png">
      <img src="logos/tasdeek pakistan.png" alt="hardess.png">
      <img src="logos/albaraka.png" alt="albaraka.png">
      <img src="logos/easy paisa.png" alt="easy paisa.png">
      <img src="logos/tpl maps.png" alt="tpl maps.png">
      <img src="logos/kfc.png" alt="kfc.png">
      <img src="logos/emporium.svg" alt="emporium.svg">
      <img src="logos/ilaan.png" alt="hardess.png">
      <img src="logos/packages mall.gif" alt="ilaan.png">
      <img src="logos/sir ganga raam hospital.jpg" alt="sir ganga raam hospital.jpg">
    </div>

  </div>
  
</div>

  </div>
  <?php
          include 'footer.php';
       ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="homepage.js"></script>
</body>
</html>