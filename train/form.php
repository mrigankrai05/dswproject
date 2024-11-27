<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Form</title>
    </head>
    <style>
        #heading{
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            margin: 20px 0px ;
        }
        #mainform{
            margin: 0px 100px;
        }
        #date{
            position: relative;
            left:-60px;
        }
        h3{
            position: relative;
            top:10px;
        }
        img{
            width: 150px;
            height: 150px;
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
            <h2 class="text-base/7 font-semibold text-gray-900" id="heading">Please Enter Information</h2>
            <div class="border-b border-gray-900/10 pb-12" id="mainform">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                    <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                    </div>




                    <div class="sm:col-span-2">
                    <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                    </div>




                    <div class="sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">AGE</label>
                    <div class="mt-2">
                        <input id="email" name="age" type="number" autocomplete="email" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                    </div>




                    <h3>DEPARTURE DATE</h3>
                        <input type="date" id="date" class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700" name="date">




                    <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm/6 font-medium text-gray-900">Departure_Station</label>
                    <div class="mt-2">
                        <input type="text" name="departure" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                    </div>



                    <div class="sm:col-span-2">
                    <label for="region" class="block text-sm/6 font-medium text-gray-900">Arrival</label>
                    <div class="mt-2">
                        <input type="text" name="arrival" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                    </div>

                </div>
                <div>
                    <button type="submit" class="inline-flex mt-10 ml-[600px] col-span-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">SUBMIT</button>
                </div>
            </div>
        </form>
            <?php
                $servername="localhost";
                $username="root";
                $password="";
                $db_name="trainbooking";
                $conn=new mysqli($servername,$username,$password,$db_name);
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $name=$_POST["name"];
                    $age=$_POST["age"];
                    $date=$_POST["date"];
                    $departure=$_POST["departure"];
                    $arrival=$_POST["arrival"];
                    $sql="INSERT INTO userdata(name,age,departure_date,departure,arrival) VALUES('$name','$age','$date','$departure','$arrival')";
                    if($conn->query($sql)===TRUE){
                         echo '
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative max-w-md mx-auto" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">Your booking has been successfully completed!</span>
                            </div>';
                        echo "<br>";
                    }
                    else{
                        echo "error:".$sql."<br>".$conn->error;
                    }
                }
                $conn->close();
            ?>
    </body>
</html>