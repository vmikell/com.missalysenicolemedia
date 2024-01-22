  <!-- 
    ==================
    FOOTER STARTS HERE
    ==================
   -->
  <footer class="footer justify-content-center text-center">
    <h5 class="footer-handle"><a href="mailto:alyse@missalysenicolemedia.com">alyse@missalysenicolemedia.com</a>
      <br>
      <p class="footer-handle-address">PO Box 1043 Salem, MA 01970</p>
    </h5>
    <ul class="footer-links justify-content-center mb-5">
      <li><a href="#">welcome</a></li>
      <li><a href="#services">services</a></li>
      <li><a href="#my-platforms">my platforms</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
    <div class="footer-social">
      <span><a href="mailto:alyse@missalysenicolemedia.com"><i class="fa-solid fa-envelope"></i></a></span>
    </div>
    <img src="https://missalysenicolemedia.com/wp-content/uploads/2022/09/wave_graphic_dark_pink.png" alt="thingstodoinsalem.com a Miss Alyse Nicole">
    <div class="footer-copyright pt-5 pb-5">
      copyright &copy
      <script>document.write( new Date().getFullYear() )</script>
      Miss Alyse Nicole Media. All Rights reserved. | site powered by <a href="https://www.victormikell.com"
        target="_blank">Victor Mikell Design</a>
    </div>
  </footer>
  <!-- 
    ================
    FOOTER ENDS HERE
    ================
    -->
  <script>
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
  </script>
  <!-- import bootstrap V5 bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>