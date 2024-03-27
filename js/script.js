const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }
});

const loader = document.querySelector(".loader");
window.addEventListener("load", () => {
  setTimeout(() => {
    loader.style.display = "none";
  }, 1500);
});

document.getElementById("up").addEventListener("click", function () {
  var overlay = document.getElementById("overlay");
  var popupMenu = document.getElementById("popupMenu");
  if (overlay.style.display === "none") {
    overlay.style.display = "block"; // Show the overlay
    popupMenu.style.display = "block"; // Show the popup menu
  } else {
    overlay.style.display = "none"; // Hide the overlay
    popupMenu.style.display = "none"; // Hide the popup menu
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Get the close button
  var closeButton = document.querySelector(".close-btn");

  // Add click event listener to close button
  closeButton.addEventListener("click", function () {
    // Hide the popup menu
    document.getElementById("popupMenu").style.display = "none";
    overlay.style.display = "none";
  });
});
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
