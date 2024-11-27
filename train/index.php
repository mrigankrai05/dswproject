<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form</title>
     <style>
        #mainform{
            margin-left: 400px;
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
            <a href="../landingpage.php">Home</a>
        </div>
        <div>
             <a href="../landingpage.php">
            <img src="jiit.jpg" alt="Logo"><br><br>
            </a>
        </div>
        <div>
            <a href="bookingdetail.php">Check Booking</a>
        </div>
    </div>
    <h1 class="text-center text-3xl font-bold">Welcome to the Train Booking System</h1>
        <form action="train.php">
            <div id="mainform">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="first-name" class="block text-sm/6 font-medium text-gray-900">From</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="last-name" class="block text-sm/6 font-medium text-gray-900">To</label>
                        <div class="mt-2">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class=" mt-[30px] ml-[700px] text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
</body>
</html>