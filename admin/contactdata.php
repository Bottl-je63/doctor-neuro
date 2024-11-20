<?php
// Include the database configuration file
include 'config.php';

// Fetch all records from the 'contact' table
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);
include('head.php');
?>

    <div class="container mt-5">
        <h1 class="text-center">Contact Form Submissions</h1>
        <table class="table table-striped table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Newsletter Subscription</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Loop through the results and populate the table
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['subject']}</td>
                                <td>{$row['message']}</td>
                                <td>" . ($row['newsletter_subscription'] ? 'Yes' : 'No') . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
   
<?php
include('footer.php');

$conn->close();
?>
