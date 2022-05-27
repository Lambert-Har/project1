<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Login Pass</title>
</head>

<body>
    <section>
        <div class="bg-danger text-white">
            <h4 style="text-align: center; font-size: 25px; padding-bottom: 6px;">Assignment</h4>
        </div>

        <!-- body -->

        <div style="height: 87.4vh;">
            <div class="container py-5" style="width: 85vh;">
                <div class="text-center card border-3 shadow">
                    <div class="card-body">

                        <div class="pb-3">
                            <i class="fa fa-user-circle text-info position-absolute" style="font-size: 50px; margin-top: -8vh; left: 220px;" aria-hidden="true"></i>
                            <h6 class="pt-5" style="font-size: 18px;">Congrat, <b><?php print $_SESSION['user_name'] ?></b>!</h6>
                        </div>

                        <!-- display errors -->
                        <div>
                            <?php if (isset($_SESSION['danger'])) : ?>
                                <div class="alert alert-danger  py-2">
                                    <strong>Oops</strong>
                                    <span><?php print $_SESSION['danger'];
                                            unset($_SESSION['danger']); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="rounded-pill border-5 card mx-5 mb-5">
                            <i class="fa fa-user-circle text-info my-1 position-relative" style="font-size: 30px; right: 140px;" aria-hidden="true"></i>
                            <h5 class="position-absolute pt-2" style="font-size: 15px; left: 60px;">
                                <b><?php print $_SESSION['user_mail'] ?></b>
                            </h5>
                        </div>

                        <!-- form -->

                        <form action="phps/login_two.php" method="post">
                            <div class="px-3">
                                <div class="col-sm-12 py-1 mb-2 position-relative">
                                    <input class="ps-5 form-control" type="password" placeholder="Password" name="pass" id="">
                                    <i class="fa fa-key text-info position-absolute" aria-hidden="true" style="top: 18px; left: 20px;"></i>
                                    <i class="fa fa-eye text-info position-absolute" aria-hidden="true" style="top: 18px; left: 380px;"></i>
                                </div>
                                <div class="py-1">
                                    <button class="btn-info form-control rounded-pill text-white" type="submit">Next</button>
                                </div>
                            </div>
                        </form>

                        <div class="mt-2" style="text-align: right;">
                            <a href="index.php" class="text-danger" style="font-size: 15px; text-decoration: none; font-weight: bold;">Forgot Password ?</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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