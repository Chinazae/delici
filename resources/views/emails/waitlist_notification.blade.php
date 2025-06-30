<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Table Available Notification</title>
</head>

<body>
    <h2>Hello {{ $entry->name }},</h2>

    <p>A table matching your preferences is now available!</p>
    <p>
        <strong>Table:</strong> {{ $table->table_number }} ({{ $table->category->name }}) <br>
        <strong>Capacity:</strong> {{ $table->seating_capacity }}
    </p>

    <p>Please log in to your account to make a reservation.</p>

    <p>Thank you!</p>
</body>

</html>
