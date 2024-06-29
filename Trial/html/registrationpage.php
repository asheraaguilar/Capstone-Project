<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/registrationpage.css">
</head>
<body>
    <div class="container">
        <div class="signup-form">
            <div class="header">
                <img src="../img/Logo.png" alt="Lipa Logo" class="logo">
                <h1>LIPA EDUCATIONAL BENEFIT ASSISTANCE PROGRAM</h1>
            </div>
            <h2>Sign Up</h2>
            <p>Enter your details to create account</p>
            <form>
                <div class="input-group">
                    <input type="text" placeholder="First Name*" required>
                    <input type="text" placeholder="Middle Name*" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Last Name*" required>
                    <input type="tel" placeholder="Mobile Number*" required>
                </div>
                <div class="input-group">
                    <input type="email" placeholder="Email Address*" required>
                    <input type="text" placeholder="Purok / Street*" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Barangay*" required>
                    <input type="text" placeholder="District*" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password*" required>
                    <input type="password" placeholder="Confirm Password*" required>
                </div>
                <div class="checkbox-group">
                    <label>
                        <input type="radio" name="student-type" required> Lipeno Student
                    </label>
                    <label>
                        <input type="radio" name="student-type" required> Non-KLL Student
                    </label>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
