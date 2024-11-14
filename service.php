<?php include('header.php'); ?>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Service</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Service</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start service -->
    <section class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-prescription"></i>
              <h4><a href="service-details.php">General Psychiatric Care</a></h4>
              <p>
              Comprehensive assessment and treatment plans to address various mental health concerns.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-tooth"></i>
              <h4><a href="service-details.php">Depression Treatment</a></h4>
              <p>
              Expert care for managing and overcoming depression with personalised therapy and medication plans.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-heart-alt"></i>
              <h4><a href="service-details.php">Anxiety Management</a></h4>
              <p>
              Specialized programs to reduce anxiety symptoms and improve overall mental well-being.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-listening"></i>
              <h4><a href="service-details.php">Bipolar Disorder Treatment</a></h4>
              <p>
              Effective strategies to manage mood swings and stabilise emotional health.

              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-eye-alt"></i>
              <h4><a href="service-details.php">OCD Treatment</a></h4>
              <p>
              Targeted therapies for obsessive-compulsive disorder to improve daily functioning and quality of life.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="single-service">
              <i class="icofont icofont-blood"></i>
              <h4><a href="service-details.php">Child Psychiatry Services</a></h4>
              <p>
              Specialized care for children and adolescents facing psychiatric challenges, including academic counselling.

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End service -->

    <!-- clients -->
    <div class="clients overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="owl-carousel clients-slider">
              <div class="single-clients">
                <img src="img/client1.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client2.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client3.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client4.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client5.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client1.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client2.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client3.png" alt="#" />
              </div>
              <div class="single-clients">
                <img src="img/client4.png" alt="#" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Ens clients -->

    <!-- Start Appointment -->
    <section class="appointment">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>We Are Always Ready to Help You. Book An Appointment</h2>
              <img src="img/section-img.png" alt="#" />
              <p>
              Focused on providing compassionate, individualized care for your mental wellness.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-12 col-12">
          <?php include('appointmentform.php'); ?>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="appointment-image">
              <img src="img/contact-img.png" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-12">
            <!-- Start Newsletter Form -->
            <div class="subscribe-text">
              <h6>Sign up for newsletter</h6>
              <p class="">
              Guiding you toward a healthier mind with expert support and <br>personalized care.
              </p>
            </div>
            <!-- End Newsletter Form -->
          </div>
          <div class="col-lg-6 col-12">
            <!-- Start Newsletter Form -->
            <div class="subscribe-form">
              <form
                action="https://drdharmendra.com/mail/mail.php"
                method="get"
                class="newsletter-inner"
              >
                <input
                  name="EMAIL"
                  placeholder="Your email address"
                  class="common-input"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your email address'"
                  required=""
                  type="email"
                />
                <button class="btn">Subscribe</button>
              </form>
            </div>
            <!-- End Newsletter Form -->
          </div>
        </div>
      </div>
    </section>
    <!-- /End Newsletter Area -->
    <?php include('footer.php'); ?>