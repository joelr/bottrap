<?php
include "../bottrap.class.php";

$bottrap = new Bottrap('../data.txt');


var_dump($bottrap->is_bot('/admin/admin_login.asp'));


$bottrap->loose = true;
var_dump($bottrap->is_bot('/test/wordpress/wp-login.php?something=abc'));



?>