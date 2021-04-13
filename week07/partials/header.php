<?php

$nav_bar_item_class = function ( $page ) {
	echo 'nav-item' . ( basename( $_SERVER['SCRIPT_NAME'], '.php' ) === $page ? ' active' : '' );
};

?>
<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Run for Kids</a>
			<button class="navbar-toggler" type="button"
			        data-toggle="collapse" data-target="#expandme">
				<span class="fas fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="expandme">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="<?php $nav_bar_item_class( 'index' ); ?>">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-toggle="modal" data-target="#registration">Registration</a>
					</li>
					<li class="<?php $nav_bar_item_class( 'donation' ); ?>">
						<a class="nav-link" href="donation.php">Donation</a>
					</li>
					<li class="<?php $nav_bar_item_class( 'participant_list' ); ?>">
						<a class="nav-link" href="participant_list.php">Participants</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
