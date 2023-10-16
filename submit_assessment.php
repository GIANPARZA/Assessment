<?php
include('assessment_connect.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $sr_code = isset($_POST['sr_code']) ? $_POST['sr_code'] : '';
    $depressionInterpretation = isset($_POST['depression_interpretation']) ? $_POST['depression_interpretation'] : '';
    $anxietyInterpretation = isset($_POST['anxiety_interpretation']) ? $_POST['anxiety_interpretation'] : '';
    $stressInterpretation = isset($_POST['stress_interpretation']) ? $_POST['stress_interpretation'] : '';
    $submissionDate = date('Y-m-d H:i:s');
    


    $query = "INSERT INTO assessment (name, sr_code, depression_interpretation, anxiety_interpretation, stress_interpretation)
              VALUES ('$name', '$sr_code', '$depressionInterpretation', '$anxietyInterpretation', '$stressInterpretation')";

   
    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

   
    $conn->close();
}
?>
