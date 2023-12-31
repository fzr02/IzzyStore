<php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_POST['userId'];
    $server = $_POST['server'];
    $email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO your_table (userId, server, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $userId, $server, $email);

// Eksekusi prepared statement
if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>