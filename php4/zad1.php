<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept=".txt">
    <button type="submit">Odwróć kolejność</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $lines = file($file);
    $lines = array_reverse($lines);
    $newFile = 'reversed.txt';
    file_put_contents($newFile, implode("", $lines));
    echo "<p>Pomyślnie odwrócono kolejność wierszy w pliku</p>";
}
?>

</body>
</html>
