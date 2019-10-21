// Get modal elements
var modal = document.getElementById('loginModal');
// Get open modal Button
var modalBtn = document.getElementById('modalBtn');
// Get close Button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listen for open click on modal Button
modalBtn.addEventListener('click', openModal);

// Listen for close click on modal Button
closeBtn.addEventListener('click', closeModal);

// Listen for click outside modal box
window.addEventListener('click', clickOutside);

// Function to open modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close modal
function closeModal() {
  modal.style.display = 'none';
}

// If click outside modal box, make it disappear
function clickOutside(e) {
  if(e.target == modal) {
    modal.style.display = 'none';
  }
}
