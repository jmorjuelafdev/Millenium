function openTab(event, tabName) {
  // Ocultar todos los elementos de contenido de las tabs
  var tabcontent = document.getElementsByClassName("tabcontent");
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Desactivar todos los enlaces de navegación de las tabs
  var navLinks = document.getElementsByClassName("nav-link");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].classList.remove("active");
  }

  // Mostrar el contenido de la tab seleccionada
  document.getElementById(tabName).style.display = "block";

  // Agregar la clase "active" al enlace de navegación de la tab seleccionada
  event.currentTarget.classList.add("active");
}
