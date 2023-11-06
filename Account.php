<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>User Account Page</title>
</head>

<body>
<div class="d-flex">
        <!-- sidebar -->
    
        <div class="col bg-dark vh-100 sticky-top" style="width: 70px;">
            <h2 style="margin-bottom: 2rem; text-align:center; font-family:fantasy; color:white;">PotPot Shop</h2>
            <ul style="font-family:algerian; font-size:130%; text-align:left; padding-right:2rem;">
                <li class="">
                    <a href="Admin_page.php" class="nav-link mb-4 text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="employee_registration_save.php" class="nav-link text-white mb-4">
                        Employee Registration
                    </a>
                </li>
                <li>
                    <a href="emp_report.php" class="nav-link text-white mb-4">
                        Employee Report
                    </a>
                </li>
                <li>
                    <a href="Payroll Page.php" class="nav-link active text-white mb-4">
                        Payroll
                    </a>
                </li>
                <li>
                    <a href="report.php" class="nav-link text mb-4">
                        Payroll Report
                    </a>
                </li>
                <li>
                    <a href="Apparels.php" class="nav-link text-white mb-4">
                        POS
                    </a>
                </li>
                <li>
                    <a href="sales_report.php" class="nav-link mb-4 text-white">
                        POS Sales Report
                    </a>
                </li>
                <li>
                    <a href="User_Account.php" class="nav-link text-white mb-4">
                        User Account
                    </a>
                </li>
                <li>
                    <a href="Login Page.php" class="nav-link text-white  mb-4">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-8  flex-grow-1" style="background-color:#444; color:white; text-align:center;"> 
            
        <div class="container d-flex my-5">
                <!--====== CONTACT ONE PART START ======-->
                <section class="contact-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="card" style="width: 100%;">
                                    <img src="employeephoto.png" class="card-img-top" alt="..." height="370">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8">
                                <div class="section-title mt-45">
                                    <h3 class="title">User account Information</h3>
                                </div>
                                <div class="contact-form form-style-four mt-15">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>First Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Middle Name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Last name</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Suffix</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Username</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Confirm Password</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>User type</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-user"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>

                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>User status</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-envelope"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Employee Number</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-phone"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                            <div class="col-md-3" style="margin-right:2rem;">
                                                <div class="form-input mt-15">
                                                    <label>Department</label>
                                                    <div class="input-items default">
                                                        <i class="lni lni-bubble"></i>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <!-- form input -->
                                            </div>
                                        </div>
                                        <!-- row -->
                                        <div class="well mt-5 d-flex justify-content-end gap-3">
                                            <button type="button" class="btn btn-primary">Update</button>
                                            <button type="button" class="btn btn-warning">Delete</button>
                                            <button type="button" class="btn btn-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- contact form -->
                            </div>

                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!--====== CONTACT ONE PART ENDS ======-->
            </div>
        
        </div>

    </div>
</body>

</html>