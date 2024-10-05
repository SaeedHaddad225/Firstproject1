const button = document.querySelector('#random');
const canvas = document.querySelector('#confetti');

const jsConfetti = new JSConfetti();

setTimeout (button.addEventListener('click', () => {jsConfetti.addConfetti(
    {}
)
}), 4000 )