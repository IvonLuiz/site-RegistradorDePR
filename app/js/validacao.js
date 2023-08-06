/* Verificar registros de usuarios */
const validacao = new JustValidate("#signup");

validacao
.addField("#nome",[
    {
        rule: "required"
    },
])
.addField("#email", [
    {
        rule: "required"
    },
    {
        rule: "email"
    },
    {
        validator: (value) => () => 
        {
            return fetch("validar-email.php?email=" + encodeURIComponent(value))
                .then(function(response){
                    return response.json();
                })
                .then(function(json){
                    return json.available
                });
        },
        errorMessage: "Já existe uma conta com este email"
    }
])
.addField("#senha", [
    {
        rule: "required" 
    },
    {
        rule: "password"
    }
])
.addField("#senha_confirmacao", [
    {
        rule: 'required',
    },
    {
        validator: (value, fields) => {
            return value === fields["#senha"].elem.value;
        },
        errorMessage: "Senhas devem ser iguais"
    }
])
/* Caso passe por tudo, sucesso: */
.onSuccess((event) => {
    document.getElementById("signup").submit();
});
