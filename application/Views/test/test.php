<p><b>Page Test</b></p>

<?php 

foreach ($arrrez as $key => $value) {
	if ($value === true) {
		echo 'Card number:' . $key . ' - is good. <br><br>';
	} 
	if ($value === false) {
		echo 'Card number:' . $key . ' - is bad. <br><br>';
	}
}

?>