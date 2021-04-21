$(document).on('show.bs.modal', '#user-edit-modal', e => {
	console.log($(e.relatedTarget).data('id'));

	$.ajax({
		url: 'process.php',
		method: 'POST',
		data: {
			action: 'edit',
			id: $(e.relatedTarget).data('id')
		},
		dataType: 'json',
		success: data => {
			console.log(data);

			$('#edit-id').val(data.id);
			$('#edit-first-name').val(data.firstname);
			$('#edit-last-name').val(data.lastname);
			$('#edit-gender-' + data.gender).prop('checked', true);
			$('#edit-race').val(data.race);
			$('#edit-email').val(data.email);
			$('#edit-age').val(data.age_group);

			$('#edit_user_modal').modal('show');
		}
	});
});
