<?php

require "connection.php";

?>

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
            <div class="row">
                <h2>Invoice item report</h2>
                <div class="col-6">
                    <label for="Fromdate" class="form-label">From Date:</label>
                    <input type="date" class="form-control" id="Fromdate" name="Fromdate" required>
                </div>
                <div class="col-6">
                    <label for="Todate" class="form-label">To Date:</label>
                    <input type="date" class="form-control" id="Todate" name="Todate" required>
                </div>

                <div class="col-4 mt-4 mb-2 ">
                    <button class="btn btn-primary" onclick="InvoiceitemreportSearch();">Search</button>
                </div>
                <div class="col-8  mt-4  mb-2  text-end">
                    <button class="btn btn-primary" onclick="javascript:(function(){ window.location.reload(); })()">
                        <i class="lni lni-reload"></i></button>
                </div>

                <h2 mt-2>Report </h2>

                <table class="table mt-2 ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice number</th>
                            <th scope="col">Invoice Date</th>
                            <th scope="col">Customer name</th>
                            <th scope="col">Customer district</th>
                            <th scope="col">Item name</th>
                            <th scope="col">Item code</th>
                            <th scope="col">Item category</th>
                            <th scope="col">Item unit price</th>
                        </tr>
                    </thead>
                    <tbody id="invoice-item-result">

                    </tbody>
                </table>
            </div>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>