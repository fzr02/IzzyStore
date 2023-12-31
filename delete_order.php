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

// Periksa apakah ID pesanan diatur dan merupakan bilangan bulat yang valid
if (isset($_POST['order_id'])) {
    $order_id = $_POST['order_id'];

    // Periksa apakah ID pesanan merupakan bilangan bulat yang valid
    if (is_numeric($order_id)) {
        // Persiapkan pernyataan untuk menghapus pesanan
        $stmt = $conn->prepare("DELETE FROM order_topup WHERE no_pesanan = ?");
        $stmt->bind_param("i", $order_id); // "i" mewakili bilangan bulat

        // Jalankan pernyataan
        if ($stmt->execute()) {
            echo "Order deleted successfully";
        } else {
            echo "Error deleting order: " . $stmt->error;
        }

        // Tutup pernyataan
        $stmt->close();
    } else {
        echo "Format ID pesanan tidak valid.";
    }
} else {
    echo "ID pesanan tidak diatur.";
}

// Tutup koneksi
$conn->close();
?>
