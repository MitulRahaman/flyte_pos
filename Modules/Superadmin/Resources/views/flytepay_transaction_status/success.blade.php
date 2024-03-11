<!-- Payment Success Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <style>
        body {
            text-align: center;
            padding: 50px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            background-color: #4CAF50; /* Green */
            color: white;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: white;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>Payment Successful</h1>
    <p>Thank you for your purchase. Your order has been successfully processed.</p>
    <a href="{{route('home')}}" class="button">Go back to Dashboard</a>
    <!-- Additional order details and next steps -->
    
</body>
</html>