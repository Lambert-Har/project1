<?php

include('phps/register.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Mail Check</title>
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

                        <!-- success display -->
                        <div class="position-absolute" style="top: 26px; left: 70px;"> 
                            <?php if (isset($_SESSION['success'])) : ?>
                                <div class="alert alert-success py-2">
                                    <strong>Registration </strong>
                                    <span><?php print $_SESSION['success']; unset($_SESSION['success']);?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="pb-3">
                            <i class="fa fa-user-circle text-info position-absolute" style="font-size: 50px; margin-top: -8vh; left: 225px;" aria-hidden="true"></i>
                            <h6 class="pt-5 position-relative" style="font-size: 18px; top: 8px;">Congrat, <b><?php print $_SESSION['username'] ?></b> !</h6>
                        </div>
                        
                        <div class="rounded-pill border-5 card mx-5 mb-5">
                            <i class="fa fa-user-circle text-info my-1 position-relative" style="font-size: 30px; right: 140px; top: 1px;" aria-hidden="true"></i>
                            <h5 class="position-absolute pt-2" style="font-size: 15px; left: 60px;">
                                <b><?php print $_SESSION['usermail'] ?></b>
                            </h5>
                        </div>

                        <div>
                            <h5 class="mb-3" style="font-size: 20px;"><b>Help us in the journey of trust</b></h5>
                            <p style="font-size: 15px;">Check your above email to confirm the email ownership</p>
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