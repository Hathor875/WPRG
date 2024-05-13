<?php
$linksFile = 'link.txt';

if (file_exists($linksFile)) {
    $links = file($linksFile, FILE_IGNORE_NEW_LINES);
    foreach ($links as $link) {
        list($address, $description) = explode(';', $link);
        echo "<a href=\"$address\">$description</a><br>";
    }
}
?>
