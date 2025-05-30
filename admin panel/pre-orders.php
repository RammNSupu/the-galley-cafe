<?php



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Orders Management</title>
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="pre-orders.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>The Gallery Cafe</h2>
        <ul>
            <li><a href="admin_dashboard.php"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="manage_users.php"><i class="fa fa-users"></i> Manage Users</a></li>
            <li><a href="reservations.php"><i class="fa fa-table"></i> Reservations</a></li>
            <li><a href="menu_items.php"><i class="fa fa-utensils"></i> Menu Items</a></li>
            <li><a href="pre-orders.php"><i class="fa fa-cart-arrow-down"></i> Pre-Orders</a></li>
            <li><a href="manage_offers.php"><i class="fa fa-thumbs-up"></i> Offers</a></li>
            <li><a href="Manage_Events.php"><i class="fa fa-calendar"></i> Events</a></li>
            <li><a href="messages.php"><i class="fa fa-comments"></i> Messages</a></li>
            <li><a href="settings.php"><i class="fa fa-cogs"></i> Settings</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Manage Pre-Orders</h1>
        </header>
        
        <div class="orders-list">
            <h2>Pending Pre-Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1023</td>
                        <td>John Doe</td>
                        <td>Spaghetti Carbonara</td>
                        <td>2</td>
                        <td>2024-10-01</td>
                        <td>Pending</td>
                        <td>
                            <button class="btn-confirm">Confirm</button>
                            <button class="btn-cancel">Cancel</button>
                        </td>
                    </tr>
                    <!-- Repeat rows for more orders -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
