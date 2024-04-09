const eventForm = document.getElementById("event-form");
const eventContainer = document.getElementById("event-container");

eventForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const eventName = document.getElementById("event-name").value;
  const eventDate = document.getElementById("event-date").value;
  const eventDescription = document.getElementById("event-description").value;

  const newEvent = {
    name: eventName,
    date: eventDate,
    description: eventDescription
  };

  displayEvent(newEvent);
});

function displayEvent(event) {
  const eventDiv = document.createElement("div");
  eventDiv.classList.add("event");

  const eventHtml = `
    <h2>${event.name}</h2>
    <p>Date: ${event.date}</p>
    <p>Description: ${event.description}</p>
  `;

  eventDiv.innerHTML = eventHtml;
  eventContainer.appendChild(eventDiv);
}
