const cards = document.querySelectorAll('.feature-card');

cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('active');
    });

    card.addEventListener('mouseleave', () => {
        card.classList.remove('active');
    });
});