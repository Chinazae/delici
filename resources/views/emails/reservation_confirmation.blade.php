{{--
<!DOCTYPE html>
<html>

<head>
    <title>Reservation Confirmation</title>
</head>

<body>
    <h2>Thank you for your reservation, {{ $reservation['guest_name'] }}!</h2>

    <p>Here are your reservation details:</p>

    <ul>
        @foreach($cart as $item)
        <li>
            Table: {{ $item['table_number'] }} ({{ $item['category'] }})<br>
            Date: {{ $item['check_in_date'] }}<br>
            Time: {{ $item['check_in_time'] }}<br>
            Duration: {{ $item['duration'] }} hrs<br>
            Special Request: {{ $item['special_request'] }}<br>
            Total: ₦{{ number_format($item['total_price'], 2) }}
        </li>
        <br>
        @endforeach
    </ul>

    @if(isset($metadata['coupon_code']) && $metadata['discount_amount'] > 0)
    <p><strong>Coupon Code:</strong> {{ $metadata['coupon_code'] }}</p>
    <p><strong>Discount Applied:</strong> ₦{{ number_format($metadata['discount_amount'], 2) }}</p>
    @endif


    <p>Payment Type: {{ ucfirst($paymentType) }}</p>
    <p>Status: Paid</p>

    <p>We look forward to serving you!</p>
</body>

</html> --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reservation Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div
        style="background-color: #ffffff; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
        <h2 style="color: #4CAF50;">Reservation Confirmation</h2>

        <p>Hi <strong>{{ $guestName }}</strong>,</p>

        <p>Thank you for booking with us! Here are your reservation details:</p>

        <ul>
            @foreach($cart as $item)
            <li>
                <strong>Table:</strong> {{ $item['table_number'] }} ({{ $item['category'] }})<br>
                <strong>Date:</strong> {{ $item['check_in_date'] }}<br>
                <strong>Time:</strong> {{ $item['check_in_time'] }}<br>
                <strong>Duration:</strong> {{ $item['duration'] }} hours<br>
                <strong>Special Request:</strong> {{ $item['special_request'] ?? 'None' }}<br>
                <strong>Price per Hour:</strong> ₦{{ number_format($item['price_per_hour'], 2) }}<br>
                <strong>Total:</strong> ₦{{ number_format($item['total_price'], 2) }}
            </li>
            <br>
            @endforeach
        </ul>

        @if($couponCode)
        <p><strong>Coupon Applied:</strong> {{ $couponCode }}</p>
        <p><strong>Discount:</strong> ₦{{ number_format($discountAmount, 2) }}</p>
        @endif

        <p><strong>Payment Type:</strong> {{ ucfirst($paymentType) }}</p>
        <p><strong>Reservation Status:</strong> Paid</p>

        <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">

        <p>If you have any questions or need to make changes, feel free to contact us.</p>

        <p>We look forward to serving you!</p>

        <p style="color: #4CAF50;"><strong>Your Restaurant Team</strong></p>
    </div>
</body>

</html>
