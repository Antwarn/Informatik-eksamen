// create.js

// Function to handle form submission
function handleSubmit(event) {
    event.preventDefault(); // Prevent default form submission behavior
    
    // Fetch form data
    const formData = new FormData(event.target);
    
    // Convert form data to JSON
    const jsonData = {};
    formData.forEach((value, key) => {
        jsonData[key] = value;
    });
    
    // Send JSON data to server (you can customize this part)
    console.log(jsonData); // For demonstration purpose, logging the data
}

// Add event listener to form submission
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', handleSubmit);
});
