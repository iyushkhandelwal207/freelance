<?php
include 'db.php';
$result = $conn->query("SELECT * FROM clients");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clients</title>
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
            color: #007BFF;
            margin-bottom: 20px;
        }

        a.button {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            margin: 10px 5px;
            border-radius: 5px;
            display: inline-block;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        a.button:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        table {
            width: 80%;
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
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .actions a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 5px;
            font-weight: bold;
        }

        .actions a:hover {
            text-decoration: underline;
        }

        .back-home {
            display: inline-block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .back-home:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Clients</h2>

<a href="add_client.php" class="button">+ Add Client</a>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td class="actions">
            <a href="edit_client.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_client.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a> |
            <a href="projects.php?client_id=<?= $row['id'] ?>">View Projects</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="index.php" class="back-home">Back to Home</a>

</body>
</html>

