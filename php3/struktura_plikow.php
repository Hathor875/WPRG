<?php
function manageDirectory($path, $directory, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    if (!file_exists($path . $directory) && ($operation === 'read' || $operation === 'delete')) {
        return "Katalog \"$directory\" nie istnieje.";
    }

    switch ($operation) {
        case 'read':
            $contents = scandir($path . $directory);
            return $contents ? implode(", ", $contents) : "Katalog \"$directory\" jest pusty.";
        case 'delete':
            if (!is_dir($path . $directory)) {
                return "To nie jest katalog.";
            }
            if (!is_writable($path . $directory)) {
                return "Brak uprawnień do usunięcia katalogu \"$directory\".";
            }
            if (count(scandir($path . $directory)) > 2) {
                return "Katalog \"$directory\" nie jest pusty.";
            }
            rmdir($path . $directory);
            return "Katalog \"$directory\" został usunięty.";
        case 'create':
            if (file_exists($path . $directory)) {
                return "Katalog \"$directory\" już istnieje.";
            }
            mkdir($path . $directory);
            return "Katalog \"$directory\" został utworzony.";
        default:
            return "Nieprawidłowa operacja.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = $_POST['path'];
    $directory = $_POST['directory'];
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'read';

    $result = manageDirectory($path, $directory, $operation);
    echo "<p>$result</p>";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obsługa katalogów</title>
</head>
<body>

<form action="" method="post">
    <label for="path">Ścieżka:</label>
    <input type="text" id="path" name="path" placeholder="Ścieżka" required><br>
    <label for="directory">Nazwa katalogu:</label>
    <input type="text" id="directory" name="directory" placeholder="Nazwa katalogu" required><br>
    <label for="operation">Operacja:</label>
    <select id="operation" name="operation">
        <option value="read">Odczyt</option>
        <option value="delete">Usuwanie</option>
        <option value="create">Tworzenie</option>
    </select><br>
    <button type="submit">Wykonaj</button>
</form>

</body>
</html>
