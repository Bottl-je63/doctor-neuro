<?php
require("config.php");

class ContactPagination {
    private $conn;
    private $records_per_page;
    private $page;
    private $offset;
    private $total_pages;

    public function __construct($dbConnection, $recordsPerPage = 6) {
        $this->conn = $dbConnection;
        $this->records_per_page = $recordsPerPage;
        $this->page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $this->offset = ($this->page - 1) * $this->records_per_page;
        $this->calculateTotalPages();
    }

    // Calculate total pages based on the record count
    private function calculateTotalPages() {
        $total_records_query = "SELECT COUNT(*) as count FROM contact";
        $result = $this->conn->query($total_records_query);
        $total_records = $result->fetch_assoc()['count'];
        $this->total_pages = ceil($total_records / $this->records_per_page);
    }

    // Fetch records for the current page
    public function getContacts() {
        $sql = "SELECT * FROM contact LIMIT $this->offset, $this->records_per_page";
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
$contactPagination = new ContactPagination($conn);

?>
<div class="container-fluid">
    <div class="row">
        <?php require('head.php'); ?>
        <div class="col-md-10 p-4">
            <?php require('statistics.php'); ?>
            <div class="dashboard-stats mt-4">
                <h3 class="">Enquiry</h3>
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
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
                $contacts = $contactPagination->getContacts();
                if ($contacts->num_rows > 0) {
                    // Output data of each row
                    while ($row = $contacts->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['message']) . "</td>";
                        echo "<td>" . (htmlspecialchars($row['newsletter_subscription']) ? 'Yes' : 'No') . "</td>";
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>No records found</td></tr>";
                }
                ?>
                        </tbody>
                    </table>
                    <?php echo $contactPagination->renderPagination(); ?>

                </div>
            </div>

            <!-- Render Pagination -->

        </div>
    </div>
    .
</div>


<?php
include("footer.php");
$conn->close();
?>