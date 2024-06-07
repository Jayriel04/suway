document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('numAdultsInput').addEventListener('input', updateOccupancy);
    document.getElementById('numChildrenInput').addEventListener('input', updateOccupancy);
    document.getElementById('numRoomsInput').addEventListener('input', updateOccupancy);
});

function updateOccupancy() {
    const numAdults = document.getElementById('numAdultsInput').value;
    const numChildren = document.getElementById('numChildrenInput').value;
    const numRooms = document.getElementById('numRoomsInput').value;

    document.getElementById('numAdults').textContent = numAdults + (numAdults === '1' ? ' adult' : ' adults');
    document.getElementById('numChildren').textContent = numChildren + (numChildren === '1' ? ' child' : ' children');
    document.getElementById('numRooms').textContent = numRooms + (numRooms === '1' ? ' room' : ' rooms');
}
