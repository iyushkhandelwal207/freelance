CREATE TABLE clients (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       email VARCHAR(255) NOT NULL
   );

   CREATE TABLE projects (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       client_id INT,
       status ENUM('Pending', 'Completed') DEFAULT 'Pending',
       FOREIGN KEY (client_id) REFERENCES clients(id) ON DELETE CASCADE
   );
