<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {{-- <title>New Contact Form Submission</title> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .details {
            margin: 20px 0;
        }
        .details p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }
        .details strong {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff !important;
            background-color: rgb(11, 33, 84);
            border-color: rgb(11, 33, 84);
            text-decoration: none;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>New Contact Form Submission</h1>
        <div class="details">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Mobile:</strong> {{ $mobile }}</p>
            <p><strong>Product:</strong> {{ $product }}</p>
            <p><strong>Message:</strong></p>
            <p style="border-left: 4px solid #28a745; padding-left: 10px;">{{ $messages }}</p>
        </div>
        <div class="footer">
            <a href="mailto:{{ $email }}" class="btn">Reply to {{ $name }}</a>
        </div>
    </div>
</body>
</html>
