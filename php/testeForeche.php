<form>
	<input type="text" name="nome">
	<input type="date" name="date">
	<input type="submit" name="ok" value="ok">
</form>


<?php
	if (isset($_GET)) {

		foreach ($_GET as $key => $value) {
			
			
			echo "valor do Campo ".$value."<br>";
		}
	}
?>