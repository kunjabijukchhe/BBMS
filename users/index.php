<?php
$title = "Home";
$setHomeActive = "active";
include 'layout/header.php';

include 'layout/navbar.php';
?>
    <header class="jumbotron back-image" style="background-image: url(https://cdn.pixabay.com/photo/2012/03/01/01/39/blood-20301_960_720.jpg);">
    <div class="text-center" style="margin-top: 50px;">
      <h1 class="text-uppercase text-danger font-weight-bold" style="color: #fad0e0;">Welcome to Blood Bank</h1>
        <p class="font-italic  text-danger font-weight-bold">"Anybody can give blood"</p>
      </div></header>

<div class="container">
    <div class="jumbotron">
        <div class="col-md-10">

            <h3 style="text-align:center;">Why Are We Here For?</h3>
            <p id="About">
                Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.
            </p>
            <hr id="line_1">
            <h3 style="text-align:center;">Features</h3>
            <p>

                - Blood Donation Camp & Camp Organiser Management.<br>
- Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>
- Inventory management in blood bank for storage and issuance of blood.<br>
- Blood requisition and issuance of blood.<br>
- Online transfer of blood from one blood bank to another.<br>
- Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
- Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
- Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
- Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
- List of Donors who are eligible for donation on a particular date with contact Number.<br>
- Camp Wise Donor List and Printing of Donor Cards.<br>
            </p>
        </div>



    </div>
</div>

<?php include 'layout/footer.php'; ?>
