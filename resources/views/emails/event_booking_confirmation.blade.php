<!DOCTYPE html>
<html>

<head>
    <title>Event Booking Confirmation</title>
</head>

<body>
    <h2>Thank you, {{ $booking->customer_name }}!</h2>

    <p>Your event booking has been confirmed. Here are the details:</p>

    <ul>
        <li><strong>Date:</strong> {{ $booking->event_date }}</li>
        <li><strong>Time:</strong> {{ $booking->event_time }}</li>
        <li><strong>Duration:</strong> {{ $booking->duration }} hours</li>
        <li><strong>Guests:</strong> {{ $booking->guests_count ?? 'N/A' }}</li>
        <li><strong>Total Price:</strong> ₦{{ number_format($booking->total_price, 2) }}</li>
        <li><strong>Payment Type:</strong> {{ ucfirst($booking->payment_type) }}</li>
        <li><strong>Payment Status:</strong> {{ ucfirst($booking->payment_status) }}</li>
    </ul>

    @if($booking->packages->count())
    <p><strong>Selected Packages:</strong></p>
    <ul>
        @foreach($booking->packages as $package)
        <li>{{ $package->name }} (x{{ $package->pivot->quantity }}) - ₦{{ number_format($package->price, 2) }}</li>
        @endforeach
    </ul>
    @endif

    <p>If you have any questions, feel free to contact us.</p>

    <p>Thank you for choosing our venue!</p>
</body>

</html>
