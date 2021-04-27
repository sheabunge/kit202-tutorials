'use strict';

// both the registration and edit form use this class, and we want to validate both.
for (const form of document.querySelectorAll('.registration-form')) {
	form.addEventListener('submit', (event) => {

		/* Set the invalid status of an element and prevent the form from submitting. */
		const setInvalid = (input) => {
			event.preventDefault();
			input.classList.add('is-invalid');
		};

		/* Clear the invalid status of an element and prevent the form from submitting. */
		const clearStatus = (input) => input.classList.remove('is-invalid');

		// fetch each of the fields from the form.elements list using their name attributes.
		const firstName = form.elements['first_name'];
		const lastName = form.elements['last_name'];
		const race = form.elements['race'];
		const email = form.elements['email'];
		const password = form.elements['password'];
		const passwordConfirm = form.elements['confirm_password'];
		const age = form.elements['age'];
		const toc = form.elements['toc'];

		// put all of the text-based input form controls into an array so we can go over them at once.
		let requiredTextInputs = [firstName, lastName, race, email, password, passwordConfirm, age];

		if (toc) {
			// manually clear the status of the toc checkbox, as it's not included in the loop.
			clearStatus(toc);

		} else if ('' === password.value) {
			// if there's no toc checkbox, then this is an edit form, and so we can ignore the password if it's empty.
			requiredTextInputs = [firstName, lastName, race, email, age];
		}

		for (const input of requiredTextInputs) {
			// clear any existing errors.
			clearStatus(input);

			// check if the input is empty.
			if ('' === input.value) {
				// if so, display the message and prevent the form from submitting.
				setInvalid(input);
				return;
			}
		}

		// also check whether the two password controls match.
		if (password.value !== passwordConfirm.value) {
			setInvalid(passwordConfirm);
			return;
		}

		// check if the terms and conditions checkbox is checked.
		if (toc && !toc.checked) {
			setInvalid(toc);
		}
	});
}
