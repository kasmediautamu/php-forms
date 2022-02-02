<?php 
$title = 'Edit Record';
require_once 'includes/header.php'; 
require_once 'db/conn.php';

$results = $crud->getSpecialities();

if(!isset($_GET['id'])){
    // echo 'error';
    include 'includes/errorMessage.php';
    header("Location: viewrecords.php");
} else {
    $id = $_GET['id'];
    $attendee = $crud->getAttendeeDetails($id); ?>
<h1 class="text-center">Registration for IT Conference</h1>
<form method="post" action="editpost.php">
    <input name="id" type="hidden" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname"
            name="firstname" />
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" value="<?php echo $attendee['lastname'] ?>"
            name="lastname" />
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" value="<?php echo $attendee['dateofbirth'] ?>" name="dob" />
    </div>
    <div class="form-group">
        <label for="speciality">Area Of Expertise</label>
        <select class="form-control" id="speciality" value="<?php echo $attendee['speciality_id'] ?>" name="speciality">
            <?php while ($r = $results->fetch(PDO::FETCH_ASSOC)) {?>

            <option value="<?php echo $r['speciality_id'] ?>" <?php 
                if($r['speciality_id'] == $attendee['speciality_id']) echo 'selected'
                ?>>

                <?php echo $r['name']; ?>

            </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" value="<?php echo $attendee['emailaddress'] ?>"
            name="email" />
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" value="<?php echo $attendee['contactnumber'] ?>"
            name="phone" />
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Submit</button>
</form>
<?php
}?>
<?php require_once 'includes/footer.php'; ?>