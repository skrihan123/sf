<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
  <title>Become a Member</title>
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

  <style>
    body {
      background-color: #f8f9fa;
    }

    .membership-form {
      max-width: 700px;
      margin: 180px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .membership-form h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #093c6b;
      font-weight: 700;
    }

    .form-control:focus {
      border-color: #093c6b;
      box-shadow: 0 0 0 0.2rem rgba(9, 60, 107, 0.2);
    }

    .btn-submit {
      background-color: #093c6b;
      color: #fff;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #06284a;
    }

    .required::after {
      content: " *";
      color: red;
    }

    @media (max-width: 576px) {
      .membership-form {
        padding: 20px;
        margin: 30px 15px;
      }
    }

    .form-select:focus {
      border-color: #093c6b;
      box-shadow: 0 0 0 0.2rem rgba(9, 60, 107, 0.15);
    }

    .form-label i {
      color: #093c6b;
    }
  </style>

  <div class="container">
    <div class="membership-form">
      <h2><i class="fa-solid fa-users me-2"></i> Apply For Membership</h2>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label required"><i class="fa-solid fa-user me-2"></i> Full Name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Your full name" required>
          </div>

          <div class="col-md-6">
            <label class="form-label required"><i class="fa-solid fa-envelope me-2"></i> Email Address</label>
            <input type="email" name="e_mail" class="form-control" placeholder="you@example.com" required>
          </div>

          <div class="col-md-6"> <br>
            <label class="form-label required"><i class="fa-solid fa-phone me-2"></i> Phone Number</label>
            <input type="tel" name="phone" class="form-control" placeholder="+91XXXXXXXXXX" required>
          </div>

          <div class="col-md-6"> <br>
            <label class="form-label required"><i class="fa-solid fa-calendar-days me-2"></i> Date of Birth</label>
            <input type="date" name="dob" class="form-control" required>
          </div>

          <div class="col-md-12"> <br>
            <label class="form-label required"><i class="fa-solid fa-location-dot me-2"></i> Address</label>
            <textarea name="address" class="form-control" rows="3" placeholder="Full address with city and pincode" required></textarea>
          </div>

          <div class="col-md-6"> <br>
            <label class="form-label required"><i class="fa-solid fa-globe me-2"></i> State</label>
            <input type="text" name="state" class="form-control" placeholder="Your state" required>
          </div>

          <div class="col-md-6"> <br>
            <label class="form-label required"><i class="fa-solid fa-map-pin me-2"></i> Pincode</label>
            <input type="text" name="pincode" class="form-control" placeholder="e.g. 751009" required>
          </div>


          <div class="col-md-6"> <br>
            <label class="form-label"><i class="fa-solid fa-file me-2"></i> Upload ID Proof (PDF, JPG, PNG)</label>
            <input type="file" name="id_proof" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
          </div>


          <div class="col-md-6"> <br>
            <label for="membership_category" class="form-label required">
              <i class="fas fa-layer-group me-1"></i> Membership Category
            </label>
            <div class="input-group shadow-sm rounded">
              <span class="input-group-text bg-white border-end-0">
                <i class="fas fa-users text-secondary"></i>
              </span>
              <select name="membership_category" id="membership_category" class="form-select border-start-0" required>
                <option value="" disabled selected>Select category</option>
                <option value="Individual">👤 Individual</option>
                <option value="Corporate">🏢 Corporate</option>
                <option value="Institutional">🏫 Institutional</option>
                <option value="Lifetime">♾️ Lifetime</option>
              </select>
            </div>
          </div>

        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-submit px-4 py-2" name="submit_btn" value="submit">
            <i class="fas fa-paper-plane me-2"></i> Submit Application
          </button>
        </div>
      </form>
    </div>
  </div>

  <?php include 'footer.php'; ?>