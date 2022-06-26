const galeryImage = document.querySelectorAll('.image');
const modal = document.querySelector(".modal");
const openModalButton = document.getElementById("openModal");
const exitModalButton = document.querySelector(".close-modal");
const modalContent = document.querySelector(".modal-content");



var modalImage = document.createElement("img");
modalImage.setAttribute("width", "100%");

const selectImage = function(img) {
 modalImage.src = img.src;
}

const openModal = function () {
  modal.classList.remove("hide-modal"); //show modal
  modalContent.appendChild(modalImage); //append image to modal content
};

const closeModal = function () {
  modal.classList.add("hide-modal"); //hide modal
};

//OPEN MODAL
for (let i = 0; i < galeryImage.length; i++) {
   galeryImage[i].addEventListener('click', openModal); // go through list of images and add click event on open
   galeryImage[i].onclick = function () { // go throuhj list of images and add onclick event to change modalImage src of image which is clicked
   modalImage.src = this.src;
   }
 }

//CLOSE MODAL ON ESC BUTTON
exitModalButton.addEventListener("click", closeModal);

//close modal when clicked outside modal
window.onclick = function (event) {
  if (event.target == modal) {
    closeModal();
  }
};

// window.addEventListener('click', function(event){
//   if (event.target == modal) {
//     closeModal();
//   }
// });

//close modal when esc is pressed
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hide-modal")) {
    closeModal();
  }
});