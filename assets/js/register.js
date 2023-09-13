const img = document.querySelectorAll('img')
const inputPasword = document.getElementById('password')
const inputPasword2 = document.getElementById('password2')
const alertDiv = document.getElementById('alert')

document.querySelector('form').addEventListener('submit', function(e) {
    if (inputPasword.value != inputPasword2.value) {
        e.preventDefault()
        alertDiv.innerHTML = 'As senhas digitadas não coincidem'
        if (alertDiv.classList.contains('success')) {
            alertDiv.classList.remove('success')
        }
        alertDiv.classList.add('error')
        alertDiv.style.display = 'block'
        return
    }

    if (inputPasword.value.length < 8) {
        e.preventDefault()
        alertDiv.innerHTML = 'Senha menor que 8 caracteres'
        if (alertDiv.classList.contains('success')) {
            alertDiv.classList.remove('success')
        }
        alertDiv.classList.add('error')
        alertDiv.style.display = 'block'
        return
    }
})

img.forEach(function(e) {
    e.addEventListener('click', function() {
        if (e.id == 'eye1') {
            if (inputPasword.type == 'password') {
                e.src = '../../../assets/icons/eye-slash.svg'
                inputPasword.type = 'text'
                return
            }
            
            e.src = '../../../assets/icons/eye.svg'
            inputPasword.type = 'password'
            return
        }
        if (inputPasword2.type == 'password') {
            e.src = '../../../assets/icons/eye-slash.svg'
            inputPasword2.type = 'text'
            return
        }
        e.src = '../../../assets/icons/eye.svg'
        inputPasword2.type = 'password'
    })
})