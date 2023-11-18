document.addEventListener("DOMContentLoaded", function(event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            // For desktop, make sure the navbar is open initially
            nav.classList.add('show');
            bodypd.classList.add('body-pd');
            headerpd.classList.add('body-pd');

            // Toggle functionality for both desktop and mobile
            toggle.addEventListener('click', () => {
                // show/hide navbar
                nav.classList.toggle('show');

                // Change icon only for mobile view
                if (window.innerWidth <= 768) {
                    toggle.classList.toggle('fa-arrow-left');
                    toggle.classList.toggle('fa-arrow-right');
                }

                // add/remove padding to body
                bodypd.classList.toggle('body-pd');

                // add/remove padding to header
                headerpd.classList.toggle('body-pd');
            });
        }
    }

    // Initialize the function
    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }

    linkColor.forEach(l => l.addEventListener('click', colorLink))
});
