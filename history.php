<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="history.css" />
    <title>Order Summary</title>
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

// Fetch all order data from the database
$sql = "SELECT * FROM order_topup ORDER BY id DESC";
$result = $conn->query($sql);

$toggleRight = false; // Toggle variable to alternate the position

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $no_pesanan = $row['no_pesanan'];
        $game = $row['game'];
        $id = $row['id'];
        $server = $row['server'];
        $email = $row['email'];
        $nomorwa = $row['nomorwa'];
        $pesanan = $row['pesanan'];
        $pembayaran = $row['pembayaran'];

        // Apply the 'right' class based on the toggle variable
        $orderBoxClass = 'order-box' . ($toggleRight ? ' right' : '');

        // Display each order in a box
        echo "<div class='$orderBoxClass'>";
        echo "<p>no pesanan: $no_pesanan</p>";
        echo "<p>Game: $game</p>";
        echo "<p>ID Game: $id</p>";
        echo "<p>Server: $server</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Nomor WA: $nomorwa</p>";
        echo "<p>Pesanan: $pesanan</p>";
        echo "<p>Metode Pembayaran: $pembayaran</p>";

        // Display the order actions
        echo "<div class='order-actions'>";
        echo "<form action='edit_form.php' method='post'>";
        echo "<input type='hidden' name='order_id' value='$no_pesanan'>";
        echo "<input type='submit' value='Edit'>";
        echo "</form>";

        echo "<form action='delete_order.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this order?\")'>";
        echo "<input type='hidden' name='order_id' value='$no_pesanan'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        echo "</div>";
        echo "</div>";

        // Toggle the variable for the next iteration
        $toggleRight = !$toggleRight;
    }
} else {
    echo "No orders found.";
}

// Close connection
$conn->close();
?>

</body>
</html>