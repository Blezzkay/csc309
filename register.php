<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #0066cc;
        }
        button[type="submit"] {
            background-color: #0066cc;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0052a3;
        }
    </style>
    <title>CSC 309 DB Class</title>

</head>
<body>
    <h2>Registration Form</h2>

    <form action="process.php" method="post">
        <div>
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname">
        </div>

        <div>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Gender:</label>
            <label for="gender-male">
                <input type="radio" id="gender-male" name="gender" value="M" required> Male
            </label>
            <label for="gender-female">
                <input type="radio" id="gender-female" name="gender" value="F" required> Female
            </label>
        </div>

        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
