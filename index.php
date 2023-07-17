<!DOCTYPE html>
<html>
<head>
    <style> 
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid black;
            border-right: 1px solid black; 
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            margin-top: 20px;
        }
        th:last-child,
        td:last-child {
            border-right: none;  
        }
    </style>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table>
        <thead>
            <tr>
                <th>SN</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $server = 'localhost'; // 127.0.0.1
                $username = 'root';
                $password = 'rootroot';
                $db = 'csc309';

                // Connect to the DB
                $con = new mysqli($server, $username, $password, $db);

                // Check connection
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Select all records from the users table
                $sql = "SELECT * FROM users";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // Display all the selected records
                    $count = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $count . "</td>";
                        echo "<td>" . $row['lastname'] . "</td>";
                        echo "<td>" . $row['firstname'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['date_of_birth'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                        $count++;
                    }
                } else {
                    echo "No results";
                }

                // Close connection
                $con->close();
            ?>
        </tbody>
    </table>
</body>
</html>
