<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the data using the $_POST superglobal variable
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);

    if (!empty($name) && !empty($email)) {
        echo "<h3>Hello, " . $name . "!</h3>";
        echo "<p>Your email address is: " . $email . "</p>";
        // Further processing, such as saving to a database or sending an email, would go here
    } else {
        echo "<p>Error: Please fill in all fields.</p>";
    }
}
?>

</body>
</html>
