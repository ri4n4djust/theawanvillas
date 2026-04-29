<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Booking Notification</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; }
        h2 { color: #c0392b; }
        .details { margin-top: 15px; }
        .details p { margin: 5px 0; }
        .footer { margin-top: 20px; font-size: 12px; color: #777; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Booking Received</h2>
        <p>A customer has just made a booking. Here are the details:</p>

        <div class="details">
            <p><strong>Check-in:</strong> {{ $cek_in }}</p>
            <p><strong>Check-out:</strong> {{ $cek_out }}</p>
            <p><strong>Nights:</strong> {{ $nights }}</p>
            <p><strong>Guests:</strong> {{ $adult }}</p>
			<p><strong>Special Requests:</strong> {{ $requests ?? 'None' }}</p>
        </div>

        <div class="footer">
            <p>Please follow up with the customer if needed.</p>
        </div>
    </div>
</body>
</html>