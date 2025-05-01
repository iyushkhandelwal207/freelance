<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM clients WHERE id=$id");
$client = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $conn->query("UPDATE clients SET name='$name', email='$email' WHERE id=$id");
    header("Location: clients.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Client</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f3f9fb;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 25px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Client</h2>
    <form method="post">
        Name: <input type="text" name="name" value="<?= htmlspecialchars($client['name']) ?>" required>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" required>
        <button type="submit">Update Client</button>
    </form>
    <a href="clients.php">← Back to Clients</a>
</div>

</body>
</html>

