<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
  <title>Our Partner</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="audience" content="all">
  <meta name="distribution" content="global">
  <meta name="robots" content="All">
  <meta name="author" content="">
  <link rel="canonical" href="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:locale" content="en-in">
  <meta property="og:type" content="Website">
  <meta property="og:site_name" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <?php include 'header.php'; ?>

  <!-- Breadcrumbs Section Start -->
  <div class="rs-breadcrumbs">
    <div class="breadcrumbs-wrap">
      <img src="images/banner/our-partner.png" alt="Breadcrumbs Image">
      <div class="breadcrumbs-inner vertical-middle">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title margin-0" style="padding-top:110px;">Our Partner</h1>
            <div class="categories">
              <ul>
                <li><a href="index">Home</a></li>
                <li class="active">Our Partner</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Section End -->


  <section style="background: #e6f9fd; padding:80px">
    <div class="title-style text-center mb-50 md-mb-30">
      <h2 class="margin-0 uppercase">OUR SUPPOTERS</h2>
      <span class="line-bg y-b pt-10"></span>
    </div>
    <div class="container">
      <div class="owl-carousel mt-5">
        <div><img src="images/partner-logo/prdct-logo-1.png" alt="Image 1" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-2.png" alt="Image 2" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-3.png" alt="Image 3" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-4.png" alt="Image 4" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-5.png" alt="Image 5" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-6.png" alt="Image 6" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-7.png" alt="Image 7" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-8.png" alt="Image 8" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-9.png" alt="Image 9" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-10.png" alt="Image 10" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-11.png" alt="Image 11" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-12.png" alt="Image 12" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-13.png" alt="Image 13" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/prdct-logo-14.png" alt="Image 14" style="width: 150px; height:75px;"></div>
        <div><img src="images/partner-logo/kalinga-sports-logo.png" alt="Image 15" style="width: 150px; height:75px;"></div>
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script>
        $(document).ready(function() {
          $(".owl-carousel").owlCarousel({
            items: 4, // Number of items to show
            loop: true, // Loop the carousel
            margin: 10, // Space between items
            autoplay: true, // Enable autoplay
            autoplayTimeout: 2000, // Time between transitions
            autoplayHoverPause: true, // Pause on hover
            responsive: {
              0: {
                items: 2 // Show 2 items on small screens
              },
              600: {
                items: 3 // Show 3 items on medium screens
              },
              1000: {
                items: 4 // Show 5 items on large screens
              }
            }
          });
        });
      </script>

    </div>

    <style>
      .our-support {
        text-align: center;
        color: #214790;
        font-size: 25px;
        font-weight: 700;
      }

      .border {
        border-bottom: 2px solid #214790 !important;
        color: #214790;
        width: 65px;
        margin: auto;
        margin-top: -12px;
      }

      .img {
        width: 100px;
        height: 80px;
      }
    </style>
  </section>


  <?php include 'footer.php'; ?>