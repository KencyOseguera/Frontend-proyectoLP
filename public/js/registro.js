
function registrarUsuario() {
    // Obtener los valores del formulario
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let telefono = document.getElementById('telefono').value;

    // Guardar los datos en localStorage
    let userData = { nombre,apellido, email, password, telefono };
    localStorage.setItem('userData', JSON.stringify(userData));

    // Mostrar un mensaje de éxito
    alert('Usuario registrado correctamente');

    // Mostrar los datos en la consola
    console.log('Datos del usuario registrado:', JSON.parse(localStorage.getItem('userData')));
}