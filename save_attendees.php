<?php
// File to store attendee data
$filename = 'attendees.txt';

// Get form data
$attendee_name = $_POST['attendee_name'];
$pax_number = $_POST['pax_number'];
$phone_number = $_POST['phone_number'];
$attendee_comment = $_POST['attendee_comment'];
$status = $_POST['status'];

// Prepare data to write
$data = "Name: $attendee_name, Pax: $pax_number, Phone: $phone_number, Comment: $attendee_comment, Status: $status\n";

// Write data to file
file_put_contents($filename, $data, FILE_APPEND);

// Redirect back to the form page or show a success message
header('Location: thank_you.html'); // Change to your desired location
exit();
?>
