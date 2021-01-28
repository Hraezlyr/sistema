var facultad = [
    {name:"Facultad de Ciencias Médicas"},
    {name:"Facultad de Ciencias de la Educación y Humanidades"},
    {name:"Facultad de Odontología"},
    {name:"Facultad de Ciencias Jurídicas y Sociales"},
    {name:"Facultad de Ciencia y Tecnología"},
    {name:"Facultad de Ciencias Ecónomicas Empresariales y Turísmo"},
    {name:"Facultad de Ciencias Químicas"},
    {name:"Escuela Ciencias Agrarías y Veterinarias"}
  ]
  var departamentos = [
    {name:"departamento 1 de ciencias medicas",idFactultad:"Facultad de Ciencias Médicas"},
    {name:"departamento 2 de ciencias medicas",idFactultad:"Facultad de Ciencias Médicas"},
    {name:"departamento 1 de ciencias de la educacion",idFactultad:"Facultad de Ciencias de la Educación y Humanidades"},
    {name:"departamento 2 de ciencias de la educacion",idFactultad:"Facultad de Ciencias de la Educación y Humanidades"},
    {name:"departamento 1 de odontologia",idFactultad:"Facultad de Odontología"},
    {name:"departamento 2 de odontologia",idFactultad:"Facultad de Odontología"},
    {name:"departamento 1 de ciencias juridicas",idFactultad:"Facultad de Ciencias Jurídicas y Sociales"},
    {name:"departamento 2 de ciencias juridicas",idFactultad:"Facultad de Ciencias Jurídicas y Sociales"},
    {name:"departamento 1 de ciencias y tecnologias",idFactultad:"Facultad de Ciencia y Tecnología"},
    {name:"departamento 2 de ciencias y tecnologias",idFactultad:"Facultad de Ciencia y Tecnología"},
    {name:"departamento 1 de ciencias economicas",idFactultad:"Facultad de Ciencias Ecónomicas Empresariales y Turísmo"},
    {name:"departamento 2 de ciencias economicas",idFactultad:"Facultad de Ciencias Ecónomicas Empresariales y Turísmo"},
    {name:"departamento 1 de ciencias quimicas",idFactultad:"Facultad de Ciencias Químicas"},
    {name:"departamento 2 de ciencias quimicas",idFactultad:"Facultad de Ciencias Químicas"},
    {name:"departamento 1 de ciencias agrarias",idFactultad:"Escuela Ciencias Agrarías y Veterinarias"},
    {name:"departamento 2 de ciencias agrarias",idFactultad:"Escuela Ciencias Agrarías y Veterinarias"}


  ]


  var facultadesSelect = document.getElementById('facultad');
  var departamentosSelect = document.getElementById('departamento');

  facultadesSelect.addEventListener("change", cargarDpts);

  facultad.forEach(function(facultad){
     let opcion = document.createElement("option")
     opcion.value = facultad.name
     opcion.text = facultad.name
     facultadesSelect.appendChild(opcion)
  })


  function cargarDpts(){
departamentosSelect.options.length = 1;
departamentos
.filter(function (departamentos){
 return departamentos.idFactultad == this;
}, facultadesSelect.value)
.forEach(function(departamentos){
let opcion = document.createElement("option")
opcion.value = departamentos.name
opcion.text = departamentos.name
departamentosSelect.appendChild(opcion);
});
}



 