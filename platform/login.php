<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/mainstyle.css">
    <title>Login</title>
</head>
<body>
    <?php
        include "platform-header.php"
    ?>
    <form id="login-form">
        <h2>Login</h2>
        <div class="mb-3">
            <input class="form-control" id="username-input" type="text" placeholder="Enter email" required>
        </div>
        <div class="mb-3">
            <input class="form-control" id="password-input" type="password" placeholder="Enter password" required>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <span class="invalid-feedback" id="login-error"></span>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </form>
    <?php
        include "../inc/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="offers-js.js"></script>
</body>
</html>