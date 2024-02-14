

<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


	include_once'includes/config.php';
	
	include_once'class/travel_enquiry.php';
	
	


$travel = new TravelEnquiry($gic_db);

// Example query execution
$get_data = $travel -> executeQuery();
print_r($get_data);



// CREATE TABLE travel_inquiries (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     mobile_number VARCHAR(15) NOT NULL,
//     email VARCHAR(255),
//     pickup_address VARCHAR(255) NOT NULL,
//     drop_address VARCHAR(255) NOT NULL,
//     pickup_date DATE NOT NULL,
//     pickup_time TIME NOT NULL,
//     return_date DATE,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// );
// Include your database connection file or establish a connection here

// Function to handle insert
function insertInquiry($data) {
    // Implement your database insert logic here
    // Use prepared statements to prevent SQL injection
}

// Function to handle update
function updateInquiry($data, $id) {
    // Implement your database update logic here
}

// Function to handle delete
function deleteInquiry($id) {
    // Implement your database delete logic here
}

// Function to fetch all inquiries
function getAllInquiries() {
    // Implement your database select logic here
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'insert':
                insertInquiry($_POST);
                break;
            case 'update':
                if (isset($_POST['id'])) {
                    updateInquiry($_POST, $_POST['id']);
                }
                break;
            case 'delete':
                if (isset($_POST['id'])) {
                    deleteInquiry($_POST['id']);
                }
                break;
        }
    }
}

// Fetch all inquiries
$inquiries = getAllInquiries();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Inquiries Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navigation Bar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">Travel Admin</div>
            <!-- Add any navigation links if needed -->
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Travel Inquiries Admin</h1>

        <!-- Display inquiries in a table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Name</th>
                        <th class="py-2 px-4 border-b">Mobile Number</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Pickup Address</th>
                        <th class="py-2 px-4 border-b">Drop Address</th>
                        <th class="py-2 px-4 border-b">Pickup Date</th>
                        <th class="py-2 px-4 border-b">Pickup Time</th>
                        <th class="py-2 px-4 border-b">Return Date</th>
                        <th class="py-2 px-4 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP loop to populate the table -->
                    <?php foreach ($inquiries as $inquiry) : ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?= $inquiry['id']; ?></td>
                            <!-- Add other table cells accordingly -->
                            <td class="py-2 px-4 border-b"><?= $inquiry['name']; ?></td>
                            <!-- Add other table cells accordingly -->
                            <td class="py-2 px-4 border-b"><?= $inquiry['mobile_number']; ?></td>
                            <!-- Add other table cells accordingly -->
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500 hover:underline" onclick="updateInquiry(<?= $inquiry['id']; ?>)">Update</button>
                                <button class="text-red-500 hover:underline" onclick="deleteInquiry(<?= $inquiry['id']; ?>)">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Add Inquiry Form -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Add Inquiry</h2>
            <form action="admin.php" method="post" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Form fields go here, use Tailwind CSS classes for styling -->
                <input type="hidden" name="action" value="insert">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Inquiry</button>
            </form>
        </div>
    </div>

    <!-- Add your JavaScript functions for update and delete actions -->
    <script>
        function updateInquiry(id) {
            // Implement logic to open a modal or redirect to an update page with the inquiry details
            console.log('Update Inquiry with ID:', id);
        }

        function deleteInquiry(id) {
            // Implement logic to confirm deletion and make an AJAX request to the server
            const confirmed = confirm('Are you sure you want to delete this inquiry?');
            if (confirmed) {
                fetch('admin.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=delete&id=' + id,
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the server response, e.g., update the UI
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    </script>

</body>
</html>
