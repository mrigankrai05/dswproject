<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Healthcare Services</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    .img{
      width: 100% !important;
      height: 37vh !important;
    }
    .logo{
            position: relative;
            left: 550px;
            width: 150px;
            height: 150px;
    }
    .l{
      position: relative;
      left:89vw;
      bottom:100px;
    }
  </style>
</head>
<body class="min-h-screen bg-gray-50">
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4">
      <img src="jiit.jpg" alt="Logo" class="logo">
    </div>
    <div>
      <button class="flex justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 l"><a href="index.php">SIGN OUT</a></button>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="relative">
    <img src="g.jpeg" alt="lgo" class="img" />
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-blue-900/70 flex items-center">
      <div class="max-w-7xl mx-auto px-4 text-white">
        <h1 class="text-5xl font-bold mb-4">Where Every Trip Starts with a Perfect Booking.</h1>
        <p class="text-3xl max-w-2xl">
          Booking made
easy, adventures made memorable!
        </p>
      </div>
    </div>
</div>


  <!-- Services Section -->
  <div class="max-w-7xl mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mx-auto" >
      <a href="./train/index.php">
        <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3l4 4m0 0l-4 4m4-4H7a4 4 0 00-4 4v8a4 4 0 004 4h10a4 4 0 004-4V7a4 4 0 00-4-4z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-center">Book Train Ticket</h3>
          <p class="text-center text-gray-600">Book Train based on your needs on the go</p>
        </div>
      </a>
      <!-- Inventory Management -->
      <a href="./hotel-booking-main/index.php">
        <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7l4 4m0 0l-4 4m4-4H7a4 4 0 00-4 4v8a4 4 0 004 4h10a4 4 0 004-4V7a4 4 0 00-4-4z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-center">Hotel Booking</h3>
          <p class="text-center text-gray-600">Track and Book Hotel on an ease</p>
        </div>
      </a>
      <a href="./nsemproject-main/semproject.html">
        <div class="border rounded-lg p-6 hover:shadow-lg transition-all">
          <div class="flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10h6M3 15h18M5 18h14M7 12h10m-2-6h4M5 9h14" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-center">Book Flight Ticket</h3>
          <p class="text-center text-gray-600">Book Flight based on your needs on the go</p>
        </div>
      </a>
  </div>
<br><br>
  <div class="bg-blue-600 py-16 h-[20vh] w-[100vw]">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-white mb-4">WANT ANY HELP ?</h2>
      <p class="text-blue-100 mb-8">Our team is available 24/7 to help you with any problems</p>
      <a href="tel:+11234567890" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition-colors">
        Contact Us Now
      </a>
    </div>
  </div>
</body>
</html>
