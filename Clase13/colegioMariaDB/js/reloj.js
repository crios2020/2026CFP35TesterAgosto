function mueveReloj(){
    momentoActual = new Date()
    hora = momentoActual.getHours().toString().padStart(2,0)
    minuto = momentoActual.getMinutes().toString().padStart(2,0)
    segundo = momentoActual.getSeconds().toString().padStart(2,0)

    horaImprimible = hora + " : " + minuto + " : " + segundo 
    //console.log(horaImprimible)
    document.getElementById("reloj").value = horaImprimible

    setTimeout("mueveReloj()",1000)
}

