<?php
function factorialRecursive($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorialRecursive($n - 1);
    }
}

function factorialIterative($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
function measureTime($function, $arg) {
    $start = microtime(true);
    $function($arg);
    $end = microtime(true);
    return $end - $start;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = $_POST['number'];
    $timeRecursive = measureTime('factorialRecursive', $number);
    $timeIterative = measureTime('factorialIterative', $number);

    echo "<p>Obliczanie silni rekurencyjnie dla liczby $number zajęło $timeRecursive sekund.</p>";
    echo "<p>Obliczanie silni nierekurencyjnie dla liczby $number zajęło $timeIterative sekund.</p>";


    if ($timeRecursive < $timeIterative) {
        echo "<p>Funkcja rekurencyjna działała szybciej o " . ($timeIterative - $timeRecursive) . " sekund.</p>";
    } else {
        echo "<p>Funkcja nierekurencyjna działała szybciej o " . ($timeRecursive - $timeIterative) . " sekund.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silnia</title>
</head>
<body>

<form action="" method="post">
    <label for="number">Podaj liczbę:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Oblicz</button>
</form>

</body>
</html>
