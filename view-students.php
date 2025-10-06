<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Students</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7ff 0%, #e3e8ff 100%);
            min-height: 100vh;
        }

        .header {
            background: linear-gradient(135deg, #55596b 0%, #3b3b3b 100%);
            color: white;
            padding: 40px 0 30px 0;
            text-align: center;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
            letter-spacing: 1.5px;
            font-weight: 600;
        }

        .header p {
            font-size: 1.2em;
            opacity: 0.9;
            font-weight: 300;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .student-list {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            padding: 40px;
            backdrop-filter: blur(10px);
        }

        .student-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            margin-bottom: 25px;
            border: 1px solid rgba(79,91,213,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .student-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 6px;
            background: #494949;
            border-radius: 3px;
        }

        .student-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(79,91,213,0.15);
        }

        .student-card h3 {
            color: #000000;
            margin-bottom: 20px;
            font-size: 1.4em;
            font-weight: 600;
        }

        .student-card p {
            color: #555;
            margin-bottom: 12px;
            line-height: 1.7;
            font-size: 1.05em;
        }

        .student-card strong {
            color: #2b3252;
            font-weight: 500;
        }

        .btn {
            background: linear-gradient(135deg, #646363 0%, #000000 100%);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 10px 10px 10px 0;
            box-shadow: 0 4px 15px rgba(79,91,213,0.2);
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79,91,213,0.3);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        }

        .nav-buttons {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #f0f0f0;
        }

        @media (max-width: 768px) {
            .container {
                margin: 30px auto;
                padding: 15px;
            }
            .student-list {
                padding: 20px;
            }
            .student-card {
                padding: 20px 15px;
            }
            .header h1 {
                font-size: 2.2em;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>All Registered Students</h1>
        <p>View and manage student records</p>
    </div>

    <div class="container">
        <div class="student-list">
            <!-- Student 1 - Ahmad -->
            <div class="student-card">
                <h3>Ahmad Bin Ali</h3>
                <p><strong>Student ID:</strong> DIP2024001</p>
                <p><strong>Program:</strong> Diploma in Computer Science</p>
                <p><strong>Year:</strong> Year 2</p>
                <p><strong>Email:</strong> ahmad.ali@email.com</p>
                <p><strong>Phone:</strong> +60123456789</p>
                <p><strong>Special Requirements:</strong> Transportation Assistance</p>
            </div>
        </div>
        <div class="nav-buttons">
            <a href="student-registration.php" class="btn">Add New Student</a>
            <a href="dashboard.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</body>
</html>