<?php
// Execute the Python program
$output = shell_exec("disease_prediction.py");

// Return the output or any errors
if ($output === false) {
  echo "Error running Python program.";
} else {
  echo $output;
}
?>