<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<h2>Simple Calculator</h2>
<form action="" method="post">
    <input type="text" name="num1" placeholder="Enter first number" required>
    <select name="operation" required>
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (/)</option>
    </select>
    <input type="text" name="num2" placeholder="Enter second number" required>
    <button type="submit">Calculate</button>
</form>
<?php
if(isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    switch($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if($num2 == 0) {
                echo "Error: Division by zero";
                break;
            } else {
                $result = $num1 / $num2;
                break;
            }
        default:
            echo "Invalid operation";
    }
    echo "<p>Result: $result</p>";
}
?>
</body>
</html>
