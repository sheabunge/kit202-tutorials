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

			<form class="login-form" method="post">
				<div class="modal-body">

					<div class="alert alert-danger login-error d-none" role="alert">
						We could not find a participant matching these details.
					</div>

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
				</div>

				<div class="modal-footer">
					<input type="submit" name="login_button" class="btn btn-primary float-right" value="Login">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="js/login.js"></script>
