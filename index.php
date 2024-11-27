<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
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
         img{
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
            <h2>Login</h2>
            <form action="" method="post">
                <input type="email" placeholder="Email" required name="email">
                <input type="password" placeholder="Password" required name="password">
                <button type="submit">Login</button>
            </form>
            <div class="link">
                <p>Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </div>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "login";
        $conn = new mysqli($servername, $username, $password, $db_name);
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM user WHERE email = '" .$_POST['email']."' AND password = '" .$_POST['password']."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                header("Location: landingpage.php");
                exit();
            }
            else {
                echo "<h1>Invalid email or password</h1>";
            }
        }
        $conn->close();
    ?> 
</body>
</html>
