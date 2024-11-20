<form class="form" method="post" action="admin/appointment.php">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <input name="name" type="text" placeholder="Name" required />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <input name="email" type="email" placeholder="Email" required />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <input name="phone" type="text" placeholder="Phone" required />
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <select name="department" required class="form-control wide">
                    <option value="" disabled selected>Select Department</option>
                    <option value="Cardiac Clinic">Cardiac Clinic</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Dentistry">Dentistry</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <select name="appointment_time" required class="form-control wide">
                    <option value="" disabled selected>Select Appointment Time</option>
                    <option value="7:00 PM - 11:59 PM">7:00 PM - 11:59 PM</option>
                    <option value="11:00 AM - 11:59 PM">11:00 AM - 11:59 PM</option>
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <div class="form-group">
                <input type="date" name="date" placeholder="Date" id="datepicker" required />
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-12">
            <div class="form-group">
                <textarea name="message" style="height: 100px" placeholder="Explain your concern....." required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="button">
                    <button type="submit" class="btn">Book An Appointment</button>
                </div>
            </div>
        </div>
    </div>
</form>
