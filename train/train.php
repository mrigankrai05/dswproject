<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form</title>
    <style>
        .j{
            text-align: center;
            font-size: 50px;
            margin-top: 30px;
            font-weight: bold;
            text-decoration: underline;
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
   <h2 class="text-2xl font-bold text-gray-900 sm:truncate sm:text-4xl sm:tracking-tight j">AVAILABLE TRAINS</h2>
    <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4 ">Rajdhani</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 30min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4800/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4 ">Howrah</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 10min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4100/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4 ">Bullet Train</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 20min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4900/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4">Machined Train</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 30min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4400/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4">Sahadar Train</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 10min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4900/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4">Jaipur Train</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr 30min</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 4400/-</p>
            </a>
            <a href="form.php" class="group">
                <img src="train.png" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-[7/8]">
                <h3 class="mt-4">New Train</h3>
                <p class="mt-1 text-lg font-medium text-gray-900">Duration :- 7hr</p>
                <p class="mt-1 text-lg font-medium text-gray-900">Cost :- 5400/-</p>
            </a>
        </div>
    </div>
</div>
</body>
</html>