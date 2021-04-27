<div class="modal fade" id="registration">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Marathon Registration</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="registration-form" method="post" action="process.php">
					<input type="hidden" name="action" value="register">

					<div class="form-group row has-validation">
						<label for="first-name" class="col-sm-4 col-form-label">First Name</label>
						<div class="col-sm-8">
							<input type="text" id="first-name" name="first_name" class="form-control">
							<div class="invalid-feedback">Please enter your first name</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label for="last-name" class="col-sm-4 col-form-label">Last Name</label>
						<div class="col-sm-8">
							<input type="text" id="last-name" name="last_name" class="form-control">
							<div class="invalid-feedback">Please enter your last name</div>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Gender</label>
						<div class="col-sm-8">
							<div class="col-form-label">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-female" value="female">
									<label class="form-check-label" for="gender-female">Female</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-male" value="male">
									<label class="form-check-label" for="gender-male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" id="gender-other" value="other">
									<label class="form-check-label" for="gender-other">Other</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="race">Race</label>
						<div class="col-sm-8">
							<select name="race" id="race" class="form-control">
								<option value="">Select your race</option>
								<option value="5k">Fun Run 5k</option>
								<option value="half">Half Marathon</option>
								<option value="full">Full Marathon</option>
							</select>
							<div class="invalid-feedback">Please select the race you want to participate in</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="email">Email</label>
						<div class="col-sm-8">
							<input type="email" id="email" name="email" class="form-control">
							<div class="invalid-feedback">Please enter your email</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="password">Password</label>
						<div class="col-sm-8">
							<input type="password" id="password" name="password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please enter a password</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="confirm-password">Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" id="confirm-password" name="confirm_password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please ensure that both passwords match</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="age">Age</label>
						<div class="col-sm-8">
							<select name="age" id="age" class="form-control">
								<option value="">Select your age group</option>
								<option value="kids">Under 18</option>
								<option value="ya">18–30</option>
								<option value="adults">30–50</option>
								<option value="seniors">50+</option>
							</select>
							<div class="invalid-feedback">Please select your age group</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<div class="col-sm-12">
							<div class="form-check text-center">
								<input type="checkbox" class="form-check-input" name="toc" id="toc">
								<label for="toc" class="form-check-label">I agree to the terms and conditions.</label>
								<div class="invalid-feedback">Please agree to the terms and conditions</div>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary float-right">Submit</button>
							<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
