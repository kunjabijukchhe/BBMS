<?php
$i=0;
require_once 'users/php/DBConnect.php';
$db = new DBConnect();
$users = $db->getUsers();

$title="Members Area";$setMemberActive="active";$bg_background="bg-success";
include 'layout/header.php';

include 'layout/navbar.php';
?>

<?php include 'users/layout/member_layout.php'; ?>

<?php include 'layout/footer.php'; ?>
