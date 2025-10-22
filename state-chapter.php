<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
  <title>State Chapter</title>
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
  <div class="rs-breadcrumbs" style="margin-top:55px;">
    <div class="breadcrumbs-wrap">
      <img src="images/banner/state-chptr.png" alt="Breadcrumbs Image" class="mt-5" style="object-fit:cover;">
      <div class="breadcrumbs-inner vertical-middle">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title margin-0" style="padding-top:110px;">State Chapter</h1>
            <div class="categories">
              <ul>
                <li><a href="index">Home</a></li>
                <li class="active">State Chapter</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Section End -->


  <div class="container my-5">
    <div class="row justify-content-center g-4">

      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="profile-card animated-card">
          <img src="images/about/bibhu-prasad.png" class="card-img-top" alt="Bibhu Prasad Mishra">
          <div class="card-body text-center" style="height: 170px;">
            <h5 class="card-title text-light">Shri Bibhu Prasad Mishra</h5>
            <p class="card-text text-light">Executive Vice President - Corporate Affairs & Director Jindal Industrial Park</p>
            <p class="card-text text-light">Founding State President - Odisha Chapter of Iconic Sports Federation</p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="profile-card animated-card">
          <img src="images/about/Shri Sanjay Das.png" class="card-img-top" alt="Minati Mohapatra">
          <div class="card-body text-center" style="height: 170px;">
            <h5 class="card-title text-light">Shri Sanjay Das</h5>
            <p class="card-text text-light">State Secretary - Odisha chapter</p>
            <p class="card-text text-light">Iconic Sports Federation</p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="profile-card animated-card">
          <img src="images/about/Ms. Rashi Agarwal.jpeg" class="card-img-top" alt="Ravi Kumar Katulu">
          <div class="card-body text-center" style="height: 170px;">
            <h5 class="card-title text-light">Ms. Rashi Agarwal </h5>
            <p class="card-text text-light">Enterpreneur </p>
            <p class="card-text text-light">Odisha state Convenor</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Custom CSS -->
  <style>
    .profile-card {
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      transition: all 0.4s ease-in-out;
      border: 2px solid #dee2e6;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    .profile-card:hover {
      transform: translateY(-10px);
      border-color: #214790;
      background: linear-gradient(135deg, #e3f2fd, #f0f7ff);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .profile-card img {
      width: 100%;
      height: 350px;
      object-fit: cover;
      border-bottom: 1px solid #ccc;
    }

    .profile-card .card-body {
      padding: 25px;
    }

    .profile-card .card-title {
      font-size: 22px;
      font-weight: 700;
      color: #214790;
      margin-bottom: 15px;
    }

    .profile-card .card-text {
      font-size: 15px;
      color: #444;
      margin-bottom: 10px;
      line-height: 1.5;
    }

    /* Animation */
    .animated-card {
      animation: fadeInZoom 0.8s ease forwards;
      opacity: 0;
      transform: scale(0.9);
    }

    @keyframes fadeInZoom {
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    /* Responsive adjustment for smaller devices */
    @media (max-width: 576px) {
      .profile-card img {
        height: 280px;
      }

      .profile-card .card-title {
        font-size: 18px;
      }

      .profile-card .card-text {
        font-size: 14px;
      }
    }
  </style>

  <?php include 'footer.php'; ?>