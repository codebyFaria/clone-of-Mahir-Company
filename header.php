<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        #navbar{
    display: flex;
    flex-direction: row;
    height: 100px;
    width: 100%;
  
}

.logo{
    display: flex;
    flex-direction: row;
    width: 25%;
    justify-content: center;
    align-items: center;
    
}
.logo img{
    width: 25%;
}
.buttons{
  display:flex;
}

.nav{
    display: flex;
    flex-direction: row;
    width: 75%;
    align-items: center;
    justify-content: space-around;
}

    .ul li{
        display: inline-block;
        padding-left: 20px;
    }
    .ul li a{
        text-decoration: none;
        font-size: 20px;  
        color: #8e8e93;  
    }
    .submenu{
        position: absolute;
        top: 5rem;
        height: 220px;
        width: 17%;
        border-radius: .25rem;
        border: 1px solid rgba(0, 0, 0, .15);
        padding: .5rem 0;
        z-index: 1;
        background-color: #fff;
        color:#8e8e93; ;
        visibility: hidden;
    }
    .submenu li{
      padding: 0.4rem
    }

    #city-selector{
        /* width: 9rem; */
        padding: 8px 27px;
        border-radius: 10px;
        border:none;
        color: #0f52ba;
        font-size: 15px;
        background-color:#d9d9e1;   ;
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
    @media screen and (max-width: 2560px) {
  #Mnav{
    display: none;
  }
 }
 @media screen and (min-width:790px) and (max-width: 1024px) {
   
   #navbar{
     height: 75px;
   }
   .logo {
     width: 20%;
   }
   .logo img{
     width: 35%;
   }
   .nav {
     width: 90%;
   }
 }   
 @media screen and (max-width: 789px) {
  #navbar {
    width: 117%;
  }
}
 @media screen and (max-width: 426px) { 
    nav {
        display: none;
    }
    #Mnav{
  display: flex;
  height: 144px;
  width: 225%;
  align-items: center;
}
.Mlogo{
  width: 22%;
  margin-left: 2rem;
}
.Mlogo img{
  width: 100%;
}
.Msubnav{
  width: 75%;
}
.Msubnav ul{
 display: flex;
 margin-left: 14rem;
 justify-content: space-between;
}
.Msubnav ul li{
  list-style-type: none; 
 }
 #Mnav ul li a{
  color: black;
  text-decoration: none;
  font-size: 3rem;
  font-weight: 900;
 }
 #Icon{
  font-size: 5rem;
  color: #0f52ba;
  font-weight: 900;
 }

 }

    </style>
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
                <a class="active" href="mainpage.php"><b>Home</b>
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
                    <a class="active" href="mainpage.php">Home
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


    <script>
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
    </script>
</body>
</html>