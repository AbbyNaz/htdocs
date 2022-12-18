//change navbar styles on scroll
window.addEventListener('scroll', () =>{
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0)
})

//show login form
// function showLogin() {
//   var x = document.getElementById("Login_Container");
//   if (x.style.display === "none") {
//     x.style.display = "flex";
//   } else {
//     x.style.display = "none";
//   }
// }

//show and hide icon in login form
pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

    pwFields.forEach(password => {
      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
    })

  })
})


//show/hide faqs answer
const faqs = document.querySelectorAll('.faq');

faqs.forEach(faq => {
    faq.addEventListener('click', () => {
        faq.classList.toggle('open');

        //change icon on faqs from plus to minus

        const icon = faq.querySelector('.faq__icon i');
        if(icon.className === 'uil uil-plus') {
            icon.className = "uil uil-minus"
        } 
        else{ 
            icon.className = "uil uil-plus";
        }
    })
})


//this is for the swiper js in testimonials (HOMEPAGE)
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },

    //when window width is >=600px
    breakpoints: {
        600: {
            slidesPerView: 2
        } 
    }
});


//show/hide nav menu in tablet and phones
const menu = document.querySelector(".nav__menu");
const openMenuBtn = document.querySelector("#open-menu-btn");
const closeMenuBtn = document.querySelector("#close-menu-btn");

openMenuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeMenuBtn.style.display = "inline-block";
    openMenuBtn.style.display = "none";
})

//close nav menu in tablet
const closeNav = () => {
    menu.style.display = "none";
    closeMenuBtn.style.display = "none";
    openMenuBtn.style.display = "inline-block";
}

closeMenuBtn.addEventListener('click', closeNav)
