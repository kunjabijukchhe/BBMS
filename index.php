<?php
require_once 'php/DBConnect.php';
$db = new DBConnect();
$db->authLogin(); // if user has logged in already then forward it to home.php

$message=NULL;
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $flag = $db->login($username, $password);
    if($flag){
        header("Location: http://localhost:8080/BBM/home.php");
    } else {
        $message = "Username of password was incorrect!";
    }
}
$title="Login";
include 'layout/header.php';
?>

<div class="container" style="margin-top:5%;margin-left:35%; ">
<div class="col-md-4">


        <div class="jumbotron">
          <div class="panel-heading">
            <h3 style="font-size: 40px;"> User Login </h3>
          </div>

            <div class="panel-body">
                <form class="form-vertical" role="form" method="post" action="index.php">

                    <div class="form-group">
                        <input type="text" class="form-control" required="true" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" required="true" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group loginBtn">
                        <button type="submit" name="loginBtn" class="btn btn-primary btn-sm">Log In</button>
                        <a href="users/register.php" class="btn btn-sm btn-warning">Sign Up</a>
                    </div>
                    <?php if(isset($message)): ?>
                    <div class="alert-danger"><?= $message; ?></div>
                    <?php endif; ?>
                </form>
            </div>
			</div>

    </div>

</div>

<?php include 'layout/footer.php'; ?>
