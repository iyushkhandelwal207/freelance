<?php
include 'db.php';

$id = $_GET['id'];
$project = $conn->query("SELECT * FROM projects WHERE id=$id")->fetch_assoc();
$clients = $conn->query("SELECT * FROM clients");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $client_id = $_POST['client_id'];
    $status = $_POST['status'];

    $conn->query("UPDATE projects SET title='$title', client_id=$client_id, status='$status' WHERE id=$id");
    header("Location: projects.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f9ff;
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
            max-width: 450px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 25px;
        }

        input[type="text"],
        select {
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
    <h2>Edit Project</h2>

    <form method="post">
        Title:
        <input type="text" name="title" value="<?= htmlspecialchars($project['title']) ?>" required>

        Client:
        <select name="client_id" required>
            <?php while($client = $clients->fetch_assoc()): ?>
                <option value="<?= $client['id'] ?>" <?= ($project['client_id'] == $client['id']) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($client['name']) ?>
                </option>
            <?php endwhile; ?>
        </select>

        Status:
        <select name="status" required>
            <option value="Pending" <?= ($project['status'] == 'Pending') ? 'selected' : '' ?>>Pending</option>
            <option value="Completed" <?= ($project['status'] == 'Completed') ? 'selected' : '' ?>>Completed</option>
        </select>

        <button type="submit">Update Project</button>
    </form>

    <a href="projects.php">← Back to Projects</a>
</div>

</body>
</html>

