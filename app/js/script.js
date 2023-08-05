$(function() {

/* 

    const paragrafos = document.querySelectorAll('p');

    paragrafos.forEach((element) => {
        element.classList.add('lead');
        element.classList.add('text-center');
        element.classList.add('text-md-start');
    });
 */

    $("#btn-registre").click(function() {
        // Redirecionar para o link de registrar
        window.location.href = "registrar.html";
    });

    $("#btn-saiba").click(function() {
        // Redirecionar para Saiba Mais
        window.location.href = "informacoes.html";
    });
});