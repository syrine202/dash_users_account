$(document).ready(function(){
    setTimeout(function(){
        $('#message').fadeOut();
    }, 3000); 
});

document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
        card.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#77a0c4'; 
            this.style.transition = 'background-color 0.3s ease'; 
        });

        card.addEventListener('mouseout', function() {
            this.style.backgroundColor = 'white'; 
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const logoutLink = document.querySelector('a[href="logout.php"]');

    logoutLink.addEventListener('click', function(event) {
        const confirmed = confirm("Are you sure you want to log out?");
        
        if (!confirmed) {
            event.preventDefault();
        }
    });
});