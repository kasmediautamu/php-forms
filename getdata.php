<?php 
$title = 'Sucess';
require_once 'includes/header.php'; ?>

<h1 class="text-center text-success">You Have Been Registered!</h1>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php
echo $_GET['firstname'] . ' ' . $_GET['lastname'] ;?></h5>
        <p class="card-text">Speciality:<?php echo $_GET['speciality'];?></p>
        <p class="card-text">Date Of Birth:<?php echo $_GET['dob'];?></p>
        <p class="card-text">Email:<?php echo $_GET['email'];?></p>
        <p class="card-text">Phone:<?php echo $_GET['phone'];?></p>

    </div>
</div>

<?php
echo $_GET['firstname'];
echo $_GET['lastname'];
echo $_GET['dob'];
echo $_GET['email'];
echo $_GET['phone'];
?>

<?php require_once 'includes/footer.php'; ?>