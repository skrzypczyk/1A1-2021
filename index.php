<?php

	session_start();
	require "functions.php";

?>


<?php include "template/header.php";?>

<div class="container">
	<h1>Salut !</h1>

	<?php isConnected()?>

</div>


<?php include "template/footer.php";?>