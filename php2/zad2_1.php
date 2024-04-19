<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <style>

        body {
            background-color: #f9f9f9;
            padding-bottom: 20px;
        }

        #form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        h1 {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            margin-top: 0;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        select,
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="checkbox"] {
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div id="form-container">
    <h1>Hotel Reservation Form</h1>
    <form action="zad2_2.php" method="post">
        <label for="num_people">Number of People:</label>
        <select name="num_people" id="num_people" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="surname">Surname:</label>
        <input type="text" name="surname" id="surname" required><br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br><br>

        <label for="credit_card">Credit Card:</label>
        <input type="text" name="credit_card" id="credit_card" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="arrival_date">Arrival Date:</label>
        <input type="date" name="arrival_date" id="arrival_date" required><br><br>

        <label for="arrival_time">Arrival Time:</label>
        <input type="time" name="arrival_time" id="arrival_time" required><br><br>

        <label for="child_bed">Child Bed Needed:</label>
        <input type="checkbox" name="child_bed" id="child_bed"><br><br>

        <label for="amenities">Amenities:</label><br>
        <input type="checkbox" name="amenities[]" value="Air Conditioning"> Air Conditioning<br>
        <input type="checkbox" name="amenities[]" value="Smoking Room"> Smoking Room<br><br>

        <input type="submit" value="Submit Reservation">
    </form>
</div>
</body>
</html>
