<?php 
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./contact.php";
$page_image = "./img/bread-bg.jpg";
require('head.php'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Contact Us</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6">
              <div class="contact-us-left">
                <!--Start Google-map -->
                <div id="myMap">
                  <iframe
                    id="gmap_canvas"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14027.024996078479!2d77.3133642!3d28.4868865!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce71911e293a5%3A0x81f1ef5773979cb!2sDisha%20Neuropsychiatry%20Centre!5e0!3m2!1sen!2sin!4v1731665045942!5m2!1sen!2sin"
                  ></iframe>
                </div>
                <!--/End Google-map -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-us-form">
                <h2>Contact With Us</h2>
                <p>
                  If you have any questions please fell free to contact with us.
                </p>
                <!-- Form -->
                <form class="form" method="post" action="admin/insert_contact.php">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          placeholder="Name"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          placeholder="Email"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="phone"
                          placeholder="Phone"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="subject"
                          placeholder="Subject"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea
                          name="message"
                          placeholder="Your Message"
                          required=""
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group login-btn">
                        <button class="btn" type="submit">Send</button>
                      </div>
                      <div class="checkbox">
                        <label class="checkbox-inline" for="2"
                          ><input name="news" id="2" type="checkbox" />Do you
                          want to subscribe our Newsletter ?</label
                        >
                      </div>
                    </div>
                  </div>
                </form>
                <!--/ End Form -->
              </div>
            </div>
          </div>
        </div>
        <div class="contact-info">
          <div class="row">
            <!-- single-info -->
            <div class="col-lg-4 col-12">
              <div class="single-info">
                <i class="icofont icofont-ui-call"></i>
                <div class="content">
                  <h3>+91- 084210 25285</h3>
                  <p>dsingh66@gmail.com</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
            <!-- single-info -->
            <div class="col-lg-4 col-12">
              <div class="single-info">
                <i class="icofont-google-map"></i>
                <div class="content">
                  <h3> F, C, R Park, F1204,</h3>
                  <p> Near Market 2 Block, </p>
                  <p>New Delhi, Delhi 110019</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
            <!-- single-info -->
            <div class="col-lg-4 col-12">
              <div class="single-info">
                <i class="icofont icofont-wall-clock"></i>
                <div class="content">
                  <h3>Mon - Sat: 9am - 10pm</h3>
                  <p>Holiday Occationally</p>
                </div>
              </div>
            </div>
            <!--/End single-info -->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Contact Us -->
    <?php require('footer.php'); ?>