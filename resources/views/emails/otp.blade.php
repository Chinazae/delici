<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delici Restaurant - OTP Code</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f8f8; margin: 0; padding: 0;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding: 20px;">
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color: #ffffff; border-radius: 8px; overflow: hidden;">
                    <tr>
                        <td align="center" style="background-color: #111; padding: 20px;">
                            <img src="assets/images/logo.png" alt="Delici Restaurant Logo" style="height: 50px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px; text-align: center;">
                            <h2 style="color: #111; margin-bottom: 10px;">Your OTP Code</h2>
                            <p style="color: #555; font-size: 16px; margin-bottom: 30px;">
                                Please use the OTP code below to complete your action:
                            </p>
                            <div
                                style="background-color: #f5f5f5; border: 2px dashed #c59d5f; display: inline-block; padding: 15px 30px; border-radius: 8px; font-size: 24px; font-weight: bold; color: #c59d5f;">
                                {{ $otp_code }}
                            </div>
                            <p style="color: #777; font-size: 14px; margin-top: 30px;">
                                If you did not request this code, please ignore this email.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="background-color: #111; padding: 15px;">
                            <p style="color: #fff; font-size: 12px;">&copy; {{ date('Y') }} Delici Restaurant. All
                                rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
