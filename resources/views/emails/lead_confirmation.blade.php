<!DOCTYPE html>
<html>
<head>
    <title>Confirm Your Email</title>
</head>
<body>
    <h1>Hello,</h1>
    <p>Thank you for signing up! Please confirm your email by clicking the link below:</p>
    <a href="{{ $confirmationUrl }}" style="background: blue; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Confirm Email</a>
    <p>If you didn't request this, please ignore this email.</p>
</body>
</html>