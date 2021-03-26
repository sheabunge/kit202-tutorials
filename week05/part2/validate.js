document.querySelector('.registration-form').addEventListener('submit', (event) => {
	$('#registration').modal('show');

	const firstName = document.getElementById('first-name');
	const lastName = document.getElementById('last-name');
	const race = document.getElementById('race');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const passwordConfirm = document.getElementById('confirm-password');
	const age = document.getElementById('age');
	const toc = document.getElementById('toc');

	toc.classList.remove('is-invalid');

	// put all of the text-based input form controls into an array so we can go over them at once.
	const requiredTextInputs = [firstName, lastName, race, email, password, passwordConfirm, age];

	for (const input of requiredTextInputs) {
		// clear any existing errors
		input.classList.remove('is-invalid');

		// check if the input is empty
		if ('' === input.value) {
			// if so, display the message and prevent the form from submitting
			event.preventDefault();
			input.classList.add('is-invalid');
			return;
		}
	}

	// also check whether the two password controls match
	if (password.value !== passwordConfirm.value) {
		event.preventDefault();
		passwordConfirm.classList.add('is-invalid');
		return;
	}

	// check if the terms and conditions checkbox is checked
	if (!toc.checked) {
		event.preventDefault();
		toc.classList.add('is-invalid');
	}
});
