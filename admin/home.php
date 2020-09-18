<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->auth();

$success = NULL;
$message = NULL;
if (isset($_POST['submitBtn'])) {
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $designation = $_POST['designation'];
    $landline = $_POST['landline'];
    $mobile = $_POST['mobile'];
    $pcrNumber = uniqid();

    $flag = $db->addEmployee($username, $password, $firstName, $middleName, $lastName, $pcrNumber, $designation, $landline, $mobile, $dob);

    if ($flag) {
        $success = "User has been added to the database successfully!";
    } else {
        $message = "Error adding the employee to the database!". $flag;
    }
}
$title = "Admin Home";
$setHomeActive = "active";
include_once 'layout/header.php';
include_once 'layout/navbar.php';
?>

<div  style="padding-top:15px;margin-left:400px"class="container">
  <div class="row">

    <div class="col-md-6">


                <form class="form-horizontal" role="form" method="post" action="home.php">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 style="font-size:32px; text-align:center;">Add Employee</h2>
                    </div>

                    <div class="panel-body">
                      <div class="form-group">
                        <label class="col-md-3">Name:</label>

                          <div class="form-group col-sm-9"> <input type="text" name="firstName" class="form-control" placeholder="First Name" required="true"> </div>
                          <div class="form-group col-sm-9"><input type="text" name="middleName" class="form-control" placeholder="Middle Name"></div>
                          <div class="form-group col-sm-9"><input type="text" name="lastName" class="form-control" placeholder="Last Name" required="true"></div>
                        </div>

                    <div class="form-group">
                        <label class="col-md-3">Username:</label>
                        <div class="col-sm-9"><input type="text" name="username" class="form-control" required="true"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Password:</label>
                        <div class="col-sm-9"><input type="password" name="password" class="form-control" required="true"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Date of Birth:</label>
                        <div class="col-sm-9"><input type="date" name="dob" class="form-control" required="true"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Designation:</label>
                        <div class="col-sm-9"><input type="text" name="designation" class="form-control" required="true"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Landline:</label>
                        <div class="col-sm-9"><input type="number" min="0" max="10000000000" name="landline" class="form-control"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3">Mobile:</label>
                        <div class="col-sm-9"><input type="number" min="0" max="10000000000" name="mobile" class="form-control" required="true"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3"></label>
                        <button type="submit" class="btn btn-success btn-md" name="submitBtn">Add Employee</button>
                    </div>
                    <?php if (isset($success)): ?>
                        <div class="alert-success"><?= $success; ?></div>
                    <?php endif ?>
                    <?php if (isset($message)): ?>
                        <div class="alert-success"><?= $message; ?></div>
            <?php endif ?>
                </form>
            </div>
            </div>
        </div>
      </div>
    </div>




<?php include 'layout/footer.php'; ?>
