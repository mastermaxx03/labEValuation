<!DOCTYPE html>
<html>

<head>
    <title>About - College Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
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
            color: #555;
            line-height: 1.5;
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

        /* Custom CSS Styles */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .about-image {
            display: block;
            margin: 20px auto;
            width: 200px;
            border-radius: 50%;
        }

        .about-description {
            margin-bottom: 20px;
        }

        .about-quote {
            font-style: italic;
            color: #777;
        }
    </style>
</head>

<body>
    <header>
        <h1>About</h1>
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
        <div class="container">
            <h2>About Our College</h2>
            <img src="college-image.jpg" alt="College Image" class="about-image">
            <p class="about-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu orci euismod,
                iaculis turpis non, vestibulum magna. Nunc vitae ligula a turpis pellentesque condimentum ac id neque.
                Nulla feugiat tellus enim, vitae tempus turpis efficitur eget. Mauris non libero eget mauris aliquam
                rutrum ac a elit. Quisque eleifend ullamcorper efficitur. Nulla facilisi.</p>
            <p class="about-description">Suspendisse fermentum arcu sed est vestibulum, vel vulputate ipsum malesuada.
                Nam nec libero eget velit laoreet posuere ut non massa. Suspendisse dapibus lectus quis pharetra
                pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec
                a feugiat dolor, ut volutpat nisi. Curabitur eleifend nunc ipsum, id dignissim nulla gravida id. Proin
                feugiat nisl neque, ac rutrum libero tempus eu.</p>
            <p class="about-quote">"Education is the most powerful weapon which you can use to change the world." -
                Nelson Mandela</p>
        </div>
    </main>

    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> College Website. All rights reserved.
        </p>
    </footer>
</body>

</html>