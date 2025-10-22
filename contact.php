<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">

<head>
    <title>Contact</title>
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
            <img src="images/banner/isf-banners-15.png" alt="Breadcrumbs Image" class="mt-5" style="object-fit:cover;">
            <div class="breadcrumbs-inner">
                <div class="container">
                    <div class="breadcrumbs-text">
                        <h1 class="breadcrumbs-title mb-17">Contact Us</h1>
                        <div class="categories">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->

    <!-- Contact Section Start -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .section-header {
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            color: #214790;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

        .map-container iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 8px;
        }
    </style>

    <div class="container py-5">
        <!-- Contact Page Header -->
        <div class="text-center mb-5">
            <!-- <h1>Contact Us</h1> -->
            <p>Get in touch with us for inquiries, support, or find our location below.</p>
        </div>

        <div class="row">
            <!-- Inquiry Form Section -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h3 class="section-header">Inquiry Form</h3>
                    <form action="action-contact.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" name="c_name" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="c_email" placeholder="Enter your email address">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="c_phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="optionSelect" class="form-label">Choose an Option</label>
                            <select class="form-select" name="c_member" name="optionValue" style="outline:none; height: 40px; width: 175px; border-radius: 5px; padding-left:12px; font-size:15px;">
                                <option value="Individual Member">Individual Member</option>
                                <option value="Corporate Memberr">Corporate Member</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="c_message" rows="4" placeholder="Enter your message"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100" value="submit">Send Message</button>
                        <input type="hidden" name="submit" value="addContact">
                    </form>
                </div>
            </div>

            <!-- Location and Support Section -->
            <div class="col-md-6">
                <div class="row">
                    <!-- Location Section -->
                    <div class="col-md-12 mb-4">
                        <h3 class="section-header">Our Location</h3>
                        <div class="map-container">
                            <!-- Embed Google Map (You can replace with your own location) -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d49982.350639429715!2d85.77587507157328!3d20.265961556609113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sPlot%20No.%2028%2FA%2C%201st%20Floor%2C%20Bapuji%20Nagar%2C%20Bhubaneswar%20%E2%80%93%20751009%2C%20Odisha%2C%20India!5e1!3m2!1sen!2sin!4v1748336179945!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <!-- Support Section -->
                    <div class="col-md-12">
                        <h3 class="section-header">Support</h3>
                        <p>If you have any issues or need further assistance, feel free to reach out:</p>
                        <ul>
                            <li><strong>Email:</strong> official@iconicsportsfederation.com</li>
                            <li><strong>Phone:</strong> +91 8260580835</li>
                            <li><strong>Address:</strong> Plot No. 28/A, 1st Floor, Bapuji Nagar, Bhubaneswar
                                – 751009, Odisha, India</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->



    <?php include 'footer.php'; ?>