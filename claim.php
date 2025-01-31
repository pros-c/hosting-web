<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Insurance Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(90deg, #001f3f, #004080);
            padding: 20px;
            color: white;
        }
        .navbar img {
            max-height: 80px;
            margin-right: 15px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .image-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #001f3f;
            padding: 20px 0;
            text-align: center;
            color: white;
        }
        .footer a {
            color: #ffcc00;
        }
        .footer a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row bg-light p-2">
            <div class="col-md-12 text-center">
                <marquee>Get the best medical insurance plans tailored for you! For assistance, call: +91-422-4323999, 95665 95665, 82201 88844</marquee>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row navbar align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <img src="http://www.clipartbest.com/cliparts/Kin/LRj/KinLRjjRT.png" alt="Logo">
                <h3><b>JM HOSPITAL INSURANCE</b></h3>
            </div>
            <div class="col-md-6 text-right">
                <div class="input-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search Policies">
                    <button class="btn btn-dark" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <!-- Left Side: Form -->
            <div class="col-md-6">
                <div class="form-container">
                    <form action="insurance_form_submit.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Residential Address" required></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="insuranceType" name="insuranceType" required>
                                <option value="">Select Insurance Type</option>
                                <option value="Individual Health Insurance">Individual Health Insurance</option>
                                <option value="Family Floater Plan">Family Floater Plan</option>
                                <option value="Critical Illness Insurance">Critical Illness Insurance</option>
                                <option value="Top-up Plan">Top-up Plan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="medicalHistory" name="medicalHistory" rows="3" placeholder="Provide details of any pre-existing conditions..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>
            </div>

            <!-- Right Side: Images -->
            <div class="col-md-6">
                <div class="image-container">
                    <img src="http://cleveland-bookkeeping.com/wp-content/uploads/2016/03/shutterstock_155141132.jpg" alt="Insurance Image 1">
                    <img src="https://cdn.cpdonline.co.uk/wp-content/uploads/2022/09/13092522/Becoming-a-hospital-doctor.jpg" alt="Insurance Image 2">
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <footer class="footer">
        <p>&copy; 2023 Medical Insurance Company. All Rights Reserved.</p>
        <div class="contact-info">
            <p>Contact: +91-422-4323999</p>
            <p>Follow us: <a href="#">Facebook</a> | <a href="#">Twitter</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
