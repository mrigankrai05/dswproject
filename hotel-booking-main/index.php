<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxStay India - Premium Hotels</title>
    <link rel="stylesheet" href="style.css">
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
    <header class="hero">
        <h1>Find Your Perfect Stay</h1>
        <div class="search-container">
            <input type="text" id="cityInput" placeholder="Enter city name...">
            <button onclick="searchHotels()">Search Hotels</button>
        </div>
    </header>

    <main>
        <section id="hotels-container" class="hotels-grid"></section>
    </main>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Booking Confirmation</h2>
            <p id="modal-message"></p>
        </div>
    </div>

    <script type="module" src="js/main.js"></script>
</body>
</html>