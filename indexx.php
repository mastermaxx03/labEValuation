<!DOCTYPE html>
<html>

<head>
    <title>College Website</title>
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

        p {
            margin-bottom: 20px;
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
        <h2>Welcome to Our College</h2>
        <p>Write a brief introduction or highlight some key features of your college here.</p>
        <p>Feel free to customize this section with more content and styling as needed.</p>
    </main>

    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> College Website. All rights reserved.
        </p>
    </footer>
</body>

</html>