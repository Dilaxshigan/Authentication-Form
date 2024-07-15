<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background: #f5f5f5;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            /* background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%); */
        }
        .welcome-box {
            text-align: center;
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 3em;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            color: #666;
            margin-bottom: 40px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1em;
            color: white;
            background: linear-gradient(to right, #ff6a00, #ee0979);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        .btn:hover {
            background: linear-gradient(to right, #ee0979, #ff6a00);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-box">
            <h1>Welcome to Our Website!</h1>
            <p>We are delighted to have you here. Explore and enjoy our services.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </div>
</body>
</html>
