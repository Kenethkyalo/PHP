<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Validate input (you may want to add more robust validation)
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo("Location: Add.php?error=invalid_input");
        exit();
    }

    // Add the numbers
    $result = $num1 + $num2;

    // Redirect back to the form with the result as a URL parameter
    echo("Location: Add.php?result=$result");
    exit();
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform addition
    $result = $num1 + $num2;

    // Output the result
    echo $result;
}
?>
*/
?>