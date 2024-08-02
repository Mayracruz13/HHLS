
// Obtener la imagen, el modal, el botón de cierre y el texto
var img = document.getElementById("myImage");
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("modalImg");
var modalText = document.getElementById("modalText");
var closeBtn = document.getElementsByClassName("close")[0];

// Cuando se hace clic en la imagen, se abre el modal
img.onclick = function() {
modal.style.display = "block";
modalImg.src = this.src;
modalText.textContent = "Texto del modal"; // Reemplaza "Texto del modal" por el texto que deseas mostrar
}

// Cuando se hace clic en el botón de cierre, se cierra el modal
closeBtn.onclick = function() {
modal.style.display = "none";
}

// Cuando se hace clic fuera del contenido del modal, también se cierra el modal
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
