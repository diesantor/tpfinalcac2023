const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const correo = document.getElementById("correo");
const cantidad = document.getElementById("cantidad");
const categorias = document.getElementById("categorias");
const resultado = document.getElementById("resultado");
const btnBorrar = document.getElementById("boton-borrar");
const btnResumen = document.getElementById("boton-resumen");

const ticket = 200;

btnResumen.addEventListener("click", () => {
    //agregar mensaje de carga de datos
   

    

    if(categorias.value == "1"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 20)/100);
            //resultado.innerHTML = total;
            resultado.value =  total;
            console.log(total);
           
        }else{
           
            console.log("Debe ingresar una cantidad");
        }
    }
    else if(categorias.value == "2"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 50)/100);
            //resultado.innerHTML = total;
            resultado.value =  total;
        }else{
            console.log("Debe ingresar una cantidad");
        }
    }
    else if(categorias.value == "3"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0){
            let total = cantidad.value * ((ticket * 85)/100);
            //resultado.innerHTML = total;
            resultado.value =  total;
        }else{
            console.log("Debe ingresar una cantidad");
        }
    }
})



/*
btnResumen.addEventListener("click", () =>{
    console.log("Hola"); 
})
*/
btnBorrar.addEventListener("click", () => {
    nombre.value = "";
    apellido.value = "";
    correo.value = "";
    cantidad.value = "";
    categorias.value = "Seleccionar categoria"; 
    resultado.value = "";
    console.log("Borrado");  
})