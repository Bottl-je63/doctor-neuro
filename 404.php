<?php 
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./404.php";
$page_image = "./img/slider2.jpg";
require('head.php'); ?>

    <!-- Error Page -->
    <section class="error-page section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-12">
            <!-- Error Inner -->
            <div class="error-inner">
              <h1>404<span>Oop's sorry we can't find that page!</span></h1>
              <p>
                Aenean eget sollicitudin lorem, et pretium felis. Nullam euismod
                diam libero, sed dapibus leo laoreet ut. Suspendisse potenti.
                Phasellus urna lacus
              </p>
              <form class="search-form">
                <input placeholder="Search from Here" type="text" />
                <button class="btn" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div>
            <!--/ End Error Inner -->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Error Page -->
    <?php require('footer.php'); ?>