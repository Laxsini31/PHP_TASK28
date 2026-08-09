<!DOCTYPE html>
<html>
<head>
<title>Travel Package Booking System</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>🌍 Travel Package Booking System</h2>

<form action="process.php" method="post">

<label>Customer Name</label>
<input type="text" name="name" required>

<label>Mobile Number</label>
<input type="text" name="mobile" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Select Travel Package</label>
<select name="package" required>
<option value="">--Select Package--</option>
<option value="Ooty Tour">Ooty Tour - ₹8,000</option>
<option value="Goa Tour">Goa Tour - ₹15,000</option>
<option value="Kerala Tour">Kerala Tour - ₹18,000</option>
<option value="Kashmir Tour">Kashmir Tour - ₹25,000</option>
</select>

<label>Number of Travelers</label>
<input type="number" name="persons" min="1" required>

<label>Travel Date</label>
<input type="date" name="traveldate" required>

<input type="submit" value="Book Package">
<input type="reset" value="Clear">

</form>

</div>

</body>
</html>