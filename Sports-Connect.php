<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
  <title>Sports Connect</title>
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
      <img src="images/banner/b8.jpg" alt="Breadcrumbs Image" class="mt-5" style="object-fit:cover;">
      <div class="breadcrumbs-inner vertical-middle">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title margin-0" style="padding-top:110px;">Sports Connect</h1>
            <div class="categories">
              <ul>
                <li><a href="index">Home</a></li>
                <li class="active">Sports Connect</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Section End -->

  <!-- Single Club Section Start -->
  <div class="rs-single-club sec-bg md-pb-80">
    <div class="container">

      <div class="rs-tab pb-90 md-pb-60">
        <div class="club-details_data">

          <div class="tab-content">
            <div class="tab-pane fade show active" id="club-history">
              <div class="about-club">
                <div class="row">
                  <div class="col-md-6 col-sm-6 mt-5">

                    <h3>Sports Connect</h3>
                    <p>A dynamic all-in-one platform connecting professionals and opportunities across the sports and fitness industry.</p>

                    <h5>Key Highlights:</h5>
                    <p>Showcase & Discover Talent: Trainers, coaches, and wellness experts can create profiles and get hired directly.</p>
                    <p>Direct Hiring: Schools, colleges, and sports organizations can recruit professionals with ease.</p>
                    <p>Post Jobs & Events: Companies can advertise vacancies, services, and events.</p>
                    <p>Two-Way Connectivity: Professionals and sports ancillary industries (nutritionists, physiotherapists, equipment providers) connect and collaborate.</p>
                    <p>Smart Collaboration: Streamlines recruitment, partnerships, and projects in the sports and wellness ecosystem.</p>
                  </div>

                  <div class="col-md-6 col-sm-6 mt-5">
                    <img class="alignright" src="images/about/sports_connect.png" alt="">
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="container login-container">
          <div class="row w-100">
            <div class="col-md-8 col-lg-6 mx-auto">
              <div class="card">
                <img src="images/logoo.png" alt="Logo" class="isf-logos" />
                <h3 class="text-center mb-4">Member Unit Portal</h3>

                <form action="/login" method="post">
                  <div class="mb-3 position-relative">
                    <i class="fa-solid fa-user form-icon"></i>
                    <input type="text" class="form-control sports-form" id="username" name="username" placeholder="Username" required>
                  </div>

                  <div class="mb-3 position-relative">
                    <i class="fa-solid fa-lock form-icon"></i>
                    <input type="password" class="form-control sports-form" id="password" name="password" placeholder="Password" required>
                  </div>

                  <div class="d-grid mb-3">
                    <button type="submit" class="btn sports-btn">Login</button>
                  </div>

                  <div class="mb-3 text-end">
                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                  </div>

                  <div class="card-footer bg-transparent border-top-0 p-0">
                    <div class="d-grid mb-3">
                      <button type="button" class="btn" style="background-color: #9a5aa5; color:#fff; border: none;">Player Registration</button>
                    </div>

                    <div class="isf-form mb-3">
                      <button type="button" class="btn btn-warning" style="background-color: #093c6b; color:#fff; border: none;">Sports Summit</button>
                      <button type="button" class="btn btn-success" style="background-color: #1f8587; color:#fff; border: none;">Sports Connect</button>
                    </div>

                    <div class="d-grid">
                      <button type="button" class="btn btn-secondary">Download Player I-Card</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <style>
          body {
            background-color: #f8f9fa;
          }

          .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
          }

          .card {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            /* Optional: to prevent excessive width on large screens */
            width: 100%;
          }

          .form-control:focus {
            box-shadow: none;
            border-color: #0d6efd;
          }

          .sports-form {
            background-color: #dddddd;
            height: 50px;
            padding-left: 2.5rem;
            width: 100%;
          }

          .form-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #495057;
          }

          .sports-btn {
            background-color: #214790;
            color: #fff;
            width: 100%;
          }

          .isf-logos {
            width: 120px;
            height: 120px;
            display: block;
            margin: 0 auto 1rem;
          }

          .isf-form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
          }

          .isf-form .btn {
            flex: 1 1 45%;
            min-width: 45%;
          }

          .btn-block,
          .d-grid .btn {
            width: 100%;
          }

          @media (max-width: 576px) {
            .isf-form {
              flex-direction: column;
            }

            .isf-form .btn {
              width: 100%;
            }
          }

          .alignright {
            border-radius: 5px;
          }
        </style>
      </div>

      <!--ISF Video Start-->

      <div class="club-videos pb-90 md-pb-70">
        <div class="title-style pb-50 md-pb-30">
          <h2 class="margin-0 uppercase">ISF Videos</h2>
          <span class="line-bg y-b pt-10 left-line"></span>
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-12 md-mb-30">
            <iframe width="380" height="215" src="https://www.youtube.com/embed/0KeqCnA9s2Y?si=261Adx4JHlxTDSNA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>

          <div class="col-lg-4 col-md-12 md-mb-30">
            <iframe width="380" height="215" src="https://www.youtube.com/embed/vKp7zGHyHEg?si=SiW5MguQupdabF4N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>

          <div class="col-lg-4 col-md-12 md-mb-30">
            <iframe width="380" height="215" src="https://www.youtube.com/embed/fJ-rMYoiIYM?si=Ni7IC1He3um5RlJj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!--ISF Video End-->



      <!-- Subscribe Section End -->
    </div>
  </div>
  <!-- Single Club Section End -->



  <?php include 'footer.php'; ?>