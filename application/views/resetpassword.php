<?php
if (isset($_SESSION['user'])) {
    header("location:" . base_url . "Users/home");
} 
// if(isset($data['data'])){

//     echo "<pre>";
//     print_r($data['data']);
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $data['title']; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url; ?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo site_url; ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo site_url; ?>/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo site_url; ?>/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h4 class="card-title text-left mb-3" style="padding-bottom:25px;">Reset Your Password</h4>
                            <div>
                            </div>
                            <form method="post" action = "<?php base_url ?>resetpassword">
                                <div class="form-group">
                                <span style="color: red; marging:3px 0px;"> <?php
                                                                                    if (isset($data['data'])) {
                                                                                        if (isset($data['data']['update_password_success'])) {
                                                                                            echo $data['data']['update_password_success'];
                                                                                        }
                                                                                        if (isset($data['data']['update_password_failed'])) {
                                                                                            echo $data['data']['update_password_failed'];
                                                                                        }
                                                                                    }
                                                                                    ?></span>
                                </div>
                                <div class="form-group">
                                    <label>New Password *</label>
                                    <input type="text" name="newpassword" value="" class="form-control p_input">
                                    <span style="color: red; marging:3px 0px;"> <?php
                                                                                    if (isset($data['data'])) {
                                                                                        if (isset($data['data']['required_newpassword'])) {
                                                                                            echo $data['data']['required_newpassword'];
                                                                                        }
                                                                                    }
                                                                                    ?></span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Confirm Password *</label>
                                    <input type="text" name="confirmnewpassword" value="" class="form-control p_input">
                                    <span id="error_msg" style="color: red;"> <?php
                                                                            if (isset($data['data'])) {
                                                                                if (isset($data['data']['required_confirmpassword'])) {
                                                                                    echo $data['data']['required_confirmpassword'];
                                                                                }
                                                                                if (isset($data['data']['not_mach_password'])) {
                                                                                    echo $data['data']['not_mach_password'];
                                                                                }
                                                                                if (isset($data['data']['invalid_password'])) {
                                                                                    echo $data['data']['invalid_password'];
                                                                                }
                                                                            }
                                                                            ?></span>
                                </div>
                                
                                <div class="text-center">
                                    <input type="submit" style="    width: 100px;
" class="btn btn-primary btn-block enter-btn" name="reset_password" value="Reset">
                                </div>
                                <!-- <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> -->
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
    <script src="<?php echo site_url; ?>/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo site_url; ?>/js/off-canvas.js"></script>
    <script src="<?php echo site_url; ?>/js/hoverable-collapse.js"></script>
    <script src="<?php echo site_url; ?>/js/misc.js"></script>
    <script src="<?php echo site_url; ?>/js/settings.js"></script>
    <script src="<?php echo site_url; ?>/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>