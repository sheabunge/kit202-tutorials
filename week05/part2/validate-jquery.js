$(document).ready(() => {

	$('.registration-form').on('submit', () => {
		$('#registration').modal('show');

		const firstName = $('#first-name');
		const lastName = $('#last-name');
		const race = $('#race');
		const email = $('#email');
		const password = $('#password');
		const passwordConfirm = $('#confirm-password');
		const age = $('#age');
		const toc = $('#toc');

		toc.removeClass('is-invalid');

		// put all of the text-based input form controls into an array so we can go over them at once.
		const requiredTextInputs = [firstName, lastName, race, email, password, passwordConfirm, age];

		for (const input of requiredTextInputs) {
			// clear any existing errors
			input.removeClass('is-invalid');

			// check if the input is empty
			if ('' === input.val()) {
				// if so, display the message and return from the form
				input.addClass('is-invalid');
				return false;
			}
		}

		// also check whether the two password controls match
		if (password.value !== passwordConfirm.value) {
			passwordConfirm.addClass('is-invalid');
			return false;
		}

		// check if the terms and conditions checkbox is checked
		if (!toc.is(':checked')) {
			toc.addClass('is-invalid');
			return false;
		}

		// otherwise, if everything passed, then allow the form to submit
		return true;
	});
});
