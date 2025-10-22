<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
  <title>Join Us</title>
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
      <img src="images/banner/isf-banners-3.png" alt="Breadcrumbs Image" class="mt-5" style="object-fit:cover;">
      <div class="breadcrumbs-inner">
        <div class="container">
          <div class="breadcrumbs-text">
            <h1 class="breadcrumbs-title mb-17">Join Us</h1>
            <div class="categories">
              <ul>
                <li><a href="index">Home</a></li>
                <li class="active">Join Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Section End -->

  <!-- Join us Section start -->
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .section-header {
      margin-bottom: 20px;
    }

    .register-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .register-form h3 {
      font-size: 1.8rem;
      color: #214790;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 4px;
      box-shadow: none;
    }

    .btn-primary {
      background-color: #214790;
      border-color: #214790;
    }

    .btn-primary:hover {
      background-color: #214790;
      border-color: #214790;
    }

    .btn-primary:active {
      background-color: #214790;
      border-color: #214790;
    }
  </style>

  <div class="container py-5">
    <div class="text-center mb-5">
      <p>Fill out the form below to register as a team, volunteer, or sponsor.</p>
    </div>

    <div class="row">
      <!-- Teams Registration -->
      <div class="col-md-4 mt-3">
        <div class="register-form">
          <h3>Register as a Team</h3>
          <form name="team_registration" action="action-team-registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="teamName">Team Name</label>
              <input type="text" class="form-control" name="team_Name" placeholder="Enter team name" required>
            </div>
            <div class="form-group">
              <label for="volunteerEmail">Email Address</label>
              <input type="email" class="form-control" name="team_Email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="team_phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Phone Number" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" value="submit">Submit</button>
            <input type="hidden" name="submit" value="addTeam">
          </form>
        </div>
      </div>

      <!-- Volunteers Registration -->
      <div class="col-md-4 mt-3">
        <div class="register-form">
          <h3>Register as a Volunteer</h3>
          <form name="Volunteer_registration" action="action-Volunteer_registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="volunteerName">Full Name</label>
              <input type="text" class="form-control" name="volunteer_Name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="volunteerEmail">Email Address</label>
              <input type="email" class="form-control" name="volunteer_Email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="volunteer_phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Phone Number">
            </div>
            <button type="submit" class="btn btn-primary w-100" value="submit">Submit</button>
            <input type="hidden" name="submit" value="addVolunteer">
          </form>
        </div>
      </div>

      <!-- Sponsors Registration -->
      <div class="col-md-4 mt-3">
        <div class="register-form">
          <h3>Register as a Sponsor</h3>
          <form name="sponsor-registration" action="action-sponsor-registration.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="sponsorName">Company Name</label>
              <input type="text" class="form-control" name="sponsor_Name" placeholder="Enter company name">
            </div>
            <div class="form-group">
              <label for="sponsorEmail">Email Address</label>
              <input type="email" class="form-control" name="sponsor_Email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="text" class="form-control" name="sponsor_phone" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Phone Number">
            </div>
            <button type="submit" class="btn btn-primary w-100" value="submit">Submit</button>

            <input type="hidden" name="submit" value="addSponsor">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Join Us section end -->
  <?php include 'footer.php'; ?>