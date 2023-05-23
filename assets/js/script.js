function validarFormulario() {
  var serviciosSeleccionados = document.querySelectorAll(
    'input[name="servicios[]"]:checked'
  );
  if (serviciosSeleccionados.length === 0) {
    alert("Debes seleccionar al menos un servicio.");
    return false;
  }

  var peluquerosSeleccionados = document.querySelectorAll(
    'input[name="peluqueros[]"]:checked'
  );
  if (peluquerosSeleccionados.length === 0) {
    alert("Debes seleccionar al menos un peluquero.");
    return false;
  }
}
AOS.init();
