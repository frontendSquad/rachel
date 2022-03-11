<?php
include('../layout/header.php');
?>

<section class="login h-100vh align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-xl-6 leftColumn d-flex align-items-center">
                <div class="loginForm col-md-10">
                    <div class="loginContent px-md-5">
                        <div class="logo">
                            <figure>
                                <a href="#"><img src="../images/logo.png" alt="logo" class="mw-100"></a>
                            </figure>
                        </div>
                        <div class="titleBox">
                            <h3>Forgot Password</h3>
                            <p>An email has been sent to you with a verification code. Please enter it here.</p>
                        </div>
                        <form action="./confirm-password.php">
                            <div class="form-group py-2">
                                <label for="email">
                                Verification Code <span class="required text-danger">*</span>
                                </label>
                                <input type="number" name="loginEmail" placeholder="Enter Verification Code" class="form-control border-0 shadow">
                            </div>
                            <div class="d-flex justify-content-end flex-wrap mb-md-4">
                                <p><a href="./forgot-password.php" class="theme-secondary-text">Resend Code</a></p>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Continue" class="form-control text-white bg-theme-primary">
                            </div>
                            <div class="backBtn text-center">
                                <p><a href="./login.php" class="text-dark d-flex justify-content-center align-items-center"><i class="bi bi-arrow-left pr-2 fa-20"></i>Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 d-flex justify-content-center align-items-md-end align-items-center rightColumn">
                <figure class="w-75 mb-0">
                    <a href="#"><img src="../images/girl.png" alt="Banner" class="mw-100"></a>
                </figure>
            </div>
        </div>
    </div>
</section>

<?php include('../layout/footer.php');?>