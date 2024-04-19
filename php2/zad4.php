<?php
function is_prime($number, &$iterations) {
    $iterations = 0;

    if ($number <= 1) {
        return false;
    }

    if ($number == 2 || $number == 3) {
        return true;
    }

    if ($number % 2 == 0 || $number % 3 == 0) {
        return false;
    }

    $i = 5;
    $w = 2;

    while ($i * $i <= $number) {
        $iterations++;
        if ($number % $i == 0) {
            return false;
        }
        $i += $w;
        $w = 6 - $w;
    }

    return true;
}

$count_iterations = 0;
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];

    if (!empty($number) && is_numeric($number) && $number > 0 && is_int($number + 0)) {
        $is_prime = is_prime($number, $count_iterations);
        $result = $is_prime ? "Liczba $number jest liczbą pierwszą." : "Liczba $number nie jest liczbą pierwszą.";
    } else {
        $result = "Podana wartość nie jest poprawną liczbą całkowitą dodatnią.";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź czy liczba jest liczbą pierwszą</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            max-width: 400px;
            background-color: #f9f9f9;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="number">Podaj liczbę:</label>
    <input type="text" id="number" name="number" placeholder="Wpisz liczbę...">
    <input type="submit" value="Sprawdź">
</form>

<div class="result">
    <?php echo $result; ?><br>
    <?php echo "Liczba iteracji potrzebnych do obliczenia wyniku: $count_iterations"; ?>
</div>

</body>
</html>
