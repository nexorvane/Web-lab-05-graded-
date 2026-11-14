
<?php
// Task 3: Using $_REQUEST

if (isset($_REQUEST['name'])) {

    $name = $_REQUEST['name'];

    echo "Hello, " . htmlspecialchars($name) . "!";

} else {

    echo "Please enter your name";

}
?>
