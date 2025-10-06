## Student-System-Registeration
A simple Student Registration System built using PHP, MySQL, HTML, CSS, and JavaScript.
This system allows students to register, log in, and manage their profiles.
It’s designed to run on XAMPP (localhost environment).

## Features

📝 Student Registration Form — Collects student details like name, ID, email, and program.

🔐 Login System — Validates credentials using PHP and MySQL.

🧠 Database Integration — Stores user data in a MySQL database.

🧭 Navigation Bar — For easy movement between pages.

🎨 Responsive Interface — Clean and user-friendly design with HTML and CSS.

## Technologies Used

Frontend: HTML, CSS, JavaScript

Backend: PHP (XAMPP Apache server)

Database: MySQL (phpMyAdmin)

## Installation Guide
#### Step 1: Clone or Download the Project
```
git clone https://github.com/Ezzy1o/Student-System-Registeration.git
```
Or download the ZIP file and extract it inside your XAMPP `htdocs` folder:
```
C:\xampp\htdocs\student-registration-system
```
#### Step 2: Import the Database

Open http://localhost/phpmyadmin

Click New → create a database (e.g. `student_db`)

Click Import → Choose the file `student_db.sql` (included in this project)

Click Go

#### Step 3: Configure Database Connection
Open `conn.php` and make sure your settings match:
```
<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

#### Step 4: Run the Project
Open your browser and go to:
```
http://localhost/student-registration-system/
```

## 📁 Folder Structure

```
student-registration-system/
│
├── conn.php
├── index.php
├── login.php
├── register.php
├── logout.php
├── style.css
├── script.js
└── student_db.sql
```

## Author
* Aeman Izzuddin
