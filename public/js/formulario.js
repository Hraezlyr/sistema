const formulario = document.getElementById('formulario_persona');
const inputs = document.querySelectorAll('#formulario_persona input');

const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const validar = (e) => {
    switch(e.target.name)
    {
        case "fecha_afiliacion":
            console.log("funciona");
        break;
        case "fecha_ingreso":
            console.log("funciona");
        break;
        case "fecha_actualizacion":
            console.log("funciona");
        break;
        case "correo":
            console.log("funciona");
        break;
        case "nombre":
            if (expresiones.nombre.test(e.target.value)) {

            }
            else
            {
                
            }
        break;
        case "cedula":
            console.log("funciona");
        break;
        case "inss":
            console.log("funciona");
        break;
    }
}

inputs.forEach((input)=> {
    input.addEventListener('keyup', validar);
    input.addEventListener('blur', validar);
})

formulario.addEventListener('submit',(e) => {
    e.preventDefault();
});
