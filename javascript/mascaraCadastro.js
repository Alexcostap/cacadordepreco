function mascaraCPF() {
    let cpf = document.getElementById("cpf")
    if(cpf.value.length == 3){
        cpf.value += "."
    } 
    if(cpf.value.length == 7){
        cpf.value += "."
    } 
    if(cpf.value.length == 11){
        cpf.value += "-"
    } 

}

function mascaraCelular() {

    let celular = document.getElementById('celu')
    
    if (celular.value.length == 10) {
        celular.value += "-"
    }
    else if (celular.value.length == 5){
        celular.value += "."
    }
    else if (celular.value.length == 0) {
        celular.value += "("
    }
    else if (celular.value.length == 3) {
        celular.value += ")"
    }
}
function dataNascimentos() {

    let celular = document.getElementById('dataNascimento')
    
    if (celular.value.length == 2) {
        celular.value += "/"
    }
    else if (celular.value.length == 5){
        celular.value += "/"
    }
}
