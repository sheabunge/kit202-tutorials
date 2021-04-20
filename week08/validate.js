document.querySelector('.registration-form').addEventListener('submit', (event) => {
	console.log(this);

	/* Set the invalid status of an element and prevent the form from submitting. */
	const setInvalid = (input) => {
		event.preventDefault();
		input.classList.add('is-invalid');
	};

	/* Clear the invalid status of an element and prevent the form from submitting. */
	const clearStatus = (input) => input.classList.remove('is-invalid');

	const firstName = this.querySelector('[name=first_name]');
	const lastName = this.querySelector('[name=last_name]');
	const race = this.querySelector('[name=race]');
	const email = this.querySelector('[name=email]');
	const password = this.querySelector('[name=password]');
	const passwordConfirm = this.querySelector('[name=confirm_password]');
	const age = this.querySelector('[name=age]');
	const toc = this.querySelector('[name=toc]');

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
