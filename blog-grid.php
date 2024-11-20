<?php 
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./blog-grid.php";
$page_image = "./img/bread-bg.jpg";
require('head.php'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Blog Grid</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Blog Grid</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="blog grid section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog1.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >Bridging Neurology and Psychiatry</a
                        >
                      </h2>
                      <p class="text">
                      Neuropsychiatry is an emerging field that bridges the gap between neurology and psychiatry, focusing on disorders that involve both brain function and mental health.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog2.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >Breaking Stigma and Myths</a
                        >
                      </h2>
                      <p class="text">
                      Despite advancements, mental health remains a taboo subject in India. Many still believe that mental disorders are a result of weak willpower or bad karma.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog3.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >Recognizing Early Signs of Neuropsychiatric Disorders</a
                        >
                      </h2>
                      <p class="text">
                      Early detection can prevent severe complications in neuropsychiatric conditions. Yet, many people fail to recognize the signs, mistaking them for stress or aging.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog3.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >The Impact of Stress on Brain Health</a
                        >
                      </h2>
                      <p class="text">
                      Chronic stress is often dismissed as a normal part of life in India. However, prolonged stress can lead to serious neuropsychiatric issues, including anxiety.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog1.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >Indian Perspectives</a
                        >
                      </h2>
                      <p class="text">
                      India has a rich tradition of holistic healing through Ayurveda, yoga, and meditation. Combining these with neuropsychiatry can offer a comprehensive
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head">
                    <img src="img/blog2.jpg" alt="#" />
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date">01 Dec 2024</div>
                      <h2>
                        <a href="blog-single.php"
                          >Advancements in India</a
                        >
                      </h2>
                      <p class="text">
                      The intersection of technology and neuropsychiatry has opened new doors for diagnosis and treatment, making mental healthcare more accessible in India.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
              <div class="col-12">
                <!-- Pagination -->
                <div class="pagination">
                  <ul class="pagination-list">
                    <li>
                      <a href="#"><i class="icofont-rounded-left"></i></a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                      <a href="#"><i class="icofont-rounded-right"></i></a>
                    </li>
                  </ul>
                </div>
                <!--/ End Pagination -->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <?php require_once('main-sidebar.php'); ?>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Single News -->
    <?php require('footer.php'); ?>