const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const button = item.querySelector('.accordion-button');
  const content = item.querySelector('.accordion-content');
  const targetId = button.dataset.target;
  button.addEventListener('click', () => {
    item.classList.toggle('open');
  });
});


