function validar_from() {
    var numero = document.getElementById('numero');
    var numeroErrorMesagge = document.getElementById('numeroErrorMesagge');
   
    var error = false;
    if(numero.value>=0){
        error = true;
    } 
    if(error){

        if(numero.classList.contains('campoIncorrecto')){
            numero.classList.remove('campoIncorrecto');
        };

        numero.classList.add('campoCorrecto');
        numeroErrorMesagge.classList.add('oculto');
    } else {

        if(numero.classList.contains('campoCorrecto')){
            numero.classList.remove('camporCorrecto');
        };
        numeroErrorMesagge.classList.remove('oculto');

        numero.classList.add('campoIncorrecto');
    }
    
    var formValid = error;
    //console.log(formValid)
    return formValid;
}