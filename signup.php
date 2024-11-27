<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        .body {
            font-family: Arial, sans-serif;
            background: #f0f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            background: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .link {
            text-align: center;
            margin-top: 10px;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
        img {
            position: relative;
            left: 650px;
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <img src="jiit.jpg" alt="Logo">
    <div class="body">
        <div class="container">
            <h2>Sign Up</h2>
            <form method="POST" action="">
                <input type="text" placeholder="Full Name" required name="name">
                <input type="email" placeholder="Email" required name="email">
                <input type="password" placeholder="Password" required name="password">
                <button type="submit" >Sign Up</button>
            </form>
            <div class="link">
                <p>Already have an account? <a href="index.php">Login</a></p>
            </div>
        </div>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "login";
        $conn = new mysqli($servername, $username, $password, $db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "INSERT INTO user(email,password) VALUES ('$email','$password')";
            if ($conn->query($sql) === TRUE) {
                header("Location: landingpage.php");
                exit();
            } else {
                echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        $conn->close();
    ?>
</body>
</html>
