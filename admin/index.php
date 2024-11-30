<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("Location: ../login.php");
    exit();
}
include('./config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Doctor Appointment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
             <?php require('head.php'); ?>
            
            <!-- Main Content -->
            <div class="col-md-10 main-content p-4">
                

                <!-- Statistics Cards -->
                <?php require('statistics.php'); ?>

                <!-- Recent Appointments -->
                <div class="dashboard-stats mt-4">
                    <h3>Recent Appointments</h3>
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
                            //        $recent_appointments = $conn->query("
                            //        SELECT a.*, 
                            //               p.patient_name, p.patient_email, p.patient_phone, p.patient_address, p.patient_date_of_birth, p.patient_gender, p.patient_medical_history, p.patient_allergies, 
                            //               d.doctor_name
                            //        FROM appointments a 
                            //        JOIN patients p ON a.patient_id = p.patient_id  
                            //        JOIN doctors d ON a.doctor_id = d.id 
                            //        ORDER BY a.appointment_date DESC 
                            //        LIMIT 5
                            //    ");
                               
                            //    while ($row = $recent_appointments->fetch_assoc()) {
                            //        echo "<tr>";
                            //        echo "<td>" . htmlspecialchars($row['patient_name']) . "</td>";
                            //        echo "<td>" . htmlspecialchars($row['doctor_name']) . "</td>";
                            //        echo "<td>" . htmlspecialchars($row['appointment_date']) . "</td>";
                            //        echo "<td><span class='badge bg-" . ($row['status'] == 'confirmed' ? 'success' : 'warning') . "'>" 
                            //             . ucfirst(htmlspecialchars($row['status'])) . "</span></td>";
                            //        echo "<td>" . htmlspecialchars($row['patient_email']) . "</td>";
                            //        echo "<td>" . htmlspecialchars($row['patient_phone']) . "</td>";
                            //        echo "<td>" . htmlspecialchars($row['patient_address']) . "</td>";
                            //        echo "</tr>";
                            //    }
                            $recent_appointments = $conn->query("
                            SELECT id, name, email, phone, department, doctor, date, message, created_at 
                            FROM appointments 
                            ORDER BY date DESC 
                            LIMIT 5
                        ");
                        
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
                        
                        
                                
                                    ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>