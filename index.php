  
<?php
	echo "<h2> Welcome to my new page </h2>";
	print "\n";
	$url = file_get_contents("link.txt");
	$url_arr = explode("\n" , $url);
	echo "<img src = '" . $url_arr[0] . "' alt='image' width='300px' height='200px'>";

?>
