<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Freelance Management System</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #17a2b8;
            font-size: 36px;
            margin-bottom: 30px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            text-align: center;
        }

        .btn {
            display: inline-block;
            margin: 15px 10px;
            padding: 12px 25px;
            font-size: 18px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        footer {
            margin-top: 50px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Freelance Management System</h1>

    <a href="clients.php" class="btn">Manage Clients</a>
    <a href="projects.php" class="btn">Manage Projects</a>
</div>

<footer>
    Made by Nakul Singh Sisodia & Piyush Khandelwal
</footer>

</body>
</html>

