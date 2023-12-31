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

// Check if form data is set in the $_POST array
if (isset($_POST['id'], $_POST['server'], $_POST['email'], $_POST['nomorwa'], $_POST['pesanan'], $_POST['pembayaran'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $server = $_POST['server'];
    $email = $_POST['email'];
    $nomorwa = $_POST['nomorwa'];
    $pesanan = $_POST['pesanan'];
    $pembayaran = $_POST['pembayaran'];

    // Check if $pesanan is an array and not empty
    if (is_array($pesanan) && !empty($pesanan)) {
        // Use implode to join array elements into a string
        $pesanan_string = implode(', ', $pesanan);

        // Set a default value for $game or retrieve it from the form data
        $game = isset($_POST['game']) ? $_POST['game'] : 'default_value';

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO order_topup (no_pesanan, game, id, server, email, nomorwa, pesanan, pembayaran) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $no_pesanan, $game, $id, $server, $email, $nomorwa, $pesanan_string, $pembayaran);

        // Execute prepared statement
        if ($stmt->execute()) {
            echo "pesanan berhasil dibuat";
        } else {
            echo "error: " . $stmt->error; // Output specific error information
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Pesanan array is empty"; // Handle the case when 'pesanan' is an empty array
    }
} else {
    echo "Form data is not set";
}



// Close connection
$conn->close();
?>
