<?php
// Connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mahircompany";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the AJAX request
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $quantity = $_POST['quantity'];
    $paymentMethod = $_POST['paymentMethod'];
    $problemImage = $_POST['problemImage'];
    $additionalInfo = $_POST['additionalInfo'];

    // Prepare and execute the SQL statement to insert the order details into the database
    $sql = "INSERT INTO orders (product_name, product_price, quantity, payment_method, problem_image, additional_info) VALUES ('$productName', $productPrice, $quantity, '$paymentMethod', '$problemImage', '$additionalInfo')";
    if (mysqli_query($conn, $sql)) {
        echo "Order details stored successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
