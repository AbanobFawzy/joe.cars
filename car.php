<!DOCTYPE html>
<html>

<head>
    <title>Car Marketplace</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add your CSS styles here */
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

        nav {
            display: flex;
            justify-content: center;
            background-color: #f2f2f2;
            padding: 10px 0;
        }

        nav a {
            color: #333;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
        }

        nav a:hover {
            background-color: #333;
            color: #fff;
        }

        main {
            padding: 20px;
        }

        .car-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .car-card {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .car-card img {
            max-width: 100%;
            height: auto;
        }

        .car-details {
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Joe.Car</h1>
    </header>
    <nav>
        <a href="car.php">Home</a>
        <a href="#">Buy Cars</a>
        <a href="#">Sell Cars</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
    </nav>

    <main>
    </main>
    <footer>
        <p>&copy; 2024 Joe.Car . All rights reserved.</p>
    </footer>

    <script>
        // Add your JavaScript code here
    </script>
</body>

</html>