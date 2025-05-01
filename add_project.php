<?php
include 'db.php';

$clients = $conn->query("SELECT * FROM clients");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $client_id = $_POST['client_id'];
    $status = $_POST['status'];

    $conn->query("INSERT INTO projects (title, client_id, status) VALUES ('$title', $client_id, '$status')");
    header("Location: projects.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>
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

        input[type="text"], select {
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

<h2>Add New Project</h2>

<form method="post">
    <input type="text" name="title" placeholder="Project Title" required><br>
    
    <select name="client_id" required>
        <option value="" disabled selected>Select Client</option>
        <?php while($client = $clients->fetch_assoc()): ?>
        <option value="<?= $client['id'] ?>"><?= htmlspecialchars($client['name']) ?></option>
        <?php endwhile; ?>
    </select><br>
    
    <select name="status" required>
        <option value="" disabled selected>Select Status</option>
        <option value="Pending">Pending</option>
        <option value="Completed">Completed</option>
    </select><br>
    
    <button type="submit">Add Project</button>
</form>

<br>
<a href="projects.php">← Back to Projects</a>

</body>
</html>

