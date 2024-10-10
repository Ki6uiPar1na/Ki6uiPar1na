<?php
// Path to the counter file
$counterFile = 'counter.txt';

// Check if the file exists
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);  // Initialize counter file if it doesn't exist
}

// Read current count from the file
$currentCount = file_get_contents($counterFile);

// Increment the counter
$newCount = $currentCount + 1;

// Save the updated count back to the file
file_put_contents($counterFile, $newCount);

// Return the updated count as a response
echo $newCount;
?>
