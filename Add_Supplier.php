<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Supplier-Suwani Pharmacy</title>
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

<?php
        include 'dbconfig.php';
        // create variables to store details
        $compnyid = isset($_REQUEST['id']) ? $_REQUEST['id'] : ""; // get value from url parameter, id
        $cmpny_name = "";
        $address = "";
		$tel_no = "";
		$email="";
        $category="";
        $reg_date="";

        
		
		
        $sql = "SELECT * FROM supplier WHERE company_id='" . $compnyid . "'";
                
        // execute select query
        $result = $conn->query($sql);

        // if result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // Get database data and store in variables
				

                $cmpny_name = $row["company_name"];
                $address = $row["address"];
                $tel_no = $row["tel_no"];
                $email= $row["email"];
                $category= $row["category"];
                $reg_date= $row["reg_date"];
				
               
		
            }
        }
        $conn->close();
        ?>

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
            <div id="content" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
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
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                           
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/profile.png">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                           
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                           
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
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


            <?php
                        // check whether the id parameter is set in the url
                        if (isset($_REQUEST["id"])) {
                            // Hidden field will be added to the form only if the parameter id is set
                            ?>
							<div class = "row">
								<div class =" col-md-1"></div>
								<div class =" col-md-1">
									<a href= "View_Supplier.php"> <Button class = "btn-secondry"  ><i class="fa fa-arrow-left" aria-hidden="true"></i> </button> </a>
								</div>
								<div class ="col-md-10">
									<h2 class="text-center" style="color: #002649;background: url(&quot;assets/img/New%20Folder/background_add_supplier.jpg&quot;), rgba(0,38,73,0.01);height: 50px;padding-bottom: -10px;
                                    padding-top: 6px;font-family: Alef, sans-serif;text-align: center;padding-left: -65px;padding-right: 670px;">Update Supplier</h2>
                                </div>
								</div>
                                <?php
                        }else
                        {?>
							<div class = "row">
								<div class =" col-md-1"></div>
								<div class =" col-md-1">
									<a href= "View_Supplier.php"> <Button class = "btn-secondry"  ><i class="fa fa-arrow-left" aria-hidden="true"></i> </button> </a>
								</div>
								<div class ="col-md-10">
									<h2 class="text-center" style="color: #002649;background: url(&quot;assets/img/New%20Folder/background_add_supplier.jpg&quot;), rgba(0,38,73,0.01);height: 50px;padding-bottom: -10px;
                                    padding-top: 6px;font-family: Alef, sans-serif;text-align: center;padding-left: -65px;padding-right: 670px;">Add new Supplier</h2>
								</div>
								</div>
                            <?php
                        }
                        ?>


            
            <div class="container">
                <div>



                    <form action="logic/sup_reg.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group border-success" style="padding-top: 12px;">
                            <div class="text-capitalize border rounded border-dark shadow-sm" data-toggle="tooltip" data-bs-tooltip="" id="formdiv" style="background: linear-gradient(white 14%, #c9e8dd 100%);">
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Company Name</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" value="<?php echo $cmpny_name; ?>" name="cmp_name" id="cmp_name"  placeholder="Name" required></div>
                                </div>
                                
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Company Address</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" value="<?php echo $address; ?>" name="address" id="address"  placeholder="company address" required></div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Contact number</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><input class="form-control" type="tel" style="margin-left:0px;font-family:Roboto, sans-serif;" value="<?php echo $tel_no; ?>" name="tel_no" id="tel_no"  placeholder="Place" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required></div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Email Address</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1" style="font-family:Roboto, sans-serif;"><input class="form-control" type="email" style="margin-left:0px;" value="<?php echo $email; ?>" name="email" id="email"  placeholder="Name" required></div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Main Category</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><input class="form-control" type="text" style="margin-left:0px;font-family:Roboto, sans-serif;" placeholder="Name" value="<?php echo $category; ?>" name="category" id="category"  required></div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                    <div class="col-md-8 offset-md-1">
                                        <p style="margin-left: 2%;font-family: Roboto, sans-serif;font-size: 20px;"><strong>Register Date</strong></p>
                                    </div>
                                    <div class="col-md-10 offset-md-1"><input class="form-control" style="font-family:Roboto, sans-serif;" type="date" min="2020-01-01" value="<?php echo  $reg_date; ?>" name="reg_date" id="reg_date" ></div>
                                </div>
                                <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                                <div class="col-md-8 offset-md-1">
                                        
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                    <?php
                                    // check whether the id parameter is set in the url
                                    if (isset($_REQUEST["id"])) {
                                        // Hidden field will be added to the form only if the parameter id is set
                                        ?>
                                            <input class="form-control" type="hidden"  name="isUpdate" value="<?php echo $compnyid;?>" style="width: 150px;"></div>
                                            <?php
                                    }
                                    ?>
                                    
                                    </div>
                                    <div class="col-md-8 offset-md-1">
                                    <input style="margin-top: 30px;margin-left: 246px;width: 100px;height: 55px;margin-bottom: 0px;background: #002649;font-size: 22px;border-color: #002649;" class="btn btn-primary border rounded" type="submit" id="button" value="Save" />
                                    </div>
                                </div>
                                    
                               
                                </div>
                                
                             </div>     
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?PHP
		
		
        //if page is redirected by saveing then we check the parameter
                if(isset($_GET['sucess'])){
            //if querry excuted succesfully
                if($_GET['sucess']=='yes'){
                    $message = "The supplier has been succesfully added to the database";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                elseif($_GET['sucess']=='no')
                {
                    $message = "Some Error occured .Please try again!!!!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                    }
        
                if(isset($_GET['update'])){   
                        if($_GET['update']=='yes')
                     {
                   $message = "Supplier was updated successfully";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                       }
                elseif($_GET['update']=='no')
                     {
                 $message = "Some Error occured .Please try again!!!!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                   }
                }
                
         ?>


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

</php>