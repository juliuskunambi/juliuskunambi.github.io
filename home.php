<!DOCTYPE html>
<html>
<head><center><h1><font color="orange">Welcome to The official website of A|A Above Average<right><img src="03.gif" height="5%" width="2%" align="right"></h1></center></font>
	<hr color="gray" size="2">
	<title> Welcome to my website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
			background-image: url('333.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style>

</head>
<body> 
	<form>
		<left><img src="zz.png" height="7%" width="7%" align="left"></left></form>

<div class="nav">
		<a href="hom.php">Home</a>
		<a href="aboutus.php">About</a>
		<a href="Service.php">Service</a>
		<a href="Product.php">Product</a>
		<a href="delivery.php">Delivery</a>
		<a href="contactus.php">Contact</a>

		<div class="search">
			<form>
				<input type="text" placeholder="search.....">
				<button>search</button>
			</form>
	</div>
	<div class="photos">
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="" style="width:65%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="" style="width:65%">
  <div class="text"></div>
</div>

<div class="mySlides fade">

  <div class="numbertext"></div>
  <img src= "" style="width:65%">

</div>

<br>

<div style="text-align:center">

  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</div>

</body>
</html>