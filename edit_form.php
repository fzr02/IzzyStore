<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit_form.css" />
    <title>Edit Order</title>
</head>
<body>

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
    // Retrieve the order ID from the form
    $order_id = $_POST['order_id'];

    // Fetch the order data based on the order ID
    $sql = "SELECT * FROM order_topup WHERE no_pesanan = '$order_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $game = $row['game'];
        $id = $row['id'];
        $server = $row['server'];
        $email = $row['email'];
        $nomorwa = $row['nomorwa'];
        $pesanan = $row['pesanan'];
        $pembayaran = $row['pembayaran'];

        // Display the edit form with pre-filled values
        echo "<form action='update_order.php' method='post'>";
        echo "<input type='hidden' name='order_id' value='$order_id'>";
        echo "<input type='hidden' name='game' value='$game'>";
        echo "ID Game: <input type='text' name='id' value='$id'><br>";
        echo "Server: <input type='text' name='server' value='$server'><br>";
        echo "Email: <input type='text' name='email' value='$email'><br>";
        echo "Nomor WA: <input type='text' name='nomorwa' value='$nomorwa'><br>";
        echo "<input type='hidden' name='pesanan' value='$pesanan'>";
        echo "<label for='pembayaran'>Metode Pembayaran:</label>";
        echo "<select name='pembayaran'>";
        echo "<option value='Bank' " . ($pembayaran == 'bank' ? 'selected' : '') . ">Transfer Bank</option>";
        echo "<option value='e-wallet' " . ($pembayaran == 'e-wallet' ? 'selected' : '') . ">E-wallet</option>";
        echo "<option value='market' " . ($pembayaran == 'market' ? 'selected' : '') . ">Convenience Store</option>";
        echo "</select>";
        echo "<input type='submit' value='Update'>";
        echo "</div>";
        echo "</form>";
    } else {
        echo "Order not found.";
    }
}

// Close connection
$conn->close();
?>

</body>
</html>
