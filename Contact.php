<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #f2f2f2;
            text-align: center;
            padding: 50px 0;
            background-image: url(nik-shuliahin-0nrv0Dp4DTM-unsplash.jpg);
            background-size: cover;
            background-position: center;
        }

        header h1 {
            font-family: Lato, sans-serif;
            font-size: 36px;
            color: #fff;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-size: 18px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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

        /* Form styles */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 150px;
        }

        .submit-btn {
            display: block;
            width: 15%;
            padding: 10px;
            background-color: #348560;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
             margin: 0 auto;
        }

        .submit-btn:hover {
            background-color: #0bb895;
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
        <h1>Contact Us</h1>
        <p>Feel free to reach out to us for any inquiries or questions.</p>
    </header>

    <form action="#" method="POST">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit" class="submit-btn btn">Submit</button>
    </form>

    <footer>
        <p>&copy; 2024 [Greece] Explorer</p>
        <nav>
            <ul>
                <li><a href="HomePage.php">Home</a></li>
                <li><a href="About Us.php">About Us</a></li>
                <li><a href="Activities.php">Activities</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>
