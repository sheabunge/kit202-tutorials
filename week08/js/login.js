(() => {
	// fetch the necessary elements from the DOM.
	const loginForm = document.querySelector('.login-form');
	const emailInput = document.getElementById('login-email');
	const passInput = document.getElementById('login-password');
	const errorMsg = document.querySelector('.login-error');

	// run this function when the login form is submitted.
	loginForm.addEventListener('submit', (event) => {

		// prevent the submission page from loading.
		event.preventDefault();

		// clear up classes from last validation.
		errorMsg.classList.add('d-none');
		emailInput.classList.remove('is-invalid');
		passInput.classList.remove('is-invalid');

		// check that the email and password are not empty, displaying the error messages if they are.
		if ('' === emailInput.value.trim()) {
			emailInput.classList.add('is-invalid');
			return;
		}

		if ('' === passInput.value.trim()) {
			passInput.classList.add('is-invalid');
			return;
		}

		// open a new AJAX request to process.php.
		const request = new XMLHttpRequest();
		request.open('POST', 'process.php', true);
		request.responseType = 'json';

		// add handler to respond to the request.
		request.onload = function () {
			console.log(this.response);

			if (this.status >= 200 && this.status < 400 && this.response.success) {
				// if the login was successful, reload the page.
				document.querySelector('.login-success').classList.remove('d-none');
				window.location.reload();
			} else {
				// if there was an error, display the error message.
				errorMsg.classList.remove('d-none');
			}
		};

		// fetch data from the login form and pass it to the request.
		let formData = new FormData(loginForm);
		console.log(Object.fromEntries(formData));
		request.send(formData);
	});
})();
