const form = document.querySelector('#loginform');
const user = document.querySelector('#user');
const password = document.querySelector('#password');

function checkForm(e) {
	e.preventDefault();

	console.log(user.value.trim())

	if(user.value.length === 0 || user.value.trim().length === 0) {
		alert('La casilla usuario es obligatoria');
		return;
	}

	if(password.value.trim().length <= 3) {
		alert('La contraseña no es valida')
		return;
	}

	this.submit();
}

form.addEventListener('submit', checkForm);
