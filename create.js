// Initialize Firebase
const firebaseConfig = {
  apiKey: "AIzaSyBUrJmBzktCOGaf86Ne0ORozD71xyPGVuM",
  authDomain: "informa-c32b1.firebaseapp.com",
  projectId: "informa-c32b1",
  storageBucket: "informa-c32b1.appspot.com",
  messagingSenderId: "107625684096",
  appId: "1:107625684096:web:a93966cec62bfa81fa5a65"
};

firebase.initializeApp(firebaseConfig);

// Get a reference to the database service
const database = firebase.database();

document.getElementById("eventForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent default form submission

  // Get form values
  const eventName = document.getElementById("eventName").value;
  const eventDate = document.getElementById("eventDate").value;
  const stageNr = document.getElementById("stageNr").value;
  const eventDetails = document.getElementById("eventDetails").value;

  // Push data to Firebase
  database.ref("events").push({
    eventName: eventName,
    eventDate: eventDate,
    stageNr: stageNr,
    eventDetails: eventDetails
  })
  .then(() => {
    alert("Event created successfully!");
    // Optionally, reset the form after successful submission
    document.getElementById("eventForm").reset();
  })
  .catch((error) => {
    console.error("Error creating event: ", error);
    alert("An error occurred while creating the event. Please try again.");
  });
});
