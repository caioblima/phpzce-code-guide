<?php 
declare(strict_types=1);
header('Content-Type: text/html; charset=UTF-8');
?>

<form method="POST" action="fileSubmitHandler.php" enctype="multipart/form-data">
 Arquivo
	<input type="file" name="file"/>
 	<input type="submit" value="Enviar"/>
</form>