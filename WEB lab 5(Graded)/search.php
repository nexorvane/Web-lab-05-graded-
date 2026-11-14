
<?php
// Task 1: GET Product Search

$products = array(
    "Mobile",
    "Laptop",
    "Mouse",
    "Keyboard",
    "Monitor",
    "Printer"
);

// Check whether search value exists
if (isset($_GET['q'])) {

    $search = trim($_GET['q']);

    // Check if search field is empty
    if ($search == "") {

        echo "Please enter a search word";

    } else {

        $found = false;

        echo "<h2>Search Results</h2>";

        // Search products using foreach
        foreach ($products as $product) {

            if (stripos($product, $search) !== false) {

                echo htmlspecialchars($product) . "<br>";

                $found = true;
            }
        }

        // If no product matches
        if ($found == false) {
            echo "No product found";
        }
    }

} else {

    echo "Please enter a search word";

}
?>
