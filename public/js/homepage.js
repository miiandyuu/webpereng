const menuToggle = document.querySelector('.toggle');
const showcase = document.querySelector('.showcase');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  showcase.classList.toggle('active');
})

// Burger Menu Button
const menuBtn = document.querySelector('.menu-btn');
// let menuOpen = false;

// menuBtn.addEventListener('click', () => {
// if(!menuOpen) {
//     menuBtn.classList.add('open');
//     menuOpen = true;
// } else {
//     menuBtn.classList.remove('open');
//     menuOpen = false;
// }
// });

menuBtn.addEventListener('click', () => {
  menuBtn.classList.toggle('open');
  });