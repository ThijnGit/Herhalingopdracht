const birds = document.querySelectorAll('.bird');

function moveRandomly(bird) {
  const container = bird.parentElement;
  const maxX = container.clientWidth - bird.clientWidth;
  const maxY = container.clientHeight - bird.clientHeight;

  // met behulp van Math.random kiest hij een willekeurige plek uit om te verplaatsen
  const randomX = Math.floor(Math.random() * maxX);
  const randomY = Math.floor(Math.random() * maxY);

  bird.style.transform = `translate(${randomX}px, ${randomY}px)`;
}

// Elke vogel apart bewegen met random interval
birds.forEach(bird => {
  setInterval(() => {
    moveRandomly(bird);
  }, Math.random() * 2000 + 1500); // tussen 1.5s en 3.5s
});

