export function validateBookingDetails(checkIn, checkOut, rooms, guests) {
    const today = new Date();
    const checkInDate = new Date(checkIn);
    const checkOutDate = new Date(checkOut);

    if (checkInDate < today) {
        return "Check-in date cannot be in the past";
    }
    if (checkOutDate <= checkInDate) {
        return "Check-out date must be after check-in date";
    }
    if (rooms < 1) {
        return "Must book at least one room";
    }
    if (guests < 1) {
        return "Must have at least one guest";
    }
    if (guests > (rooms * 4)) {
        return "Maximum 4 guests per room allowed";
    }
    return null;
}

export function calculateTotalPrice(basePrice, checkIn, checkOut, rooms) {
    const nights = Math.ceil((new Date(checkOut) - new Date(checkIn)) / (1000 * 60 * 60 * 24));
    return basePrice * nights * rooms;
}