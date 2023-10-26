function showPopup(id) {
    // Get the popup element by its ID
    var popup = document.getElementById('popup-' + id);

    // Show the popup
    popup.style.display = 'block';
}

function hidePopup(id) {
    // Get the popup element by its ID
    var popup = document.getElementById('popup-' + id);

    // Hide the popup
    popup.style.display = 'none';
}