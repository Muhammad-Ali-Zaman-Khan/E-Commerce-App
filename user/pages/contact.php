<?php
    include('../include/header.php');



if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $adress = $_POST['adress'];
  $service = $_POST['service'];
  $message = $_POST['message'];


  $query = "INSERT INTO `contacts`(`name`, `email`, `adress`, `service`, `message`) VALUES ('$name','$email','$adress','$service','$message')";
  $result = mysqli_query($conn, $query);

  if($result)
  {
    echo"Record Inserted!";
  }
  else{
    echo"Something Went Wrong!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title>Pengu - eCommerce HTML5 Template</title>
    <?php
    include('../include/styles.php')
    ?>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
       <br>
       <br>
       <br>
       <br>
        <!-- end of header -->

        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>Contact</h2>
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start wpo-contact-pg-section -->
        <section class="wpo-contact-pg-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="office-info">
                            <div class="row">
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-placeholder"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Address</h2>
                                            <p>7 Green Lake Street Crawfordsville, IN 47933</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-email"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Email Us</h2>
                                            <p>Indudus@gmail.com</p>
                                            <p>helloyou@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                                    <div class="office-info-item">
                                        <div class="office-info-icon">
                                            <div class="icon">
                                                <i class="fi flaticon-phone-call"></i>
                                            </div>
                                        </div>
                                        <div class="office-info-text">
                                            <h2>Call Now</h2>
                                            <p>+1 800 123 456 789</p>
                                            <p>+1 800 123 654 987</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-contact-title">
                            <h2>Have Any Question?</h2>
                            <p>It is a long established fact that a reader will be distracted
                                content of a page when looking.</p>
                        </div>
                        <div class="wpo-contact-form-area">
                            <form method="post" class="contact-validation-active"  enctype="multipart/form-data">
                                <div>
                                    <input value="<?= $row['name']?>" type="text" class="form-control" name="name"
                                        placeholder="Your Name*">
                                </div>
                                <div>
                                    <input value="<?= $row['email']?>" type="email" class="form-control" name="email"
                                        placeholder="Your Email*">
                                </div>
                                <div>
                                    <input value="<?= $row['adress']?>" type="text" class="form-control" name="adress"
                                        placeholder="Adress">
                                </div>
                                <div>
                                    <select value="<?= $row['service']?>"  name="service" class="form-control">
                                        <option disabled="disabled" selected="">Services</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Petroleum Refinery</option>
                                        <option>Power &amp; Energy</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea value="<?= $row['message']?>" class="form-control" name="note" id="note"
                                        placeholder="Message..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button value="<?= $row['submit']?>" type="submit" name="submit" class="theme-btn">Get in Touch</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end wpo-contact-pg-section -->

        <!--  start wpo-contact-map -->
        <section class="wpo-contact-map-section">
            <h2 class="hidden">Contact map</h2>
            <div class="wpo-contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671"
                    allowfullscreen></iframe>
            </div>
        </section>

        <!-- start of wpo-site-footer-section -->
        <?php
        include('../include/footer.php')
       ?>
        <!-- end of wpo-site-footer-section -->


    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <?php
    include('../include/scripts.php')
    ?>
</body>

</html>