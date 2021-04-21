(() => {
	const form = document.querySelector('.registration-form');

	form.addEventListener('submit', (event) => {
		event.preventDefault();
		/* Set the invalid status of an element and prevent the form from submitting. */
		const setInvalid = (input) => {
			event.preventDefault();
			input.classList.add('is-invalid');
		};

		/* Clear the invalid status of an element and prevent the form from submitting. */
		const clearStatus = (input) => input.classList.remove('is-invalid');

		const firstName = form.elements['first_name'];
		const lastName = form.elements['last_name'];
		const race = form.elements['race'];
		const email = form.elements['email'];
		const password = form.elements['password'];
		const passwordConfirm = form.elements['confirm_password'];
		const age = form.elements['age'];
		const toc = form.elements['toc'];

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
})();
