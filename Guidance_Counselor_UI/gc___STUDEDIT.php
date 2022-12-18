<?php
session_start();

include('includes/gc___header.php');
include('includes/gc___left-menu-area.php');
include('includes/gc___top-menu-area.php');
include('includes/gc___mobile_menu.php');
?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">All Guidance Counselor</span>
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

<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n"> Edit Student Info</span> Account</h1>
                        </div>

                        <?php
                        $connection = mysqli_connect("localhost", "root", "", "db_guidancems");

                        if (isset($_POST['edit_stud_btn'])) {
                            $stud_id = $_POST['edit_stud_id'];

                            $query = " SELECT * FROM student_tbl WHERE STUD_ID='$stud_id' ";
                            $query_run = mysqli_query($connection, $query);

                            foreach ($query_run as $row) {
                        ?>


                                <form action="thecodestud.php" method="POST">

                                    <input type="hidden" name="edit_stud_id" value="<?php echo $row['STUD_ID'] ?>">

                                    <div class="form-group">
                                        <label> Username </label>
                                        <input type="text" name="edit_stud" value="<?php echo $row['GC_USERNAME'] ?>" class="form-control" placeholder="Enter Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="edit_email" value="<?php echo $row['GC_EMAIL'] ?>" class="form-control checking_email" placeholder="Enter Email">
                                        <small class="error_email" style="color: red;"></small>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="edit_password" value="<?php echo $row['GC_PASSWORD'] ?>" class="form-control" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Usertype</label>
                                        <select name="update_usertype" class="form-control">
                                            <option value="Guidance Counselor">Guidance Counselor</option>
                                            <option value="Student">Student</option>

                                        </select>
                                    </div>

                                    <a href="gc___all-gc.php" class="btn btn-danger">Cancel</a>
                                    <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>

                                </form>

                        <?php
                            }
                        }

                        ?>


                    </div>


                </div>
            </div>

            <!-- <td>
                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><a href="gc___edit-gc.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
            </td>
            <td>
                <button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
            </td> -->



        </div>
    </div> <!-- container fluid -->

</div>

<?php
include('includes/gc___scripts.php');
?>