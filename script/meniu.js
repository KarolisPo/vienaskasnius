 const meniuImage = document.querySelectorAll('.image');
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
   modal.classList.remove("hide-modal");
   modalContent.appendChild(modalImage);
 };

 const closeModal = function () {
   modal.classList.add("hide-modal");
 };
 
 //OPEN MODAL
 for (let i = 0; i < meniuImage.length; i++) {
    meniuImage[i].addEventListener('click', openModal);
    meniuImage[i].onclick = function () { // go throuhj list of images and add onclick event to change modalImage src of image which is clicked
    modalImage.src = this.src;
  }
};
 
 //CLOSE MODAL ON X BUTTON
 exitModalButton.addEventListener("click", closeModal);
 
 //close modal when clicked outside modal
 window.onclick = function (event) {
   if (event.target == modal) {
     closeModal();
   }
 };
 
 //close modal when esc is pressed
 document.addEventListener("keydown", function (e) {
   if (e.key === "Escape" && !modal.classList.contains("hide-modal")) {
     closeModal();
   }
 });
