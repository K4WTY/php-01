const img = document.querySelector('img')
const inputPasword = document.getElementById('password')

img.addEventListener('click', function() {
    if (inputPasword.type == 'password') {
        this.src = './assets/icons/eye-slash.svg'
        inputPasword.type = 'text'
        return
    }

    this.src = './assets/icons/eye.svg'
    inputPasword.type = 'password'
})