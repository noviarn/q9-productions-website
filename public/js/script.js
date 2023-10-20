let menuBtn = document.querySelector(".menu-btn");
let navbar = document.querySelector(".navbar");
let navbarLinks = document.querySelector(".nav-links");

// navbar menu js

menuBtn.onclick = () => {
  navbarLinks.classList.toggle("active");
};

$(document).ready(function () {
  // this part disables the right click
  $(menuBtn).on("contextmenu", function (e) {
    return false;
  });
  //this part disables dragging of image
  $(menuBtn).on("dragstart", function (e) {
    return false;
  });
});

window.onscroll = () => {
  if (window.scrollY > 0) {
    navbar.classList.add("active");
  } else {
    navbar.classList.remove("active");
  }
};

// home our clients slider js

var swiper = new Swiper(".our-clients-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    991: {
      slidesPerView: 5,
    },
  },
});

// open close modal js
var modal = document.getElementById("modal-container");
var closeButton = document.getElementById("close-btn");

function openModal() {
  modal.style.transform = "translateY(0)";
}

function closeModal() {
  modal.style.transform = "translateY(100%)";
}

var openButton = document.getElementById("open-modal-btn");

openButton.addEventListener("click", openModal);
closeButton.addEventListener("click", closeModal);

// date and time js
// const timeElement = document.querySelector(".time");
// const dateElement = document.querySelector(".date");
// const yearElement = document.querySelector(".current-year");

// function formatTime(date) {
//   const hours = date.getHours();
//   const minutes = date.getMinutes();
//   const seconds = date.getSeconds();

//   return `${hours.toString().padStart(2, "0")} ${minutes
//     .toString()
//     .padStart(2, "0")} ${seconds.toString().padStart(2, "0")}`;
// }

// function formatDate(date) {
//   return `${String(date.getDate()).padStart(2, "0")} ${String(
//     date.getMonth() + 1
//   ).padStart(2, "0")} ${date.getFullYear()}`;
// }

// setInterval(() => {
//   const now = new Date();

//   timeElement.textContent = formatTime(now);
//   dateElement.textContent = formatDate(now);
// }, 200);
