<?php
require("config.php");

class AppointmentsPagination {
    private $conn;
    private $records_per_page;
    private $page;
    private $offset;
    private $total_pages;

    public function __construct($dbConnection, $recordsPerPage = 4) {
        $this->conn = $dbConnection;
        $this->records_per_page = $recordsPerPage;
        $this->page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $this->offset = ($this->page - 1) * $this->records_per_page;
        $this->calculateTotalPages();
    }

    // Calculate total pages based on the record count
    private function calculateTotalPages() {
        $total_records_query = "SELECT COUNT(*) as count FROM appointments";
        $result = $this->conn->query($total_records_query);
        $total_records = $result->fetch_assoc()['count'];
        $this->total_pages = ceil($total_records / $this->records_per_page);
    }

    // Fetch records for the current page
    public function getAppointments() {
        $sql = "SELECT id, name, email, phone, department, doctor, date, message FROM appointments LIMIT $this->offset, $this->records_per_page";
        return $this->conn->query($sql);
    }

    // Generate pagination links
    public function renderPagination() {
        if ($this->total_pages <= 1) {
            return ""; // No pagination needed if there's only one page
        }

        $paginationHtml = '<nav aria-label="Page navigation"><ul class="pagination d-flex">';

        // Previous link
        if ($this->page > 1) {
            $paginationHtml .= '<li class="page-item"><a class="page-link" href="?page=' . ($this->page - 1) . '">Previous</a></li>';
        }

        // Page links
        for ($i = 1; $i <= $this->total_pages; $i++) {
            $activeClass = ($this->page == $i) ? 'active' : '';
            $paginationHtml .= '<li class="page-item ' . $activeClass . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }

        // Next link
        if ($this->page < $this->total_pages) {
            $paginationHtml .= '<li class="page-item"><a class="page-link" href="?page=' . ($this->page + 1) . '">Next</a></li>';
        }

        $paginationHtml .= '</ul></nav>';
        return $paginationHtml;
    }
}

// Create an instance of the AppointmentsPagination class
$appointmentsPagination = new AppointmentsPagination($conn);
?>

<div class="container-fluid">
    <div class="row">
        <?php include("head.php"); ?>
        <div class="col-md-10 p-4">
            <?php require('statistics.php'); ?>
            <div class="dashboard-stats mt-4">
                <h3 >Appointments</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>Slots</th>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Get recent appointments
                            $recent_appointments = $appointmentsPagination->getAppointments();
                            if ($recent_appointments->num_rows > 0) {
                                // Output data of each row
                                while ($row = $recent_appointments->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['doctor']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>No records found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php echo $appointmentsPagination->renderPagination(); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Render Pagination -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php
$conn->close();
?>