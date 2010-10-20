<?php
include "../bottrap.class.php";
$bottrap = new Bottrap('../data.txt');

//loose so trailing query strings are ignored
$bottrap->loose = true;

//remove the initial path if we're in a subfolder.
$bottrap->remove_path = "/sample";

if ($bottrap->is_bot($_SERVER["REQUEST_URI"]))
	echo "Error: you shouldn't be here.";
else
	header("Location: /sample/404_page.php");



?>