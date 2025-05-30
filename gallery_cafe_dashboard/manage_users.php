<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="manage-users.css">
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
            <li><a href="manage_php.html"><i class="fa fa-thumbs-up"></i> Offers</a></li>
            <li><a href="Manage_php.html"><i class="fa fa-calendar"></i> Events</a></li>
            <li><a href="messages.php"><i class="fa fa-comments"></i> Messages</a></li>
            <li><a href="settings.php"><i class="fa fa-cogs"></i> Settings</a></li>
            <li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Manage Users</h1>
        </header> <br>

        <button class="btn-add" onclick="openModal()">Add New User</button>

        <div class="user-table">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Jane Doe</td>
                        <td>jane@example.com</td>
                        <td>Admin</td>
                        <td>
                             <button class=" btn-warning" onclick="editUser(1)">Edit</button>
                             <button class=" btn-danger" onclick="deleteUser(1)">Delete</button>
                        </td>
                    </tr>
                    <!-- Additional rows to be populated dynamically -->
                </tbody>
            </table>
        </div> 
    </div>

    <!-- Add New User Modal -->
    <div id="addUserModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New User</h2> 
            <form action="add_user.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                    <option value="Customer">Customer</option>
                </select><br>

                <button type="submit" class="btn btn-success">Add User</button>
            </form>
        </div>
    </div>

    <script>
        // Open Modal
        function openModal() {
            document.getElementById("addUserModal").style.display = "block";
        }

        // Close Modal
        function closeModal() {
            document.getElementById("addUserModal").style.display = "none";
        }
    </script>
</body>
</html>
