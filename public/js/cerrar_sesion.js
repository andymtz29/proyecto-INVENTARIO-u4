const mensaje_exito = (msj) => {
    Swal.fire({
        title: "¡Sucess!",
        text: "Se ha cerrado tu sesion con exito",
        icon: "error",
        confirmButtonText: "Aceptar",
    });
}



const cerrar_sesion = () => {
    let data = new FormData();
    data.append("metodo", "cerrar_sesion");

    fetch("./app/controller/Login.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            mensaje_exito(respuesta[1]);
            setTimeout(() => {
                window.location = "login";
            }, 4000);
        }
        // } else {
        //     mensaje_error(respuesta[1]);
        // }
    })

}

$("#btn_cerrar").on('click', () => {
    cerrar_sesion();
});
