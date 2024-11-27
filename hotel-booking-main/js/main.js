import { hotelData } from './hotels.js';
import { validateBookingDetails, calculateTotalPrice } from './booking.js';

let currentCity = '';

window.searchHotels = function() {
    const cityInput = document.getElementById('cityInput');
    currentCity = cityInput.value.trim();
    
    if (currentCity === '') {
        alert('Please enter a city name');
        return;
    }
    
    displayHotels(currentCity);
};

function displayHotels(city) {
    const container = document.getElementById('hotels-container');
    container.innerHTML = '';
    
    hotelData.forEach(hotel => {
        const card = createHotelCard(hotel, city);
        container.appendChild(card);
    });
}

function createHotelCard(hotel, city) {
    const div = document.createElement('div');
    div.className = 'hotel-card';
    
    div.innerHTML = `
        <img src="${hotel.image}" alt="${hotel.name}" class="hotel-image">
        <div class="hotel-info">
            <h3 class="hotel-name">${hotel.name}</h3>
            <p class="hotel-location">${city}</p>
            <p class="hotel-price">₹${hotel.basePrice.toLocaleString()} per night</p>
            <button onclick="openBookingModal('${hotel.name}', '${city}', ${hotel.basePrice})">Book Now</button>
        </div>
    `;
    
    return div;
}

window.openBookingModal = function(hotelName, city, basePrice) {
    const modal = document.getElementById('modal');
    const modalContent = document.querySelector('.modal-content');
    
    modalContent.innerHTML = `
        <span class="close-button">&times;</span>
        <h2>Book Your Stay at ${hotelName}</h2>
        <div class="booking-form">
            <div class="form-group">
                <label for="checkIn">Check-in Date:</label>
                <input type="date" id="checkIn" required>
            </div>
            <div class="form-group">
                <label for="checkOut">Check-out Date:</label>
                <input type="date" id="checkOut" required>
            </div>
            <div class="form-group">
                <label for="rooms">Number of Rooms:</label>
                <input type="number" id="rooms" min="1" value="1" required>
            </div>
            <div class="form-group">
                <label for="guests">Number of Guests:</label>
                <input type="number" id="guests" min="1" value="1" required>
            </div>
            <button onclick="confirmBooking('${hotelName}', '${city}', ${basePrice})">Confirm Booking</button>
        </div>
    `;

    modal.style.display = 'flex';

    // Set minimum date for check-in to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('checkIn').min = today;
    document.getElementById('checkOut').min = today;

    // Reattach close button functionality
    const closeButton = document.getElementsByClassName('close-button')[0];
    closeButton.onclick = function() {
        modal.style.display = 'none';
    };
};

window.confirmBooking = function(hotelName, city, basePrice) {
    const checkIn = document.getElementById('checkIn').value;
    const checkOut = document.getElementById('checkOut').value;
    const rooms = parseInt(document.getElementById('rooms').value);
    const guests = parseInt(document.getElementById('guests').value);

    const validationError = validateBookingDetails(checkIn, checkOut, rooms, guests);
    if (validationError) {
        alert(validationError);
        return;
    }

    const totalPrice = calculateTotalPrice(basePrice, checkIn, checkOut, rooms);
    
    const modalContent = document.querySelector('.modal-content');
    modalContent.innerHTML = `
        <span class="close-button">&times;</span>
        <h2>Booking Confirmed!</h2>
        <div class="confirmation-details">
            <p><strong>Hotel:</strong> ${hotelName}</p>
            <p><strong>Location:</strong> ${city}</p>
            <p><strong>Check-in:</strong> ${new Date(checkIn).toLocaleDateString()}</p>
            <p><strong>Check-out:</strong> ${new Date(checkOut).toLocaleDateString()}</p>
            <p><strong>Rooms:</strong> ${rooms}</p>
            <p><strong>Guests:</strong> ${guests}</p>
            <p><strong>Total Price:</strong> ₹${totalPrice.toLocaleString()}</p>
        </div>
    `;

    // Reattach close button functionality
    const closeButton = document.getElementsByClassName('close-button')[0];
    closeButton.onclick = function() {
        document.getElementById('modal').style.display = 'none';
    };
};

// Modal close functionality for clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};