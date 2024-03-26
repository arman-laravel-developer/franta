<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$data['title']}}</title>
    <style>
        /* Reset some default styles for better email client compatibility */
        body, table, td, p {
            margin: 0;
            padding: 0;
        }

        /* Set a background color for the entire email */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        /* Center the email content horizontally */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
        }

        /* Header style */
        .header {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }

        /* Content style */
        .content {
            padding: 20px;
        }

        /* Payment status style */
        .status {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Footer style */
        .footer {
            text-align: center;
            background-color: #f4f4f4;
            padding: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>{{$data['title']}}</h1>
    </div>
    <div class="content">
        <p class="status">Order Submit</p>
        <p>Dear {{$data['name']}},</p>
        <p>Your Order Submit successfully please make sure payment for approval your order. Thank You.</p>
        <p>Payment Details:</p>
        <ul>
            <li><strong>Your Order Code:</strong> {{$data['code']}}</li>
            <li><strong>Your Order Total Amount:</strong>Tk. {{$data['total']}}</li>
            <li><strong>Your Order Date:</strong> {{$data['date']}}</li>
            <li><strong>Your Payment Status:</strong> {{$data['payment_status'] === 2 ? 'Pending' : ''}}</li>
        </ul>
        <p>Thank you for using our services!</p>
    </div>
    <div class="footer">
        <p>&copy; 2023 Luckee7</p>
    </div>
</div>
</body>
</html>







