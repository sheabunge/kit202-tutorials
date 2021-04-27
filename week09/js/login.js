(() => {
	// fetch the necessary elements from the DOM.
	const loginForm = document.querySelector('.login-form');
	const emailInput = document.getElementById('login-email');
	const passInput = document.getElementById('login-password');
	const authErrorMsg = document.querySelector('.login-auth-error');
	const serverErrorMsg = document.querySelector('.login-server-error');

	// run this function when the login form is submitted.
	loginForm.addEventListener('submit', (event) => {

		// prevent the submission page from loading.
		event.preventDefault();

		// clear up classes from last validation.
		authErrorMsg.classList.add('d-none');
		serverErrorMsg.classList.add('d-none');
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

			if (this.status < 200 || this.status >= 400 || !this.response) {
				// display a message informing the user there was a server error
				serverErrorMsg.classList.remove('d-none');

			} else if (!this.response.success) {
				// otherwise, check if there was an authentication error.
				authErrorMsg.classList.remove('d-none');

			} else {
				// if the login was successful, reload the page.
				console.log(this.response);
				document.querySelector('.login-success').classList.remove('d-none');
				window.location.reload();
			}
		};

		// fetch data from the login form and pass it to the request.
		let formData = new FormData(loginForm);
		console.log(Object.fromEntries(formData));
		request.send(formData);
	});
})();
