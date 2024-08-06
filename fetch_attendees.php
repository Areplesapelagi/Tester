<?php
// fetch_attendees.php

// File to read attendee data
$filename = 'attendees.md';

// Check if file exists
if (file_exists($filename)) {
    $fileContents = file_get_contents($filename);
    $attendees = explode("\n", trim($fileContents));

    $data = [
        'going' => 0,
        'maybe' => 0,
        'not_going' => 0,
    ];

    foreach ($attendees as $line) {
        if (strpos($line, 'Status: 1') !== false) {
            $data['going']++;
        } elseif (strpos($line, 'Status: 0') !== false) {
            $data['maybe']++;
        } elseif (strpos($line, 'Status: -1') !== false) {
            $data['not_going']++;
        }
    }

    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    header('Content-Type: application/json');
    echo json_encode([
        'going' => 0,
        'maybe' => 0,
        'not_going' => 0,
    ]);
}
?>
