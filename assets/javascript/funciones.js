function confirmar(id_pro){ 
    confirmar=confirm("¿Deseas eliminar el registro?"); 
    if (confirmar) 
    {
    document.location="eliminar_productos.php?opcion="+id_pro;
    }
    }


function verificar() {

    const nombreProducto = document.getElementById('nombre');

    if (nombreProducto == "") {

        const div = document.querySelector(".msgError");
        div.textContent = "llena todos los formularios";
    } else {
        console.log("error");

    }
}
    /*const nombre = document.getElementById('nombre');

if (nombre == "hola") {

    console.log(nombre);
}
}*/
