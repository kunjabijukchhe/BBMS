<?php
$success=NULL;$message=NULL;
if(isset($_POST['submitBtn'])){
    $fname = $_POST['firstName'];
    $mname = $_POST['middleName'];
    $lname = $_POST['lastName'];
    $sex = $_POST['sex'];
    $bType = $_POST['b_type'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    //Medical Information
    $donationDate = $_POST['don_date'];
    $stats = $_POST['stats'];
    $temp = $_POST['temp'];
    $pulse = $_POST['pulse'];
    $bp = $_POST['bp'];
    $weight = $_POST['weight'];
    $hemoglobin = $_POST['hemoglobin'];
    $hbsag = $_POST['hbsag'];
    $aids = $_POST['aids'];
    $malariaSmear = $_POST['malariaSmear'];
    $hematocrit = $_POST['hematocrit'];

    require_once 'php/DBConnect.php';
    $db = new DBConnect();
    $flag = $db->addDonor($fname, $mname, $lname, $sex, $bType, $dob, $address, $city, $donationDate, $stats, $temp,
            $pulse, $bp, $weight, $hemoglobin, $hbsag, $aids, $malariaSmear, $hematocrit, $mobile, $phone);

    if($flag){
        $success = "Successfully added to the database!";
    } else {
        $message = "There was some error saving the user to the database!";
    }
}

$title = "Donor";
$setDonorActive = "active";
include 'layout/header.php';

include 'layout/navbar.php';
?>

<div style="padding-top:15px; padding-bottom:15px;" class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">



            <form method="post" class="form-horizontal" role="form" action="donor.php">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 style="font-size:32px; text-align:center;">Donor Basic Info</h2>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3">Name</label>

                            <div class="form-group col-sm-8"> <input type="text" name="firstName" class="form-control" placeholder="First Name" required="true"> </div>
                            <div class="form-group col-sm-8"><input type="text" name="middleName" class="form-control" placeholder="Middle Name"></div>
                            <div class="form-group col-sm-8"><input type="text" name="lastName" class="form-control" placeholder="Last Name" required="true"></div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Gender</label>
                            <div class="col-sm-4 radio-inline">
                                <input type="radio" value="male" name="sex" checked="true">Male
                                <input type="radio" value="female" name="sex">Female
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Type:</label>
                            <div class="col-sm-8">
                                <select name="b_type" class="form-control">
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">D.O.B</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea rows="8" name="address" class="form-control" required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">City</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Mobile</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="mobile" class="form-control" required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" max="10000000000" name="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="panel-heading">
                        <h2 style="font-size:32px; text-align:center;">Donor Medical Info</h2>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-4">Date of Donation</label>
                            <div class="col-sm-8">
                                <input type="date" name="don_date" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Statistics</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="stats" value="" required="true" class="form-control"/> -->
                                <select name="stats" class="form-control">
                                    <option value="Normal">Normal</option>
                                    <option value="Critical">Critical</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Temperature</label>
                            <div class="col-sm-8">
                                <input type="decimar" name="temp" placeholder="In Celsius" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Pulse</label>
                            <div class="col-sm-8">
                                <input type="number" min="0" placeholder="60 to 100 beats per minute" max="300" name="pulse" value="" class="form-control" required="true"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Blood Pressure</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="bp" value="" class="form-control" required="true"/> -->
                                <select name="bp" class="form-control">
                                    <option value="High">High</option>
                                    <option value="Low">Low</option>
                                    <option value="Normal">Normal</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Weight</label>
                            <div class="col-sm-8">
                                <input type="decimal" placeholder="In k.g."name="weight" value="" required="true" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hemoglobin</label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="hemoglobin" value="" required="true" class="form-control"/> -->
                                <select name="hemoglobin" class="form-control">
                                    <option value="17 to 22 gm/dL">17 to 22 gm/dL</option>
                                    <option value="15 to 20 gm/dL">15 to 20 gm/dL</option>
                                    <option value="11 to 15 gm/dL">11 to 15 gm/dL</option>
                                    <option value="11 to 13 gm/dL">11 to 13 gm/dL</option>
                                    <option value="14 to 18 gm/dL">14 to 18 gm/dL</option>
                                    <option value="12 to 16 gm/dL">12 to 16 gm/dL</option>
                                    <option value="11.7 to 13.8 gm/dL">11.7 to 13.8 gm/dL</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">HBsAg </label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="hbsag" value="" required="true" class="form-control"/> -->
                                <select name="hbsag" class="form-control">
                                    <option value="Negative">Negative</option>
                                    <option value="Positive">Positive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Aids </label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="aids" value="" required="true" class="form-control"/> -->
                                <select name="aids" class="form-control">
                                    <option value="Negative">Negative</option>
                                    <option value="Positive">Positive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Malaria Smear </label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="malariaSmear" value="" required="true" class="form-control"/> -->
                                <select name="malariaSmear" class="form-control">
                                    <option value="Negative">Negative</option>
                                    <option value="Positive">Positive</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4">Hematocrit </label>
                            <div class="col-sm-8">
                                <!-- <input type="text" name="hematocrit" value="" required="true" class="form-control"/> -->
                                <select name="hematocrit" class="form-control">
                                    <option value="Negatives">Negative</option>
                                    <option value="Positive">Positive</option>

                                </select>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="col-sm-4">  </label>
                            <div class="col-sm-8">
                                <button class="btn btn-success" type="submit" name="submitBtn" >Add Donor</button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3"></label>
                    <button class="btn btn-success" type="submit" name="submitBtn" >Add Donor</button>
                </div>
                <?php if(isset($success)): ?>
                <div class="alert-success fade-out-5"><?= $success; ?></div>
                <?php endif; ?>
                <?php if(isset($message)): ?>
                <div class="alert-danger fade-out-5"><?= $message; ?></div>
                <?php endif; ?>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
