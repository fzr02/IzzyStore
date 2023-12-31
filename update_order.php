<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the order ID and updated data from the form
    $order_id = $_POST['order_id'];
    $game = $_POST['game'];
    $id = $_POST['id'];
    $server = $_POST['server'];
    $email = $_POST['email'];
    $nomorwa = $_POST['nomorwa'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];

    // Update the order data in the database
    $sql = "UPDATE order_topup SET game='$game', id='$id', server='$server', email='$email', nomorwa='$nomorwa', pesanan='$pesanan', pembayaran='$pembayaran' WHERE no_pesanan='$order_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Order updated successfully.";
    } else {
        echo "Error updating order: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
