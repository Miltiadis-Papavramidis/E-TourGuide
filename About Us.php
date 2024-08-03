<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-image: url('nik-shuliahin-0nrv0Dp4DTM-unsplash.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity here */
            z-index: 1;
        }

        header h1,
        header p {
            position: relative;
            z-index: 2;
        }

        header h1 {
            font-family: Lato, sans-serif;
            font-size: 36px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #348560;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0bb895;
        }

        section {
            padding: 50px 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .destinations {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .destination-card {
            width: 300px;
            margin: 0 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .destination-card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .destination-card h3 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .destination-card p {
            color: #666;
            margin-bottom: 20px;
        }

        .destination-card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #348560;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .destination-card a:hover {
            background-color: #0bb895;
        }

        #about-us {
            position: relative;
            text-align: center;
            color: white;
        }

        #about-us img {
            width: 100%;
            height: auto;
        }

        #about-us p {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            font-size: 25px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer nav ul {
            list-style: none;
            padding: 0;
        }

        footer nav ul li {
            display: inline;
            margin: 0 10px;
        }

        footer nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer nav ul li a:hover {
            color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1>This is an E-Tour Guide</h1>
        <p>Welcome to Your Gateway to Greece</p>
    </header>
    <main>
        <section id="about-us">
            <h2>About Us</h2>
            <div>
                <img src="sebastian-unrau-sp-p7uuT0tw-unsplash.jpg" alt="Image">
                <p>Welcome to Greece Explorer! We are your ultimate guide to discovering the breathtaking beauty and rich history of Greece. 
                    Our mission is to provide travelers with comprehensive and insightful information about the best destinations, activities, and cultural experiences that Greece has to offer. 
                    Join us on a journey to explore ancient ruins, stunning beaches, and vibrant cities. 
                    Our team of passionate travel experts is dedicated to making your Greek adventure unforgettable.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Greece Explorer</p>
        <nav>
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="Activities.php">Activities</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
