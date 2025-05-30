<?php


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Items</title>
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="menu_items.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>The Gallery Café</h2>
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
            <h1>Menu Items</h1>
        </header> <br> <br>

        <div class="menu-table"> 
            <button class="btn-add-items" onclick="openModal()">Add New Menu Item</button>
            <table>
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Name</th>
                        <th>Cuisine</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>501</td>
                        <td>Spaghetti Carbonara</td>
                        <td>Italian</td>
                        <td>$12.50</td>
                        <td>
                            <button class="edit-btn">Edit</button>
                            <button class="delete-btn">Delete</button>
                        </td>
                    </tr>
                    <!-- Additional rows to be populated dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add New Menu Item Modal -->
    <div id="addItemModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New Menu Item</h2>
            <form action="add_menu_item.php" method="post">
                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required><br>

                <label for="cuisine">Cuisine:</label>
                <input type="text" id="cuisine" name="cuisine" required><br>

                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required step="0.01"><br>

                <button type="submit" class="btn btn-success">Add Item</button>
            </form>
        </div>
    </div>

    <script>
        // Open Modal
        function openModal() {
            document.getElementById("addItemModal").style.display = "block";
        }

        // Close Modal
        function closeModal() {
            document.getElementById("addItemModal").style.display = "none";
        }
    </script>
</body>
</html>
