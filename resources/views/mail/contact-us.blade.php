<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>
<body style="margin:0; padding:0; background:#f4f6f9; font-family: Arial, sans-serif;">

    <div style="max-width:600px; margin:30px auto; background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.1);">

        <!-- Header -->
        <div style="background:linear-gradient(90deg,#0d6efd,#6610f2); padding:20px; text-align:center; color:white;">
            <h2 style="margin:0;">📩 New Contact Message</h2>
        </div>

        <!-- Body -->
        <div style="padding:25px; color:#333;">

            <p style="margin-bottom:15px; font-size:16px;">
                You have received a new message from your website contact form:
            </p>

            <div style="background:#f8f9fa; padding:15px; border-radius:8px; margin-bottom:10px;">
                <p><b>Name:</b> {{ $data['name'] }}</p>
                <p><b>Email:</b> {{ $data['email'] }}</p>
                <p><b>Phone:</b> {{ $data['phone'] }}</p>
            </div>

            <div style="background:#fff3cd; padding:15px; border-left:5px solid #ffc107; border-radius:6px;">
                <p style="margin:0;"><b>Message:</b></p>
                <p style="margin-top:8px;">{{ $data['message'] }}</p>
            </div>

        </div>

        <!-- Footer -->
        <div style="text-align:center; padding:15px; font-size:12px; color:#888; background:#f1f1f1;">
            © {{ date('Y') }} Your Portfolio. All rights reserved.
        </div>

    </div>

</body>
</html>