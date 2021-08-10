<div class="top-header-area" id="sticker">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 text-center">
        <div class="main-menu-wrap">
          <!-- logo -->
          <div class="site-logo">
            <a href="<?php echo URLROOT ?>">
              <img src="assets/img/Logo_LHI.jpg" alt="">
            </a>
          </div>
          <!-- logo -->

          <!-- menu start -->
          <nav class="main-menu">
            <ul>
              <li class="<?php if ($data['page'] == 'home') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>" style="font-size: px;">Home</a></li>
              <li class="<?php if ($data['page'] == 'about') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/about">About</a></li>
              <li class="<?php if ($data['page'] == 'product') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/products">Products</a></li>
              <li class="<?php if ($data['page'] == 'gallery') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/gallery">Herbs Gallery</a></li>
              <li class="<?php if ($data['page'] == 'all_affiliate') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/all_affiliate">Affiliates</a></li>
              <li class="<?php if ($data['page'] == 'contact') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/contact">Contact</a></li>
              <li class="<?php if ($data['page'] == 'shop') {
                            echo 'current-list-item';
                          } ?>"><a href="<?php echo URLROOT ?>/shop">Shop</a>
                <!--<li><a href="blog.html">Blog</a>-->
              </li>
              <div class="header-icons">
              </div>
            </ul>
          </nav>
          <?php if ($data['page'] == 'gallery') {
          ?>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
          <?php
          } ?>
          <div class="mobile-menu"></div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
</div>



<!-- search area -->
<div class="search-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="close-btn"><i class="fas fa-window-close"></i></span>
        <div class="search-bar">
          <div class="search-bar-tablecell">
            <h3>Search For:</h3>
            <input type="text" placeholder="Keywords">
            <button type="submit">Search <i class="fas fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end search arewa -->