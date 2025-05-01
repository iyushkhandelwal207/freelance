<?php
include 'db.php';

$filter = "";
if (isset($_GET['client_id'])) {
    $client_id = intval($_GET['client_id']);
    $filter = "WHERE client_id = $client_id";
}

$result = $conn->query("SELECT projects.*, clients.name AS client_name FROM projects JOIN clients ON projects.client_id = clients.id $filter");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projects</title>
    <style>
        /* Internal CSS */
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

        a.button {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            margin: 10px 5px;
            border-radius: 5px;
            display: inline-block;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        a.button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        table {
            width: 90%;
            margin: 0 auto 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #17a2b8;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            text-decoration: none;
            color: #007bff;
            margin: 0 5px;
            font-weight: bold;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .back-home {
            display: inline-block;
            margin-top: 20px;
            color: #17a2b8;
            text-decoration: none;
            font-weight: bold;
        }

        .back-home:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Projects</h2>

<a href="add_project.php" class="button">+ Add Project</a>

<table>
    <tr>
        <th>Title</th>
        <th>Client</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?= htmlspecialchars($row['client_name']) ?></td>
        <td><?= htmlspecialchars($row['status']) ?></td>
        <td class="actions">
            <a href="edit_project.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_project.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="index.php" class="back-home">Back to Home</a>

</body>
</html>

