function flipCard(card) {
    console.log(card.querySelector('.back'));
    card.classList.toggle('flipped');
}

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        flipCard(card);
    });
});

