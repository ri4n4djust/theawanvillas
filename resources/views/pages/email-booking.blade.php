<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; }
        h2 { color: #2c3e50; }
        .details { margin-top: 15px; }
        .details p { margin: 5px 0; }
        .footer { margin-top: 20px; font-size: 12px; color: #777; }
    </style>
</head>
<body>
    <div class="container">
		<img src="{{ $message->embed('assets/images/logo-email.png') }}">
        <h2>Booking Confirmation</h2>

        <p>Thank you for your booking! Here are your details:</p>

        <div class="details">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Room:</strong> {{ $room }}</p>
            <p><strong>Check-in:</strong> {{ $cek_in }}</p>
            <p><strong>Check-out:</strong> {{ $cek_out }}</p>
            <p><strong>Nights:</strong> {{ $nights }}</p>
            <p><strong>Guests:</strong> {{ $adult }}</p>
			<p><strong>Special Requests:</strong> {{ $requests ?? 'None' }}</p>
        </div>

        <p>We look forward to hosting you. If you have any questions, feel free to reply to this email.</p>

        <div class="footer">
            <p>Best regards,<br>Your Hotel Team</p>
        </div>
    </div>
</body>
</html>
