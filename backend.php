
<?php
$conn = new mysqli("localhost", "root", "", "crm_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO customers (name, email, phone) VALUES ('$name', '$email', '$phone')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM customers");

echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
          </tr>";
}
echo "</table>";

$conn->close();
?>
