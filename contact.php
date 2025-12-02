<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/mainstyle.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    
    <title>Contact me</title>
</head>
<body>
    <?php
        include "inc/header.php";
    ?>
    <form action="submit" class="contact-form">
        <h2>Contact me</h2>
        <div class="mb-3">
            <label for="email-input">Enter your email</label>
            <input type="email" class="form-control" id="email-input" type="text">
        </div>
        <div class="mb-3">
            <label for="subject-input">Enter the subject you want to discuss</label>
            <input type="text" class="form-control" id="subject-input">
        </div>
        <div class="mb-3">
            <label for="message-input">Enter your message</label>
            <textarea class="form-control" rows="5" cols="30" placeholder="Write your message here..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
        include "inc/footer.php";
    ?>
</body>
</html>