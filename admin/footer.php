
    <!-- Footer Area -->
    <footer id="footer" class="footer">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>About Us</h2>
                <p>
                  Your well-being is our priority, with tailored treatments for
                  lasting mental health.
                </p>
                <!-- Social -->
                <ul class="social">
                  <li>
                    <a href="https://www.facebook.com/doctordharmendrasingh"><i class="icofont-facebook"></i></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/docdharmendrasingh/"><i class="icofont-instagram"></i></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/in/dr-dharmendra-singh-0643b2234/"><i class="icofont-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/@dr.dharmendrasingh8301"><i class="icofont-brand-youtube"></i></a>
                  </li>
                  
                </ul>
                <!-- End Social -->
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer f-link">
                <h2>Quick Links</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="./index.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Home</a
                        >
                      </li>
                      <li>
                        <a href="./about.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >About Us</a
                        >
                      </li>
                      <li>
                        <a href="./service.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Services</a
                        >
                      </li>
                      <li>
                        <a href="./doctor.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Doctor</a
                        >
                      </li>
                      <li>
                        <a href="./contact.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Contact us</a
                        >
                      </li>
                    </ul>
                  </div>
                    
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Open Hours</h2>
                <p>
                Comprehensive treatments for mental health disorders, delivered with compassion and expertise for lasting recovery.
                </p>
                <ul class="time-sidual">
                  <li class="day">Monday - Friday <span>9.00-22.00</span></li>
                  <li class="day">Saturday <span>9.00-22.00</span></li>
                  <li class="day">Monday - Thusday <span>9.00-22.00</span></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
              <div class="single-footer">
                <h2>Newsletter</h2>
                <p>
                Expert psychiatric care addressing depression, anxiety, and more, promoting holistic mental health and emotional well-being.
                </p>
                <form
                  action="admin/subscriber.php"
                  method="get"
                  class="newsletter-inner"
                >
                  <input
                    name="email"
                    placeholder="Email Address"
                    class="common-input"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Your email address'"
                    required=""
                    type="email"
                  />
                  <button class="button">
                    <i class="icofont icofont-paper-plane"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <!-- Copyright -->
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <div class="copyright-content">
                <p>
                  © Copyright 2024 | All Rights Reserved by
                  <a href="#">Disha</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script>// Function to add the 'active' class dynamically to the current menu item
document.addEventListener("DOMContentLoaded", function() {
  const currentLocation = window.location.pathname.split('/').pop(); // Get the current page
  const menuItems = document.querySelectorAll('.nav.menu li a');

  menuItems.forEach(function(item) {
    const link = item.getAttribute('href').split('/').pop(); // Get the link's page part
    if (link === currentLocation || (currentLocation === '' && link === 'index.php')) {
      item.parentElement.classList.add('active'); // Add the active class to the parent <li> of the current link
    }
  });
});
</script>
  </body>

    
</html>
