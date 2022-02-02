<?php 
$title = 'Sucess';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $speciality = $_POST['speciality'];
    // call function to insert and track if success or not
    $isSuccess = $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$speciality);
    if($isSuccess){
        include 'includes/sucessMessage.php';;
    }else {
        include 'includes/errorMessage.php';;
    }
}

?>


<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php
echo $_POST['firstname'] . ' ' . $_POST['lastname'] ;?></h5>
        <p class="card-text">Speciality:<?php echo $_POST['speciality'];?></p>
        <p class="card-text">Date Of Birth:<?php echo $_POST['dob'];?></p>
        <p class="card-text">Email:<?php echo $_POST['email'];?></p>
        <p class="card-text">Phone:<?php echo $_POST['phone'];?></p>

    </div>
</div>

<?php
echo $_POST['firstname'];
echo $_POST['lastname'];
echo $_POST['dob'];
echo $_POST['email'];
echo $_POST['phone'];
?>

<?php require_once 'includes/footer.php'; ?>