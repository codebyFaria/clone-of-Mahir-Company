<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .footer {
        background-color: #0f52ba;
    color: #fff;
    padding: 50px 3 40px;
}


.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-section {
    margin-bottom: 20px;
}

.footer-section h3 {
    margin-bottom: 10px;
}
.contained
{
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

.footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.footer-section li {
    margin-bottom: 20px;
}

.footer-section a {
    color: #fff;
    text-decoration: none;
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

    </style>
</head>
<body>
<footer class="footer">
        <div class="contained">
            <div class="row">
            <div class="cols footer-section services">
                <h3 style="font-size: 20px; font-weight: 900;font-family: Poppins, sans-serif;">Services</h3>
                <ul style="padding: 5px;font-family: Poppins, sans-serif; font-size: 16px; margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                vertical-align: baseline;">
                    <li><a href="#">AC Services</a></li>
                    <li><a href="#">Carpenter Services</a></li>
                    <li><a href="#">Electrician Services</a></li>
                    <li><a href="#">Geyser Services</a></li>
                    <li><a href="#">Handy Man Services</a></li>
                    <li><a href="#">Home Appliance<br>Services</a></li>
                    <li><a href="#">Home Inspection<br>Services</a></li>
                    <li><a href="#">Painter Services</a></li>
                    <li><a href="#">Pest Control Services</a></li>
                    <li><a href="#">Plumber Services</a></li>
                </ul>
            </div>
            <div class="cols footer-section available-in">
                <h3 style="font-size: 20px; font-weight: 900; font-family: Poppins, sans-serif;">Available In</h3>
                <ul style="margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                vertical-align: baseline;font-family: Poppins, sans-serif; font-size: 16px;">
                    <li><a href="#">Lahore</a></li>
                    <li><a href="#">Karachi</a></li>
                    <li><a href="#">Islamabad</a></li>
                    <li><a href="#">Rawalpindi</a></li>
                </ul>
            </div>
            <div class="cols footer-section main-menu">
                <h3 style="font-size: 20px; font-weight: 900; font-family: Poppins, sans-serif;">Main Menu</h3>
                <ul style="margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                vertical-align: baseline;font-family: Poppins, sans-serif; font-size: 16px;">
                    <li><a  href="homepage.php">Home</a></li>
                    <li><a  href="projContactus.php">Contact Us</a></li>
                    <li><a  href="projAboutus.php">About Us</a></li>
                    <li><a  href="sitemap.php">Sitemap</a></li>
                    <li><a  href="projFAQS.php">FAQs</a></li>
                    <li><a  href="TermsCond.php">Terms & Conditions</a></li>
                    <li><a  href="privacypolicy.php">Privacy Policy</a></li>
                    <li><a  href="https://mahircompany.com/blog/">Blogs</a></li>
                </ul>
            </div>
            <div class="cols footer-section contact-with-us">
                <h3 style="font-size: 20px; font-weight: 900; font-family: Poppins, sans-serif;">Contact with us</h3>
                <ul style="margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                    vertical-align: baseline;font-family: Poppins, sans-serif; font-size: 16px;">
                    <li class="f-phone"><a target="_blank" href="tel:+923096661919"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 0C2.23858 0 0 2.23858 0 5V19C0 21.7614 2.23858 24 5 24H19C21.7614 24 24 21.7614 24 19V5C24 2.23858 21.7614 0 19 0H5ZM13.2578 17.1963C14.3578 17.8108 15.0924 17.9999 15.6154 17.9999C15.889 18.0028 16.1597 17.9436 16.4071 17.8266C16.8888 17.6024 17.1773 17.2727 17.4621 16.8468C17.6219 16.6047 17.759 16.3484 17.8718 16.0812C17.8833 16.0542 17.8943 16.0298 17.9042 16.0075L17.9061 16.0031C17.9654 15.8692 18.0531 15.6707 17.9578 15.4183C17.8937 15.2487 17.7627 15.0976 17.5278 14.8608C17.0447 14.3736 15.9433 13.7171 15.4611 13.4739L15.4569 13.4717C15.0897 13.2866 14.8672 13.1744 14.6075 13.1744H14.6059C14.3064 13.1744 14.0808 13.3247 13.7952 13.5371C13.759 13.5637 13.7241 13.5904 13.69 13.6164C13.6841 13.621 13.6781 13.6255 13.6722 13.63C13.3958 13.8411 13.3167 13.8877 13.1726 13.8569C12.8937 13.7974 12.0905 13.3801 11.3583 12.6497C10.6261 11.9192 10.1805 11.0923 10.1208 10.8145C10.0913 10.6763 10.1361 10.5989 10.34 10.3311L10.3439 10.3258C10.3764 10.283 10.4099 10.2389 10.4436 10.1928C10.6309 9.93757 10.7852 9.70105 10.7852 9.39435C10.785 9.13298 10.6764 8.89987 10.5123 8.54738L10.5111 8.54496C10.2657 8.01995 9.60052 6.95092 9.11372 6.47092C8.87635 6.23654 8.72471 6.10609 8.55486 6.04234C8.30034 5.94591 8.09941 6.03618 7.96679 6.09591C7.94455 6.10582 7.91964 6.11681 7.89285 6.12832C7.62511 6.24019 7.36826 6.37648 7.12555 6.53547C6.69823 6.82074 6.36762 7.10816 6.14365 7.5887C5.95557 7.99076 5.78733 8.93148 6.77431 10.7261C7.64797 12.3156 8.27221 13.1455 9.55497 14.4272C10.8854 15.7539 11.9201 16.4463 13.2578 17.1963Z" fill="white"></path></svg><span class="ml-2">0309 6661919</span></a></li>   
                        <li class="f-twitter"><a target="_blank" href="https://twitter.com/MahirCompany"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 0C2.23858 0 0 2.23858 0 5V19C0 21.7614 2.23858 24 5 24H19C21.7614 24 24 21.7614 24 19V5C24 2.23858 21.7614 0 19 0H5ZM18.2696 7.86946C18.8196 7.46565 19.235 6.96821 19.469 6.24839C19.4137 6.27474 19.3714 6.29634 19.3374 6.31374C19.2958 6.33497 19.2666 6.34993 19.2408 6.35958C18.7435 6.54685 18.2521 6.73412 17.7606 6.92139C17.6026 6.97992 17.5032 6.9331 17.3803 6.82191C15.6485 5.2184 12.8167 6.07867 12.2959 8.38445C12.2292 8.67506 12.2204 8.97884 12.2113 9.2958C12.2068 9.45118 12.2022 9.60972 12.1906 9.77143C9.70404 9.59586 7.62701 8.51905 5.95368 6.57611C5.64944 7.09696 5.51487 7.62366 5.53242 8.18548C5.56168 9.18621 5.99464 9.99381 6.79034 10.6141C6.77705 10.6319 6.76711 10.653 6.75799 10.6723C6.75507 10.6785 6.75223 10.6845 6.74939 10.6902C6.55973 10.638 6.37007 10.5845 6.17799 10.5302C5.9612 10.4691 5.74133 10.407 5.51487 10.3449C5.47391 10.7605 5.58508 11.1584 5.7489 11.5388C6.15261 12.4635 6.86641 13.0428 7.82594 13.3296L7.80838 13.3998H6.56801C7.07703 14.7341 8.01901 15.4013 9.40565 15.5593C8.05997 16.5483 6.60312 16.9404 5 16.8351C5.06436 16.8994 5.12287 16.9463 5.18723 16.9814C6.50951 17.7597 7.9371 18.1635 9.47586 18.1869C11.3189 18.222 13.039 17.7948 14.5485 16.718C17.0995 14.898 18.3223 12.3698 18.3632 9.25643C18.3632 9.10427 18.4159 9.01649 18.527 8.917C18.8079 8.67706 19.0829 8.42542 19.3403 8.16207C19.469 8.03334 19.5784 7.88801 19.6988 7.728C19.7535 7.65523 19.8105 7.57943 19.8727 7.50077C19.5515 7.5902 19.2528 7.674 18.9628 7.75537C18.7404 7.81776 18.5231 7.87872 18.3047 7.93968L18.2696 7.86946Z" fill="white"></path></svg><span class="ml-2">Twitter</span></a></li>
                        <li class="f-linkedin"><a target="_blank" href="https://www.linkedin.com/company/mr-mahir/"><svg width="24" height="24" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="background: white; color: black; font-size: 23px; padding: 4px; border-radius: 5px; border: none;"><g><path fill="none" d="M0 0h24v24H0z"></path><path fill-rule="nonzero" d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"></path></g></svg><span class="ml-2">Linkedin</span></a></li>
                        <li class="f-pinterest"><a target="_blank" href="https://www.pinterest.com/MahirCompany/"><svg width="24" height="24" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="background: white; color: black; font-size: 23px; padding: 4px; border-radius: 5px; border: none;"><path fill-rule="evenodd" d="M12,0 C5.37225,0 0,5.37225 0,12 C0,17.0835 3.16275,21.426 7.62675,23.17425 C7.52175,22.22475 7.42725,20.76825 7.66875,19.73175 C7.88625,18.79575 9.07575,13.767 9.07575,13.767 C9.07575,13.767 8.7165,13.0485 8.7165,11.98575 C8.7165,10.317 9.684,9.07125 10.88775,9.07125 C11.9115,9.07125 12.4065,9.84 12.4065,10.76175 C12.4065,11.7915 11.751,13.3305 11.41275,14.757 C11.13,15.95175 12.01125,16.926 13.1895,16.926 C15.3225,16.926 16.962,14.67675 16.962,11.43075 C16.962,8.5575 14.89725,6.54825 11.949,6.54825 C8.535,6.54825 6.531,9.1095 6.531,11.75625 C6.531,12.7875 6.92775,13.89375 7.4235,14.4945 C7.52175,14.61375 7.536,14.71725 7.50675,14.83875 C7.416,15.21825 7.2135,16.03275 7.17375,16.2 C7.12125,16.419 6.99975,16.46625 6.7725,16.3605 C5.27325,15.66225 4.3365,13.4715 4.3365,11.71125 C4.3365,7.926 7.08675,4.44975 12.2655,4.44975 C16.428,4.44975 19.6635,7.416 19.6635,11.3805 C19.6635,15.516 17.05575,18.8445 13.43625,18.8445 C12.2205,18.8445 11.0775,18.21225 10.686,17.466 C10.686,17.466 10.0845,19.75725 9.93825,20.319 C9.6675,21.36075 8.93625,22.66725 8.4465,23.4645 C9.57,23.8125 10.76325,24 12,24 C18.62775,24 24,18.627 24,12 C24,5.37225 18.62775,0 12,0"></path></svg><span class="ml-2">Pinterest</span></a></li>
                        <li class="f-youtube"><a target="_blank" href="https://www.youtube.com/channel/UC0J5hmQpTgw3TgLMc0OjhqQ"><svg width="24" height="24" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.5709 4.85763C27.5709 2.27957 25.7767 0.205671 23.5598 0.205671C20.5568 0.0572899 17.4943 0 14.3645 0H13.3888C10.2667 0 7.19868 0.05729 4.19575 0.206244C1.98421 0.206244 0.190045 2.2916 0.190045 4.86966C0.0545341 6.90861 -0.00292265 8.94814 0.000329622 10.9877C-0.00509082 13.0272 0.0563409 15.0686 0.184625 17.112C0.184625 19.69 1.97879 21.7811 4.19033 21.7811C7.34503 21.9358 10.581 22.0046 13.8712 21.9988C17.1669 22.0103 20.3939 21.9377 23.5522 21.7811C25.7691 21.7811 27.5633 19.69 27.5633 17.112C27.6934 15.0667 27.753 13.0272 27.7476 10.9819C27.7599 8.94241 27.701 6.90098 27.5709 4.85763ZM11.2207 16.6078V5.35032L19.0803 10.9762L11.2207 16.6078Z" fill="white"></path></svg><span class="ml-2" data-sider-select-id="15e7e20e-e9a3-4630-9341-0cec003f4150">Youtube</span></a></li>
                    <li class="f-instagram"><a target="_blank" href="https://www.instagram.com/mahir_company/"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.7525 6.99851C8.77756 6.99851 7.16589 8.57195 7.16589 10.5C7.16589 12.4281 8.77756 14.0015 10.7525 14.0015C12.7274 14.0015 14.3391 12.4281 14.3391 10.5C14.3391 8.57195 12.7274 6.99851 10.7525 6.99851ZM21.5095 10.5C21.5095 9.05002 21.523 7.61317 21.4396 6.16582C21.3562 4.48469 20.9633 2.99268 19.7041 1.76335C18.4422 0.53139 16.9167 0.150507 15.1947 0.0690774C13.7094 -0.0123526 12.2377 0.000781318 10.7552 0.000781318C9.26994 0.000781318 7.79818 -0.0123526 6.31566 0.0690774C4.59367 0.150507 3.0654 0.534016 1.8062 1.76335C0.544303 2.9953 0.154165 4.48469 0.0707561 6.16582C-0.0126528 7.6158 0.000800306 9.05265 0.000800306 10.5C0.000800306 11.9474 -0.0126528 13.3868 0.0707561 14.8342C0.154165 16.5153 0.546994 18.0073 1.8062 19.2367C3.06809 20.4686 4.59367 20.8495 6.31566 20.9309C7.80087 21.0124 9.27264 20.9992 10.7552 20.9992C12.2404 20.9992 13.7121 21.0124 15.1947 20.9309C16.9167 20.8495 18.4449 20.466 19.7041 19.2367C20.966 18.0047 21.3562 16.5153 21.4396 14.8342C21.5257 13.3868 21.5095 11.95 21.5095 10.5ZM10.7525 15.8875C7.69863 15.8875 5.23403 13.4814 5.23403 10.5C5.23403 7.51861 7.69863 5.11248 10.7525 5.11248C13.8063 5.11248 16.2709 7.51861 16.2709 10.5C16.2709 13.4814 13.8063 15.8875 10.7525 15.8875ZM16.4969 6.15006C15.7839 6.15006 15.2081 5.58793 15.2081 4.89184C15.2081 4.19574 15.7839 3.63361 16.4969 3.63361C17.2099 3.63361 17.7857 4.19574 17.7857 4.89184C17.7859 5.05713 17.7527 5.22083 17.688 5.37358C17.6234 5.52633 17.5284 5.66512 17.4087 5.782C17.289 5.89888 17.1468 5.99155 16.9904 6.05471C16.8339 6.11786 16.6662 6.15027 16.4969 6.15006Z" fill="white"></path></svg><span class="ml-2">Instagram</span></a></li>
                    <li class="f-facebook"><a target="_blank" href="https://www.facebook.com/teammahir/"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0V22H21.6178V0H0ZM15.551 2.87085C15.708 2.86746 15.8715 2.87265 16.0405 2.88427C16.6616 2.88514 17.3102 2.94212 17.9537 2.99976L17.8837 5.60474H16.1553C15.3448 5.58648 15.0521 5.90674 15.0258 6.8374V8.88378H17.9537L17.8376 11.6741H15.0258V19.442H12.1692V11.6741H10.1861V8.88378H12.1692V6.48828C12.1692 4.76111 12.8868 3.66175 14.3001 3.10449C14.6631 2.95915 15.08 2.88103 15.551 2.87085Z" fill="white"></path></svg><span class="ml-2">Facebook</span></a></li>
                    <li class="f-tiktok"><a target="_blank" href="https://www.tiktok.com/@companymahir"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M0 19C0 21.7614 2.23858 24 5 24H19C21.7614 24 24 21.7614 24 19V5C24 2.23858 21.7614 0 19 0H5C2.23858 0 0 2.23858 0 5V19ZM5.83822 12.3096C6.62968 10.5172 8.3709 9.45102 10.2797 9.59534C10.3263 9.6 10.3728 9.60931 10.4194 9.60931C10.6382 9.60466 10.6987 9.71174 10.6941 9.93055C10.6755 10.6196 10.6801 11.3133 10.6755 12.0023C10.6755 12.0112 10.6754 12.0201 10.6752 12.029C10.6723 12.1607 10.5425 12.2577 10.4147 12.2258C9.61862 12.0396 8.76198 12.3841 8.30107 13.0778C7.85412 13.7482 7.84947 14.67 8.2871 15.2985C8.80388 16.0341 9.63725 16.3554 10.4613 16.1412C11.3831 15.8991 11.9744 15.1263 11.9744 14.1579C11.9744 10.9827 11.9744 7.81222 11.9744 4.63705C11.9744 4.3065 11.9744 4.30184 12.2956 4.30184C12.8869 4.30184 13.4735 4.31115 14.0648 4.30184C14.2417 4.29719 14.3069 4.35306 14.3209 4.52997C14.4093 5.44248 14.7538 6.2386 15.4429 6.86246C16.0528 7.41183 16.7884 7.67721 17.5891 7.77498C17.7893 7.79825 17.8452 7.86343 17.8405 8.05897C17.8266 8.68749 17.8266 9.316 17.8405 9.94452C17.8452 10.1494 17.78 10.2192 17.5752 10.2006C16.4997 10.1121 15.4894 9.82347 14.5862 9.20892C14.4992 9.14797 14.3814 9.22692 14.3814 9.33321C14.3814 9.42801 14.3814 9.51244 14.3814 9.59534C14.3814 11.0852 14.4047 12.575 14.3767 14.0648C14.3348 15.969 13.4316 17.3657 11.6904 18.1199C9.94452 18.8788 8.30107 18.5622 6.89505 17.2912C5.52163 16.0388 5.10727 13.967 5.83822 12.3096Z" fill="white" /></svg><span class="ml-2">Tiktok</span></a></li>
                    <li class="d-med-none"><a href="https://api.whatsapp.com/send?phone=+923096665959&amp;text=Hi+Mr+Mahir%21&amp;lang=en"><svg width="22" height="22" viewBox="0 0 221 221" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M110.528 0H110.472C49.5454 0 0 49.5592 0 110.5C0 134.672 7.79025 157.076 21.0364 175.267L7.26538 216.318L49.7388 202.74C67.2116 214.315 88.0547 221 110.528 221C171.455 221 221 171.427 221 110.5C221 49.5731 171.455 0 110.528 0Z" fill="white"></path><path d="M174.825 156.04C172.159 163.568 161.579 169.811 153.139 171.634C147.366 172.864 139.824 173.844 114.437 163.319C81.9637 149.866 61.0516 116.868 59.4217 114.727C57.8609 112.586 46.2998 97.2539 46.2998 81.3972C46.2998 65.5404 54.3525 57.8192 57.5984 54.5042C60.2642 51.7832 64.6704 50.54 68.8971 50.54C70.2645 50.54 71.4938 50.6091 72.5988 50.6644C75.8447 50.8025 77.4746 50.9959 79.6156 56.1203C82.2814 62.5431 88.7732 78.3999 89.5467 80.0297C90.3341 81.6596 91.1214 83.8696 90.0164 86.0105C88.9804 88.2205 88.0688 89.2012 86.4389 91.0797C84.8091 92.9582 83.2621 94.3947 81.6322 96.4114C80.1404 98.1655 78.4553 100.044 80.3338 103.29C82.2123 106.467 88.7042 117.061 98.2624 125.57C110.597 136.55 120.597 140.059 124.175 141.551C126.84 142.656 130.017 142.393 131.965 140.321C134.437 137.655 137.49 133.235 140.598 128.885C142.808 125.763 145.598 125.376 148.526 126.481C151.51 127.517 167.297 135.321 170.543 136.937C173.789 138.567 175.93 139.341 176.717 140.708C177.491 142.075 177.491 148.498 174.825 156.04Z" fill="black"></path></svg><span class="ml-2">WhatsApp</span></a></li>
                    </ul>
                </div>
                <div class="cols">
                    <div class="footer-section newsletter">
                        <h3 style="font-size: 20px; font-weight: 900; font-family: Poppins, sans-serif;">News Letter</h3>
                        <p style="font-family: Poppins, sans-serif; font-size: 15px;">We Don't Spam</p>
                        <form>
                            <input type="email" placeholder="Email" style="padding: 10px;
                            margin-right: 20px;
                            width: 250px; 
                            height: 40px;
                            border-radius: 12px;
                            border-color: white;
                            text-align: left;
                            background-color: #f2f2f2;
                            font-size: 15px; 
                            font-family: Poppins, sans-serif;">
                        </form>
                    </div>
</body>
</html>