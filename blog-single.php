<?php 

$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./blog-single.php";
$page_image = "./img/bread-bg.jpg";
// Get and decode article data
$articleData = isset($_GET['article']) ? $_GET['article'] : '';

$article = null;


if ($articleData) {
    try {
        $article = json_decode(base64_decode($articleData), true);
        if ($article) {
            $page_title = $article['title'];
            $page_description = substr(strip_tags($article['description']), 0, 160);
            $page_image = $article['image'] ?? "./img/bread-bg.jpg";
            
            // Fetch full article content using cURL
            $ch = curl_init($article['url']);
            curl_setopt_array($ch, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
            ));
            $fullContent = curl_exec($ch);
            
            if(curl_errno($ch)) {
                error_log("Error fetching article content: " . curl_error($ch));
                $article['full_content'] = $article['description'];
            }
            curl_close($ch);
            
            // Extract article content from the fetched HTML
            if ($fullContent) {
                // Clean up the content
                $fullContent = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $fullContent);
                $fullContent = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $fullContent);
                $fullContent = preg_replace('/<!--(.*?)-->/is', '', $fullContent);
                
                // Try multiple patterns to find the main content
                $contentPatterns = array(
                    '/<article[^>]*>(.*?)<\/article>/is',
                    '/<div[^>]*class="[^"]*(?:article-content|post-content|entry-content|story-content)[^"]*"[^>]*>(.*?)<\/div>/is',
                    '/<div[^>]*class="[^"]*content[^"]*"[^>]*>(.*?)<\/div>/is'
                );
                
                foreach ($contentPatterns as $pattern) {
                    if (preg_match($pattern, $fullContent, $matches)) {
                        $content = $matches[1];
                        // Clean the extracted content
                        $content = preg_replace('/<div[^>]*class="[^"]*(?:social-share|advertisement|related|comments)[^"]*"[^>]*>.*?<\/div>/is', '', $content);
                        $content = strip_tags($content, '<p><br><h2><h3><h4><ul><li><ol><strong><em>');
                        if (strlen($content) > 100) {
                            $article['full_content'] = $content;
                            break;
                        }
                    }
                }
                
                // Fallback to description if no content found
                if (empty($article['full_content'])) {
                    $article['full_content'] = $article['description'];
                }
            }
        }
    } catch (Exception $e) {
        error_log("Error processing article data: " . $e->getMessage());
    }
}

require('head.php'); ?>

    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Blog Single</h2>
              <ul class="bread-list">
                <li><a href="index.php">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Blog Single</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
   
    <section class="news-single section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="row">
              <div class="col-12">
              <div class="single-main">
                  <?php if ($article): ?>
                  <!-- News Head -->
                  <div class="news-head">
                    <img src="<?php echo htmlspecialchars($article['image'] ?? 'img/blog1.jpg'); ?>" 
                         alt="<?php echo htmlspecialchars($article['title']); ?>"
                         onerror="this.src='img/blog1.jpg'" 
                         class="img-fluid" />
                  </div>
                  <!-- News Title -->
                  <h1 class="news-title">
                    <?php echo htmlspecialchars($article['title']); ?>
                  </h1>
                  <!-- Meta -->
                  <div class="meta">
                    <div class="meta-left">
                      <?php if (!empty($article['author'])): ?>
                      <span class="author">
                        <a href="#">
                          <img src="img/author1.jpg" alt="#" />
                          <?php echo htmlspecialchars($article['author']); ?>
                        </a>
                      </span>
                      <?php endif; ?>
                      <span class="date">
                        <i class="fa fa-clock-o"></i>
                        <?php echo date('d M Y', strtotime($article['published_at'])); ?>
                      </span>
                    </div>
                    <div class="meta-right">
                      <?php if (!empty($article['source'])): ?>
                      <span class="source">
                        <i class="fa fa-globe"></i>
                        <?php echo htmlspecialchars($article['source']); ?>
                      </span>
                      <?php endif; ?>
                      <span class="views">
                        <i class="fa fa-eye"></i>
                        Views
                      </span>
                    </div>
                  </div>
                  <!-- News Text -->
                  <div class="news-text">
                    <?php if (!empty($article['full_content'])): ?>
                      <?php echo $article['full_content']; ?>
                    <?php else: ?>
                      <p><?php echo nl2br(htmlspecialchars($article['description'])); ?></p>
                    <?php endif; ?>
                    
                   
                  </div>
                  
                  <!-- Social Share -->
                  <div class="blog-bottom">
                    <ul class="social-share">
                      <li class="facebook">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($article['url']); ?>" target="_blank">
                          <i class="fa fa-facebook"></i>
                          <span>Facebook</span>
                        </a>
                      </li>
                      <li class="twitter">
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($article['url']); ?>&text=<?php echo urlencode($article['title']); ?>" target="_blank">
                          <i class="fa fa-twitter"></i>
                          <span>Twitter</span>
                        </a>
                      </li>
                      <li class="linkedin">
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($article['url']); ?>&title=<?php echo urlencode($article['title']); ?>" target="_blank">
                          <i class="fa fa-linkedin"></i>
                          <span>LinkedIn</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <?php else: ?>
                  <div class="alert alert-warning">
                    <h3>Article Not Found</h3>
                    <p>Sorry, the requested article could not be found. Please return to the <a href="blog-grid.php">blog page</a>.</p>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-12">
                <div class="blog-comments">
                  <h2>All Comments</h2>
                  <div class="comments-body">
                    <!-- Single Comments -->
                    <div class="single-comments">
                      <div class="main">
                        <div class="head">
                          <img src="img/author1.jpg" alt="#" />
                        </div>
                        <div class="body">
                          <h4>Gayatri Tiwari</h4>
                          <div class="comment-meta">
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>November 30,
                              2024</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>03:38 AM</span
                            >
                          </div>
                          <p>
                          It’s amazing to see how neuropsychiatry bridges the gap between brain health and mental well-being. The detailed explanation of common disorders and the emphasis on holistic care is truly enlightening. A must-read for anyone looking to understand this critical field! 👏 #MentalHealthAwareness #Neuropsychiatry
                          </p>
                          <a href="#"><i class="fa fa-reply"></i>replay</a>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
                   
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="comments-form">
                  <h2>Leave Comments</h2>
                  <!-- Contact Form -->
                  <form class="form" method="post" action="https://Disha-html.vercel.app/mail/mail.php">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-user"></i>
                          <input
                            type="text"
                            name="first-name"
                            placeholder="First name"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
                          <input
                            type="text"
                            name="last-name"
                            placeholder="Last name"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
                          <input
                            type="email"
                            name="email"
                            placeholder="Your Email"
                            required="required"
                          />
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group message">
                          <i class="fa fa-pencil"></i>
                          <textarea
                            name="message"
                            rows="7"
                            placeholder="Type Your Message Here"
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group button">
                          <button type="submit" class="btn primary">
                            <i class="fa fa-send"></i>Submit Comment
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--/ End Contact Form -->
                </div>
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