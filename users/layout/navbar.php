<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Blood Donation Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">

      <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="<?php
                        if (isset($setAboutActive)) {
                            echo $setAboutActive;
                        } else {
                            echo '';
                        }
                        ?>"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="<?php if(isset($setMemberActive)){ echo $setMemberActive; } else { echo ''; } ?>">
                            <a class="nav-link" href="member.php">Our Members</a>
                        </li>

                        <li class="<?php if(isset($setJoinUsActive)){ echo $setJoinUsActive; } else { echo ''; } ?>">
                            <a class="nav-link" href="register.php">Join Us</a>
                        </li>

                        <li class="<?php if(isset($setAvailabilityActive)) {echo $setAvailabilityActive;} else {echo '';} ?>">
                            <a class="nav-link" href="availability.php">Check Availability</a>
                        </li>

                        <li class="">
                            <a class="nav-link" href="../index.php">Employee Login</a>
                        </li>

    </ul>
  </div>
</nav>
