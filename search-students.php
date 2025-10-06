<!DOCTYPE html>
<html lang="en">
<method="post">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Students</title>
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

        .search-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            padding: 40px;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .search-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 6px;
            background: #494949;
            border-radius: 3px;
        }

        .search-form {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 15px;
        }

        .search-input {
            padding: 15px 20px;
            border: 2px solid #e3e8ff;
            border-radius: 10px;
            font-size: 1.1em;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            outline: none;
            border-color: #55596b;
            box-shadow: 0 0 10px rgba(85, 89, 107, 0.2);
        }

        .search-btn {
            background: linear-gradient(135deg, #646363 0%, #000000 100%);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(79,91,213,0.3);
        }

        .results-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.08);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .results-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 6px;
            background: #494949;
            border-radius: 3px;
        }

        .student-result {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .student-result:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .student-result h3 {
            color: #2b3252;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .student-result p {
            color: #555;
            margin-bottom: 8px;
        }

        .no-results {
            text-align: center;
            padding: 30px;
            color: #555;
            font-size: 1.2em;
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

        @media (max-width: 768px) {
            .container {
                margin: 30px auto;
                padding: 15px;
            }
            .search-card, .results-card {
                padding: 20px;
            }
            .header h1 {
                font-size: 2.2em;
            }
            .search-form {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Search Students</h1>
        <p>Find student records by name or ID</p>
    </div>

    <div class="container">
        <!-- Search Form -->
        <div class="search-card">
            <form class="search-form" action="#search-results" method="POST">
                <input 
                    type="text" 
                    class="search-input" 
                    placeholder="Enter student name or ID..."
                    aria-label="Search for students"
                    name="query"
                >
                <button type="submit" class="search-btn">Search</button>
            </form>
        </div>

        <!-- Search Results (static example) -->
        <div class="results-card" id="search-results">
            <h2>Search Results</h2>
            
            <!-- Example Results (would be dynamic with backend) -->
            <div class="student-result">
                <h3>Ahmad Bin Ali</h3>
                <p><strong>ID:</strong> DIP2024001</p>
                <p><strong>Program:</strong> Diploma in Computer Science</p>
                <p><strong>Email:</strong> ahmad.ali@email.com</p>
                <a href="student_report_example.html" class="btn">View Full Profile</a>
            </div>

            <!-- No Results Example (hidden by default) -->
            <div class="no-results">
                <p>No students found matching your search.</p>
                <p>Try a different name or ID.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <a href="dashboard.html" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>