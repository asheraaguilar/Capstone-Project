<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Benefit Assistance</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/applicationpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-k6RqeWeciBMCNnZpBAp8wYtTgC/NbY4x86BM1BbDEMCFFdEV9a2pWc5VJda1Z4I7DkPE9EADldhqdslI0W9BLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo-container">
                <img src="../img/Logo.png" alt="Lipa Logo" class="logo">
            </div>
            <div class="welcome">
                <h2>Hi Ashera!</h2>
            </div>
            <nav>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i> Main Menu</a></li>
                    <li class="active"><a href="#"><i class="fas fa-file-alt"></i> Application</a></li>
                    <li><a href="#"><i class="fas fa-user"></i> Your Account</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <h1>Educational Benefit Assistance - Lipa City</h1>
            <h2>Application</h2>
            <p>Basic Info -> Application Type -> Requirements -> Submitted -> Evaluation -> Verification</p>
            <div class="application-steps">
                <button class="step-button active" onclick="showForm('additional-info')">
                    <div class="step-number">1</div>
                    <div class="step-description">
                        <h3>Additional Information</h3>
                        <p>Enter details about you</p>
                    </div>
                </button>
                <button class="step-button" onclick="showForm('family-info')">
                    <div class="step-number">2</div>
                    <div class="step-description">
                        <h3>Family</h3>
                        <p>Family & Guardian</p>
                    </div>
                </button>
                <button class="step-button" onclick="showForm('intentions-info')">
                    <div class="step-number">3</div>
                    <div class="step-description">
                        <h3>Intentions</h3>
                        <p>Educational Background</p>
                    </div>
                </button>
            </div>
            <div class="user-info">
                <p><strong>Name:</strong> ASHERA KATHRYN R. AGUILAR</p>
                <p><strong>Address:</strong> Brgy. Sico Lipa City Batangas</p>
                <p><strong>Email:</strong> aguilarasherakathryn@gmail.com</p>
                <p><strong>Contact Number:</strong> 09952318729</p>
            </div>
            <section class="form-section" id="additional-info">
                <h3>Additional Information</h3>
                <form>
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <div class="picture-container">
                            <img src="../img/ashera.jpg" alt="User Photo" id="picture">
                            <button class="edit-btn">✔️</button>
                            <button class="delete-btn">❌</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <label><input type="radio" name="gender" value="male"> Male</label>
                        <label><input type="radio" name="gender" value="female" checked> Female</label>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" value="2002-10-20" required>
                    </div>
                    <div class="form-group">
                        <label for="gwa">General Weighted Average</label>
                        <input type="number" step="0.01" id="gwa" value="1.75" required>
                    </div>
                    <div class="form-group">
                        <label for="education">Educational Level</label>
                        <select id="education" required>
                            <option value="highschool">High School</option>
                            <option value="college" selected>College</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="birth-order">Birth Order</label>
                        <input type="text" id="birth-order" value="First Born" required>
                    </div>
                    <div class="form-group">
                        <label for="birth-place">Place of Birth</label>
                        <input type="text" id="birth-place" value="Batangas City" required>
                    </div>
                    <button type="submit" class="next-btn">Next</button>
                </form>
            </section>
            <section class="form-section" id="family-info" style="display: none;">
                <h3>Family Information</h3>
                <!-- Family Information form fields go here -->
                <button type="submit" class="next-btn">Next</button>
            </section>
            <section class="form-section" id="intentions-info" style="display: none;">
                <h3>Intentions</h3>
                <!-- Intentions form fields go here -->
                <button type="submit" class="next-btn">Next</button>
            </section>
        </div>
    </div>
    <script>
        function showForm(formId) {
            const forms = document.querySelectorAll('.form-section');
            forms.forEach(form => {
                form.style.display = 'none';
            });
            document.getElementById(formId).style.display = 'block';

            const buttons = document.querySelectorAll('.step-button');
            buttons.forEach(button => {
                button.classList.remove('active');
            });
            document.querySelector(`[onclick="showForm('${formId}')"]`).classList.add('active');
        }
    </script>
</body>
</html>
