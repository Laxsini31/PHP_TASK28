<!DOCTYPE html>
<html>
<head>
    <title>Admission Application System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2 id="title">Admission Application Form</h2>
    <form action="process.php" method="post">
        <label>Applicant Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Enter your email" required>
        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter 10-digit phone number" required>
        <label>Date of Birth</label>
        <input type="date" name="dob" required>
        <label>Gender</label>
        <select name="gender" required>
            <option value="">-- Select Gender --</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        <label>Course Applying For</label>
        <select name="course" required>
            <option value="">-- Select Course --</option>
            <option>B.Sc Computer Science</option>
            <option>BCA</option>
            <option>B.Com</option>
            <option>BBA</option>
            <option>MCA</option>
        </select>
        <label>Address</label>
        <textarea name="address" rows="4" placeholder="Enter your address" required></textarea>
        <input type="submit" value="Apply Now">
        <input type="reset" value="Clear">
    </form>
</div>
</body>
</html>