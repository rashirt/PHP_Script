<!DOCTYPE html>
<html>
<head>
    <title>Weight Converter</title>
</head>
<body>
    <h1>Weight Converter</h1>
    <form method="post">
        <label>Enter weight in kilograms (kg):</label>
        <input type="text" name="weight" required>
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight_kg = $_POST["weight"];
        $weight_mg = $weight_kg * 1000000;
        echo "<p>$weight_kg kilograms is equal to $weight_mg milligrams.</p>";
    }
    ?>
    <a href="index_converter.php">Back to Home Page</a>
</body>
</html>