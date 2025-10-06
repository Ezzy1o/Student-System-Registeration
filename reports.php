<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Student Report</title>
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

        .selection-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .selection-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 6px;
            background: #494949;
            border-radius: 3px;
        }

        .selection-card h2 {
            color: #2b3252;
            margin-bottom: 30px;
            text-align: center;
            font-size: 1.8em;
        }

        .student-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .student-option {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            text-align: center;
        }

        .student-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: #55596b;
        }

        .student-option h3 {
            color: #2b3252;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .student-option p {
            color: #555;
            margin-bottom: 15px;
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

        .footer {
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
            .selection-card {
                padding: 20px;
            }
            .header h1 {
                font-size: 2.2em;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Academic Report Portal</h1>
        <p>Select a student to view academic report</p>
    </div>

    <div class="container">
        <div class="selection-card">
            <h2>Choose Student</h2>
            
            <div class="student-options">
                <!-- Student Option 1 -->
                <div class="student-option">
                    <h3>Ahmad Bin Ali</h3>
                    <p>DIP2024001</p>
                    <p>Diploma in Computer Science</p>
                    <a href="student_report_example.html" class="btn">View Report</a>
                </div>
        </div>
        

        <div class="footer">
            <a href="dashboard.html" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>