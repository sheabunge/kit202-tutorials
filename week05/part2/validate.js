document.querySelector('.registration-form').addEventListener('submit', (event) => {
	$('#registration').modal('show');

	/* Set the invalid status of an element and prevent the form from submitting. */
	const setInvalid = (input) => {
		event.preventDefault();
		input.classList.add('is-invalid');
	};

	/* Clear the invalid status of an element and prevent the form from submitting. */
	const clearStatus = (input) => input.classList.remove('is-invalid');

	const firstName = document.getElementById('first-name');
	const lastName = document.getElementById('last-name');
	const race = document.getElementById('race');
	const email = document.getElementById('email');
	const password = document.getElementById('password');
	const passwordConfirm = document.getElementById('confirm-password');
	const age = document.getElementById('age');
	const toc = document.getElementById('toc');

	clearStatus(toc);

	// put all of the text-based input form controls into an array so we can go over them at once.
	const requiredTextInputs = [firstName, lastName, race, email, password, passwordConfirm, age];

	for (const input of requiredTextInputs) {
		// clear any existing errors
		clearStatus(input);

		// check if the input is empty
		if ('' === input.value) {
			// if so, display the message and prevent the form from submitting
			setInvalid(input);
			return;
		}
	}

	// also check whether the two password controls match
	if (password.value !== passwordConfirm.value) {
		setInvalid(passwordConfirm);
		return;
	}

	// check if the terms and conditions checkbox is checked
	if (!toc.checked) {
		setInvalid(toc);
	}
});
