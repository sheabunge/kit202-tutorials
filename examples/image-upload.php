<?php

$upload_dir = __DIR__ . '/uploads';
$filename = '';

// handle the image upload.
if ( isset( $_FILES['picture']['error'] ) && UPLOAD_ERR_OK === $_FILES['picture']['error'] ) {

	// full path to where the image was uploaded.
	$temp_path = $_FILES['picture']['tmp_name'];

	// original image filename.
	$filename = basename( $_FILES['picture']['name'] );

	// make sure the upload is actually a picture.
	if ( 'image/' !== substr( mime_content_type( $temp_path ), 0, 6 ) ) {
		trigger_error( 'Can only upload images', E_USER_ERROR );
	}

	// ensure the upload directory exists.
	if ( ! is_dir( $upload_dir ) ) {
		mkdir( $upload_dir );
	}

	// build the new picture filename
	$upload_path = $upload_dir . '/' . $filename;

	// move the file to our uploads folder
	if ( ! move_uploaded_file( $temp_path, $upload_path ) ) {
		$filename = '';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Image Upload Example</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>
		body {
			min-height: 100vh;
		}

		img {
			max-width: 100%;
		}

		.card:not(:last-child) {
			margin-right: 0.5em;
		}
	</style>
</head>
<body class="d-flex align-items-center">

<div class="container d-flex justify-content-between">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Image upload form</h5>

			<!-- make sure you add enctype="multipart/form-data" to your form -->
			<form method="post" action="" enctype="multipart/form-data">

				<div class="form-group">
					<label for="picture">Image Upload</label>
					<input type="file" class="form-control-file" id="picture" name="picture" accept="image/*" required>
				</div>

				<input type="submit" class="btn btn-primary mb-2" value="Upload">
			</form>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title"><code>$_FILES</code> variable</h5>
			<div class="card-text">
				<pre><?php var_dump( $_FILES ); ?></pre>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Uploaded image</h5>
			<?php if ( $image_filename ) { ?>
				<img src="uploads/<?php echo htmlspecialchars( $image_filename, ENT_QUOTES ); ?>" alt="Uploaded image">
			<?php } ?>
		</div>
	</div>
</div>

</body>
</html>
