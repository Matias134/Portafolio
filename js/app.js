const nameUser = document.querySelector('#name');
const email = document.querySelector('#email');
const comment = document.querySelector('#comment');
const btnEmail = document.querySelector('#btn-email');
const spanError = document.querySelector('.error');
const contactForm = document.querySelector('#contact-form')

const validateForm = (nameUser, email, comment) => {
    let result = 'validated';

    if (nameUser.value.length === 0 || email.value.length === 0 || comment.value.length === 0) {
        result = 'empty fields';
    }
    else if (!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email.value))) {
        result = "incorrect email";
    }

    return result;
}

const clearForm = () => {
    nameUser.value = '';
    email.value = '';
    comment.value = '';
}

const clearError = () => {
    spanError.textContent = '';
    spanError.style.display = "none";
}

const sendEmail = () => {
    const form = new FormData(contactForm);
    fetch('php/email.php', {
        method: 'POST',
        body: form
    })
        .then(res => res.json())
        .then(data => {
            if (data === 'success') {
                Swal.fire({
                    icon: 'success',
                    text: 'Correo enviado!'
                })
                clearForm();
            }
            if (data === 'error') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ha ocurrido un error'
                })
            }
        })
}

btnEmail.addEventListener('click', () => {
    clearError();
    let validate = validateForm(nameUser, email, comment);
    if (validate === 'empty fields') {
        spanError.style.display = "block";
        spanError.textContent = "Debe completar todos los campos.";
    }
    if (validate === 'incorrect email') {
        spanError.style.display = "block";
        spanError.textContent = "Correo electronico incorrecto.";
    }
    if (validate === 'validated') {
        clearError();
        Swal.fire({
            title: 'Enviando correo...',
            text: 'Esto puede tardar unos segundos',
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
            }
        })
        sendEmail();
    }
})