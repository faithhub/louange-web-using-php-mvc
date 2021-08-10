<div class="top-header-area" id="sticker">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 text-center">
        <div class="main-menu-wrap">
          <!-- logo -->
          <div class="site-logo">
            <a href="index.html">
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

          <div class="mobile-menu"></div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
</div>