
<?php
// Task 3: Login using $_REQUEST

$username = $_REQUEST['username'] ?? '';
$password = $_REQUEST['password'] ?? '';

if ($username == "Mohsin" && $password == "1234") {

    echo "Welcome, " . htmlspecialchars($username);

} else {

    echo "Wrong username or password";

}
?>
