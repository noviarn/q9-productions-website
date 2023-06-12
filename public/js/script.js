let searchBtn = document.querySelector(".search-btn");
let closeBtn = document.querySelector(".close-btn");
let menuBtn = document.querySelector(".menu-btn");
let searchBox = document.querySelector(".search-box");
let navbar = document.querySelector(".navbar");
let navbarLinks = document.querySelector(".nav-links");

// navbar search js

searchBtn.onclick = function () {
  searchBox.classList.add("active");
  searchBtn.classList.add("invisible");
  menuBtn.classList.add("invisible");
};

closeBtn.onclick = function () {
  searchBox.classList.remove("active");
  searchBtn.classList.remove("invisible");
  menuBtn.classList.remove("invisible");
};

// navbar menu js

menuBtn.onclick = () => {
  navbarLinks.classList.toggle("active");
};

window.onscroll = () => {
  if (window.scrollY > 0) {
    navbar.classList.add("active");
  } else {
    navbar.classList.remove("active");
  }
};

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
