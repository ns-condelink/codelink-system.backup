<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codelink Admin</title>
    <!-- plugins:css -->
    <!-- <link rel="stylesheet" href="<?php echo $this->site_url;?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $this->site_url;?>/vendors/css/vendor.bundle.base.css"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo $this->site_url;?>/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo $this->site_url;?>/images/favicon.png" />
    <script src="<?php echo $this->site_url;?>/customjs/jquery.min.js"></script>

    <script src="<?php echo $this->site_url;?>/customjs/query.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form>
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" class="form-control p_input" id="username">
                    <span id="emailError"></span>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" class="form-control p_input" id="password">
                    <span id="passwordError"></span>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary btn-block enter-btn" id="login_btn">Login</button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="<?php echo $this->site_url;?>/vendors/js/vendor.bundle.base.js"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <!-- <script src="<?php echo $this->site_url;?>/js/off-canvas.js"></script>
    <script src="<?php echo $this->site_url;?>/js/hoverable-collapse.js"></script>
    <script src="<?php echo $this->site_url;?>/js/misc.js"></script>
    <script src="<?php echo $this->site_url;?>/js/settings.js"></script>
    <script src="<?php echo $this->site_url;?>/js/todolist.js"></script> -->
    <!-- endinject -->
  </body>
</html>