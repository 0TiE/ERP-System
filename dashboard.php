<?php


require "connection.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="http://localhost/ERP-System/dashboard.php">Dashboard</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="http://localhost/ERP-System/customer.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Customer</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="http://localhost/ERP-System/item.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Item</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Reports</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="http://localhost/ERP-System/Invoice-report.php" class="sidebar-link">Invoice
                                report</a>
                        </li>
                        <li class="sidebar-item">
                        <li class="sidebar-item">
                            <a href="http://localhost/ERP-System/Invoice-item-report.php" class="sidebar-link">Invoice item report</a>
                        </li>
                        </li>
                        <li class="sidebar-item">
                            <a href="http://localhost/ERP-System/Item-report.php" class="sidebar-link"> Item report</a>
                        </li>
                    </ul>
                </li>



            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div class="text-center">
                <h1>
                    ERP System
                </h1>
            </div>

            <div class="container text-center">
                <div class="row mt-5">
                    <div class="col">
                        <div class="col-3 mb-3">
                            <div class="card border-0" style="width: 20rem;height: 10rem;">

                                <div class="card-body bg-primary  rounded-5 ">

                                    <h1>Sales Amount</h1>
                                    <?php
                                    $rs = Database::search("SELECT SUM(amount) FROM `invoice`");
                                    $n = $rs->num_rows;
                                    if ($n > 0) {
                                       $d = $rs->fetch_assoc();
                                       
                                  ?>
                                    <span class="fs-1">RS .<?php  echo $d["SUM(amount)"] ?></span>
                                  <?php
                                    }

                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-3 mb-3">
                            <div class="card  border-0" style="width: 18rem;height: 10rem;">
                                <div class="card-body bg-success   rounded-5  ">
                                    <h1>Total Invoices</h1>
                                    <?php
                                    $rs = Database::search("SELECT COUNT(id) FROM `invoice`");
                                    $n = $rs->num_rows;
                                    if ($n > 0) {
                                       $d = $rs->fetch_assoc();
                                       
                                  ?>
                                    <span class="fs-1"><?php  echo $d["COUNT(id)"] ?></span>
                                  <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-3 mb-3">
                            <div class="card border-0 " style="width: 18rem;height: 10rem;">
                                <div class="card-body bg-danger  rounded-5   ">
                                    <h1>Total Products</h1>
                                    <?php
                                    $rs = Database::search("SELECT COUNT(id) FROM `item`");
                                    $n = $rs->num_rows;
                                    if ($n > 0) {
                                       $d = $rs->fetch_assoc();
                                       
                                  ?>
                                    <span class="fs-1"><?php  echo $d["COUNT(id)"] ?></span>
                                  <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-3 mb-3">
                            <div class="card border-0" style="width: 18rem; height: 10rem;">
                                <div class="card-body bg-warning  rounded-5   ">
                                    <h1>Total Customers </h1>
                                    <?php
                                    $rs = Database::search("SELECT COUNT(id) FROM `customer`");
                                    $n = $rs->num_rows;
                                    if ($n > 0) {
                                       $d = $rs->fetch_assoc();
                                       
                                  ?>
                                    <span class="fs-1"><?php  echo $d["COUNT(id)"] ?></span>
                                  <?php
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>