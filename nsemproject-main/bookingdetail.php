<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        #mainform{
            margin: 0px 100px;
        }
        #heading{
            text-align: center;
            font-size: 40px ;
            font-weight: 700;
            margin: 20px 0px ;
        }
        .j{
            position: relative;
            left: 420px;
            text-align:center;
            margin: 20px 0px;
        }
        .k{
            position: relative;
            left: 680px;
            top:-30px;
        }
        .nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px;
        }

        .nav img {
            height: 150px;
        }

        .nav a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div>
            <a href="index.php">Home</a>
        </div>
        <div>
            <img src="jiit.jpg" alt="Logo"><br><br>
        </div>
        <div>
            <a href="bookingdetail.php">Check Booking</a>
        </div>
    </div>
    <form action="" method="post">
        <h2 id="heading">Check Booking Detail</h2>
        <div class="pb-12" id="mainform">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-2 j">
                <label for="first-name" class="block text-sm/6 font-medium text-gray-900" >Enter Your First name</label>
                <div class="mt-2">
                    <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 k">Submit</button>
    </form> 
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db_name = "trainbooking";
            $conn = new mysqli($servername, $username, $password, $db_name);
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM userdata where name = '".$_POST['name']."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">';
                        echo '<div class="px-6 py-4">';
                        echo '<div class="font-bold text-xl mb-2">NAME :- ' . $row["name"] . '</div>';
                        echo '<p class="text-gray-700 text-base">AGE :- ' . $row["age"] . '</p>';
                        echo '<p class="text-gray-700 text-base">DEPARTURE DATE:- ' . $row["departure_date"] . '</p>';
                        echo '<p class="text-gray-700 text-base"> DEPARTURE STATION :- ' . $row["departure"] . '</p>';
                        echo '<p class="text-gray-700 text-base">ARRIVAL STATION :- ' . $row["arrival"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
            }
            $conn->close();
        ?> 
</body>
</html>
