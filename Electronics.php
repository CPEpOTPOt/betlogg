<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>PotPot</title>
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
            <main class="container border" style="background-color:gray;">
                <h1 class="text-center my-1" style="font-family:fantasy; font-size:80px; color: darkred;">Shop na sa PotPot</h1>
                <div class="">
                    <!-- dropdown -->
                    <div class="px-3">
                        <div class="btn-group" style="background-color: floralwhite; margin-bottom:2rem;">
                            <button class="btn btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Italian
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Apparels.php">Cars</a></li>
                                <li><a class="dropdown-item" href="Applications.php">Bistro</a></li>
                                <li><a class="dropdown-item" href="Crypto.php">Desktop</a></li>
                                <li><a class="dropdown-item" href="Electronics.php">Italian</a></li>
                                <li><a class="dropdown-item" href="Fastfoods.php">Kitchen Equipments</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- cards -->
                    <div class="row mx-auto row-cols-5">
                        <?php
                        require_once('Prices.php');
                        for ($i = 1; $i < 21; $i++) {
                            $label = "Meal $i";
                            $price = "$Apparels_prices[$i]";
                            echo "
                            <div class='col' onclick='handleItems(\"$label\", \"$price\")' role='button'>
                                <div class='card mb-3 mx-3 ' style='max-width: 300px;'>
                                    <div class='row g-0'>
                                        <img src='italian_img/$i.jpg' class='card-img-top rounded-start' alt='...' height='100'/>
                                        <div class='form-check d-flex justify-content-center align-items-center'>
                                            <label class='form-check-label px-3' for='checkbox$i'>
                                                $label - <span style='font-weight:bold;'>₱$price</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                        ?>
                    </div>
                    <!-- inputs -->
                    <div class="row">
                        <div class="col-6 d-flex">
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Name of an Item:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemName">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" id="Quantity" min="1">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Price:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="ItemPrice">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Discount Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Discounted">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Quantity:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalQuantity">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6" style="white-space:nowrap;">
                                            Total Discount Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscount">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Total Discounted Amount:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="totalDiscounted">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Cash Given:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="Cash">
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            Change:
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" disabled id="Change">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- calculator -->
                        <div class="col-6">
                            <!-- radio -->
                            <div>
                                <ul class="list-group list-group-horizontal gap-5">
                                    <li class="" style="list-style-type: none;">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="senior" onclick="handleDiscounts(0.30)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Senior Citizen
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="discountCard" onclick="handleDiscounts(0.20)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            With Disc. Card
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="employee" onclick="handleDiscounts(0.15)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Employee Disc.
                                        </label>
                                    </li>
                                    <li class="" style="list-style-type: none;"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="noDiscount" onclick="handleDiscounts(0)">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            No Disc.
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- buttons -->
                            <div class="my-3 w-100">
                                <div class="row row-cols-4 mb-3">
                                    <div class="col">
                                        <button type="button" class="btn btn-primary " style="white-space:nowrap" onclick="handleChange()">Calculate Change</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-danger w-100" onclick="handleNew()">New</button>
                                    </div>
                                    <div class="col">
                                    <button type="button" id = "save" class="btn btn-warning w-100">Save</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-dark w-100">Update</button>
                                    </div>
                                </div>
                                <div class="row row-cols-5">
                                    <div class="col-3">
                                        <button type="button" class="btn btn-primary h-100 w-100" onclick="handleCalculator()">Enter</button>
                                    </div>
                                    <div class="col-9">
                                        <div class="row row-cols-3">
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '/'">/</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '*'">*</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '-'">-</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '+'">+</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '9'">9</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '8'">8</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '7'">7</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '6'">6</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '5'">5</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '4'">4</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '3'">3</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '2'">2</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '1'">1</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '0'">0</button>
                                            </div>
                                            <div class="col">
                                                <button type="button" class="btn btn-dark w-100 mb-1" onclick="document.getElementById('Cash').value += '.'">.</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        totalQuantity = 0
        totalDiscount = 0
        totalDiscounted = 0
    </script>
    <script src="js/calculator.js" defer></script>
    <script src="js/change.js" defer></script>
    <script src="js/new.js" defer></script>
    <script src="js/discounts.js" defer></script>
    <script src="js/Items.js" defer></script>
    <script src="js/pos_save.js"></script>
</body>

</html>