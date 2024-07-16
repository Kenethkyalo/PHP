<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    $servername = "localhost";
    $username = "root";  
    $password = "";      
    $dbname = "campaign_feedback";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Submited Successfully"."<br>";
        $url = "view_feedback.php";
        echo "<a href = '$url'>View Feedback </a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}
?>
