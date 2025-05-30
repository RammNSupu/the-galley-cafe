<?php



<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Events</title>
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="manage_Events.css">
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
            <h1>Manage Events</h1>
        </header>
        <div class="content-section">
            <button class="btn-add-event" onclick="openModal()">Add New Event</button>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wine Tasting Evening</td>
                        <td>15 Oct 2024</td>
                        <td>An exclusive wine tasting event.</td>
                        <td><button class="btn-edit">Edit</button> <button class="btn-delete">Delete</button></td>
                    </tr>
                    <!-- Additional rows to be populated dynamically -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add New Event Modal -->
    <div id="addEventModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New Event</h2>
            <form action="add_event.php" method="post">
                <label for="event-name">Event Name:</label>
                <input type="text" id="event-name" name="event-name" required><br>

                <label for="event-date">Date:</label>
                <input type="date" id="event-date" name="event-date" required><br>

                <label for="event-description">Description:</label>
                <textarea id="event-description" name="event-description" rows="4" required></textarea><br>

                <button type="submit" class="btn btn-success">Add Event</button>
            </form>
        </div>
    </div>

    <script>
        // Open Modal
        function openModal() {
            document.getElementById("addEventModal").style.display = "block";
        }

        // Close Modal
        function closeModal() {
            document.getElementById("addEventModal").style.display = "none";
        }
    </script>
</body>
</html>
