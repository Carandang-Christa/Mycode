<?php
$filename = 'ista.txt';

if (file_exists($filename)) {

    $contents = file_get_contents($filename);
    echo "File contents before modification:<br>";
    echo nl2br(htmlspecialchars($contents));
    
} else {
    echo "File does not exist. Creating file with initial content.<br>";
    $initialContent = "This is the initial content.";
    file_put_contents($filename, $initialContent);
}

$newContent = "\nHi Php.";
file_put_contents($filename, $newContent, FILE_APPEND);

$fileArray = file($filename);
echo "<br>File contents after modification:<br>";
foreach ($fileArray as $line) {
    echo htmlspecialchars($line) . "<br>"; 
}
?>