<?php
require_once 'include/_universal.php';
$x = new universal('phpinfo()','phpinfo()',2);
if (empty($_POST) && $x->is_secure()) {
	phpinfo();
} elseif (!empty($_POST) && $x->is_secure()) {
	$x->display_results();
} else {
	$x->display_slim('you are not authorized to view this page.');
}?>
