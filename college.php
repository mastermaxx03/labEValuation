<!DOCTYPE html>
<html>

<head>
    <title>College Website</title>
    <script src="script.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #444;
        }

        nav ul li {
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        main {
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        p {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to College Website</h1>
        <nav>
            <ul>
                <li><a href="indexx.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        // PHP code to retrieve data from MySQL database and display content dynamically
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "brock";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to retrieve data from a table
        $sql = "SELECT * FROM news";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                // Add more HTML formatting as needed
            }
        } else {
            echo "No news available.";
        }

        // Close the connection
        $conn->close();
        ?>
    </main>

    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> College Website. All rights reserved.
        </p>
    </footer>
</body>

</html>