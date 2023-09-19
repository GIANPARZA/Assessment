<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Result</title>
</head>
<body>
    <h2>Assessment Result</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $depressionResult = $_POST["assessmentResultDepression"];
        $anxietyResult = $_POST["assessmentResultAnxiety"];
        $stressResult = $_POST["assessmentResultStress"];

        // You can access other form fields and results here

        echo "<h2>Assessment Result</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Depression Result: $depressionResult</p>";
        echo "<p>Anxiety Result: $anxietyResult</p>";
        echo "<p>Stress Result: $stressResult</p>";

        // Display the assessment results and other information here
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>
