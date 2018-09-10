<?php
echo '<h1 class="text-center">All Users</h1>';

foreach ($users->result() as $row) {
	
	echo '<h3 class="text-muted">'.$row->name.'</h3>';
	echo $row->address;
	echo "<br><br>";
}
?>