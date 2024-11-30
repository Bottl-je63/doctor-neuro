<div class="main-sidebar">
              <!-- Single Widget -->
              <div class="single-widget">
              <div class="input-group">
  <input type="text" class="form-control p-2" type="text" id="blog-search" placeholder="Search health articles..." autocomplete="off">
  <span class="input-group-text"  id="search-button" title="Search"><i class="fa fa-search"></i></span>
</div>
              
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget category">
                <h3 class="title">Blog Categories</h3>
                <ul class="categor-list">
                  <li><a href="#">Health</a></li>
                  
                </ul>
              </div>
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget recent-post">
                <h3 class="title">Recent post</h3>
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar1.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5><a href="#">We have annnocuced our new product.</a></h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                        2020
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar2.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5>
                      <a href="#">Top five way for solving teeth problems.</a>
                    </h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>Mar 05,
                        2019
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>59
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
                <!-- Single Post -->
                <div class="single-post">
                  <div class="image">
                    <img src="img/blog-sidebar3.jpg" alt="#" />
                  </div>
                  <div class="content">
                    <h5>
                      <a href="#">We provide highly business soliutions.</a>
                    </h5>
                    <ul class="comment">
                      <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>June
                        09, 2019
                      </li>
                      <li>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>44
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Single Post -->
              </div>
              <!--/ End Single Widget -->
              <!-- Single Widget -->
              <div class="single-widget side-tags">
                <h3 class="title">Tags</h3>
                <ul class="tag">
                  <li><a href="#">neuropsychology </a></li>
                  <li><a href="#">neuroscience </a></li>
                  <li><a href="#">focus </a></li>
                  <li><a href="#">neurology </a></li>
                  <li><a href="#">neurotherapy </a></li>
                  <li><a href="#">brainlove </a></li>
                 
                </ul>
              </div>
              <!--/ End Single Widget -->
              <script>
              document.addEventListener('DOMContentLoaded', function() {
                  const searchInput = document.getElementById('blog-search');
                  const searchButton = document.getElementById('search-button');

                  searchButton.addEventListener('click', function(e) {
                      e.preventDefault();
                      performSearch();
                  });

                  searchInput.addEventListener('keypress', function(e) {
                      if (e.key === 'Enter') {
                          e.preventDefault();
                          performSearch();
                      }
                  });

                  // Add loading state
                  function setLoading(isLoading) {
                      searchButton.style.pointerEvents = isLoading ? 'none' : 'auto';
                      searchButton.style.opacity = isLoading ? '0.5' : '1';
                      searchInput.disabled = isLoading;
                  }

                  function performSearch() {
                      const searchTerm = searchInput.value.trim();
                      if (searchTerm === '') {
                          searchInput.focus();
                          return;
                      }

                      setLoading(true);
                      window.location.href = `blog-grid.php?search=${encodeURIComponent(searchTerm)}`;
                  }

                  // Initialize search if URL has search parameter
                  const urlParams = new URLSearchParams(window.location.search);
                  const searchParam = urlParams.get('search');
                  if (searchParam) {
                      searchInput.value = decodeURIComponent(searchParam);
                  }
              });
              </script>
            </div>