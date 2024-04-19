function registrarVendedor() {
    // Obtener los valores del formulario
    let nombre = document.getElementById('nombre').value;
    let descripcion = document.getElementById('descripcion').value;
    let correo = document.getElementById('correo').value;
    let contrasena = document.getElementById('contrasena').value;
    let tarjeta = document.getElementById('tarjeta').value;
    let vencimiento = document.getElementById('vencimiento').value;
    let cvv = document.getElementById('cvv').value;

    // Guardar los datos en localStorage
    let userData = { nombre,descripcion, correo, contrasena, tarjeta, vencimiento, cvv};
    localStorage.setItem('userData', JSON.stringify(userData));

    // Mostrar un mensaje de éxito
    alert('Usuario registrado correctamente');

    // Mostrar los datos en la consola
    console.log('Datos del usuario registrado:', JSON.parse(localStorage.getItem('userData')));
}