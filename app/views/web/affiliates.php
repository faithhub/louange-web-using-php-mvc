<!DOCTYPE html>
<html lang="en">
<?php require_once 'includes/header.php' ?>

<body>

  <!--PreLoader-->

  <!--PreLoader Ends-->

  <!-- header -->
  <?php require_once 'includes/menu.php' ?>
  <!-- end header -->

  <!-- search area -->

  <!-- end search arewa -->

  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p></p>
            <h1>Affiliates</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- products -->
  <div class="mt-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">All Affiliates</span></h3>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row">

        <?php
        if (isset($data['affiliates']) && !empty($data['affiliates'])) {
          foreach ($data['affiliates'] as $affiliate) {
        ?>

            <div class="col-lg-4 col-md-6">
              <div class="single-team-item">
                <a style="color: black;" href="<?php echo $affiliate->link ?>" target="blank">
                  <div class="team-bg team-bg-11" style="background-image: url(<?php echo 'affiliates_uploads/' . $affiliate->avatar ?>);"></div>
                  <h4><?php echo $affiliate->name ?><span></span></h4>
              </div>
              </a>
            </div>

        <?php
          }
        }
        ?>
      </div>
    </div>
    <!-- end products -->

    <!-- logo carousel -->

    <!-- end logo carousel -->

    <!-- footer -->
    <?php require_once "includes/footer.php" ?>
    <!--End of Tawk.to Script-->

</body>

</html>