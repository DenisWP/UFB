//Validar CPF
function verificarCPF(cpf) {  
    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++)       
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)        
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;   
}

function validarFormulario(){   
    if(document.getElementById("cNome").value.length == ""){
        alert('Por favor, preencha o campo nome');
        document.getElementById("cNome").focus();
        return false;
    }

    if(document.getElementById("cNasc").value.length == ""){
        alert('Por favor, preencha o campo RG');
        document.getElementById("cNasc").focus();
        return false;
    }


   if(document.getElementById("cCpf").value.length == ""){
        alert('Por favor, preencha o campo CPF');
        document.getElementById("cCpf").focus();
        return false;
    }

    if(document.getElementById("cRg").value.length == ""){
        alert('Por favor, preencha o campo RG');
        document.getElementById("cRg").focus();
        return false;
    }
 

    if(document.getElementById("cLongra").value.length == ""){
        alert('Por favor, preencha o campo Logradouro');
        document.getElementById("cLongra").focus();
        return false;
    }

    if(document.getElementById("cNumero").value.length == ""){
        alert('Por favor, preencha o campo Número');
        document.getElementById("cNumero").focus();
        return false;
    }

    if(document.getElementById("cCompl").value.length == ""){
        alert('Por favor, preencha o campo Número');
        document.getElementById("cCompl").focus();
        return false;
    }
   

    if(document.getElementById("cBairro").value.length == ""){
        alert('Por favor, preencha o campo Telefone');
        document.getElementById("cBairro").focus();
        return false;
    }

    if(document.getElementById("cCid").value.length == ""){
        alert('Por favor, preencha o campo Telefone');
        document.getElementById("cCid").focus();
        return false;
    }

    if(document.getElementById("cCep").value.length == ""){
        alert('Por favor, preencha o campo Telefone');
        document.getElementById("cCep").focus();
        return false;
    }

    if(document.getElementById("cTelfixo").value.length == ""){
        alert('Por favor, preencha o campo Telefone');
        document.getElementById("cTelfixo").focus();
        return false;
    }

    if(document.getElementById("cTelcelular").value.length == ""){
        alert('Por favor, preencha o campo Telefone');
        document.getElementById("cTelcelular").focus();
        return false;
    }


    if(document.getElementById("cMail").value.length == ""){
        alert('Por favor, preencha o campo E-mail');
        document.getElementById("cMail").focus();
        return false;
    }
}