<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Login Email</title>
</head>

<body>
    <section>
        <div class="bg-danger text-white">
            <h4 style="text-align: center; font-size: 25px; padding-bottom: 6px;">Assignment</h4>
        </div>

        <!-- body -->

        <div style="height: 87.4vh">
            <form action="phps/login_one.php" method="post">
                <div class="container pt-4" style="width: 75vh;">
                    <div class="text-center card border-3 shadow">
                        <div class="card-body">

                            <div class="pt-2">
                                <h6 class="pb-4"><b>Welcome back !</b></h6>
                                <h6 class="pb-3" style="font-size: 17px;"><b>Sign in</b></h6>
                            </div>

                            <!-- display errors -->
                            <div>
                                <?php if(isset($_SESSION['danger'])) : ?>
                                <div class="alert alert-danger  py-2">
                                    <strong>Oops</strong>
                                    <span><?php print $_SESSION['danger']; unset($_SESSION['danger']); ?></span>
                                </div>
                                <?php endif; ?>
                            </div>


                            <div class="col-sm-12 py-1 position-relative">
                                <input class="ps-5 form-control" type="email" placeholder="Email" name="mail" id="">
                                <i class="fa fa-envelope text-info position-absolute" aria-hidden="true"
                                    style="top: 18px; left: 20px;"></i>
                            </div>

                            <div class="py-1">
                                <button class="btn-info form-control rounded-pill text-white"
                                    type="submit">Next</button>
                            </div>

                            <div class="py-2 my-2">
                                <div class="position-relative"
                                    style="height: 1px; background: grey; width: 280px; margin-left: 40px;">
                                </div>
                                <span class="px-1"
                                    style="margin-top: -2.9vh; position:absolute; background:white; left: 186px;"> or
                                </span>
                            </div>

                            <div>
                                <div class="d-flex py-1 bg-danger rounded text-white" style="height: 44px;">
                                    <img class="ps-1" style="height: 35px;" src="images/google.png"
                                        alt="Continue with google">
                                    <p class="ps-3 py-1" style="font-size: 15px; padding-bottom: -10px;"><b>Continue
                                            with
                                            Google<b></p>
                                </div>
                            </div>


                            <div class="pt-4 text-primary" style="text-align: left;">
                                <a href="index.php" style="font-size: 15px; text-decoration: none; font-weight: lighter;">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
        
        <!-- footer -->

        <footer class="fixed-bottom">
            <div class="bg-info">
                <div class="px-5 d-flex justify-content-between position-relative text-white">
                    <h6 style="font-size: 15px;">About Us</h6>
                    <h6 style="font-size: 15px;">Advertisments</h6>
                    <div style="padding-left: 300px; padding-right: 300px;">
                        <h6 style="font-size: 15px;">Kigali Rwanda</h6>
                    </div>
                    <h6 style="font-size: 15px;">How Search work</h6>
                    <h6 style="font-size: 15px;">Privacy</h6>
                </div>
            </div>
        </footer>

    </section>
</body>

</html>