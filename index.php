<?php 
$title = 'Index';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
$results = $crud->getSpecialities();
?>
<h1 class="text-center">Registration for IT Conference</h1>
<form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname" />
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" />
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" />
    </div>
    <div class="form-group">
        <label for="speciality">Area Of Expertise</label>
        <select class="form-control" id="speciality" name="speciality">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <option value="<?php echo $r['speciality_id'] ?>"> <?php echo $r['name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" />
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" />
    </div>
    <button type="submit" name="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Submit</button>
</form>
<?php require_once 'includes/footer.php'; ?>