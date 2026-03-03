
<!DOCTYPE html>
<html>
<head>
    <title>Simple CRM Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>CRM Panel</h2>
        <ul>
            <li>Dashboard</li>
            <li>Customers</li>
            <li>Leads</li>
            <li>Tasks</li>
        </ul>
    </div>

    <div class="main">
        <h1>Customer Management</h1>
        <form method="POST" action="backend.php">
            <input type="text" name="name" placeholder="Customer Name" required>
            <input type="email" name="email" placeholder="Customer Email" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <button type="submit">Add Customer</button>
        </form>

        <div class="table-section">
            <h2>Customer Records</h2>
            <?php include 'backend.php'; ?>
        </div>
    </div>
</body>
</html>
