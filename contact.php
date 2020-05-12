<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ashish Tayade - UI Developer</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/validation/validation.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      .templateux-cta {
        display: none;
      }
    </style>
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <?php include("includes/header.php"); ?>

    <!-- END templateux-navbar -->
    <section class="templateux-hero mb-5"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1><!-- Get in touch -->So, let’s talk</h1>
            <p class="lead">Have an amazing idea you would like to work with me on? <br/>Let us know using the form below or mail at <a href="mailto:ashish.tayade4@gmail.com">ashish.tayade4@gmail.com</a></p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-portfolio-overlap mb-5" data-aos="fade-up" id="next">
      <div class="container">
        <!-- <div class="row"> -->
          <div class="validateContainer">
          <form class="form-horizontal" name="frmSubmit" id="frmSubmit" action="index-action.php" method="post">
            <div class="row">
              <div class="col-md-6  mb-4">
                <div class="validateField">
                  <input type="text" class="form-control validateRequired validateAlphaonly" name="name" placeholder="Name">
                </div>
              </div>
              <div class="col-md-6  mb-4">
                <div class="validateField">
                  <input type="email" class="form-control validateRequired validateEmail" name="email" placeholder="Email">
                </div>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-6  mb-4">
                <div class="validateField">
                  <input type="text" class="form-control validateRequired validateNumber" name="phone" placeholder="Phone">
                </div>
              </div>
              <div class="col-md-6  mb-4">
                <div class="validateField">
                  <input type="text" name="subject" class="form-control validateRequired" placeholder="Subject">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12  mb-4">
                <div class="validateField">
                  <textarea name="comments" class="form-control validateRequired" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="submit" class="button button--red checkValidationBtn" value="Send your message">
              </div>
            </div>
          </form>
          </div>
        <!-- </div> -->
      </div>
    </section>

    

    <?php include("includes/footer.php"); ?>

  </div>

  
  <script src="js/scripts-all.js"></script>
  <script src="js/main.js"></script>

  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script> -->

  <!-- validation js starts  -->
  <script src="js/validation/jquery.validate.min.js"></script>
  <script src="js/validation/additional-methods.min.js"></script>
  <script src="js/validation/checkvalidation.js"></script>
  
  </body>
</html>