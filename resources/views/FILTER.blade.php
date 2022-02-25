<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

img {vertical-align: middle;}

/* Slideshow container */
.slide-container {
    max-width: 1150px;
    min-width:1100px;
    max-height: 500px;
    min-height: 500px;
    overflow:hidden;
    background-size:cover;
    position: relative;
    margin: auto;
    border-radius: 46px;
    align-items:center;
    justify-content:center;
    box-shadow: 0px 0px 15px 10px rgba(0, 0, 0, 0.1);
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */

.text h2{
    top: 5%;
    left:37%;
    position:absolute;
    font-family: Arial;
    font-style: normal;
    font-weight: 800;
    font-size: 55px;
    line-height: 75px;
    /* identical to box height */
    letter-spacing: 0.0018em;
    color: #FFFFFF;
}
.text p{
    position:absolute;
    width: 550px;
    font-family: Roboto;
    font-style: normal;
    font-weight: normal;
    top:30%;
    left:37%;
    font-size: 18px;
    line-height: 28px;
    /* or 156% */
    color: #FFFFFF;
}
/* Number text (1/3 etc) */

#logo1{
    position: absolute;
    width:20%;
    height:auto;
    top:17%;
    left:10%;
    margin: 0 auto;
    margin-top: 3vh;
}
.btns{
    bottom:10%;
    left:50%;
    position: absolute;
    align-content: center;
    display:block;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slide-container" style="margin-top: 50px;">

<div class="Slides fade">

  <img src="../image/6.jpg" style="width:100%" id="events">
  <div class="row">
     <div class ="col-md-4 ">
        <img src="src/Logo.png" alt="Logo" id="logo1">
     </div>
     <div class="col-md-8">
        <div class="text"><h2>Talks</h2></div>
        <div class="text"><p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> </div>
     </div>
   </div>


    <div class="btn-group btn-group-justified btns">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Apple</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Samsung</button>
        </div>
    </div>

</div>

<div class="Slides fade">
  <img src="../image/1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("Slides");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";

}
</script>

</body>
</html>
