<?php if (isset($_GET['sent'])) {
    if ($_GET['sent'] == 'true') {
        echo '<div class="alert alert-success auto-close" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>Your message has been sent successfuly.<br> Thank You</div>';
    }
}

if (isset($_GET['invalid'])) {
    if ($_GET['invalid'] == 'email') {
        echo '<div class="alert alert-danger auto-close" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>Please enter a valid Email address! .<br> Thank You</div>';
    }
}
