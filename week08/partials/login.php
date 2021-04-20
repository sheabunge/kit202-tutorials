<!-- Login Modal Form -->
<div class="modal fade" id="login">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="alert alert-danger login-error d-none" role="alert">
					We could not find a participant matching these details.
				</div>

				<form class="login-form" method="post">
					<input type="hidden" name="action" value="login">

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="login-email">Email</label>
						<div class="col-sm-8">
							<input type="email" id="login-email" name="login_email" class="form-control">
							<div class="invalid-feedback">Please enter your email</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="login-password">Password</label>
						<div class="col-sm-8">
							<input type="password" id="login-password" name="login_password" class="form-control">
							<div class="invalid-feedback">Please enter your password</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">
							<input type="submit" name="login_button" class="btn btn-danger float-right" value="Login">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>

				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<script>
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
</script>
