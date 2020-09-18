<?php
$i=0;
if(isset($_POST['searchBtn'])){
    require_once 'php/DBConnect.php';
    $db = new DBConnect();

    $bloodType = $_POST['blood_group'];
    $donors = $db->getDonorsByBloodType($bloodType);
}
$title = "Blood Availability";
$setAvailabilityActive = "active";
include 'layout/header.php';


include 'layout/navbar.php';
?>

<div class="container">
    <div class="row">

        <div class="col-md-10">
          <div class="form-group col-md-12">
            <form class="form-inline" role='form' method="post" action="availability.php">
              <div class="form-group">
                <label class="form-label">Select Blood Group: </label>
                <br>
                <div class="col-auto">
                  <select name="blood_group" class="form-control">
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
                <div class="col-auto">
                  <button type="submit" class="btn btn-outline-secondary" name="searchBtn">Check Availability</button>
              </div>
              </div>

            </form>
            </div>
            <div class="jumbotron">
            
              <div class="form-group">
                  <?php if(isset($donors[0])): ?>

                  <label><h3 style="color:#000000">Total number of donors with <?= $donors[0]['b_type']; ?> </h3></label>
                  <div class="emphasize"><h3 style="color:#000000"><?= count($donors); ?> Donors</h3></div>
                  <table class="table table-condensed">
                      <thead>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>D.O.B</th>
                      <th>Address</th>
                      <th>City</th>
                      <th>Blood Group</th>
                      </thead>

                      <?php foreach($donors as $d): $i++;?>

                      <tr class="<?php if($i%2==0){echo 'bg-danger';} else{echo 'bg-success';} ?>">
                          <td><a href="profile.php?id=<?= $d['id']; ?>"><?= $d['fname'] ." ".$d['mname']." ".$d['lname']; ?></a></td>
                          <td><?= $d['sex']; ?></td>
                          <td><?= $d['bday']; ?></td>
                          <td><?= wordwrap($d['h_address'],26,'<br>' ); ?></td>
                          <td><?= $d['city']; ?></td>
                          <td><?= $d['b_type']; ?></td>
                      </tr>
                      <?php endforeach;?>
                  </table>
                  <?php endif; ?>
              </div>

          </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
