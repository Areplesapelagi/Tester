<?php
// File to store attendee data
$filename = 'attendees.md';

// Get form data
$attendee_name = $_POST['attendee_name'] ?? '';
$pax_number = $_POST['pax_number'] ?? '';
$phone_number = $_POST['phone_number'] ?? '';
$attendee_comment = $_POST['attendee_comment'] ?? '';
$status = $_POST['status'] ?? '';

// Map status code to human-readable text (optional)
$status_map = [
    '1' => 'Going',
    '0' => 'Maybe',
    '-1' => 'Not Going',
];
$status_text = $status_map[$status] ?? 'Unknown';

// Prepare data to write in Markdown format
$data = "### Attendee: $attendee_name\n";
$data .= "- **Pax**: $pax_number\n";
$data .= "- **Phone**: $phone_number\n";
$data .= "- **Comment**: $attendee_comment\n";
$data .= "- **Status**: $status_text\n\n";

// Write data to file
file_put_contents($filename, $data, FILE_APPEND);

// Redirect back to the form page or show a success message
header('Location: thank_you.html'); // Change to your desired location
exit();
?>
