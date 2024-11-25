<?php 
// Page configuration
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./blog-grid.php";
$page_image = "./img/bread-bg.jpg";

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// API Configuration
define('MEDIASTACK_API_KEY', '05a75fe7ad1d516d7e144a5e52dea9b7');
define('MEDIASTACK_API_URL', 'https://api.mediastack.com/v1/news');

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
  
  // Debug: Log the URL being called
  error_log("Calling API URL: " . $url);
  
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
  
  // Debug: Log the API response
  error_log("API Response: " . $response);
  
  $data = json_decode($response, true);
  
  // Debug: Log any JSON decode errors
  if (json_last_error() !== JSON_ERROR_NONE) {
      error_log('JSON Decode Error: ' . json_last_error_msg());
  }
  
  // Debug: Log the parsed data
  error_log("Parsed Data: " . print_r($data, true));
  
  $articles = isset($data['data']) ? $data['data'] : array();

  // Debug: Log the number of articles
  error_log("Number of articles found: " . count($articles));

  // Shuffle articles for random display
  if (!empty($articles)) {
      shuffle($articles);
  }

  return $articles;
}

// Get search term and fetch articles
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$articles = fetchNewsArticles($search);

require('head.php'); ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Latest Health News & Articles</h2>
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

    <?php if ($search): ?>
    <div class="section-title">
        <h2>Search Results for: <?php echo htmlspecialchars($search); ?></h2>
    </div>
    <?php endif; ?>

    <!-- Single News -->
    <section class="blog grid section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
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
                     
                    </div>
                  </div>
                </div>
                <!-- End Single Blog -->
              </div>
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
            <?php require_once('main-sidebar.php'); ?>
          </div>
        </div>
      </div>
    </section>
  
    <!--/ End Single News -->
    <?php require('footer.php'); ?>