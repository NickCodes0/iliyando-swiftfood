// AJAX Anfrage für die Seiten.

function loadContent(url, tab) {
    $('.spinner-border').show();

    $.ajax({
        url: url + (tab ? `?tab=${tab}` : ''),
        type: 'GET',
        success: function (response) {
            // Verstecke den Lade-Spinner
            $('.spinner-border').hide();

            $('#content-container').html(response);
        },
        error: function () {
            $('.spinner-border').hide();

            alert('Fehler beim Laden des Inhalts.');
        }
    });
}

// Verstecke den Pfeil auf der PC-Version
if (window.innerWidth > 768) {
    $('#header-toggle').hide();
}


// Lade den Inhalt von food_list.php beim Seitenaufruf
document.addEventListener("DOMContentLoaded", function() {
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const darkModeIcon = document.getElementById('dark-mode-icon');

    // Überprüfe, ob der Dark-Mode im localStorage gespeichert ist
    const isDarkModeSaved = localStorage.getItem('darkMode') === 'true';

    // Setze den Dark-Mode-Status basierend auf dem, was im localStorage gespeichert ist
    document.body.classList.toggle('dark-mode', isDarkModeSaved);

    // Aktualisiere das Icon basierend auf dem Dark-Mode-Status
    darkModeIcon.className = isDarkModeSaved ? 'fa-solid fa-sun' : 'fa-solid fa-moon';

    darkModeToggle.addEventListener('click', () => {
        toggleDarkMode();
    });

    function toggleDarkMode() {
        // Toggle den Dark-Mode im body
        const isDarkMode = document.body.classList.toggle('dark-mode');

        // Speichere den Dark-Mode-Status im localStorage
        localStorage.setItem('darkMode', isDarkMode);

        // Aktualisiere das Icon basierend auf dem Dark-Mode-Status
        darkModeIcon.className = isDarkMode ? 'fa-solid fa-sun' : 'fa-solid fa-moon';

        // Füge hier weitere Logik hinzu, um andere Aktionen bei Änderung des Dark-Mode-Status auszuführen
    }
});

        // Lade den Inhalt von food_list.php beim Seitenaufruf
        $(document).ready(function() {
            loadContent('/assets/php/sites/user/food_list.php', 'food_list');
        });