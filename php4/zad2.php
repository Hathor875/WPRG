<?php
$counterFile = 'licznik.txt';

if (!file_exists($counterFile)) {
    file_put_contents($counterFile, '0');
}

$currentCount = file_get_contents($counterFile);
$currentCount++;
file_put_contents($counterFile, $currentCount);

echo "Liczba odwiedzin witryny: $currentCount";
?>
