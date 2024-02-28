function loadTicketForm() {
    var selectedConcert = document.getElementById("concertSelect").value;

    // Simulering af billetformular baseret på valgt koncert
    var ticketFormHtml = '';

    if (selectedConcert === 'concert1') {
        ticketFormHtml = '<form>';
        ticketFormHtml += 'Antal billetter: <input type="number" name="ticketQty" min="1" required>';
        ticketFormHtml += '<input type="submit" value="Bestil">';
        ticketFormHtml += '</form>';
    } else if (selectedConcert === 'concert2') {
        // Tilføj yderligere koncerter efter behov
    } else {
        ticketFormHtml = 'Ugyldig koncertvalg';
    }

    document.getElementById("ticketForm").innerHTML = ticketFormHtml;
}
