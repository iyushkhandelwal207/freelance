# 🧩 Freelance Management System

A simple and clean PHP-based web application to manage freelance clients and projects.

🔗 **Live Demo**: [https://nakulsingh-nsp.42web.io/](https://nakulsingh-nsp.42web.io/)

## ✨ Features

- Add, view, edit, and delete **clients**
- Add, view, edit, and delete **projects**
- Filter projects by client
- Status tracking for each project (Pending, Completed)
- Clean, aesthetic design with internal CSS

## 📁 Project Structure

```
project/
├── index.php
├── db.php
├── clients.php
├── add_client.php
├── edit_client.php
├── delete_client.php
├── projects.php
├── add_project.php
├── edit_project.php
├── delete_project.php
└── sql_schema.sql
```

## ⚙️ Tech Stack

- PHP
- MySQL (with foreign key constraints)
- HTML/CSS

## 🗃️ Database Tables

### `clients`
- `id` INT (Primary Key)
- `name` VARCHAR(255)
- `email` VARCHAR(255)

### `projects`
- `id` INT (Primary Key)
- `title` VARCHAR(255)
- `client_id` INT (Foreign Key referencing `clients(id)` ON DELETE CASCADE)
- `status` VARCHAR(50)

## 🚀 How to Use

1. Clone or download the project.
2. Import the SQL schema into your MySQL database.
3. Update your `db.php` with your database credentials.
4. Upload files to a PHP-compatible server like [InfinityFree](https://www.infinityfree.net/).
5. Access `index.php` to get started.

## 👨‍💻 Created By

**Piyush Khandelwal & Nakul Singh **  
Deployed at: [https://nakulsingh-nsp.42web.io/](https://nakulsingh-nsp.42web.io/)
