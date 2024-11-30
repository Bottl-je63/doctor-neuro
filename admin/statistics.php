<div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Dashboard Overview</h2>
                    <div class="user-info">
                        Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>
                    </div>
                </div>
<div class="row">
                    <?php
                    // Get statistics from database
                    $stats = array(
                        'appointments' => $conn->query("SELECT COUNT(*) as count FROM appointments")->fetch_assoc()['count'],
                        'doctors' => $conn->query("SELECT COUNT(*) as count FROM doctors")->fetch_assoc()['count'],
                        'patients' => $conn->query("SELECT COUNT(*) as count FROM patients")->fetch_assoc()['count'],
                        'messages' => $conn->query("SELECT COUNT(*) as count FROM contact")->fetch_assoc()['count']
                    );
                    ?>
                    <div class="col-xl-3 col-md-6">
                        <div class="stats-card bg-gradient-primary">
                            <h4><?php echo $stats['appointments']; ?></h4>
                            <p>Total Appointments</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stats-card bg-gradient-success">
                            <h4><?php echo $stats['doctors']; ?></h4>
                            <p>Total Doctors</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stats-card bg-gradient-info">
                            <h4><?php echo $stats['patients']; ?></h4>
                            <p>Total Patients</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="stats-card bg-gradient-warning">
                            <h4><?php echo $stats['messages']; ?></h4>
                            <p>New Messages</p>
                        </div>
                    </div>
                </div>