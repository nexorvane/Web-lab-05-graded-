
<?php
// Task 2: POST Login Form

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get username and password using POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check login details
    if ($username == "Mohsin" && $password == "1234") {

        echo "Welcome, " . htmlspecialchars($username);

    } else {

        echo "Wrong username or password";

    }

} else {

    echo "Please submit the login form";

}
?>
