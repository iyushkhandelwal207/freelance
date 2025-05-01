<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO clients (name, email) VALUES ('$name', '$email')");
    header("Location: clients.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Client</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #17a2b8;
            margin-bottom: 20px;
        }

        form {
            background: white;
            display: inline-block;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="email"] {
            width: 250px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #17a2b8;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Add New Client</h2>

<form method="post">
    <input type="text" name="name" placeholder="Enter Client Name" required><br>
    <input type="email" name="email" placeholder="Enter Client Email" required><br>
    <button type="submit">Add Client</button>
</form>

<br>
<a href="clients.php">← Back to Clients</a>

</body>
</html>

