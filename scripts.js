window.onscroll = function () {
  scrollNavBar()
}

// close mobile menu
const navLink = document.querySelectorAll('.nav-link')
navLink.forEach((link) => {
  link.addEventListener('click', () => {
    document.querySelector('.navbar-collapse ').classList.remove('show')
  })
})

function scrollNavBar() {
  if (window.innerWidth > 992) {
    if (
      document.body.scrollTop > 80 ||
      document.documentElement.scrollTop > 80
    ) {
      document.querySelector('.navbar').style.height = '75px'
      document.querySelector('#logo-img').style.maxWidth = '125px'
    } else {
      document.querySelector('.navbar').style.height = '139.4px'
      document.querySelector('#logo-img').style.maxWidth = '200px'
    }
  } else {
    if (
      document.body.scrollTop > 80 ||
      document.documentElement.scrollTop > 80
    ) {
      document.querySelector('.navbar').style.height = '75px'
      document.querySelector('.logo-img-mobile').style.height = '50px'
    } else {
      document.querySelector('.navbar').style.height = '118.55px'
      document.querySelector('.logo-img-mobile').style.height = '92.55px'
    }
  }
}
