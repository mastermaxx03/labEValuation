<!DOCTYPE html>
<html>

<head>
    <title>Courses - College Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
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
            text-align: center;
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            background-color: #f9f9f9;
            padding: 10px;
            color: #555;
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
        <h1>Courses</h1>
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
        <h2>Our Courses</h2>
        <ul>
            <li>Course 1</li>
            <li>Course 2</li>
            <li>Course 3</li>
            <!-- Add more courses as needed -->
        </ul>
        <p>Provide details about the courses offered by your college.</p>
    </main>

    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> College Website. All rights reserved.
        </p>
    </footer>
</body>

</html>