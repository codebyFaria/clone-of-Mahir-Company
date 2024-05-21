<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitemap</title>
</head>
<style>
   *, :after, :before {
    box-sizing: border-box;
    }
    body{
        margin: 0;
        overflow-y: auto;
        overflow-x: hidden;
        min-height: 100vh;
    }
    .logo{
        width: 130px;
        height: 36px;
        display: block;
    }
    .logo img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}
 .navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    vertical-align: baseline;
    border-bottom: 1px solid rgba(26, 19, 19, 0.45);
    height: 80px;
}

.nav-links {
  list-style: none;
  margin: 0;
  display: flex;
}

.nav-links > li {
  margin-right: 20px;
  font-size: large;
  font-family: Arial, Helvetica, sans-serif;
}

.nav-links li a,
.join-login a {
white-space: nowrap;
  color: #a59e9e;
  transition: color 0.2s ease-in-out;
  text-decoration: none;
}
.nav-links li a:hover,
.join-login a:hover {
  color: #0f52ba;
}
.dropdown {
  position: relative;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  box-shadow: 0px 2px 5px rgba(26, 23, 23, 0.6);
  list-style: none;
  padding: 10px;
  z-index: 1;
}

.dropdown-content li {
  margin-bottom: 5px;
  font-family: Poppins, sans-serif;
}
.dropdown-content li :hover
{
    background-color: #c5c5d0;
    color: #333;
}
.ma-location {
  display: flex;
  align-items: center;
  text-decoration: none;
}

.has-sub {
  position: relative;
}

.mal-item {
                color: #0F52BA;
                text-decoration: none;
                background-color: #f4f4f5;;
                padding: 8px 35px;
                    width: 200px; 
                    height: 18px;
                    border-radius: 18px;
                    border-color: white;
                    font-size: 15px; 
                        font-family: Poppins, sans-serif;
}
#city-selector {
    padding: 8px 12px;
    border-radius: 50px;
    border: none;
    color: #0f52ba;
    font-size: 15px;
    background-color: #d9d9e1;
}

#city-selector option {
    color: #0f52ba;
    font-size: 15px;
}

#city-selector option:hover {
    background-color: #0f52ba;
    color: #ffffff; /* Change text color to white when hovering */
}

.btn {
        display: inline-block;
        padding: 10px 23px; /* Adjust padding as needed */
        background-color: #0f52ba; /* Change color as needed */
        color: #fff; /* Text color */
        border: none;
        border-radius: 20px; /* Adjust the value to control the roundness */
        cursor: pointer;
        font-size: 17px;
        margin-left: 6px;
    }

@media (min-width: 768px) {
    .ma-location .mr-sub-menu {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }}

    .container2{
    width: 100%;
    margin: 0 auto;
    max-width: 900px;
}
/*.inner-banner {
    width: 100%;
    position: relative;
    padding: 50px 0;
    background-color: #0f52ba;
}*/
.image{
    top: 0;
    right: 0;
 margin: 0;
 width: 250px;
 height: 230px;
 position: absolute;
}
.image img {
    width: 100%;
    height: 100%;
    display: block;
}
.inner-banner {
    width: 100%;
    position: relative;
    padding: 60px 0; /* Increase the top and bottom padding to accommodate the image */
    background-color: #0f52ba;
}

    .links1 li a{
        text-decoration: none;
        font-family: Poppins, sans-serif;
        font-size: 18px;
        color: #0f52ba;
        padding: 8px;
    }
    .links1 ul{
    list-style-type: none;
}
*, :after, :before {
    box-sizing: border-box;
}

.baner-img {
    margin: 0;
    width: 100%;
    height: 277px;
}
.baner-img img{
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

.footer-copyrights-section {
    padding: 16px 0;
    overflow: hidden;
}
.footer-copyrights {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.footer-copyrights p { margin: 0; }
.footer-logo {
    margin: 0;
    height: 36px;
    width: 100px;
    display: block;
}
.footer-logo img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}
    .image-text {
    font-family: Arial, Helvetica, sans-serif;
        
    }
    .services-section {
    display: flex;
    justify-content: space-around;
    
    }

    .service {
    width: 30%;
    padding: 20px;
    margin: 10px;
    background-color: #f0f0f0;
    border-radius: 5px;
    }

.service h3 {
  color: #333;
}

.service p {
  color: #666;
}
.bottom-section {
    gap: 10px;
    display: flex; 
}
.contained, 
.contained-big {
    max-width: 1260px;
    padding: 0 15px;
    margin: 0 auto;
    width: 100%;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-left: -15px;
    margin-right: -15px;
}
@media (min-width: 768px) {
    .cols {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
}
</style>
<body>
    <body>
        <header>
            <nav class="navbar">
                <a href="index.html" class="logo">
                    <img src="assests/mahir company logo.png" alt="Your Company Logo">
                    </a>
                    <ul class="nav-links">
                    <li><a href="mainpage.php">Home</a></li>
                    <li><a href="projAboutus.php">About Us</a></li>
                    <li class="dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown-content">
                        <li><a href="#">AC Services</a></li>
                        <li><a href="#">Carpenter Services</a></li>
                        <li><a href="#">Electrician Services</a></li>
                        <li><a href="#">Geyser Services</a></li>
                        <li><a href="#">Handy Man Services</a></li>
                        <li><a href="#">Home Appliance Services</a></li>
                        <li><a href="#">Home Inspection Services</a></li>
                        <li><a href="#">Painter Services</a></li>
                        <li><a href="#">Pest Control Services</a></li>
                        <li><a href="plumberproductpage.php">Plumber Services</a></li>
                        </ul>
                    </li>
                        <li><a href="https://mahircompany.com/blog/">Blog</a></li>
                        </ul>
                        <div class="menu-align" style="display: flex; justify-content: space-between; gap: 10px;">
                            <div class="buttons">
                                <select id="city-selector">
                                    <option value="lahore">Lahore</option>
                                    <option value="karachi">Karachi</option>
                                    <option value="islamabad">Islamabad</option>
                                    <option value="rawalpindi">Rawalpindi</option>
                                </select>
                
                                <button class="btn">signin/signup</button>
                </nav>
            </header>
            <div class="inner-banner">
                <figure class="image">
                    <img src="assests/termsCondition.svg">
                </figure>
    <div class="container2">
        <div class="bannercontent">
            <h1 style="color: #f0f0f0; font-family:Poppins, sans-serif;font: size 2rem">Sitemap | Mahir<br>Company</h1>
        </div>
    </div>
    </div>

        <div class="links1">
            <ul>
            <li><a href="#">Cleaning Services</a></li>
            <li><a href="#">UPS Installation Services</a></li>
            <li><a href="#">Sofa Cleaning-Services</a></li>
            <li><a href="#">Furniture Repairing Services</a></li>
            <li><a href="#">Water Tank Cleaning </a></li>
            <li><a href="#">Geyser Installation and Repair</a></li>
            <li><a href="#">Washing Machine Installation and Repair Services</a></li>
            <li><a href="#">Refrigerator Services</a></li>
            <li><a href="#">Carpet Cleaning Services</a></li>
            <li><a href="#">Furniture Polish Services</a></li>
            <li><a href="#">Mattress Cleaning</a></li>
            <li><a href="#">Car Wash</a></li>
            <li><a href="#">Car Services</a></li>
            <li><a href="#">Car Detailing Services</a></li>
            <li><a href="#">Door Lock Replacement Services</a></li>
            <li><a href="#">Mixer Tap Installation and Repair </a></li>
            <li><a href="#">Water Tank Leakage Services</a></li>
            <li><a href="#">AC Repair Services </a></li>
            <li><a href="#">Kitchen Hood Installation and Repairing </a></li>
            <li><a href="#">Washroom Accessories Installation</a></li>
            <li><a href="#">Car Detailing</a></li>
            <li><a href="#">Sofa Services</a></li>
            <li><a href="#">Sofa Cleaning Services</a></li>
            <li><a href="#">Home Maintenance Service | Professional Beautician Services | Mahir Company App</a></li>
            <li><a href="#">About us | Mahir Company</a></li>
            <li><a href="#">Mr Mahir Portfolio | Electricians, Plumbers, AC Technicians, Handymen </a></li>
            <li><a href="#">Login | Home Maintenance and Beautician Services | Mahir Company</a></li>
            <li><a href="#">Home Maintenance Services | Home Repair Services | Mahir Company
            </a></li>
            <li><a href="#">Beautician Services | Beautician Services at home | Mahir Company
            </a></li>
            <li><a href="#">Terms & Conditions | Home Maintenance | Mahir Company
            </a></li>
            <li><a href="#">Sitemap | Mahir Company
            </a></li>
            <li><a href="#">Help Center | Mahir Company
            </a></li>
            <li><a href="#">Features | Mahir Company
            </a></li>
            <li><a href="#">Contact Us | Mahir Company
            </a></li>
            <li><a href="#">FAQS | Mahir Company
            </a></li>
            <li><a href="#">Car Services in Pakistan
            </a></li>
            <li><a href="#">Cleaning Services in Pakistan
            </a></li>
            <li><a href="#">Cleaning Services in Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Faisal Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Faisal Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Johar Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Johar Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Wapda Town, Lahore</a></li>
            <li><a href="#">Car Services in Wapda Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Valencia, Lahore
            </a></li>
            <li><a href="#">Car Services in Valencia, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Township, Lahore
            </a></li>
            <li><a href="#">Car Services in Township, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Model Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Model Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Lahore Cantt, Lahore
            </a></li>
            <li><a href="#">Car Services in Lahore Cantt, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Allama Iqbal Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Allama Iqbal Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA EME Sector, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA EME Sector, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Overall Lahore, Lahore</a></li>
            <li><a href="#">Car Services in Defence Road, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Walton Road, Lahore
            </a></li>
            <li><a href="#">Car Services in Walton Road, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Defence, Lahore
            </a></li>
            <li><a href="#">Car Services in Defence, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Airport Road, Lahore
            </a></li>
            <li><a href="#">Car Services in Airport Road, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Pak Arab Housing Scheme, Lahore
            </a></li>
            <li><a href="#">Car Services in Pak Arab Housing Scheme, Lahore
                AC Services</a></li>
            <li><a href="#">Cleaning Services in Central Park Housing Scheme, Lahore</a></li>
            <li><a href="#">Car Services in Central Park Housing Scheme, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Lake city housing scheme, Lahore</a></li>
            <li><a href="#">Car Services in Lake city housing scheme, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Shad bagh, Lahore
            </a></li>
            <li><a href="#">Car Services in Shad bagh, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in PGSHF, Lahore
            </a></li>
            <li><a href="#">Car Services in PGSHF, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Bahria Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Bahria Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 1, Lahore</a></li>
            <li><a href="#">Car Services in DHA Phase 1, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 2, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 2, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 3, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 3, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 4, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 4, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 5, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 5, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 6, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 6, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 7, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 7, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 8, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 8, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 9, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 9, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 10, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 10, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in DHA Phase 11, Lahore
            </a></li>
            <li><a href="#">Car Services in DHA Phase 11, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Marghzar Colony, Lahore
            </a></li>
            <li><a href="#">Car Services in Marghzar Colony, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Sabzazar Colony, Lahore
            </a></li>
            <li><a href="#">Car Services in Sabzazar Colony, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Jubilee town, Lahore
            </a></li>
            <li><a href="#">Car Services in Jubilee town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Canal garden, Lahore
            </a></li>
            <li><a href="#">Car Services in Canal garden, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Dream garden, Lahore
            </a></li>
            <li><a href="#">Car Services in Dream garden, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Harbans pura, Lahore
            </a></li>
            <li><a href="#">Car Services in Harbans pura, Lahore
            </a></li>
            <li><a href="#">Car Services in Harbans pura, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Mughal pura, Lahore
            </a></li>
            <li><a href="#">Car Services in Mughal pura, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Jallo park, Lahore
            </a></li>
            <li><a href="#">Car Services in Jallo park, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Valencia Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Valencia Town, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Thokar Niaz Baig, Lahore
            </a></li>
            <li><a href="#">Car Services in Thokar Niaz Baig, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Gulberg II, Lahore
            </a></li>
            <li><a href="#">Car Services in Gulberg II, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Gulberg, Lahore
            </a></li>
            <li><a href="#">Car Services in Gulberg, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Gulberg-III, Lahore
            </a></li>
            <li><a href="#">Car Services in Gulberg-III, Lahore
            </a></li>
            <li><a href="#">Cleaning Services in Green Town, Lahore
            </a></li>
            <li><a href="#">Car Services in Green Town, Lahore</a></li>
            </ul>
        </div>
        <?php
          include 'footer.php';
       ?>
                    <div class="bottom-section">
                        <a target="_blank" class="app-store-btn" href="https://apps.apple.com/pk/app/mr-mahir-home-maintenance/id1576178647">
                        <svg width="144" height="48" viewBox="0 0 169 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.25" y="0.25" width="168.5" height="51.5" rx="9.75" stroke="white" stroke-width="0.5">
                            </rect><path d="M39.959 18.1865C34.7162 21.6474 35.5593 28.9514 40.867 31.2205C40.5491 31.9833 40.3191 
                                32.8011 39.8944 33.5002C38.9565 35.0437 37.9875 36.578 36.9041 38.0205C35.9627 39.2739 34.671 40.0455 
                                33.0107 39.866C32.4784 39.8085 31.9133 39.715 31.4431 39.4787C29.1534 38.3284 26.906 38.3774 24.6082
                                39.4732C23.3933 40.0526 22.0669 40.2696 20.8831 39.4394C20.0648 38.8656 19.3043 38.1568 18.6687
                                37.3842C16.1221 34.289 14.6058 30.7203 14.1289 26.7425C13.7753 23.7931 14.0852 20.9377 15.8655 18.4288C17.3449
                                16.3438 19.3873 15.1881 21.9417 14.9972C23.2234 14.9015 24.4241 15.3091 25.549 15.8507C26.939 16.52 28.241 16.5363 
                                29.645 15.864C31.5325 14.9603 33.5222 14.6 35.6061 15.1692C37.2267 15.6119 38.5944 16.4362 39.6502
                                    17.7551C39.7603 17.8928 39.8561 18.0421 39.959 18.1865Z" fill="white"></path><path d="M71.9219 38.3003C71.9219
                                    40.49 71.9219 42.5504 71.9219 44.6424C70.9815 44.6424 70.0868 44.6424 69.1133 44.6424C69.1133 38.8495 69.1133 
                                    33.0748 69.1133 27.2632C69.8622 27.2632 70.6481 27.2632 71.4739 27.2632C71.5321 27.8626 71.5891 28.4495 71.6425
                                    28.9979C72.1756 28.5352 72.656 27.9754 73.2575 27.6218C75.5865 26.2526 78.4554 26.9803 79.9314 29.2516C81.4278 31.5541 
                                    81.3443 35.4808 79.7518 37.7069C78.4015 39.5945 76.1183 40.3801 73.8914 39.7234C73.1793 39.5135 72.6672 39.1547 71.9219 
                                    38.3003ZM78.2905 33.4814C78.0934 32.6447 77.9879 31.8676 77.7242 31.1486C77.2317 29.8053 76.1061
                                    29.1222 74.7213 29.2079C73.4912 29.2841 72.2829 30.2473 72.0939 31.5731C71.9194 32.7972 71.8905
                                        34.0699 72.0112 35.3003C72.1368 36.5812 73.2435 37.5551 74.4053 37.7053C75.8324 37.8898 77.0416
                                            37.2978 77.5931 35.9881C77.9306 35.1871 78.0696 34.3023 78.2905 33.4814Z" fill="white">
                                        </path><path d="M83.377 27.254C84.1198 27.254 84.8927 27.254 85.7161 27.254C85.7728 27.8472 
                                        85.8291 28.435 85.8853 29.0227C85.9271 29.0606 85.9688 29.0985 86.0106 29.1364C86.0462 29.0459
                                        86.0661 28.9446 86.1197 28.8664C87.8278 26.3694 92.3168 26.0689 94.2765 29.4124C95.1063 30.8283
                                        95.3236 32.3717 95.2186 33.9678C95.1011 35.7538 94.5688 37.3881 93.1773 38.6165C91.5898 40.0181
                                        89.752 40.2714 87.8082 39.5795C87.2091 39.3663 86.7169 38.8527 86.1703 38.4729C86.1703 40.4657
                                            86.1703 42.5374 86.1703 44.6417C85.2302 44.6417 84.3497 44.6417 83.3772 44.6417C83.377 38.8577
                                            83.377 33.0694 83.377 27.254ZM86.0827 33.5552C86.0993 33.5584 86.116 33.5618 86.1327 33.5651C86.158 
                                            34.0894 86.1637 34.6156 86.2126 35.1376C86.3212 36.2967 87.1941 37.3074 88.3337 37.6258C89.5241 37.9585
                                            90.8055 37.5765 91.4732 36.5873C92.6402 34.8579 92.6731 32.9866 91.9472 31.0934C91.4427 29.7775 90.3456 
                                            29.1284 88.9624 29.208C87.8024 29.2748 86.6679 30.1841 86.3584 31.4142C86.1841 32.1071 86.1693 32.8402 86.0827
                                            33.5552Z" fill="white"></path><path d="M66.7644 39.6551C65.8429 39.6551 64.9738 39.6727 64.1068 39.6372C63.967
                                                39.6314 63.7668 39.4118 63.7135 39.2515C63.2576 37.8813 62.8177 36.5053 62.4001 35.1228C62.2916 34.7634 62.1536
                                                34.6045 61.7415 34.6124C60.2184 34.6418 58.6942 34.6408 57.1711 34.613C56.7632 34.6056 56.6107 34.7549 56.505 
                                                35.121C56.0739 36.6146 55.616 38.1004 55.1586 39.6199C54.2173 39.6199 53.2816 39.6199 52.2852 39.6199C52.402 
                                                39.2271 52.5099 38.8378 52.6334 38.4535C54.2924 33.2898 55.9577 28.1281 57.6063 22.9611C57.7357 22.5556 57.9011
                                                22.3734 58.3586 22.3988C59.1542 22.4429 59.955 22.4335 60.7517 22.4013C61.1337 22.3858 61.2834 22.5274 61.3952 
                                                22.8772C62.7277 27.0451 64.0764 31.2077 65.4191 35.3723C65.83 36.6464 66.2362 37.922 66.6427 39.1975C66.6851 
                                                39.3309 66.7152 39.4684 66.7644 39.6551ZM57.2207 32.4427C58.7104 32.4427 60.1918 32.4427 61.6901 32.4427C60.9202 29.9262
                                                60.1557 27.4276 59.4145 25.0049C58.6968 27.4382 57.9595 29.9381 57.2207 32.4427Z" fill="white"></path><path d="M100.473
                                                38.8201C100.682 38.061 100.887 37.3175 101.11 36.5099C102.215 37.1327 103.357 37.5254 104.579 
                                                37.5438C105.275 37.5542 105.998 37.498 106.666 37.3153C107.56 37.0709 108.17 36.4425 108.318 
                                                35.4846C108.474 34.4748 108.204 33.5838 107.329 33.0056C106.731 32.6106 106.049 32.3447 105.415
                                                32.0025C104.401 31.4554 103.304 31.0105 102.403 30.3138C100.164 28.5823 100.267 25.2751 102.434
                                                    23.457C104.58 21.6571 108.887 21.9752 110.515 23.0467C110.289 23.7686 110.058 24.5034 109.818 25.2723C108.565
                                                    24.6238 107.277 24.4062 105.932 24.5218C104.368 24.6564 103.436 25.6876 103.6 27.0745C103.684 27.7845 104.088 28.2951 104.667 28.6309C105.383 29.047 106.136 29.408 106.896 29.7409C107.964 30.2085 109.011 30.7094 109.842 31.5456C112.031 33.7481 111.468 37.5044 108.737 39.04C107.072 39.9758 105.272 39.9859 103.452 39.8139C102.399 39.7144 101.396 39.4282 100.473 38.8201Z" fill="white"></path><path d="M121.763 33.4932C121.788 31.404 122.392 29.5386 124.09 28.2228C126.053 26.701 128.28 26.563 130.508 27.4868C132.645 28.3732 133.698 30.17 133.856 32.4231C133.93 33.4863 133.863 34.6086 133.598 35.6368C132.876 38.447 130.272 40.1011 127.348 39.9372C123.847 39.7409 121.712 36.8868 121.763 33.4932ZM124.624 33.4859C124.598 34.5768 124.843 35.6761 125.534 36.6415C126.708 38.2827 129.024 38.279 130.115 36.5778C131.4 34.5733 131.42 32.4576 130.245 30.4073C129.152 28.4982 126.573 28.5298 125.401 30.4006C124.825 31.3203 124.615 32.3339 124.624 33.4859Z" fill="white"></path><path d="M155.097 34.1105C152.313 34.1105 149.6 34.1105 146.891 34.1105C146.686 35.9657 148.213 37.6446 150.159 37.7151C150.809 37.7386 151.467 37.7311 152.11 37.6508C152.75 37.5711 153.377 37.3822 154.069 37.2279C154.191 37.7564 154.346 38.3074 154.427 38.8688C154.445 38.9883 154.225 39.2197 154.07 39.2754C152.422 39.867 150.726 40.0249 148.993 39.7724C147.149 39.5035 145.762 38.5594 144.874 36.9181C143.524 34.4259 144.022 30.6414 145.992 28.5998C147.62 26.9123 149.634 26.5616 151.792 27.2255C153.867 27.8641 154.77 29.5433 155.077 31.5581C155.2 32.3676 155.097 33.2113 155.097 34.1105ZM152.447 32.0861C152.707 30.5596 151.664 29.0998 150.191 28.8935C148.508 28.6578 147.047 30.0543 146.875 32.0861C148.736 32.0861 150.594 32.0861 152.447 32.0861Z" fill="white"></path><path d="M114.516 29.3139C113.883 29.3139 113.325 29.3139 112.725 29.3139C112.725 28.6208 112.725 27.9592 112.725 27.2196C113.291 27.2196 113.877 27.2196 114.516 27.2196C114.516 26.5494 114.527 25.9554 114.511 25.3621C114.503 25.0714 114.56 24.9174 114.889 24.8335C115.656 24.6377 116.407 24.3767 117.249 24.1162C117.249 24.6685 117.249 25.1495 117.249 25.6304C117.249 26.1193 117.249 26.6083 117.249 27.1794C118.25 27.1794 119.233 27.1794 120.243 27.1794C120.243 27.9239 120.243 28.5863 120.243 29.3035C119.261 29.3035 118.291 29.3035 117.297 29.3035C117.276 29.475 117.249 29.5957 117.249 29.7166C117.246 31.6213 117.246 33.5261 117.247 35.4308C117.247 35.5936 117.257 35.7578 117.279 35.919C117.463 37.2777 118.122 37.7729 119.481 37.5794C119.655 37.5547 119.828 37.5236 120.041 37.4889C120.081 38.1274 120.129 38.7209 120.145 39.3153C120.149 39.428 120.059 39.5982 119.963 39.6506C118.996 40.1756 116.563 39.8839 115.709 39.1656C114.794 38.3962 114.563 37.3298 114.537 36.2338C114.486 34.0944 114.518 31.9531 114.516 29.8125C114.516 29.6704 114.516 29.5283 114.516 29.3139Z" fill="white"></path><path d="M142.866 27.0833C142.866 27.9062 142.866 28.7361 142.866 29.6292C142.526 29.6292 142.19 29.6286 141.855 29.6293C140.836 29.6318 140.035 30.0817 139.618 30.9873C139.332 31.6093 139.14 32.3268 139.118 33.0085C139.054 35.0008 139.095 36.9966 139.095 38.991C139.095 39.1871 139.095 39.3832 139.095 39.6177C138.156 39.6177 137.262 39.6177 136.287 39.6177C136.287 35.5028 136.287 31.3994 136.287 27.2593C137.025 27.2593 137.796 27.2593 138.628 27.2593C138.674 27.9589 138.722 28.668 138.772 29.4177C140.325 27.2577 141.449 26.619 142.866 27.0833Z" fill="white"></path><path d="M33.9328 7.00005C34.5347 10.7067 30.8411 14.974 27.4297 14.562C26.5995 11.4301 30.4083 6.98317 33.9328 7.00005Z" fill="white"></path><path d="M91.1642 15.5487C91.1329 15.8073 91.1057 16.0323 91.0745 16.2887C90.6954 16.2887 90.3262 16.2887 89.9395 16.2887C89.9395 13.3151 89.9395 10.3828 89.9395 7.39941C90.3994 7.39941 90.8393 7.39941 91.3178 7.39941C91.3178 8.56885 91.3178 9.7214 91.3178 10.8466C91.7452 10.6008 92.1288 10.2855 92.5681 10.1459C93.7376 9.7741 94.9044 10.2824 95.4242 11.4153C96.0187 12.7109 95.9945 14.0329 95.2174 15.2561C94.2931 16.7113 92.5515 16.8642 91.3353 15.6451C91.3022 15.6117 91.2508 15.5964 91.1642 15.5487ZM91.3141 13.1463C91.3435 13.5337 91.3402 13.8269 91.3923 14.1099C91.5145 14.7732 91.9716 15.2182 92.5676 15.293C93.291 15.3838 93.8281 15.1207 94.1191 14.4703C94.5018 13.6154 94.5096 12.7512 94.0539 11.9121C93.7661 11.3819 93.2954 11.1214 92.7084 11.1745C92.0999 11.2296 91.6589 11.5866 91.4718 12.1716C91.3635 12.5104 91.3542 12.8811 91.3141 13.1463Z" fill="white"></path><path d="M60.3857 16.3171C59.9954 16.3171 59.6147 16.3498 59.245 16.3004C59.1033 16.2814 58.9246 16.098 58.8697 15.9497C58.6624 15.3907 58.4875 14.8185 58.3241 14.2445C58.2446 13.965 58.1327 13.8207 57.8056 13.835C57.1542 13.8633 56.5005 13.8558 55.8485 13.8377C55.5651 13.8299 55.4299 13.9215 55.3572 14.2028C55.2173 14.7442 55.0148 15.2697 54.8819 15.8124C54.7901 16.1871 54.6319 16.3769 54.2189 16.3247C53.9403 16.2894 53.6535 16.3179 53.2852 16.3179C53.5289 15.5471 53.7422 14.8641 53.9609 14.1829C54.5959 12.2048 55.24 10.2296 55.8622 8.24744C55.9609 7.93306 56.1088 7.83331 56.4335 7.8319C57.7152 7.82635 57.7186 7.81371 58.1144 9.04173C58.8797 11.416 59.6408 13.7915 60.4028 16.1669C60.4077 16.1821 60.3995 16.2014 60.3857 16.3171ZM55.7486 12.7312C56.4807 12.7312 57.1855 12.7312 57.9204 12.7312C57.5497 11.5406 57.1902 10.3858 56.8112 9.16783C56.4428 10.403 56.0998 11.5532 55.7486 12.7312Z" fill="white"></path><path d="M140.958 16.3028C140.54 16.3028 140.13 16.3028 139.644 16.3028C139.644 15.4333 139.653 14.5884 139.641 13.7437C139.633 13.2559 139.628 12.7635 139.559 12.2824C139.442 11.4722 139.062 11.1869 138.269 11.2361C137.623 11.2762 137.155 11.7535 137.138 12.4574C137.113 13.5264 137.096 14.5972 137.13 15.6655C137.147 16.1769 137.017 16.4101 136.477 16.3348C136.25 16.3031 136.015 16.3296 135.738 16.3296C135.738 13.3295 135.738 10.3853 135.738 7.34876C136.061 7.34876 136.38 7.36161 136.697 7.34517C137.027 7.32807 137.144 7.46517 137.139 7.79229C137.125 8.78771 137.134 9.78345 137.134 10.7988C137.483 10.5769 137.785 10.3122 138.136 10.1738C139.409 9.67281 140.794 10.4135 140.926 11.8085C141.065 13.2749 140.958 14.765 140.958 16.3028Z" fill="white"></path><path d="M117.765 13.2315C117.752 15.1217 116.477 16.464 114.696 16.4612C112.956 16.4584 111.713 15.132 111.717 13.2812C111.72 11.3573 112.989 10.0327 114.82 10.0401C116.573 10.0471 117.778 11.3531 117.765 13.2315ZM116.384 13.409C116.239 12.8167 116.196 12.372 116.022 11.9867C115.582 11.0117 114.427 10.7996 113.744 11.5302C113.002 12.3235 112.981 14.0945 113.703 14.9134C114.269 15.5555 115.171 15.6177 115.681 14.9387C116.03 14.4734 116.184 13.8614 116.384 13.409Z" fill="white"></path><path d="M143.908 13.6114C144.012 15.1897 145.081 15.6253 147.44 15.0961C147.506 15.4037 147.572 15.711 147.647 16.0598C146.502 16.4608 145.391 16.6275 144.272 16.1934C143.107 15.7417 142.648 14.7903 142.523 13.6052C142.355 11.9969 143.307 10.4687 144.739 10.1051C146.319 9.70412 147.718 10.6575 147.923 12.2746C148.093 13.6115 148.093 13.6115 146.764 13.6115C145.825 13.6114 144.886 13.6114 143.908 13.6114ZM143.91 12.535C144.829 12.535 145.71 12.535 146.589 12.535C146.635 11.723 146.223 11.1484 145.545 11.0497C144.723 10.9301 144.126 11.4578 143.91 12.535Z" fill="white"></path><path d="M102.47 13.6118C102.704 15.2424 103.795 15.6825 105.989 15.084C106.069 15.386 106.148 15.6879 106.245 16.0549C104.903 16.5015 103.606 16.709 102.355 15.9356C101.22 15.2336 100.801 13.634 101.288 12.0815C101.692 10.7895 102.766 10.0079 104.095 10.0308C105.821 10.0604 106.751 11.5939 106.537 13.3795C106.526 13.4736 106.243 13.598 106.085 13.6012C105.088 13.6217 104.091 13.6117 103.095 13.6118C102.898 13.6118 102.702 13.6118 102.47 13.6118ZM105.219 12.5342C105.079 11.4498 104.662 10.9994 103.858 11.0413C103.124 11.0795 102.566 11.7072 102.537 12.5342C103.43 12.5342 104.323 12.5342 105.219 12.5342Z" fill="white"></path><path d="M119.701 10.1926C120.899 10.0796 120.899 10.0796 120.949 10.8922C121.321 10.6543 121.674 10.3396 122.087 10.1803C123.442 9.65782 124.824 10.4706 124.935 11.9423C125.042 13.3629 124.958 14.7979 124.958 16.2785C124.576 16.2785 124.137 16.2785 123.625 16.2785C123.625 15.4248 123.631 14.5786 123.622 13.7325C123.617 13.2625 123.62 12.7888 123.563 12.3237C123.47 11.5636 123.124 11.2406 122.473 11.2299C121.77 11.2185 121.218 11.6264 121.155 12.3282C121.081 13.1562 121.107 13.9932 121.091 14.8263C121.087 15.0075 121.09 15.189 121.089 15.3703C121.088 16.4234 121.087 16.4343 120.042 16.3147C119.913 16.2999 119.704 16.0978 119.702 15.9792C119.666 14.0946 119.657 12.2095 119.645 10.3244C119.644 10.2926 119.671 10.2606 119.701 10.1926Z" fill="white"></path><path d="M87.6258 16.2833C87.2763 16.2833 86.8863 16.2833 86.4843 16.2833C86.445 16.0946 86.409 15.9216 86.3818 15.7912C85.9212 16.0036 85.496 16.2807 85.0307 16.3978C84.0504 16.6446 83.1236 16.1543 82.8023 15.3046C82.4444 14.3579 82.8023 13.3055 83.7472 12.8669C84.3236 12.5993 84.9843 12.5093 85.6117 12.3583C85.7996 12.3132 86.0028 12.3318 86.1898 12.3215C86.4068 11.1209 85.0656 10.6468 83.4483 11.4543C82.9829 10.6879 83.0317 10.4626 83.8654 10.261C84.4539 10.1187 85.087 10.04 85.6868 10.0906C86.9164 10.1942 87.6118 11.0272 87.6231 12.2899C87.635 13.6091 87.6258 14.9285 87.6258 16.2833ZM86.2277 13.3167C85.9346 13.3167 85.6558 13.2466 85.437 13.3315C84.9991 13.5014 84.5026 13.6752 84.2101 14.0064C84.0347 14.205 84.1005 14.7469 84.2348 15.0581C84.4194 15.4859 84.902 15.4511 85.2934 15.3715C85.7661 15.2754 86.1255 14.9703 86.2144 14.487C86.2815 14.1234 86.2277 13.7376 86.2277 13.3167Z" fill="white"></path><path d="M71.8318 12.3159C72.0674 11.1092 70.7284 10.6538 69.0991 11.4505C68.6333 10.6622 68.6757 10.471 69.5322 10.2617C70.1038 10.1221 70.7165 10.0426 71.3002 10.0844C72.4938 10.17 73.2361 11.0086 73.2558 12.2179C73.2776 13.5564 73.2608 14.8956 73.2608 16.2766C72.9401 16.2766 72.5527 16.2766 72.132 16.2766C72.1002 16.0899 72.0683 15.9027 72.0562 15.8319C71.5032 16.039 70.9597 16.3404 70.3823 16.4358C69.5083 16.5803 68.7355 16.052 68.4472 15.2692C68.1427 14.4423 68.388 13.4366 69.1631 13.0262C69.7994 12.6893 70.5481 12.5606 71.2526 12.3595C71.4377 12.3068 71.6438 12.3281 71.8318 12.3159ZM71.9861 13.1804C71.3232 13.3337 70.7608 13.4137 70.2368 13.6011C69.8213 13.7496 69.6437 14.1656 69.7472 14.582C69.8167 14.8619 70.0035 15.2132 70.2388 15.3314C70.8547 15.6411 71.6917 15.1991 71.8604 14.5094C71.9518 14.1356 71.938 13.736 71.9861 13.1804Z" fill="white"></path><path d="M64.3276 14.8145C64.7224 13.5667 65.0826 12.4384 65.4364 11.308C65.8252 10.066 65.8226 10.0652 67.2015 10.2161C67.1555 10.3749 67.1218 10.528 67.0672 10.6733C66.4068 12.4302 65.7333 14.1823 65.0893 15.9453C64.9684 16.2763 64.7699 16.3756 64.4779 16.3112C64.1445 16.2379 63.6877 16.5672 63.4905 16.0301C62.8058 14.1656 62.1229 12.3004 61.4424 10.4343C61.4193 10.3708 61.4289 10.2952 61.4238 10.2308C61.4725 10.2085 61.5027 10.184 61.5346 10.1816C62.8147 10.0847 62.8163 10.0844 63.2052 11.2963C63.5686 12.4281 63.928 13.5613 64.3276 14.8145Z" fill="white"></path><path d="M130.953 10.1332C131.117 8.88533 131.117 8.88533 132.352 8.69629C132.352 9.16432 132.352 9.62724 132.352 10.1414C132.858 10.1414 133.321 10.1414 133.833 10.1414C133.833 10.5213 133.833 10.8496 133.833 11.2292C133.354 11.2292 132.89 11.2292 132.389 11.2292C132.389 12.3423 132.342 13.4091 132.406 14.4687C132.449 15.1713 132.679 15.2641 133.708 15.285C133.725 15.316 133.761 15.3492 133.757 15.3777C133.719 15.699 133.789 16.1425 133.606 16.3143C133.255 16.6442 131.998 16.5001 131.666 16.1015C131.382 15.7607 131.122 15.3041 131.079 14.8758C130.982 13.9048 131.023 12.9196 131.01 11.9401C131.007 11.7254 131.01 11.5107 131.01 11.2719C130.696 11.2502 130.432 11.2319 130.129 11.211C130.129 10.8773 130.129 10.5611 130.129 10.1907C130.399 10.1718 130.662 10.1535 130.953 10.1332Z" fill="white"></path><path d="M97.7891 7.38477C98.2532 7.38477 98.6795 7.38477 99.1394 7.38477C99.1394 10.3661 99.1394 13.3109 99.1394 16.2929C98.6832 16.2929 98.2578 16.2929 97.7891 16.2929C97.7891 13.3315 97.7891 10.3855 97.7891 7.38477Z" fill="white"></path><path d="M79.3984 7.40723C79.863 7.40723 80.2756 7.40723 80.7262 7.40723C80.7262 10.3703 80.7262 13.3087 80.7262 16.2826C80.2844 16.2826 79.8591 16.2826 79.3984 16.2826C79.3984 13.329 79.3984 10.3904 79.3984 7.40723Z" fill="white"></path><path d="M76.9483 16.2858C76.4929 16.2858 76.0847 16.2858 75.6426 16.2858C75.6426 14.2542 75.6426 12.2547 75.6426 10.2139C76.0783 10.2139 76.4982 10.2139 76.9483 10.2139C76.9483 12.234 76.9483 14.2344 76.9483 16.2858Z" fill="white"></path><path d="M76.3049 9.18828C75.8027 9.18959 75.4655 8.87673 75.4572 8.40151C75.4488 7.92455 75.839 7.54494 76.3256 7.55692C76.7925 7.56846 77.1573 7.93762 77.1504 8.39171C77.1435 8.85724 76.7934 9.18709 76.3049 9.18828Z" fill="white"></path></svg></a>
            
                        <a target="_blank" class="play-store-btn" href="https://play.google.com/store/apps/details?id=com.mrmahir.customer&utm_source=website&utm_medium=home-page&utm_campaign=app-clicks-from-web&utm_term=app-clicks-from-web">
                        <svg width="144" height="48" viewBox="0 0 173 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            
                        <rect x="0.25" y="0.25" width="172.5" height="51.5" rx="9.75" stroke="white" stroke-width="0.5"></rect>
                                                            
                    <path d="M64.4005 32.0048C62.4922 32.0048 60.6691 32.0048 58.8179 32.0048C58.8179 31.2165 58.8179 30.4801 58.8179 29.7075C61.4163 29.7075 64.0021 29.7075 66.6461 29.7075C66.8638 31.0863 66.8014 32.4456 66.3758 33.7762C65.4417 36.6969 62.6254 38.7518 59.5515 38.8783C55.9814 39.0253 53.1765 37.6826 51.2966 34.6406C48.8888 30.7444 50.2391 25.7197 54.2718 23.2599C57.4622 21.314 61.5061 21.6339 64.3394 24.0548C64.4355 24.1369 64.5426 24.2061 64.6083 24.2546C64.0392 24.8525 63.5184 25.3997 62.9783 25.9674C62.1028 25.2226 61.154 24.6474 60.0093 24.4645C57.5035 24.0644 55.389 24.7645 53.8828 26.8419C52.3586 28.944 52.239 31.2471 53.5097 33.4886C54.7904 35.7478 56.8539 36.7326 59.4419 36.5138C61.405 36.3477 62.9891 35.5118 63.8801 33.668C64.1193 33.1727 64.2164 32.6088 64.4005 32.0048Z" fill="white"></path><path d="M99.8298 29.233C99.8298 28.8726 99.8298 28.6265 99.8298 28.3525C100.599 28.3525 101.333 28.3525 102.098 28.3525C102.108 28.4803 102.124 28.5844 102.124 28.6885C102.12 32.0435 102.139 35.3987 102.102 38.7533C102.075 41.2003 100.631 43.0509 98.4191 43.5971C95.8681 44.2272 93.348 43.1573 92.2204 40.9631C92.1557 40.8375 92.1095 40.7023 92.0375 40.5306C92.7382 40.2392 93.4181 39.9565 94.0927 39.6759C95.3894 41.4793 96.4699 41.9507 98.0365 41.4109C99.3352 40.9634 99.8657 39.866 99.7981 37.7013C99.5692 37.882 99.3751 38.0552 99.1621 38.2005C97.6517 39.2305 95.5229 39.1398 93.8753 37.899C92.0521 36.526 91.2474 34.6684 91.7032 32.4135C92.1448 30.2289 93.497 28.774 95.666 28.1706C97.1845 27.7482 98.5596 28.0771 99.8298 29.233ZM100.033 33.457C99.9318 33.0005 99.8788 32.5267 99.7212 32.0908C99.2343 30.7452 97.8849 29.9947 96.6006 30.2186C94.9597 30.5047 93.7235 32.1383 94.1004 34.169C94.3708 35.6263 95.5201 36.6347 96.835 36.7076C98.6504 36.8084 99.9717 35.4447 100.033 33.457Z" fill="white"></path><path d="M125.175 38.5258C124.316 38.5258 123.544 38.5258 122.744 38.5258C122.744 33.2083 122.744 27.9227 122.744 22.6005C122.928 22.5872 123.085 22.5661 123.242 22.5659C125 22.5636 126.758 22.5571 128.516 22.5663C130.942 22.5792 133.09 24.1238 133.661 26.2509C134.435 29.1322 132.497 32.0318 129.452 32.4269C128.309 32.5751 127.139 32.5036 125.981 32.53C125.732 32.5356 125.484 32.5308 125.176 32.5308C125.176 33.5796 125.176 34.5719 125.176 35.564C125.175 36.5393 125.175 37.5143 125.175 38.5258ZM125.203 30.2781C125.42 30.2781 125.598 30.2788 125.776 30.278C126.81 30.2739 127.848 30.3271 128.876 30.2509C130.232 30.1504 131.317 28.9867 131.391 27.6784C131.465 26.3763 130.513 25.0854 129.121 24.926C127.84 24.7792 126.529 24.8947 125.203 24.8947C125.203 26.6547 125.203 28.426 125.203 30.2781Z" fill="white"></path><path d="M145.959 32.2818C145.984 31.3244 145.47 30.6725 144.475 30.3302C143.217 29.8974 142.068 30.2436 141.276 31.3305C140.595 31.0494 139.901 30.7631 139.165 30.4593C139.385 29.7955 139.829 29.3322 140.342 28.938C142.128 27.5657 145.271 27.6813 146.974 29.155C147.799 29.8693 148.205 30.7882 148.346 31.8443C148.375 32.0586 148.362 32.279 148.362 32.4966C148.363 34.4888 148.363 36.4811 148.363 38.5108C147.575 38.5108 146.825 38.5108 146.02 38.5108C146.02 38.1526 146.02 37.7988 146.02 37.3332C145.889 37.4513 145.836 37.4856 145.8 37.5333C144.357 39.491 141.089 39.148 139.688 37.5474C138.323 35.9883 138.644 33.6888 140.456 32.5748C142.012 31.6178 143.684 31.4837 145.413 32.069C145.583 32.1264 145.747 32.1988 145.959 32.2818ZM143.892 33.6005C143.299 33.7619 142.689 33.8656 142.131 34.0963C141.534 34.3435 141.224 34.9479 141.298 35.4923C141.383 36.1175 141.824 36.4212 142.369 36.5928C143.866 37.0641 145.56 36.1079 145.919 34.5761C145.952 34.4359 145.816 34.1407 145.697 34.0998C145.121 33.9028 144.524 33.7685 143.892 33.6005Z" fill="white"></path><path d="M90.5991 33.4642C90.5939 36.5457 88.2093 38.8935 85.0853 38.8927C81.9713 38.892 79.5733 36.5314 79.5645 33.4584C79.5557 30.3749 81.9746 27.9989 85.1175 28.0039C88.2315 28.0088 90.6044 30.3725 90.5991 33.4642ZM85.0651 36.7125C86.7993 36.7198 88.1563 35.3128 88.1764 33.4865C88.1966 31.6519 86.8172 30.1679 85.0895 30.1653C83.3893 30.1628 82.0164 31.6146 81.9974 33.4351C81.9787 35.2417 83.3487 36.7053 85.0651 36.7125Z" fill="white"></path><path d="M73.0634 38.8926C69.9517 38.8751 67.5331 36.4917 67.5371 33.4466C67.5411 30.3553 69.9958 27.9856 73.1747 28.004C76.2456 28.0219 78.6306 30.4508 78.6027 33.532C78.5752 36.5597 76.1467 38.91 73.0634 38.8926ZM76.1387 33.4578C76.1403 31.602 74.8326 30.1838 73.1029 30.1655C71.3913 30.1474 70.0146 31.5897 70.0086 33.4072C70.0024 35.3012 71.313 36.7129 73.0775 36.7127C74.8252 36.7126 76.1371 35.3177 76.1387 33.4578Z" fill="white"></path><path d="M117.493 32.1065C115.045 33.1099 112.626 34.1018 110.207 35.0935C111.079 37.1675 113.568 37.251 115.537 35.246C116.128 35.6355 116.727 36.0303 117.428 36.4919C117.064 36.8769 116.76 37.2754 116.383 37.5855C114.628 39.0285 112.652 39.3017 110.585 38.4373C108.543 37.5836 107.464 35.9445 107.36 33.748C107.252 31.4394 108.143 29.6007 110.266 28.5284C112.895 27.2013 115.871 28.3647 117.114 31.1577C117.245 31.4507 117.353 31.7538 117.493 32.1065ZM114.607 31.2644C114.083 30.3039 112.982 29.9185 111.862 30.2626C110.576 30.6583 109.67 31.9499 109.807 33.2395C111.412 32.579 113.007 31.9229 114.607 31.2644Z" fill="white"></path><path d="M148.51 28.3237C149.327 28.3237 150.071 28.2999 150.811 28.342C150.976 28.3514 151.204 28.5594 151.277 28.7299C152.13 30.7448 152.96 32.7699 153.796 34.792C153.849 34.9199 153.91 35.0448 154.014 35.275C154.407 34.3015 154.764 33.4197 155.118 32.5366C155.615 31.2954 156.128 30.06 156.595 28.8074C156.742 28.4141 156.941 28.293 157.346 28.3138C158.032 28.3489 158.722 28.3235 159.472 28.3235C159.418 28.4933 159.39 28.6273 159.336 28.75C157.25 33.4838 155.158 38.2145 153.085 42.9538C152.927 43.3141 152.743 43.4383 152.362 43.4206C151.718 43.3906 151.07 43.4123 150.327 43.4123C150.921 42.106 151.392 40.8483 152.047 39.6946C152.707 38.5299 152.682 37.5415 152.079 36.3302C150.84 33.8389 149.784 31.2557 148.654 28.7098C148.611 28.6129 148.58 28.511 148.51 28.3237Z" fill="white"></path><path d="M137.538 38.5304C136.716 38.5304 135.943 38.5304 135.139 38.5304C135.139 33.217 135.139 27.9314 135.139 22.6055C135.936 22.6055 136.72 22.6055 137.538 22.6055C137.538 27.9129 137.538 33.1976 137.538 38.5304Z" fill="white"></path><path d="M106.177 38.5342C105.371 38.5342 104.599 38.5342 103.793 38.5342C103.793 33.2255 103.793 27.9406 103.793 22.6104C104.572 22.6104 105.355 22.6104 106.177 22.6104C106.177 27.9033 106.177 33.1868 106.177 38.5342Z" fill="white"></path><path d="M94.6875 9.20691C95.4103 9.08136 95.9588 9.09692 96.3991 9.88315C97.2821 11.4596 98.3102 12.9548 99.2785 14.4833C99.362 14.6152 99.4473 14.7459 99.6219 15.0173C99.6219 13.9276 99.6219 12.9972 99.6219 12.0669C99.6219 11.126 99.6219 10.185 99.6219 9.20212C99.9703 9.20212 100.286 9.20212 100.646 9.20212C100.646 11.7332 100.646 14.276 100.646 16.8149C99.9737 16.9945 99.5163 16.8566 99.1332 16.2024C98.1651 14.5485 97.1112 12.9449 96.09 11.3222C95.9958 11.1726 95.8884 11.0313 95.7028 10.7653C95.7028 12.873 95.7028 14.8477 95.7028 16.8479C95.3364 16.8479 95.0347 16.8479 94.6875 16.8479C94.6875 14.3028 94.6875 11.7608 94.6875 9.20691Z" fill="white"></path><path d="M89.3247 9.00689C91.6428 9.01799 93.3271 10.7511 93.3071 13.1045C93.2879 15.3523 91.5284 17.0926 89.2893 17.0781C87.041 17.0635 85.2589 15.2562 85.2795 13.0115C85.3004 10.7348 87.0569 8.996 89.3247 9.00689ZM92.2277 13.0505C92.2325 11.2848 91.0174 10.0132 89.3229 10.011C87.6203 10.0088 86.3809 11.2838 86.3849 13.0335C86.389 14.7874 87.6219 16.0483 89.327 16.0421C91.0039 16.036 92.2229 14.7787 92.2277 13.0505Z" fill="white"></path><path d="M57.3758 10.2003C57.1321 10.4174 56.9046 10.6202 56.641 10.8553C56.0354 10.2016 55.2019 9.87576 54.2954 10.0431C53.6816 10.1565 53.0372 10.4281 52.5449 10.8082C51.5268 11.5942 51.3007 13.2727 51.928 14.4929C52.5301 15.6642 53.9652 16.2959 55.3018 15.9778C56.4989 15.693 57.2559 14.8478 57.2742 13.7193C56.3779 13.7193 55.4812 13.7193 54.5491 13.7193C54.5491 13.3812 54.5491 13.0996 54.5491 12.7753C55.7904 12.7753 57.0315 12.7753 58.2753 12.7753C58.723 14.4551 57.7846 15.9657 56.4425 16.6515C54.0736 17.8617 51.1762 16.5039 50.5912 13.9099C50.1899 12.1309 51.0078 10.3496 52.6381 9.45205C54.043 8.67867 56.0981 8.92238 57.1958 9.9938C57.2577 10.0543 57.3101 10.1245 57.3758 10.2003Z" fill="white"></path><path d="M59.8066 9.19043C61.3004 9.19043 62.7801 9.19043 64.3056 9.19043C64.3056 9.48205 64.3056 9.77803 64.3056 10.1437C63.196 10.1437 62.0659 10.1437 60.8913 10.1437C60.8913 10.9591 60.8913 11.708 60.8913 12.5218C61.905 12.5218 62.9273 12.5218 63.9813 12.5218C63.9813 12.8669 63.9813 13.1493 63.9813 13.5057C62.9681 13.5057 61.9475 13.5057 60.8871 13.5057C60.8871 14.3285 60.8871 15.0789 60.8871 15.8843C62.0161 15.8843 63.1494 15.8843 64.3164 15.8843C64.3164 16.2187 64.3164 16.5003 64.3164 16.8291C62.8387 16.8291 61.3463 16.8291 59.8066 16.8291C59.8066 14.304 59.8066 11.7625 59.8066 9.19043Z" fill="white"></path><path d="M70.683 9.19922C70.683 9.55705 70.683 9.82428 70.683 10.1591C69.9834 10.1591 69.306 10.1591 68.5613 10.1591C68.5613 12.4255 68.5613 14.6248 68.5613 16.8491C68.191 16.8491 67.8886 16.8491 67.5211 16.8491C67.5211 14.659 67.5211 12.4608 67.5211 10.187C66.7665 10.187 66.072 10.187 65.3496 10.187C65.3496 9.81459 65.3496 9.51796 65.3496 9.19922C67.1404 9.19922 68.9019 9.19922 70.683 9.19922Z" fill="white"></path><path d="M79.9418 10.1539C79.9418 12.4478 79.9418 14.6228 79.9418 16.836C79.5942 16.836 79.2794 16.836 78.9059 16.836C78.9059 14.6409 78.9059 12.4541 78.9059 10.2008C78.174 10.2008 77.4961 10.2008 76.7734 10.2008C76.7734 9.83799 76.7734 9.54071 76.7734 9.20117C78.5293 9.20117 80.2928 9.20117 82.0859 9.20117C82.0859 9.50434 82.0859 9.78823 82.0859 10.1539C81.3975 10.1539 80.7033 10.1539 79.9418 10.1539Z" fill="white"></path><path d="M75.506 16.8538C75.1601 16.8538 74.8564 16.8538 74.5176 16.8538C74.5176 14.3048 74.5176 11.7765 74.5176 9.2041C74.8283 9.2041 75.144 9.2041 75.506 9.2041C75.506 11.7273 75.506 14.2684 75.506 16.8538Z" fill="white"></path><path d="M13.6291 42.2926C13.1038 41.8105 13.0067 41.1732 13.0057 40.5119C13.0001 37.2107 13.0016 33.9093 13.0012 30.608C13.0005 24.5131 13 18.4183 13 12.3235C13 11.6412 13.0909 10.988 13.6187 10.4824C14.2119 11.0665 14.8062 11.6495 15.3978 12.2351C19.1194 15.9194 22.8411 19.6033 26.5595 23.2908C26.789 23.5184 26.9604 23.8111 27.2085 24.0123C28.0972 24.7328 28.8585 25.5809 29.6563 26.3928C27.327 28.7052 24.9982 31.0183 22.668 33.3298C19.6556 36.318 16.6422 39.305 13.6291 42.2926Z" fill="#56D5FE"></path><path d="M29.6568 26.393C28.8589 25.581 28.0977 24.7329 27.209 24.0124C26.9609 23.8113 26.7895 23.5185 26.5599 23.2909C22.8416 19.6034 19.1199 15.9195 15.3983 12.2352C14.8067 11.6496 14.2124 11.0667 13.6191 10.4825C14.299 9.8589 15.0569 9.75773 16.0187 10.2552C17.1264 10.828 18.2074 11.4525 19.2949 12.0636C24.5121 14.9953 29.7276 17.93 34.9432 20.8645C35.0055 20.8996 35.0616 20.9453 35.1205 20.9861C34.9338 21.1812 34.7506 21.3798 34.5598 21.5708C32.9542 23.1788 31.347 24.7854 29.7403 26.3924C29.7126 26.3972 29.6846 26.3974 29.6568 26.393Z" fill="#61F36E"></path><path d="M29.656 26.3931C29.6839 26.3976 29.7118 26.3974 29.7398 26.3926C31.5451 28.1886 33.3504 29.9846 35.1556 31.7805C28.8586 35.3236 22.563 38.8694 16.263 42.4071C15.1679 43.0221 14.3046 42.9685 13.6289 42.2929C16.6419 39.3053 19.6554 36.3183 22.6678 33.3302C24.9978 31.0186 27.3266 28.7055 29.656 26.3931Z" fill="#ED113A"></path><path d="M35.1561 31.7806C33.3508 29.9846 31.5456 28.1886 29.7402 26.3927C31.3469 24.7857 32.9539 23.1792 34.5597 21.5711C34.7505 21.3801 34.9335 21.1814 35.1204 20.9863C35.7534 21.2647 36.2877 21.7148 36.8965 22.0281C38.4553 22.8304 39.9787 23.6954 41.5037 24.5585C41.8057 24.7295 42.0731 24.9391 42.3079 25.1947C42.9702 25.9161 42.9914 26.7994 42.3609 27.5429C42.1234 27.823 41.8331 28.0412 41.5175 28.2186C39.3991 29.4097 37.277 30.5941 35.1561 31.7806Z" fill="#F6C100"></path></svg></a>
                </div>
            </div>
                </div>
                
            </div>
            </footer>
            <div class="footer-copyrights-section">
                <div class="contained">
                    <div class="footer-copyrights">
            <p>© Copyright 2022 Mrmahir.com (pvt) Ltd</p>
                <figure class="footer-logo">
                    <img src="assests/mahir company logo.png" alt="Your Company Logo">
            </figure>
        </div>
        </div>
        </div>   
        </body>
        </html>