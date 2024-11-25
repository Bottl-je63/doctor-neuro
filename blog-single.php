<?php 
<<<<<<< HEAD
// Page configuration
=======
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
$page_title = "Disha Neuropsychiatry Centre";
$page_description = "Welcome to the home page of My Website.";
$page_url = "./blog-single.php";
$page_image = "./img/bread-bg.jpg";
<<<<<<< HEAD

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

=======
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
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
<<<<<<< HEAD
                  <?php if ($article): ?>
                  <!-- News Head -->
                  <div class="news-head">
                    <img src="<?php echo htmlspecialchars($article['image'] ?? 'img/blog1.jpg'); ?>" 
                         alt="<?php echo htmlspecialchars($article['title']); ?>"
                         onerror="this.src='img/blog1.jpg'" />
                  </div>
                  <!-- News Title -->
                  <h1 class="news-title">
                    <?php echo htmlspecialchars($article['title']); ?>
=======
                  <!-- News Head -->
                  <div class="news-head">
                    <img src="img/blog1.jpg" alt="#" />
                  </div>
                  <!-- News Title -->
                  <h1 class="news-title">
                    <a href="404-2.php"
                      >Bridging Neurology and Psychiatry</a
                    >
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                  </h1>
                  <!-- Meta -->
                  <div class="meta">
                    <div class="meta-left">
<<<<<<< HEAD
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
                      <span class="views">
                        <i class="fa fa-eye"></i>Views
                      </span>
                      <?php if (!empty($article['source'])): ?>
                      <span class="source">
                        <i class="fa fa-globe"></i>
                        <?php echo htmlspecialchars($article['source']); ?>
                      </span>
                      <?php endif; ?>
=======
                      <span class="author"
                        ><a href="#"
                          ><img src="img/author1.jpg" alt="#" />Gayatri Tiwari</a
                        ></span
                      >
                      <span class="date"
                        ><i class="fa fa-clock-o"></i>30 Nov 2024</span
                      >
                    </div>
                    <div class="meta-right">
                      <span class="comments"
                        ><a href="#"
                          ><i class="fa fa-comments"></i>05 Comments</a
                        ></span
                      >
                      <span class="views"
                        ><i class="fa fa-eye"></i>33K Views</span
                      >
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                    </div>
                  </div>
                  <!-- News Text -->
                  <div class="news-text">
<<<<<<< HEAD
                    <?php echo $article['full_content']; ?>
                    
                    <?php if (!empty($article['url'])): ?>
                    <p class="read-more">
                      <a href="<?php echo htmlspecialchars($article['url']); ?>" target="_blank" class="btn">
                        Read Full Article
                      </a>
                    </p>
                    <?php endif; ?>
=======
                    <p>
                    Neuropsychiatry is an emerging field that bridges the gap between neurology and psychiatry, focusing on disorders that involve both brain function and mental health. In a country like India, where mental health awareness is still evolving, understanding this discipline is crucial.


                    </p>
                    
                    <div class="image-gallery">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="single-image">
                            <img src="img/blog2.jpg" alt="#" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="single-image">
                            <img src="img/blog3.jpg" alt="#" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <H3>What is Neuropsychiatry?</H3>
                    <p>
                    Neuropsychiatry addresses conditions that are rooted in the brain’s structure and function but manifest as mental health symptoms. Examples include epilepsy-related psychosis, traumatic brain injuries, and neurodegenerative diseases.

                    </p>
                    <blockquote class="overlay">
                      <p>
                      <strong>Key Neuropsychiatric Disorders in India: </strong>Conditions like epilepsy, schizophrenia, Parkinson’s disease, and dementia are on the rise, especially with increasing life expectancy.


                      </p>
                      <p><strong>Why Neuropsychiatry Matters:
                      </strong> With a holistic approach, neuropsychiatrists combine therapies, medications, and counseling to treat complex disorders.
                      </p>
                      <p><strong>Case Study:
                      </strong> Discuss a real-life example of someone who benefited from neuropsychiatric care.
                      </p>
                    </blockquote>
                    <p>
                      <ul>
                        <h4>Actionable Takeaways:</h4>
                        <li>Encourage regular checkups if experiencing unexplained behavioral or cognitive changes.
                        </li>
                        <li>Promote awareness about neuropsychiatry through community programs.
                        </li>
                      </ul>
                    </p>
                    
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                  </div>
                  <div class="blog-bottom">
                    <!-- Social Share -->
                    <ul class="social-share">
                      <li class="facebook">
<<<<<<< HEAD
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
=======
                        <a href="#"
                          ><i class="fa fa-facebook"></i
                          ><span>Facebook</span></a
                        >
                      </li>
                      <li class="twitter">
                        <a href="#"
                          ><i class="fa fa-twitter"></i><span>Twitter</span></a
                        >
                      </li>
                      <li class="google-plus">
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </li>
                      <li class="linkedin">
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                      </li>
                      <li class="pinterest">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                      </li>
                    </ul>
                    <!-- Next Prev -->
                    <ul class="prev-next">
                      <li class="prev">
                        <a href="#"><i class="fa fa-angle-double-left"></i></a>
                      </li>
                      <li class="next">
                        <a href="#"><i class="fa fa-angle-double-right"></i></a>
                      </li>
                    </ul>
<<<<<<< HEAD
                  </div>
                  <?php else: ?>
                  <div class="alert alert-warning">
                    <h3>Article Not Found</h3>
                    <p>Sorry, the requested article could not be found. Please return to the <a href="blog-grid.php">blog page</a>.</p>
                  </div>
                  <?php endif; ?>
=======
                    <!--/ End Next Prev -->
                  </div>
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
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
<<<<<<< HEAD
                            <span class="meta">
                              <i class="fa fa-calendar"></i>November 30, 2024
                            </span>
                            <span class="meta">
                              <i class="fa fa-clock-o"></i>03:38 AM
                            </span>
                          </div>
                          <p>
                            It's amazing to see how neuropsychiatry bridges the gap between brain health and mental well-being. The detailed explanation of common disorders and the emphasis on holistic care is truly enlightening. A must-read for anyone looking to understand this critical field! #MentalHealthAwareness #Neuropsychiatry
=======
                            <span class="meta"
                              ><i class="fa fa-calendar"></i>November 30,
                              2024</span
                            ><span class="meta"
                              ><i class="fa fa-clock-o"></i>03:38 AM</span
                            >
                          </div>
                          <p>
                          It’s amazing to see how neuropsychiatry bridges the gap between brain health and mental well-being. The detailed explanation of common disorders and the emphasis on holistic care is truly enlightening. A must-read for anyone looking to understand this critical field! 👏 #MentalHealthAwareness #Neuropsychiatry
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                          </p>
                          <a href="#"><i class="fa fa-reply"></i>replay</a>
                        </div>
                      </div>
                    </div>
                    <!--/ End Single Comments -->
<<<<<<< HEAD
=======
                   
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
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
<<<<<<< HEAD
                          <input type="text" name="first-name" placeholder="First name" required="required" />
=======
                          <input
                            type="text"
                            name="first-name"
                            placeholder="First name"
                            required="required"
                          />
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
<<<<<<< HEAD
                          <input type="text" name="last-name" placeholder="Last name" required="required" />
=======
                          <input
                            type="text"
                            name="last-name"
                            placeholder="Last name"
                            required="required"
                          />
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-12">
                        <div class="form-group">
                          <i class="fa fa-envelope"></i>
<<<<<<< HEAD
                          <input type="email" name="email" placeholder="Your Email" required="required" />
=======
                          <input
                            type="email"
                            name="email"
                            placeholder="Your Email"
                            required="required"
                          />
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group message">
                          <i class="fa fa-pencil"></i>
<<<<<<< HEAD
                          <textarea name="message" rows="7" placeholder="Type Your Message Here"></textarea>
=======
                          <textarea
                            name="message"
                            rows="7"
                            placeholder="Type Your Message Here"
                          ></textarea>
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
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
<<<<<<< HEAD
            <?php require_once('main-sidebar.php'); ?>
=======
          <?php require_once('main-sidebar.php'); ?>
>>>>>>> 431555010c493e77e2f48b0322d4cae1ae38591e
          </div>
        </div>
      </div>
    </section>
    <!--/ End Single News -->
    <?php require('footer.php'); ?>