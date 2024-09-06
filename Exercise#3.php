<?php
// Filename: grp3_rafaelalvinregondola_ex3.php

$filename = 'data.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Get the contents of the file
    $content = file_get_contents($filename);
    echo "File Contents:\n";
    echo $content;
    
    // Read file line by line using file()
    $lines = file($filename);
    echo "\n\nFile Read Line by Line:\n";
    foreach ($lines as $line) {
        echo $line;
    }
} else {
    // If the file doesn't exist, create and write to it using file_put_contents()
    $content = "Sample data for data.txt file.\nThis file was created using file_put_contents().";
    file_put_contents($filename, $content);
    echo "File '$filename' has been created with the following content:\n";
    echo $content;
}
?>
