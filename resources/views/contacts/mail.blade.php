<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px;">
<table style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px #ddd;">
    <tr>
        <td style="text-align: center;">
            <h2 style="color: #333;">New Contact Message</h2>
            <p style="color: #555;">You have received a new message from your contact form.</p>
        </td>
    </tr>
    <tr>
        <td>
            <hr style="border: 1px solid #eee;">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Country:</strong> {{ $contact->country }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Message:</strong></p>
            <p style="background-color: #f1f1f1; padding: 10px; border-radius: 5px;">{{ $contact->message }}</p>
            <hr style="border: 1px solid #eee;">
            <p style="color: #999; font-size: 12px;">Sent on {{ \Carbon\Carbon::parse($contact->created_at)->format('F j, Y, g:i a') }}</p>
        </td>
    </tr>
</table>
</body>
</html>
