
<?php
require("config.php");

// Fetch all data
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
include("head.php");

?>

    <div class="container mt-5">
        <h1 class="text-center">Appointments</h1>
        <table class="table table-striped table-bordered mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['department']}</td>
                                <td>{$row['doctor']}</td>
                                <td>{$row['date']}</td>
                                <td>{$row['message']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
    
<?php
include("footer.php");
$conn->close();
?>
