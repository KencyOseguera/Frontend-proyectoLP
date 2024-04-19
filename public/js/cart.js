// Inicializar el contador en 0
let contador1 = 0;
let contador2 = 0;
let contador3 = 0;

// Function para decrementar, no va a decrementar si el contador esta esta en 0
function decrementar(producto) {
    if (producto === 1 && contador1 > 0) {
        contador1--;
        document.getElementById("contador1").innerHTML = contador1;
    } else if (producto === 2 && contador2 > 0) {
        contador2--;
        document.getElementById("contador2").innerHTML = contador2;
    } else if (producto === 3 && contador3 > 0) {
        contador3--;
        document.getElementById("contador3").innerHTML = contador3;
    }
}

// Function para incrementar el contador
function incrementar(producto) {
    if (producto === 1) {
        contador1++;
        document.getElementById("contador1").innerHTML = contador1;
    } else if (producto === 2) {
        contador2++;
        document.getElementById("contador2").innerHTML = contador2;
    } else if (producto === 3) {
        contador3++;
        document.getElementById("contador3").innerHTML = contador3;
    }

}



// Función para verificar si el usuario está registrado antes de pagar
function verificarUsuario(event) {
    event.preventDefault(); // Evitar que el enlace se abra automáticamente

    let usuarioRegistrado = false; // Suponiendo que inicialmente el usuario no está registrado

    if (usuarioRegistrado) {
        // Si el usuario está registrado, redirigir a la página de pago
        window.location.href = "{{route('cart-pagar')}}";
    } else {
        // Si el usuario no está registrado, redirigir a la página de inicio de sesión
        window.location.href = "{{route('login-cliente')}}";
    }
}
