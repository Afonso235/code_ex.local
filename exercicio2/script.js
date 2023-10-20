const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const button = item.querySelector('.accordion-button');
  const content = item.querySelector('.accordion-content');
  const targetId = button.dataset.target;
  button.addEventListener('click', () => {
    item.classList.toggle('open');
  });
});

function toggleMode() {
  const darkModeLink = document.getElementById("style-link");
  const lightModeLink = document.getElementById("light-mode-link");

  if (darkModeLink.disabled) {
    darkModeLink.disabled = false;
    lightModeLink.disabled = true;
  } else {
    darkModeLink.disabled = true;
    lightModeLink.disabled = false;
  }
}

