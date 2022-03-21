<?php

	session_start();
	require "functions.php";

?>


<?php include "template/header.php";?>

<div class="container">
	<h1>Salut !</h1>

	<?php 
	if (isConnected()) {
		$pdo = connectDB();

		$queryPrepared = $pdo->prepare("SELECT * FROM iw_user");
		$queryPrepared->execute();
		$results = $queryPrepared->fetchAll();
		echo "<pre>";
		print_r($results);
	}
	?>

</div>


<?php include "template/footer.php";?>