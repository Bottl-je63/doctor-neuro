<?php 
<<<<<<< HEAD
// Page configuration
=======
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./blog-grid.php";
$page_image = "./img/bread-bg.jpg";
<<<<<<< HEAD

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// API Configuration
define('MEDIASTACK_API_KEY', 'fc14cab44c29e4b6a99ff73d35851d61');
define('MEDIASTACK_API_URL', 'http://api.mediastack.com/v1/news');

/**
 * Fetch news articles from the API
 * @param string $search Search term (optional)
 * @return array Array of articles
 */
function fetchNewsArticles($search = '') {
    // Define keywords for random health articles
    $healthKeywords = array(
        'mental health',
        'psychology',
        'psychiatry',
        'therapy',
        'wellness',
        'depression',
        'anxiety',
        'mental wellness',
        'brain health',
        'mental illness'
    );

    // If no search term, use a random health keyword
    if (empty($search)) {
        $search = $healthKeywords[array_rand($healthKeywords)];
    }

    $params = array(
        'access_key' => MEDIASTACK_API_KEY,
        'keywords' => $search,
        'categories' => 'health',
        'languages' => 'en',
        'limit' => 12,
        'sort' => 'published_desc'
    );
    
    $url = MEDIASTACK_API_URL . '?' . http_build_query($params);
    
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    ));
    
    $response = curl_exec($ch);
    
    if(curl_errno($ch)){
        error_log('Curl Error: ' . curl_error($ch));
        return array();
    }
    
    curl_close($ch);
    
    $data = json_decode($response, true);
    $articles = isset($data['data']) ? $data['data'] : array();

    // Shuffle articles for random display
    if (!empty($articles)) {
        shuffle($articles);
    }

    return $articles;
}

// Get search term and fetch articles
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$articles = fetchNewsArticles($search);

=======
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
require('head.php'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
<<<<<<< HEAD
              <h2>Latest Health News & Articles</h2>
=======
              <h2>Blog Grid</h2>
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
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

<<<<<<< HEAD
    <?php if ($search): ?>
    <div class="section-title">
        <h2>Search Results for: <?php echo htmlspecialchars($search); ?></h2>
    </div>
    <?php endif; ?>

=======
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
    <!-- Single News -->
    <section class="blog grid section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
<<<<<<< HEAD
              <?php 
              if (!empty($articles)) {
                  foreach($articles as $article) {
                      // Format date
                      $date = date('d M Y', strtotime($article['published_at']));
                      
                      // Clean and prepare article data
                      $title = htmlspecialchars($article['title']);
                      $description = htmlspecialchars(substr($article['description'], 0, 150)) . '...';
                      $image = $article['image'] ?? 'img/blog1.jpg';
                      
                      // Prepare article data for blog-single.php
                      $articleData = base64_encode(json_encode($article));
              ?>
              <div class="col-lg-6 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                  <div class="news-head ratio ratio-16x9">
                    <img class="img-fluid object-fit-cover" src="<?php echo htmlspecialchars($image); ?>" 
                         alt="<?php echo $title; ?>"
                         onerror="this.src='img/blog1.jpg'">
                  </div>
                  <div class="news-body">
                    <div class="news-content">
                      <div class="date"><?php echo $date; ?></div>
                      <h2>
                        <a href="blog-single.php?article=<?php echo urlencode($articleData); ?>">
                            <?php echo $title; ?>
                        </a>
                      </h2>
                      <p class="text"><?php echo $description; ?></p>
                      <?php if (!empty($article['author'])): ?>
                      <div class="author">
                        <i class="fa fa-user"></i> <?php echo htmlspecialchars($article['author']); ?>
                      </div>
                      <?php endif; ?>
=======
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
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
<<<<<<< HEAD
              <?php 
                  }
              } else {
              ?>
              <div class="col-12">
                <div class="alert alert-info">
                  <h4>No Articles Found</h4>
                  <p>No health articles found<?php echo $search ? ' for "'.htmlspecialchars($search).'"' : ''; ?>. Please try a different search term.</p>
                </div>
              </div>
              <?php 
              }
              ?>
            </div>
          </div>
          <div class="col-lg-4 col-12 ">
=======
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
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
            <?php require_once('main-sidebar.php'); ?>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Single News -->
    <?php require('footer.php'); ?>