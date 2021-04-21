(() => {
	const loginForm = document.querySelector('.login-form');
	const emailInput = document.getElementById('login-email');
	const passInput = document.getElementById('login-password');
	const errorMsg = document.querySelector('.login-error');

	loginForm.addEventListener('submit', (event) => {
		event.preventDefault();

		errorMsg.classList.add('d-none');
		emailInput.classList.remove('is-invalid');
		passInput.classList.remove('is-invalid');

		console.log(emailInput, passInput);

		if ('' === emailInput.value.trim()) {
			emailInput.classList.add('is-invalid');
			return;
		}

		if ('' === passInput.value.trim()) {
			passInput.classList.add('is-invalid');
			return;
		}

		const request = new XMLHttpRequest();
		request.open('POST', 'process.php', true);

		request.onload = () => {
			console.log(this.response);

			if (this.status >= 200 && this.status < 400 && this.response.status) {
				window.location.reload();
			} else {
				errorMsg.classList.remove('d-none');
			}
		};

		let formData = new FormData(loginForm);
		console.log(Object.fromEntries(formData));
		request.send(formData);
	});
})();
