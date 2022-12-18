<?php
session_start();

include_once("../connections/connection.php");

if (!isset($_SESSION['UserEmail'])) {

    echo "<script>window.open('../loginForm.php','_self')</script>";
} else {

    $con = connection();

    // if (isset($_POST['add_gc'])) {

    //     $staff_id = $_POST['staff_id'];
    //     $last_name = $_POST['last_name'];
    //     $first_name = $_POST['first_name'];
    //     $middle_name = $_POST['middle_name'];
    //     $address = $_POST['address'];
    //     $contact = $_POST['contact'];
    //     $gender = $_POST['gender'];
    //     $date_of_birth = $_POST['date_of_birth'];
    //     $department = $_POST['department'];
    //     $program = $_POST['program'];
    //     $level = $_POST['level'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $position = "Guidance";
    //     $status = "Active";
    //     $role = "1";

    //     // $user_image = "4.jpg";
    //     $user_image = $_FILES['user_image']['name'];
    //     $temp_name = $_FILES['user_image']['tmp_name'];
    //     // $folder = "img/users/$image";
    //     move_uploaded_file($temp_name, "img/profile/$user_image");

    //     echo $add_staff = "INSERT INTO users (`id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, " .
    //         "`gender`, `date_of_birth`, `department`, `program`, `level`, `position`, `status`, `user_image`, `email`, `password`, `role`) " .
    //         "VALUES ('$staff_id','$last_name','$first_name','$middle_name','$address','$contact','$gender','$date_of_birth','$department', " .
    //         "'$program','$level','$position','$status','$user_image','$email','$password','$role')";
    //     $run_query = $con->query($add_staff) or die($con->error);

    //     if ($run_query) {

    //         echo "<script>alert('Guidance account has been Created Sucessfully!')</script>";
    //         echo header("Location: gc___main-all-gc.php");
    //     }
    //     // header("Location: gc___main-all-gc.php");

    // }

?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Guidance and Counseling - STI College Angeles</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- logo angeles_sti
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/sti_logo.png">
        <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- educate icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/educate-custon-icon.css">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
        <!-- x-editor CSS
		============================================ -->
        <link rel="stylesheet" href="css/editor/select2.css">
        <link rel="stylesheet" href="css/editor/datetimepicker.css">
        <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
        <link rel="stylesheet" href="css/editor/x-editor-style.css">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
        <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
        <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="./css/modals.css">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
		============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <?php include('includes/gc___left-menu-area.php') ?>
        <?php include('includes/gc___top-menu-area.php') ?>
        <?php include('includes/gc___mobile_menu.php')  ?>


        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <!-- i remove the search bar because there is already a search bar in the table area -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="gc___dashboard.php">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">All Guidance Staff Table</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING GUIDANCE STAFF MANUALLY ---------------------------------------------->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="ADD_GC_STAFF_MANUAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Add New Guidance Counselor Staff </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="#" method="POST">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">GC Staff ID</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_id" class="form-control" placeholder="Enter Staff ID" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">First Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_fname" class="form-control" placeholder="Enter First Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Middle Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_mname" class="form-control" placeholder="Enter Middle Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Last Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_lname" class="form-control" placeholder="Enter Last Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Address</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_address" class="form-control" placeholder="Enter Address" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Contact No.</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="gcstaff_contact" class="form-control" placeholder="Enter Contact Number" />
                                        </div>
                                    </div>
                                </div>

                                <!----------------- input type as guidance for login validation --------------------->
                                <input type="hidden" name="usertype" value="guidance_counselor">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="register_gc_staff-btn" class="btn btn-primary btn-md">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Static Table Start -->

        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>All<span class="table-project-n"> Guidance Staff</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">

                                <div class="datatable-dashv1-list custom-datatable-overright">

                                    <div id="toolbar">
                                        <div class="card-header py-3">
                                            <h5 class="m-0 font-weight-bold text-primary">

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ADD_GC_STAFF_MANUAL">
                                                    Add New
                                                </button>

                                            </h5>
                                        </div>
                                    </div>

                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>Staff ID</th>
                                                <th>Last Name</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <!-- <th>Position</th> -->
                                                <th>Profile</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                            // $connection = mysqli_connect('localhost', 'root', '', 'guidance_and_counseling');

                                            $query = "SELECT * FROM users WHERE position = 'guidance' || 'Guidance'";
                                            $query_run = mysqli_query($con, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $row) {
                                            ?>

                                                    <tr>
                                                        <td><?= $row['id_number'] ?></td>
                                                        <td><?= $row['last_name'] ?></td>
                                                        <td><?= $row['first_name'] ?></td>
                                                        <td><?= $row['middle_name'] ?></td>
                                                        <td><?= $row['address'] ?></td>
                                                        <td><?= $row['contact'] ?></td>

                                                        <!-- <td>
                                                             <input type="text" value=<?= $row['user_id'] ?> /> 
                                                            <a href="gc___staff_profile.php?id=<?= $row['user_id'] ?>">
                                                                <button type="button" name="view_profile_btn" class="btn btn-primary">View</button>
                                                            </a>
                                                        </td> -->
                                                        
                                                        <td>
                                                            <div style="display: flex; justify-content: center;">
                                                                <a class="btn btn-primary" style="margin-left: 1px; color: white;"
                                                                href="gc___staff_profile.php?id=<?= $row['user_id'] ?>">View</a>

                                                                <!-- <a class="btn btn-danger" style="margin-left: 10px; margin-right: 1px; color: white;"
                                                                href="gc___staff_profile.php?id=<?= $row['user_id'] ?>">Edit</a> -->

                                                                <button id="EDIT_GC_STAFF" class="btn btn-warning" style="margin-left: 10px; margin-right: 20px; color: white;"
                                                                data-toggle="modal" data-target="#EDIT_GC_STAFF_MODAL" data-id="<?= $row['user_id'] ?>">Edit</button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                <?php

                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>

                                            <?php
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->

        <!----------------------------------------- THIS IS THE MODAL FORM OF ADDING GUIDANCE STAFF MANUALLY ---------------------------------------------->
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div id="EDIT_GC_STAFF_MODAL" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Edit Guidance Counselor Staff </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>

                        <form action="#" method="POST">
                            <div class="modal-body">
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">GC Staff ID</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_id" id="edit_gcstaff_id" class="form-control" placeholder="Enter Staff ID" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">First Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_fname" id="edit_gcstaff_fname" class="form-control" placeholder="Enter First Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Middle Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_mname" id="edit_gcstaff_mname" class="form-control" placeholder="Enter Middle Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Last Name</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_lname" id="edit_gcstaff_lname" class="form-control" placeholder="Enter Last Name" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Address</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_address" id="edit_gcstaff_address" class="form-control" placeholder="Enter Address" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2 pull-right">Contact No.</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="edit_gcstaff_contact" id="edit_gcstaff_contact" class="form-control" placeholder="Enter Contact Number" />
                                        </div>
                                    </div>
                                </div>

                                <!----------------- input type as guidance for login validation --------------------->
                                <input type="hidden" name="usertype" value="guidance_counselor">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Cancel</button>
                                    <button type="submit" name="edit__gcstaff-btn" id="edit__gcstaff-btn" class="btn btn-primary btn-md">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>



        <?php
        include('includes/gc___scripts.php');
        ?>

        <!-- data table JS
		============================================ -->
        <script src="js/data-table/bootstrap-table.js"></script>
        <script src="js/data-table/tableExport.js"></script>
        <script src="js/data-table/data-table-active.js"></script>
        <script src="js/data-table/bootstrap-table-editable.js"></script>
        <script src="js/data-table/bootstrap-editable.js"></script>
        <script src="js/data-table/bootstrap-table-resizable.js"></script>
        <script src="js/data-table/colResizable-1.5.source.js"></script>
        <script src="js/data-table/bootstrap-table-export.js"></script>
        <!--  editable JS
		============================================ -->
        <script src="js/editable/jquery.mockjax.js"></script>
        <script src="js/editable/mock-active.js"></script>
        <script src="js/editable/select2.js"></script>
        <script src="js/editable/moment.min.js"></script>
        <script src="js/editable/bootstrap-datetimepicker.js"></script>
        <script src="js/editable/bootstrap-editable.js"></script>
        <script src="js/editable/xediable-active.js"></script>
        <!-- Chart JS
		============================================ -->
        <script src="js/chart/jquery.peity.min.js"></script>
        <script src="js/peity/peity-active.js"></script>
        <!-- icheck JS
		============================================ -->
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/icheck/icheck-active.js"></script>


    </body>

    </html>

<?php } ?>