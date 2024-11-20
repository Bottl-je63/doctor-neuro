<?php 
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./appointment.php";
$page_image = "./img/slider2.jpg";
require('head.php'); ?>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Get Your Appointment</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Appointment</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Appointment -->
    <section class="appointment single-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-12">
            <div class="appointment-inner">
              <div class="title">
                <h3>Book your appointment</h3>
                <p>We will confirm your appointment within 2 hours</p>
              </div>
              <?php require('appointment-form.php'); ?>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <div class="work-hour">
              <h3>Working Hours</h3>
              <ul class="time-sidual">
                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                <li class="day">Saturday <span>9.00-18.30</span></li>
                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                <li class="day">Saturday <span>9.00-18.30</span></li>
                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                <li class="day">Monday - Friday <span>8.00-20.00</span></li>
                <li class="day">Saturday <span>9.00-18.30</span></li>
                <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/End Appointment -->
    <?php require('footer.php'); ?>