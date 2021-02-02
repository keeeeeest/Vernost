let form = document.querySelector('.visit');
let name = document.querySelector('.userName');
let email = document.querySelector('.email');
let date = document.querySelector('.date');
let message = document.querySelector('.message');
let button = form.querySelector('.send');

let fields = form.querySelectorAll('.field')

let removeValidation = function () {
    let errors = form.querySelectorAll('.error')
  
    for (let i = 0; i < errors.length; i++) {
      errors[i].remove()
    }
}

let generateError = function (text) {
    let error = document.createElement('div')
    error.className = 'error'
    error.style.color = 'red'
    error.innerHTML = text
    return error
}

let checkFieldsPresence = function () {
    for (let i = 0; i < fields.length; i++) {
      if (!fields[i].value) {
        console.log('Пусто :(', fields[i])
        let error = generateError('Пожалуйста заполните поле')
        form[i].parentElement.insertBefore(error, fields[i])
      }
    }
  }

form.addEventListener('submit', function (event) {
    event.preventDefault()
  
    removeValidation()
  
    checkFieldsPresence()
})