let openSideBar = document.querySelector("#openSideBar");
let closeSideBar = document.querySelector("#closeSideBar");
let sideBar = document.querySelector("#sideBar");
let sideBarSub = document
  .querySelector("#sideBar")
  .querySelector(".menu")
  .querySelectorAll("li.relative");

sideBarSub.forEach((item) => {
  item.addEventListener("click", (e) => {
    let isDiv = item.children[0] === e.target.parentElement;
    let isLi = item.children[0] === e.target;
    if (isDiv || isLi) {
      item.querySelector("ul").classList.toggle("!h-0");
      item.querySelector("svg").classList.toggle("rotate-180");
    }
  });
});

const sideBarHandeler = () => {
  sideBar.classList.toggle("side-bar");
  sideBar.parentElement.classList.toggle("!z-50");
};

closeSideBar.addEventListener("click", sideBarHandeler);

openSideBar.addEventListener("click", sideBarHandeler);

// end side bar

// start card bar
let closeCard = document.querySelector("#closeCard");
let closeCard2 = document.querySelector("#closeCard2");
let cardBarIcon = document.querySelector("#cardBarIcon");

const cardBarHandler = () => {
  closeCard.parentElement.classList.toggle("!w-0");
};

cardBarIcon?.addEventListener("click", cardBarHandler);
closeCard?.addEventListener("click", cardBarHandler);
closeCard2?.addEventListener("click", cardBarHandler);

// end card bar

// start intro slider

const introSlider = new Swiper("#intro-slider", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: "auto",
  // autoplay: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".intro-swiper-button-next",
    prevEl: ".intro-swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// end intro slider

// start new product slider

const newProductsSlider = new Swiper("#newProducts-slider", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: "auto",
  // freeMode: true,
  // autoplay: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".newProducts-swiper-button-next",
    prevEl: ".newProducts-swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

// end new product slider

// start questions accordion

let questions = document.querySelector("#questions-accordion");

let questionItems = questions?.querySelectorAll(".questionItems");

questionItems?.forEach((item) => {
  item.addEventListener("click", (e) => {
    let questionTarget = e.target.parentElement.parentElement;

    [...questions.children].forEach((question) => {
      console.log(questionTarget.querySelector("#IsShowing"));
      if (question.id === questionTarget.id) {
        questionTarget.querySelector(".content").classList.toggle("!h-full");
        questionTarget
          .querySelector("#IsShowing")
          .classList.toggle("rotate-180");
      } else {
        question.querySelector(".content").classList.remove("!h-full");
        questionTarget
          .querySelector("#IsShowing")
          .classList.toggle("rotate-180");
      }
    });
  });
});
// end questions accordion

// start searchBox

let searchBox = document.querySelector("#searchBox");
let searchIcon = document.querySelector("#searchIcon");
let hiddenSearchBoxIcon = document.querySelector("#hiddenSearchBox");

searchIcon.addEventListener("click", (e) => {
  searchBox.classList.remove("opacity-0");
  searchBox.classList.remove("!w-0");
});

hiddenSearchBoxIcon.addEventListener("click", (e) => {
  e.preventDefault();

  searchBox.classList.add("opacity-0");
  searchBox.classList.add("!w-0");
});

// end searchBox
// start product slider
var menu = ["Slide 1", "Slide 2", "Slide 3"];

const productSlider = new Swiper("#product-slider", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: "auto",
  // autoplay: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
    dynamicMainBullets: 0,
    renderBullet: function (index, className) {
      return (
        '<img src="../dist/images/productPage' +
        (index + 1) +
        '.jpeg" class="aspect-square  w-max h-40  rounded-lg !scale-100 ' +
        className +
        ' ">'
      );
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: ".intro-swiper-button-next",
    prevEl: ".intro-swiper-button-prev",
  },

  // And if we need scrollbar
  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

var productPageSwiper = new Swiper(".productPageSwiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var productPageSwiper2 = new Swiper(".productPageSwiper2", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".productPage-swiper-button-next",
    prevEl: ".productPage-swiper-button-prev",
  },
  thumbs: {
    swiper: productPageSwiper,
  },
});
// end product slider

// start product input radio handler
let inputRadioHndler = (inputClass) => {
  let allSelectInput = document.querySelectorAll(inputClass);

  [...allSelectInput].forEach((selectInput) => {
    selectInput.addEventListener("click", (e) => {
      [...allSelectInput].forEach((input) => {
        input.parentElement.classList.remove("border-gray-500");
        e.target === input &&
          input.parentElement.classList.add("border-gray-500");
      });
    });
  });
};
// end product input radio handler

inputRadioHndler(".selectSizeInput"); // select size

inputRadioHndler(".selectColorInput"); // select color

let raitingStarsContainer = document.querySelector("#raitingStars");

[...raitingStarsContainer?.children].forEach((star, index) => {
  index + 1 >= raitingStarsContainer.dataset.rate
    ? Math.floor(raitingStarsContainer.dataset.rate) === index
      ? (star.firstElementChild.style.clipPath = `inset(0px 0px 0px ${
          (index - raitingStarsContainer.dataset.rate + 1) * 100
        }% )`)
      : (star.style.clipPath = "inset(0px 0px 0px 100%)")
    : (star.style.clipPath = "inset(0px 0px 0px 0%)");
});
