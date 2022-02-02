<?php 
$title = 'Sucess';
require_once 'includes/header.php'; 
require_once 'db/conn.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $speciality = $_POST['speciality'];
    // call function to insert and track if success or not
    $result = $crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$speciality);
    if($result){
        header("Location: viewrecords.php");
    } else {
        include 'includes/errorMessage.php';
    }
} else {
    include 'includes/errorMessage.php';
}

?>