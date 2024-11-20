<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('waste-background.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        /* Main container */
        .container {
            width: 90%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            overflow: hidden;
        }

        /* Header styling */
        header {
            margin-bottom: 20px;
        }
        
        header h1 {
            font-size: 2em;
            color: #007bff;
            margin-bottom: 5px;
        }

        nav {
            margin-top: 10px;
        }

        nav a {
            color: #333;
            font-size: 1em;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #007bff;
        }

        /* Section styling */
        main {
            margin: 20px 0;
        }

        .section {
            margin: 20px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            font-size: 1.5em;
            color: #0056b3;
            margin-bottom: 10px;
        }

        .section p {
            color: #555;
            font-size: 1em;
            line-height: 1.6;
        }

        /* Quick links */
        #quick-links ul {
            list-style-type: none;
            padding: 0;
        }

        #quick-links li {
            margin: 10px 0;
        }

        #quick-links a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1em;
            transition: color 0.3s ease;
        }

        #quick-links a:hover {
            color: #0056b3;
        }

        /* Footer styling */
        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        footer p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>Welcome to the Waste Management System</h1>
            <nav>
                <a href="admin.html">Admin Page</a>
                <a href="login.html">User Page</a>
                <a href="driver.html">Driver Page</a>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            <!-- About Us Section -->
            <section class="section" id="about-us">
                <h2>About Us</h2>
                <p>We are dedicated to enhancing waste management through efficient collection and disposal solutions. Our platform connects users, drivers, and administrators to streamline waste collection services.</p>
            </section>

            <!-- Address Section -->
            <section class="section" id="address">
                <h2>Address</h2>
                <p>Kiandutu, Thika town, Waste Management HQ, PO BOX 456</p>
            </section>

            <!-- Quick Links Section -->
            <section class="section" id="quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="admin.html">Admin Dashboard</a></li>
                    <li><a href="login.html">User Dashboard</a></li>
                    <li><a href="driver.html">Driver Dashboard</a></li>
                </ul>
            </section>
        </main>

        <!-- Footer -->
        <footer>
            <p>&copy; 2024 Waste Management System. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
