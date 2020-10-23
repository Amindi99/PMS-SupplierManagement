<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Order-Suwani Pharmacy</title>
    <meta name="description" content="A POS web app to manage  a pharmacy">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic,300italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Add-Another-Button.css">
    <link rel="stylesheet" href="assets/css/Button-Ripple-Effect-Animation-Wave-Pulse.css">
    <link rel="stylesheet" href="assets/css/CDRFormularioIngresoSocio.css">
    <link rel="stylesheet" href="assets/css/DataTable-Examples.css">
    <link rel="stylesheet" href="assets/css/Form.css">
    <link rel="stylesheet" href="assets/css/Formulario-Farmacia.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/responsive-navbar.css">
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/TR-Form.css">
    <link rel="stylesheet" href="assets/css/wtg-alert-1.css">
    <link rel="stylesheet" href="assets/css/wtg-alert.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: #116e80;border-style: none;border-radius: 1px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="margin-left: 0px;">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="material-icons">local_pharmacy</i></div>
                    <div class="sidebar-brand-text mx-3"><span style="margin-right: 0px;">PMS System</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="Invoice_management.php"><i class="fas fa-file-invoice"></i><span>Invoice Management</span></a><a class="nav-link" href="Stock_management.php"><i class="fas fa-box"></i><span>Stock Management</span></a>
                        <a
                            class="nav-link" href="Supplier_management.php"><i class="fas fa-truck-moving"></i><span>Supplier Management</span></a><a class="nav-link" href="Staff_management.php"><i class="fas fa-user-tie"></i><span>Staff Management</span></a><a class="nav-link" href="Doctor_management.php"><i class="fas fa-syringe"></i><span>Doctor Management</span></a>
                            <a
                                class="nav-link" href="E_prescription.php"><i class="fas fa-notes-medical"></i><span>E-Prescription&nbsp;</span></a><a class="nav-link" href="E_chanelling.php"><i class="fas fa-hand-holding-heart"></i><span>E-Chanelling</span></a><a class="nav-link" href="Delivery_management.php"><i class="fas fa-motorcycle"></i><span>Delivery Management</span></a>
                                <a
                                    class="nav-link" href="Payment_management.php"><i class="fas fa-money-bill"></i><span>Payment Management</span></a>
                                    <div style="height: 62px;"></div><a class="nav-link" href="Payment_management.php"><i class="far fa-clipboard"></i><span>Reports</span></a><a class="nav-link" href="Payment_management.php"><i class="material-icons">backup</i><span>Back Up System</span></a>
                                    <a
                                        class="nav-link" href="Payment_management.php"><i class="far fa-compass"></i><span>Help</span></a>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background: #116e80;"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                       
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">nilanmeegoda@gmail.com&nbsp;</span><img class="border rounded-circle img-profile" src="assets/img/profile.png"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>

            <div>
                <a role="button" style="padding-left:20px; padding-top:10px; width:200px;height: 50px;border-color: #002649;margin-left: 900px;margin-top: -10px;background: rgb(51, 0, 20)"; href="../pdf/Order_Report.php" class="btn btn-primary border rounded" >Generate Reports</a> 
            </div>

            <div class="container-fluid">
                <h3 class="text-dark mb-1" style="font-family: Nunito, sans-serif;color: #3a75c4;font-size: 28px;margin-top: -50px;">Orders</h3>
            </div>
            <div class="col-md-12 search-table-col" style="margin: -10px;padding-top: 13px;height: 455px;">
                <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Search by typing here.."></div><span class="counter pull-right"></span>
                <div class="table-responsive table-bordered table table-hover table-bordered results" style="margin-left: 11px;">
                    <table class="table table-bordered table-hover">
                        <thead class="bill-header cs" style="background: rgb(80,94,108);">

                            <tr style="background: #505e6c;color: #fdf7f7;font-size: 17px;">
                                            <th style="width: 264px;">Order ID</th>
                                            <th>Company ID</th>
                                            <th>Email</th>
                                            <th>Item Name</th>
                                            <th>Item ID</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th style="width: 178px;">Action</th>
                            </tr>

                        </thead>
                        <tbody>

                        <?php 
                                        include './dbconfig.php';
                                        $sql = "SELECT * FROM order_item";
                                        //execute the query
                                        $result = $conn->query($sql);
                                        
                                        //if result has one or more rows
                                        if($result->num_rows > 0){
                                            while ($row = $result->fetch_assoc()){
                                                        
                                                ?>
                                                <tr>
                                                   
                                                    <td><?php echo $row['order_id']; ?></td>
                                                    <td><?php echo $row['company_id']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['item_name']; ?></td>
                                                    <td><?php echo $row['item_id']; ?></td>
                                                    <td><?php echo $row['quantity']; ?></td>
                                                    <td><?php echo $row['date']; ?></td>
                                                    <td class="d-xl-flex justify-content-xl-start" style="width: 217px;border-style: none;border-color: rgba(255,255,255,0);">
                                                       <a class="btn btn-primary border rounded" role="button" style="background: #009e49;margin-bottom: 1px;" href="Order_Update.php?id=<?php echo $row["order_id"];?>"><i class="icon ion-edit"></i></a>
                                                       <a class="btn btn-primary border rounded" role="button" style="background: #c41e3a;padding-bottom: 6px;padding-top: 6px;margin-bottom: 0px;" href="./logic/order_delete.php?ordid=<?php echo $row['order_id']; ?>" ><i class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
					}
				   }
				   
                   ?>
                    
                            <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Suwani Pharmacy 2020</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Button-Ripple-Effect-Animation-Wave-Pulse.js"></script>
    <script src="assets/js/DataTable-Examples.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.21/fh-3.1.7/sc-2.0.2/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>