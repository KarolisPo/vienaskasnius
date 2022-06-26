
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const header = document.querySelector(".header");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  if(hamburger.classList.contains("active")){
    hamburger.classList.remove('active');
    navMenu.classList.remove("active");
  }else{
    hamburger.classList.add("active");
    navMenu.classList.add("active");
  }
}



var slideIndex = 1;
showSlides(slideIndex);

function changeSlide(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  const slides = document.getElementsByClassName("hidden-comment");

  if (n > slides.length) {
    slideIndex = 1;
  }

  if (n < 1) {
    slideIndex = slides.length;
  }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}


//SLIDESHOW automatic
// showSlides();

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("hidden-comment");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {
//     slideIndex = 1;
//   }
//   slides[slideIndex - 1].style.display = "block";
//   setTimeout(showSlides, 4000); // Change image every 2 seconds
// }
