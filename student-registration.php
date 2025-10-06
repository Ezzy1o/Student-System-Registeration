<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
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
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 2px solid #e0e0e0;
        }

        .form-container {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
            font-size: 1em;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
            background-color: #f9f9f9;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #333;
            background-color: white;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
            transform: scale(1.2);
        }

        .checkbox-group label {
            margin-bottom: 0;
            font-weight: normal;
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
            margin: 10px 5px;
            transition: all 0.3s ease;
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

        .nav-buttons {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0f0f0;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .container {
                margin: 20px;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <method="post">
    <div class="header">
        <h1>Student Registration Form</h1>
        <p>Enter student information below</p>
    </div>

    <div class="container">
        <div class="form-container">
            <form action="view-students.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="studentId">Student ID *</label>
                        <input type="text" id="studentId" name="studentId" placeholder="e.g., DIP2024001" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+60123456789">
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date of Birth *</label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="3" placeholder="Enter your full address"></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="program">Diploma Program *</label>
                        <select id="program" name="program" required>
                            <option value="">Select Program</option>
                            <option value="Computer Science">Diploma in Computer Science</option>
                            <option value="Information Technology">Diploma in Information Technology</option>
                            <option value="Business Administration">Diploma in Business Administration</option>
                            <option value="Accounting">Diploma in Accounting</option>
                            <option value="Engineering">Diploma in Engineering</option>
                            <option value="Graphic Design">Diploma in Graphic Design</option>
                            <option value="Hospitality Management">Diploma in Hospitality Management</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="year">Year of Study *</label>
                        <select id="year" name="year" required>
                            <option value="">Select Year</option>
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label>Emergency Contact</label>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="emergencyName" name="emergencyName" placeholder="Emergency Contact Name">
                        </div>
                        <div class="form-group">
                            <input type="tel" id="emergencyPhone" name="emergencyPhone" placeholder="Emergency Contact Phone">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Special Requirements</label>
                    <div class="checkbox-group">
                        <input type="checkbox" id="transport" name="requirements" value="transport">
                        <label for="transport">Transportation Assistance</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="accommodation" name="requirements" value="accommodation">
                        <label for="accommodation">Accommodation</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="scholarship" name="requirements" value="scholarship">
                        <label for="scholarship">Scholarship Information</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="additionalNotes">Additional Notes</label>
                    <textarea id="additionalNotes" name="additionalNotes" rows="3" placeholder="Any additional information or special requests"></textarea>
                </div>
                <div class="form-group">
                    <label for="terms">
                        <input type="checkbox" id="terms" name="terms" required>
                        I agree to the terms and conditions.
                    </label>
                </div>
                <div class="form-group">
                    <label for="privacy">
                        <input type="checkbox" id="privacy" name="privacy" required>
                        I agree to the privacy policy.
                    </label>
                </div>

                <div class="form-group">
                    <label for="studentPhoto">Upload Student Photo</label>
                    <input type="file" id="studentPhoto" name="studentPhoto" accept="image/*">
                </div>

                <div class="nav-buttons">
                    <button type="submit" class="btn">Register Student</button>
                    <button type="reset" class="btn btn-secondary">Reset Form</button>
                    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>