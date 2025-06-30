<!DOCTYPE html>
<html>

<head>
    <title>Reservation Status Update</title>
</head>

<body>
    <h2>Hello {{ $reservation->guest_name }},</h2>

    <p>Your reservation for table <strong>{{ $reservation->table->table_number }}</strong> has been updated.</p>

    <p><strong>New Status:</strong> {{ ucfirst($reservation->payment_status) }}</p>

    <p><strong>Date:</strong> {{ $reservation->check_in_date }}</p>
    <p><strong>Time:</strong> {{ $reservation->check_in_time }}</p>
    <p><strong>Duration:</strong> {{ $reservation->duration }} hours</p>

    <p>Thank you for choosing us!</p>
</body>

</html>
