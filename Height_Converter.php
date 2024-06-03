<!DOCTYPE html>
<html>
<head>
    <title>Height Converter</title>
</head>
<body>
    <h1>Height Converter</h1>
    <form method="post">
        <label>Enter height in kilometers (km):</label>
        <input type="text" name="height" required>
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height_km = $_POST["height"];
        $height_m = $height_km * 1000;
        echo "<p>$height_km kilometers is equal to $height_m meters.</p>";
    }
    ?>
    <a href="index_converter.php">Back to Home Page</a>
</body>
</html>