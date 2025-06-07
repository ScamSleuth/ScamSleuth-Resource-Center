// Function to update user status
function updateUserStatus() {
    fetch('send.php?update_status=1', {
        method: 'POST',
        cache: 'no-cache'
    }).catch(error => console.error('Error updating status:', error));
}

// Update immediately and then every 10 seconds
updateUserStatus();
setInterval(updateUserStatus, 10000);
