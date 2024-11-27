document.getElementById("search-btn").addEventListener("click", function () {
  const departure = document.getElementById("departure").value;
  const destination = document.getElementById("destination").value;
  const date = document.getElementById("date").value;
  const airline = document.getElementById("airline").value;

  if (!departure || !destination || !date) {
      alert("Please fill in all required fields!");
      return;
  }

  // Mock flight data
  const flights = [
      { airline: "Airline A", flightNo: "AA101", departure: "10:00 AM", arrival: "12:00 PM", price: "$200", destination: "Dubai" },
      { airline: "Airline B", flightNo: "BB202", departure: "02:00 PM", arrival: "04:00 PM", price: "$150", destination: "Sydney" },
      { airline: "Airline C", flightNo: "CC303", departure: "06:00 PM", arrival: "08:00 PM", price: "$250", destination: "Berlin" },
      { airline: "Airline D", flightNo: "DD404", departure: "08:00 AM", arrival: "10:00 AM", price: "$300", destination: "Mumbai" }
  ];

  // Filter flights based on user input
  const filteredFlights = flights.filter(
      flight =>
          (!airline || flight.airline.toLowerCase().includes(airline.toLowerCase())) &&
          flight.destination.toLowerCase() === destination.toLowerCase()
  );

  const resultsContainer = document.getElementById("results");
  resultsContainer.innerHTML = "";

  if (filteredFlights.length > 0) {
      filteredFlights.forEach(flight => {
          const flightCard = document.createElement("div");
          flightCard.classList.add("flight-card");
          flightCard.innerHTML = `
              <p><strong>${flight.airline}</strong> (${flight.flightNo})</p>
              <div class="flight-details">
                  <p><strong>Departure:</strong> ${flight.departure}</p>
                  <p><strong>Arrival:</strong> ${flight.arrival}</p>
                  <p><strong>Price:</strong> ${flight.price}</p>
              </div>
              <button class="book-btn">Book Flight</button>
          `;

          // Add click event listener to the "Book Flight" button
          flightCard.querySelector(".book-btn").addEventListener("click", () => {
              alert(`You have booked flight ${flight.flightNo} with ${flight.airline}.\n\nDetails:\n- Departure: ${flight.departure}\n- Arrival: ${flight.arrival}\n- Price: ${flight.price}`);
          });

          resultsContainer.appendChild(flightCard);
      });
  } else {
      resultsContainer.innerHTML = "<p>No flights available for the given criteria.</p>";
  }
});
