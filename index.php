<?php
	$lines = file('names.lst');
	$lines = preg_grep("/Johnson/", $lines);

	foreach($lines as $name) {
		echo "$name<br>";
	}

?>
