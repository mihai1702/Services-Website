<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/mainstyle.css">
    <title>Register</title>
</head>
<body>
    <?php
        include "platform-header.php";
    ?>
    <div class="register-section">
        <h3>Register as</h3>
        <div class="register-form">
            <div class="type-of-register-buttons">
                <button class="btn-active" id="client-btn">A client</button>
                <button id="company-btn">A company</button>
            </div>
        
            <form action="submit" id="client-fields">
                <div class="mb-3">
                    <input class="form-control" id="name-input" type="text" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <input class="form-control" id="surname-input" type="text" placeholder="Enter your surname">
                </div>
                <div class="mb-3">
                    <input class="form-control" id="age-input" type="number" placeholder="Enter your age">
                </div>
                <div class="mb-3">
                    <input class="form-control" id="username-input" type="text" placeholder="Enter Username" required>
                        <span class="invalid-feedback" id="username-error">Username-ul este deja folosit</span>
                </div>
                <div class="mb-3">
                    <input class="form-control" id="client-email-input" type="Email" placeholder="name@example.com" required>
                    <span class="invalid-feedback" id="email-error">Email-ul este deja inregistrat</span>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" id="client-password-input" placeholder="Enter a strong password" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" id="client-confirm-password-input" placeholder="Confirm password" required>
                    <span class="invalid-feedback" id="password-error">Parolele nu corespund</span>
                </div>
                
                <button class="btn btn-primary" type="submit" id="client-submit-button">Submit</button>
                <span class="invalid-feedback" id="final-error">Exista campuri completate gresit</span>
            </form>

            <form action="submit" id="company-fields">
                <div class="mb-3">
                    <input class="form-control" id="companyname-input" type="text" placeholder="Enter your company name">
                </div>
                <div class="mb-3">
                    <input class="form-control" id="CUI-input" type="text" placeholder="Enter company CUI">
                </div>
                <div class="mb-3">
                    <input class="form-control" id="company-email-input" type="Email" placeholder="name@example.com" required>
                    <span class="invalid-feedback" id="company-email-error">Email-ul este deja inregistrat</span>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" id="company-password-input" placeholder="Enter a strong password" required>
                </div>
                <div class="mb-3">
                    <input class="form-control" type="password" id="company-confirm-password-input" placeholder="Confirm password" required>
                    <span class="invalid-feedback" id="password-error">Parolele nu corespund</span>
                </div>
                
                <button class="btn btn-primary" type="submit" id="company-submit-button">Submit</button>
                <span class="invalid-feedback" id="final-error">Exista campuri completate gresit</span>
            </form>
            <input type="hidden" name="account-type" id="account-type" value="client">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="platform-js.js"></script>
</body>
</html>