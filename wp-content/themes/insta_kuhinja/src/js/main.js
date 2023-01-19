// Grab elements
const selectElement = (selector) => {
  const element = document.querySelector(selector);
  if (element) return element;
  throw new Error(
    `Something went wrong! Make sure that ${selector} exists/is typed correctly.`
  );
};

// create overlay
const overlay = document.createElement("div");
const createOverlay = (element, secondElement) => {
  overlay.classList.add("overlay");
  document.body.append(overlay);
  overlay.addEventListener("click", (e) => {
    element.classList.remove("activated");
    secondElement.classList.remove("activated");
    overlay.remove();
  });
};

//Nav styles on scroll
const scrollHeader = () => {
  const navbarElement = selectElement("#header");
  if (this.scrollY >= 15) {
    navbarElement.classList.add("activated");
  } else {
    navbarElement.classList.remove("activated");
  }
};

// Open menu & search pop-up
const menuToggleIcon = selectElement("#menu-toggle-icon");
const toggleMenu = () => {
  const mobileMenu = selectElement("#menu");
  mobileMenu.classList.toggle("activated");
  menuToggleIcon.classList.toggle("activated");
  createOverlay(mobileMenu, menuToggleIcon);
  if (!menuToggleIcon.classList.contains("activated")) {
    overlay.remove();
  }
};
menuToggleIcon.addEventListener("click", toggleMenu);

// Open/Close search form popup
const formOpenBtn = selectElement("#search-icon");
const formCloseBtn = selectElement("#form-close-btn");
const searchFormContainer = selectElement("#search-form-container");

formOpenBtn.addEventListener("click", (e) => {
  searchFormContainer.classList.add("activated");
});
formCloseBtn.addEventListener("click", (e) => {
  searchFormContainer.classList.remove("activated");
});
//  Close the search form popup on ESC keypress
window.addEventListener("keyup", (e) => {
  if (e.key === "Escape") {
    searchFormContainer.classList.remove("activated");
  }
});

// Switch theme/add to local storage
const bodyElement = document.body;
const themeToggleBtn = selectElement("#theme-toggle-btn");
const currentTheme = localStorage.getItem("currentTheme");
if (currentTheme) {
  bodyElement.classList.add("light-theme");
}

themeToggleBtn.addEventListener("click", (e) => {
  bodyElement.classList.toggle("light-theme");
  if (bodyElement.classList.contains("light-theme")) {
    localStorage.setItem("currentTheme", "themeActive");
  } else {
    localStorage.removeItem("currentTheme");
  }
});

// scroll padding top

const xy = document.querySelector(".header").offsetHeight;
// const documentEl = document.documentElement.style.setProperty(
// 	'--top-padding',
// 	xy + 'px'
// );
const mainPaddingTop = (document.querySelector("main").style = `
	padding-top: ${xy}px;
`);

//// scroll to top

const backToTop = document.querySelector(".scroll-to-top__wrapper");

window.addEventListener("scroll", (e) => {
  if (window.scrollY > 50) {
    backToTop.classList.add("active");
  } else backToTop.classList.remove("active");
});
backToTop.addEventListener("click", (e) => {
  scroll({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

//// socials navbar

const socialsNav = document.querySelector(".socials");

window.addEventListener("mousemove", (e) => {
  if (e.screenX < 20) {
    socialsNav.classList.add("active");
  } else {
    socialsNav.classList.remove("active");
  }
});

//////////  IMAGE CAROUSEL

if (document.body.classList.contains("home")) {
  const carouselSlider = document.querySelector(".hero__slider");
  const images = document.querySelectorAll(".hero-slider__slide");
  const leftArrow = document.querySelector(".hero-slider-button-prev");
  const rightArrow = document.querySelector(".hero-slider-button-next");
  if (rightArrow) {
    rightArrow.addEventListener("click", () => {
      nextSlide();
      if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, intervalTime);
      }
    });
  }
  if (leftArrow) {
    leftArrow.addEventListener("click", () => {
      prevSlide();
      if (auto) {
        clearInterval(slideInterval);
        slideInterval = setInterval(prevSlide, intervalTime);
      }
    });
  }

  const auto = true;
  const intervalTime = 5000;
  let slideInterval;

  const nextSlide = () => {
    const current = document.querySelector(".current");
    current.classList.remove("current");
    if (current.nextElementSibling) {
      current.nextElementSibling.classList.add("current");
    } else {
      images[0].classList.add("current");
    }
  };

  const prevSlide = () => {
    const current = document.querySelector(".current");
    current.classList.remove("current");
    if (current.previousElementSibling) {
      current.previousElementSibling.classList.add("current");
    } else {
      images[images.length - 1].classList.add("current");
    }
  };

  if (auto) {
    slideInterval = setInterval(nextSlide, intervalTime);
  }
}
