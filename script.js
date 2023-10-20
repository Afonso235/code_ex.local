document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
      card.classList.toggle('flipped');
      card.classList.add('active');
    });
  
    card.addEventListener('mouseover', () => {
      card.style.transform = 'scale(1.1)';
    });
  
    card.addEventListener('mouseout', () => {
      card.style.transform = 'scale(1)';
    });
  });

  function flipCard(card) {
    console.log(card.querySelector('.back'));
    card.classList.toggle('flipped');
}

document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
        flipCard(card);
    });
});

