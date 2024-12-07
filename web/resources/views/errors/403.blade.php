<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 4em;
            color: #dc3545;
        }
        p {
            font-size: 1.2em;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>403</h1>
    <p>Oops! You don't have permission to access this page.</p>
    <a href="{{ url('/') }}">Return to Home</a>
</body>
</html>
