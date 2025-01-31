// MENU HIDEN SHOW HIDDEN
const navMenu = document.getElementById("nav-menu"),
  navToggle = document.getElementById("nav-toggle"),
  navClose = document.getElementById("nav-close");

// MENU SHOW
// Validate if constant exist
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

// MENU HIDDEN
// Validate if constant exist
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove("show-menu");
  });
}

// REMOVE MENU MOBILE
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  // when we click on each nav__link, we remove the show-menu class
  navMenu.classList.remove("show-menu");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

// accordion skills
const skillsContent = document.getElementsByClassName("skills__content"),
  skillsHeader = document.querySelectorAll(".skills__header");

function toggleSkills() {
  let itemClass = this.parentNode.className;

  for (i = 0; i < skillsContent.length; i++) {
    skillsContent[i].className = "skills__content skills__close";
  }

  if (itemClass === "skills__content skills__close") {
    this.parentNode.className = "skills__content skills__open";
  }
}
// const skillsContent = document.getElementsByClassName("skills__content"),
//   skillsHeader = document.querySelectorAll(".skills__header");

// function toggleSkills() {
//   let itemClassName = this.parentNode.ClassName;

//   for (i = 0; i < skillsContent.length; i++) {
//     skillsContent[i].className = "skills__content skills__close";
//   }

//   if (itemClass === "skills__content skills__close") {
//     this.parentNode.className = "skills__content skills__open";
//   }
// }

// skillsHeader.forEach((el) => {
//   el.addEventListener("click", toggleSkills);
// });
skillsHeader.forEach((el) => {
  el.addEventListener("click", toggleSkills);
});

// Qualification Tabs
const tabs = document.querySelectorAll("[data-target"),
  tabContents = document.querySelectorAll("[data-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.target);

    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("qualification__active");
    });
    target.classList.add("qualification__active");

    tabs.forEach((tab) => {
      tab.classList.remove("qualification__active");
    });
    tab.classList.add("qualification__active");
  });
});

// Portfolio swiper

let swiper = new Swiper(".swiper", {
  cssMode: true,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickabel: true,
  },
  mousewheel: true,
  keyboard: true,
});

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll("section[id]");

function scrollActive() {
  // bingung
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active-link");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active-link");
    }
  });
}
window.addEventListener("scroll", scrollActive);

// /*==================== CHANGE BACKGROUND HEADER ====================*/
// function scrollHeader() {
//   const nav = document.getElementById("header");
//   // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
//   if (this.scrollY >= 200) nav.classList.add("scroll-header");
//   else nav.classList.remove("scroll-header");
// }
// window.addEventListener("scroll", scrollHeader);

// function scrollTop() {
//   const scrollTop = document.getElementById("scroll-up");
//   // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
//   if (this.scrollY >= 560) scrollTop.classList.add("show-scroll");
//   else scrollTop.classList.remove("show-scroll");
// }
// window.addEventListener("scroll", scrollTop);

/*==================== DARK LIGHT THEME ====================*/
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "uil-sun";

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  themeButton.classList.contains(iconTheme) ? "uil-moon" : "uil-sun";

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
    darkTheme
  );
  themeButton.classList[selectedIcon === "uil-moon" ? "add" : "remove"](
    iconTheme
  );
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
  // Add or remove the dark / icon theme
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  // We save the theme and the current icon that the user chose
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});

const contactForm = document.getElementById("contact-form");
const loader = document.querySelector(".loader");

loader.style.display = "none";

contactForm.addEventListener("submit", function (e) {
  e.preventDefault();
  loader.style.display = "block";
  const url = e.target.action;
  const formData = new FormData(contactForm);

  fetch(url, {
    method: "POST",
    body: formData,
    mode: "no-cors",
  })
    .then(() => {
      loader.style.display = "none";
      window.location.href = "/thankyou.html";
    })
    .catch((e) => alert("Error occured"));
});
////////////////////////////////////////
document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara default

    // Mengirim data formulir menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "https://formspree.io/f/xgebgdrw", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Mengambil nilai input dari formulir
    var name = document.getElementsByName("name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var subject = document.getElementsByName("subject")[0].value;
    var message = document.getElementsByName("message")[0].value;

    // Mengirim data sebagai string yang diformat seperti query parameter
    var data =
      "name=" +
      encodeURIComponent(name) +
      "&email=" +
      encodeURIComponent(email) +
      "&subject=" +
      encodeURIComponent(subject) +
      "&message=" +
      encodeURIComponent(message);

    // Menangani respon AJAX
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Mengarahkan pengguna ke halaman data.html setelah berhasil mengirim formulir
          window.location.href = "thankyou.html";
        } else {
          // Menampilkan pesan kesalahan jika terjadi masalah saat mengirim formulir
          alert("Terjadi masalah saat mengirim formulir. Silakan coba lagi.");
        }
      }
    };

    // Mengirim data formulir
    xhr.send(data);
  });
