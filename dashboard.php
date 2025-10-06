<?php
session_start();

// Cegah caching supaya butang Back tak boleh bypass logout
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Check login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Simpan username dalam variable
$username = $_SESSION['username'];
?>




<html lang="en">
<method="post">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
        }

        .header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.8;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 30px;
            text-align: center;
            border: 2px solid #e0e0e0;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            transform: translateY(-5px);
        }

        .card h3 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 15px;
        }

        .card p {
            color: #666;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .btn {
            background-color: #333;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79,91,213,0.3);
        }

        .btn-secondary {
            background-color: #666;
        }

        .btn-secondary:hover {
            background-color: #777;
        }

        .btn-danger {
            background-color: #999;
        }

        .btn-danger:hover {
            background-color: #aaa;
        }

        .logout-section {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px auto;
                padding: 10px;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Student Management Dashboard</h1>
        <p>Welcome, <b><?php echo htmlspecialchars($username); ?></b> 👋</p>
    </div>


    <div class="container">
        <div class="dashboard-grid">
            <div class="card">
                <h3>Register New Student</h3>
                <p>Add a new student to the system with all required information including personal details and academic program.</p>
                <a href="student-registration.php" class="btn">Register Student</a>
            </div>

            <div class="card">
                <h3>View All Students</h3>
                <p>Browse through all registered students, view their details, and manage student records efficiently.</p>
                <a href="view-students.php" class="btn btn-secondary">View Students</a>
            </div>

            <div class="card">
                <h3>Search Students</h3>
                <p>Find specific students by searching through names, student IDs, programs, or other criteria.</p>
                <a href="search-students.php" class="btn btn-secondary">Search Students</a>
            </div>

            <div class="card">
                <h3>Student Reports</h3>
                <p>Generate and view reports about student enrollment, programs, and other statistical information.</p>
                <a href="reports.php" class="btn btn-secondary">View Reports</a>
            </div>
        </div>

        <div class="logout-section">
            <a href="login.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>