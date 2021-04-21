<div class="modal fade" id="user-edit-modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Change Participant Details</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form role="form" class="registration-form" action="process.php" method="post">
					<input type="hidden" name="action" value="update">
					<input type="hidden" id="edit-id" name="id">

					<div class="form-group row has-validation">
						<label for="edit-first-name" class="col-sm-4 col-form-label">First Name</label>
						<div class="col-sm-8">
							<input type="text" id="edit-first-name" name="first_name" class="form-control">
							<div class="invalid-feedback">Please enter your first name</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label for="edit-last-name" class="col-sm-4 col-form-label">Last Name</label>
						<div class="col-sm-8">
							<input type="text" id="edit-last-name" name="last_name" class="form-control">
							<div class="invalid-feedback">Please enter your last name</div>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-4 col-form-label">Gender</label>
						<div class="col-sm-8">
							<div class="col-form-label">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="edit-gender-female" value="female">
									<label class="form-check-label" for="edit-gender-female">Female</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="edit-gender-male" value="male">
									<label class="form-check-label" for="edit-gender-male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="edit-gender-other" value="other">
									<label class="form-check-label" for="edit-gender-other">Other</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="edit-race">Race</label>
						<div class="col-sm-8">
							<select name="race" id="edit-race" class="form-control">
								<option value="">Select your race</option>
								<option value="5k">Fun Run 5k</option>
								<option value="half">Half Marathon</option>
								<option value="full">Full Marathon</option>
							</select>
							<div class="invalid-feedback">Please select the race you want to participate in</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="edit-email">Email</label>
						<div class="col-sm-8">
							<input type="email" id="edit-email" name="email" class="form-control">
							<div class="invalid-feedback">Please enter your email</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="edit-password">Password</label>
						<div class="col-sm-8">
							<input type="password" id="edit-password" name="password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please enter a password</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="edit-confirm-password">Confirm Password</label>
						<div class="col-sm-8">
							<input type="password" id="edit-confirm-password" name="confirm_password" class="form-control"
							       pattern="(?=.*\d)\w{6,8}" title="Passwords should be 6-8 letters with at least one number">
							<div class="invalid-feedback">Please ensure that both passwords match</div>
						</div>
					</div>

					<div class="form-group row has-validation">
						<label class="col-sm-4 col-form-label" for="edit-age">Age</label>
						<div class="col-sm-8">
							<select name="age" id="edit-age" class="form-control">
								<option value="">Select your age group</option>
								<option value="kids">Under 18</option>
								<option value="ya">18–30</option>
								<option value="adults">30–50</option>
								<option value="seniors">50+</option>
							</select>
							<div class="invalid-feedback">Please select your age group</div>
						</div>
					</div>

					<button class="btn btn-danger float-right" type="submit" id="update" name="update">Update</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>
		</div>
		<div class="modal-footer">
		</div>
	</div>
</div>
