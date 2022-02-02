<?php 
$title = 'View Record';

require_once 'includes/header.php';
require_once 'db/conn.php';
// get  attendee by id
if(!isset($_GET['id'])){
    include 'includes/errorMessage.php';
} else {
    $id = $_GET['id'];
    $result = $crud->getAttendeeDetails($id); ?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $result['firstname'] . ' ' . $result['lastname'] ; ?></h5>
        <p class="card-text">Speciality:<?php echo $result['name']; ?></p>
        <p class="card-text">Date Of Birth:<?php echo $result['dateofbirth']; ?></p>
        <p class="card-text">Email:<?php echo $result['emailaddress']; ?></p>
        <p class="card-text">Phone:<?php echo $result['contactnumber']; ?></p>

    </div>
</div>
<?php } ?>
<?php require_once 'includes/footer.php'; ?>