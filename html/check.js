const name1 = document.getElementById('name')
const password1 = document.getElementById('password')
const form1= document.getElementById('form')
const errorElement1 = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name1.value === '' || name1.value == null) {
    messages.push('Name is required')
  }

  if (password1.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password1.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password1.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement1.innerText = messages.join(', ')
  }
})