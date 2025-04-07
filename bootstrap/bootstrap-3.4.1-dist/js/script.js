function validateForm(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtém os valores dos campos do formulário
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    // Valida os campos (por exemplo, verificando se estão preenchidos)
    if (name === '' || email === '' || subject === '' || message === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }

    // Se todos os campos estiverem preenchidos, você pode enviar o formulário
    document.getElementById('contact-form').submit();
}

// Adiciona um ouvinte de evento ao formulário para chamar a função de validação quando for enviado
document.getElementById('contact-form').addEventListener('submit', validateForm);