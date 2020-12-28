<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
.html,body {
 height: 100%;
 padding: 0px;
 margin: 0px;
 font-family: 'Lora', serif;
font: 300 100%/1.5 Ubuntu, sans-serif;
  color: #333;
  overflow-x: hidden;
}
    /* Style the navigation bar */
.logo {
  float: left;
}   
.navigation-container {
  width: 1200px;
  margin: 0 auto;
  height: 70px;
}   
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
.navigation-bar img{
float:left;
}
/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  margin: 17px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}
/* Navbar links on mouse-over */
.navbar a:hover {
  color: grey;
}

/* Current/active navbar link */
.active {
  background-color: #555;
}
/* Image slider */
.slider-container {
  width: 100%;
  height: 100%;
  margin-left: auto;
  margin-right: auto;
  overflow: hidden;
  text-align: center;
}
    
.image-container {
  width: 2400px;
  height: 600px;
  position: relative;
  transition: left 2s;
  -webkit-transition: left 2s;
  -moz-transition: left 2s;
  -0-transition: left 2s;
}
.slider-image {
  float: left;
  margin: 0px;
  padding: 0px;
}
.button-container {
  top: -20px;
  position: relative;
}
.slider-button {
  display: inline-block;
  height: 10px;
  width: 10px;
  border-radius: 5px;
  background-color: white;
}
#slider-image-IMG_2982:target ~ .image-container {
    left: 0px;
}
#slider-image-IMG_2983:target ~ .image-container {
    left: -800px;
}
#slider-image-IMG_2984:target ~ .image-container {
    left: -1600px;
}
.AreaContainer {
  height: 100%;
  overflow: auto;
  margin: auto;
  color: white;
  background-color: navy;
  padding: 100px;
}
.h1 {
    text-align: center;
    font-size: 10px;
}
.element.style {
  font-size: 40px;
  color: rgb(100,100,100);
  text-shadow: 0 0 black;
  box-shadow: 0 0 black;
}
.center {
  text-align: center;
  font-weight: 100;
}
.slogan {
  font-family: 'Josefin Sans', sans-serif;
}
.element.style {
   background-image: url('IMG_3601.JPG');
   background-repeat: no-repeat;
   background-size: cover;
}
.service {
  height: 250px;
  background-color: green;
  width: 48%;
  margin: 1%;
  float: left;
  overflow: hidden;
  position: relative;
}
.element.style {
}
.a {
  text-decoration: none;
  color: inherit;
}
.element.style {
}
.bulletinOverlay {
  position: relative;
  z-index: 1;
  background-color: rgba(0,0,0,0.2);
  width: 100%;
  height: 100%;
  color: white;
  bottom: 0;
  left: 0;
  cursor: pointer;
}
.bulletinOverlay:hover {
  background-color: rgba(0,0,0,0.7);
  animation-name: darken;
  animation-duration: 0.6s;
}
.element.style {
}
.bullText {
  position: absolute;
  bottom: 0;
  left: 0;
  font-weight: 900;
  font-size: 20px;
  width: 80px;
  margin: 10%;
  float: left;
  height: auto;
}
.element.style {
   height: 0px;
}
.bullTextInner {
  font-size: 10px;
  font-weight: 300;
  overflow: hidden;
  margin-top: 20px;
}
.bullTextInnerComm {
  font-size: 25px;
  font-weight: 900;
  overflow: hidden;
  height: 0px;
}
.element.style {
  background-image: url('IMG_3601.JPG');
  background-repeat: no-repeat;
  background-size: cover;
}
.footer {
   clear: both;
   position: relative;
   height: 200px;
   margin-top: -100px;
   width: 100%;
   background-color: navy;
   color: white;
   text-align: center;
}
* {
 -moz-box-sizing: border-box;
 -webkit-box-sizing: border-box;
}
.a {
 text-decoration: none;
 color: inherit;
}
* {
 -webkit-box-sizing: border-box;
 box-sizing: border-box;
}
.element.style {
}
.fa {
  display: inline block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialised;
  -moz-osx-font-smoothing: grayscale;
}
.fa {
  width: 70px;
  height: 70px;
  text-decoration: none !important;
  display: table-cell !important;
  vertical-align: middle !important;
}
.signupArea {
  margin-top: 30px;
  margin-bottom: 20px;
  float: center;
  width: 100%;
}
.element.style {
  margin-right:1.25%;
  margin-top:5px; 
  margin-bottom: 20px; 
  font-size: 30px; 
  width: 33.75%;
}
/* Style the form element with a border around it */
form {
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 20px;
  background-color: #303036;
}

/* Style the input elements and the submit button */
input[type=text], input[type=submit] {
  width: 50%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Add margins to the checkbox */
input[type=checkbox] {
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}
*{
  margin: 0;
  padding: 0;
  font-family: "montserrat",sans-serif;
}
body{
  background: #333;
}
.container{
  background: url(bg.jpg) no-repeat center;
  background-size: cover;
  padding: 100px 40px;
  text-align: center;
  color: white;
}
.container p {
  max-width: 600px;
  margin: 40px auto;
  font-size: 15px;
  font-weight: 300;
}
.email-box{
  height: 40px;
  justify-content: center;
  display: flex; /*its better to use inline-flex*/
}
.email-box i{
  background: #2f3542;
  width: 40px;
  line-height: 40px;
}
.tbox,.btn{
  border: none;
  outline: none;
}
.tbox{
  width: 0px;
  transition: 0.6s;
}
.email-box:hover > .tbox,.tbox:focus{
  width: 260px;
  padding: 0 10px;
}
.btn{
  background: #2f3542;
  color: white;
  padding: 0 10px;
  text-transform: uppercase;
  cursor: pointer;
}
    
/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 100px) {
  .navbar a {
    float: none;
    display: block;
  }
    .topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
} 
/* This will auromatically word for what we do part of the website*/
@media only screen and (max-width: 700px){
.service {
  margin: 1px;
}
@media only screen and (max-width: 800px){
.service {
  height: 150px;
}
@media only screen and (max-width: 1300px){
.service {
  height: 200px;
}
@media only screen and (max-width: 1600px){
.service {
  height: 250px;
}
@media only screen and (max-width: 1300px){
.bullText {
  font-size: 30px;
}
/* This is for the footer social media*/
@media only screen and (max-width: 1000px){
.socialArea {
  margin-top: 30px;
}
@media only screen and (max-width: 700px){
.area {
  width: 85%;
  margin-top: 40px;
  margin-bottom: 40px;
}
@media only screen and (max-width: 1000px){
.socialButton {
  font-size: 20px;
}
@media only screen and (max-width: 1000px){
.fa {
  width: 40px;
  height: 40px;
}
@media only screen and (max-width: 1000px){
.signupArea {
  margin-top: 10px;
}
.label {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  text-align: right;
  width: 400px;
  line-height: 26px;
  margin-bottom: 10px;
}
h2 {
  margin: 0;
  color: #8495a5;
  font-size: 2.5em;
  font-weight: 300;
}
#contact-form {
  max-width: 1208px;
  max-width: 75.5rem;
  margin: 0 auto;
}
#contact, label, input[name="submit"] {
  position: relative;
}
label > span, input, textarea, button {
  box-sizing: border-box;
}
label {
  display: block;
}
label > span {
  display: none;
}
input, textarea, button {
  width: 100%;
  padding: 0.5em;
  border: none;
  font: 300 100%/1.2 Ubuntu, sans-serif;
}
input[type="text"], input[type="email"], textarea {
  margin: 0 0 1em;
  border: 1px solid #ccc;
  outline: none;
}
input.invalid, textarea.invalid {
  border-color: #d5144d;
}
textarea {
  height: 6em;
}
input[type="submit"], button {
  background: #a7cd80;
  color: #333;
}
input[type="submit"]:hover, button:hover {
  background: #91b36f;
}
@media screen and (min-width: 30em) {
  #contact-form h2 {
    margin-left: 26.3736%;
    font-size: 2em;
    line-height: 1.5;
  }
  label > span {
    vertical-align: top;
    display: inline-block;
    width: 26.3736%;
    padding: 0.5em;
    border: 1px solid transparent;
    text-align: right;
  }
  input, textarea, button {
    width: 73.6263%;
    line-height: 1.5;
  }
  textarea {
    height: 10em;
  }
  input[type="submit"], button {
    margin-left: 26.3736%;
  }
}
@media screen and (min-width: 48em) {
  #contact-form {
    text-align: justify;
    line-height: 0;
  }
  #contact-form:after {
    content: '';
    display: inline-block;
    width: 100%;
  }
  #contact-form h2 {
    margin-left: 17.2661%;
  }
  #contact-form form, #contact-form aside {
    vertical-align: top;
    display: inline-block;
    width: 65.4676%;
    text-align: left;
    line-height: 1.5;
  }
  #contact-form aside {
    width: 30.9353%;
  }
}
html {
  font: 300 100%/1.5 Ubuntu, sans-serif;
  color: #333;
  overflow-x: hidden;
}
h2 {
  margin: 0;
  color: #8495a5;
  font-size: 2.5em;
  font-weight: 300;
}
#contact-form {
  max-width: 1208px;
  max-width: 75.5rem;
  margin: 0 auto;
}
#contact, label, input[name="submit"] {
  position: relative;
}
label > span, input, textarea, button {
  box-sizing: border-box;
}
label {
  display: block;
}
label > span {
  display: none;
}
input, textarea, button {
  width: 100%;
  padding: 0.5em;
  border: none;
  font: 300 100%/1.2 Ubuntu, sans-serif;
}
input[type="text"], input[type="email"], textarea {
  margin: 0 0 1em;
  border: 1px solid #ccc;
  outline: none;
}
input.invalid, textarea.invalid {
  border-color: #d5144d;
}
textarea {
  height: 6em;
}
input[type="submit"], button {
  background: #a7cd80;
  color: #333;
}
input[type="submit"]:hover, button:hover {
  background: #91b36f;
}
@media screen and (min-width: 30em) {
  #contact-form h2 {
    margin-left: 26.3736%;
    font-size: 2em;
    line-height: 1.5;
  }
  label > span {
    vertical-align: top;
    display: inline-block;
    width: 26.3736%;
    padding: 0.5em;
    border: 1px solid transparent;
    text-align: right;
  }
  input, textarea, button {
    width: 73.6263%;
    line-height: 1.5;
  }
  textarea {
    height: 10em;
  }
  input[type="submit"], button {
    margin-left: 26.3736%;
  }
}
@media screen and (min-width: 48em) {
  #contact-form {
    text-align: justify;
    line-height: 0;
	background-color: navy;
  }
  #contact-form:after {
    content: '';
    display: inline-block;
    width: 100%;
  }
  #contact-form h2 {
    margin-left: 17.2661%;
  }
  #contact-form form, #contact-form aside {
    vertical-align: top;
    display: inline-block;
    width: 65.4676%;
    text-align: left;
    line-height: 1.5;
  }
  #contact-form aside {
    width: 30.9353%;
  }
}	
	
</style>
<body bgcolor="#3A1CC0">
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="style.css" type="text/css" rel="stylesheet">
<div class="navbar">
<div id="navigation-container">
  <img src="hi.jpeg" class="logo" height="50" width"50"/>
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="index(1).php#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <a href="form.html"><i class="fa fa-fw fa-user"></i> Login</a>
  <a href="register.html"><i class="fa fa-fw fa-user"></i> Register</a>
   <form action="/action_page.php">
   <li style="float:right"><input type="text" placeholder="Search.." name="search">
   <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
</div>
<!-- Slider Container -->
<div class="slider-container">
    <span id="slider-image-IMG_2982"></span>
    <span id="slider-image-IMG_2983"></span>
    <span id="slider-image-IMG_2984"></span>
    <div class="image-container">
        <img src="IMG_2982.JPG" class="slider-image" height="600" width="800"/>
        <img src="IMG_2983.JPG" class="slider-image" height="600" width="800"/>
        <img src="IMG_2984.JPG" class="slider-image" height="600" width="800"/>
    </div>
    <div class="button-container">
        <a href="#slider-image-IMG_2982" class="slider-button"></a>
        <a href="#slider-image-IMG_2983" class="slider-button"></a>
        <a href="#slider-image-IMG_2984" class="slider-button"></a>
        </div>
    </div>
<!-- Area Container -->
<div class="AreaContainer">
    <div class="Area" id="openingstatement">
    <h1><div class="bold">
        "          
                      AT CHRISTFULFILMENT MINISTRY WE BELIVE THAT
                      WE ARE CALLED TO ESTABLISH MINISTRIES AND
                      RELEASE DESTINIES.
                                "
    </div></h1>
    <p></p>
        <div class="bold">ESTABLISHING MINISTRIES: 
    
                      We are here to “open you up” to God’s intentions and purposes for your life and your Ministry. You can find satisfaction in whatever the Lord is calling you into."</div>
    <p></p> 
    <p>
        
                       The Lord may have called you to be an intercessor in your local church, it could be to support and strengthen the leadership in a range of ways, it might be to tidy up the place of worship, ushering, etc. In whatever capacity you have been called to function, you can reach your maximum potential, and you can do so with the knowledge and satisfaction that - you are operating at the very centre of God’s eternal purpose for your life.
                        
    </p>
    <p></p>
    <div class="bold">RELEASING DESTINIES:
        
                        Do you see or feel yourself tied up? Are you wallowing in re-occurring defeats and failures? Are you helpless and at the verge of hopelessness? Are you bogged down with heaviness, sickness, lack, worries and anxiety? Here in Destiny Church, we will simply show you the way out.</div>
                        
    <p></p>
    <p style="margin-top:50px;">
     "We are the Destiny Church (Birmingham Branch in the UK), a people of Destiny with our feet and heart solidly anchored in the living word of God and our sublimed faith rooted in our Triumphant Saviour – the Lord Jesus Christ. The fact that you’ve logged-on to this site convinces me that you are an individual seeking and yearning after God’s heart and God’s solution to your needs."
    </p>
    </div>
</div>
    <div class="AreaContainer" id="bulletin">
        <div class="area animate">
        <div class="slogan center" style="font-size:40px; color:rgb(100,100,100)">
            What we do
            </div>
    <div class="service" style="
                         background-image: url('IMG_3601.JPG');
                         background-repeat: no-repeat;
                         background-size: cover;
                ">
     <a href="programmes.html">
      <div class="bulletinOverlay" id="bulOvSun" onclick="sundays()">
      <div class="bullText">
          
                                Sundays
                             
    <div class="bullTextInner" id="innerSun" style="height: 0px;">
      "
                        On sundays we start from 10AM to 1PM:"
        <br>
        "
                        We have youth meetings service:
        1PM to 2PM. You dont need to be young to come along. Join us if your feeling youthful.
                                                                                            "
        </div>
    </div>
   </div>
  </a>
 </div>
    <div class="service" style="
                         background-image: url('IMG_3601.JPG');
                         background-repeat: no-repeat;
                         background-size: cover;
               ">
    <a href="programmes.html#wednesdays">
     <div class="bulletinOverlay" id="bulOvWed" onclick="wednesday">
     <div class="bullText">
         "
                            Wednesdays
                            "
   <div class="bullTextInner" id="innerWed" style="height: 0px;">
     "
                       On Wednesdays we have choir meeting from 6PM to 8PM."
       <br>
       </div>
   </div>
  </div>
 </a>
</div>
     <div class="service" style="
                          background-image: url('IMG_3601.JPG');
                          background-repeat: no-repeat;
                          background-size: cover;
                ">
     <a href="programmes.html#fridays">
      <div class="bulletinOverlay" id="bulOFri" onclick="friday">
      <div class="bullText">
          "
                             Fridays
                             "
   <div class="bullTextInner" id="innerFri" style="height: 0px;">
     <p></p>
      <div class="bold">Youth Fellowship:</div>
        " The youth fellowship together from 5pm to 8pm on fridays.
                                This includes worship, prayer, bible
        study and evanglism. On fridays we equip our youth to live
        impactful lives for Gods kingdom."
        <p></p>
        <p></p>
        <div class="bold">Men's Tornadoes/Women at war:</div>
        " We also hold weekly alternating prayer meetings for men and women.
        Click to find out more about our schedule."
        <p></p>
       </div>
     </div>
    </div>
   </a>
  </div>
       <div class="service" style="
                          background-image: url('IMG_3601.JPG');
                            background-repeat: no-repeat;
                            background-size: cover;
                  ">
      <a href="programmes.h">
       <div class="bulletinOverlay" id="bulOSat" onclick="Saturday">
       <div class="bullText">
         "
                             Saturdays
                             "
   <div class="bullTextInner" id="innerSat" style="height: 0px;">
     "
                                    On Saturday we hold several meetings
     including warfare prayer, outreach and destination children.
     click to find out more.
                         "
      </div>
     </div>
    </div>
   </a>
  </div>
</div>
</div>
<div class="AreaContainer" id="bulletin">
        <div class="area animate">
        <div class="slogan center" style="font-size:40px; color:rgb(100,100,100)">
            Where can you find us?
            </div>
<div id="map">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.3058582708773!2d-1.8967011841935708!3d52.49170282980881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc976fc2e20b%3A0x811e96896b49e8a3!2sPritchett%20St%2C%20Birmingham%20B6%204EH!5e0!3m2!1sen!2suk!4v1609002542681!5m2!1sen!2suk" width="900" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-a0bsUjfgkldwrlIFLcu17uqE8VOd2dI&amp;callback=myMap"></script>
<br>
<div class="bold">We hold our services and activities at the same location.</div> 
<br>
205 New John Street West
<br>
<br>
Hockley
<br>
<br>
Birmingham B19 3TZ
<br>
<br>

            Tel: 07830 215 723

        
</div>
</div>
<div class="AreaContainer" id="bulletin">
        <div class="area animate" id="contact">
        <div class="slogan center" style="font-size:40px; color:rgb(100,100,100)">
            Contact Us
	<br>
	<br>
</div>
 
 
      
	</div>
<section id="contact-form">
  <form id="contact" name="contact" accept-charset="utf-8">
    <label><span>Name</span><input name="name" type="text" placeholder="Name"/></label>
    <label><span>Email</span><input name="email" type="email" placeholder="Email"/></label>
    <label><span>Message</span><textarea name="message" placeholder="Message"></textarea></label>
    <input name="submit" type="submit" value="Send"/>
  </form>
  <aside>
    <p>Just hit Send on an empty form to see the invalid input animation</p>
    <p>Fill in the form fields to see the success animation (no real validation, any random input will do)</p>
  </aside>
</section>
 </div>
 

<!-- footer -->
<!-- // footer -->
</body>
</html>