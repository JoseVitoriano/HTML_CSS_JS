

function validarFormulario(formulario) {

    if (formulario.nome.value === "" || formulario.nome.value === null) {
        alert("O cammpo não pode ficar vazio");
        formulario.nome.focus();
        return false;
        
    }

    if (formulario.cpf.value !=11) {
        alert("O campo CPF precisa ter 11 caracteres");
        formulario.cpf.focus();
        return false;
        
    }

    if (formulario.emai.value.indexof("@") == -1 || formulario.email.valur.indexof(".") == -1) {
        alert("O campo E-mail não é valido");
        formulario.email.focus();
        return false;
        
    }

    if (formulario.data_nascimento.value === "" || formulario.data_nascimento.value === null){
        alert("O campo data de Nascimento não pode ficar vazio");
        formulario.dat_nascimento.focus();
        return false;
    } 
}