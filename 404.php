<?php
require_once 'include/_universal.php';
// universal('plural name', 'singular name', minimum security level)
$x = new universal('','',0);
// database('table name','unique id','order by')
$x->database('','','');
$x->permissions('add',1);
$x->permissions('mod',1);
$x->permissions('del',1);
//$x->add_notes('','');
//$x->add_delmod_query('');
$x->start_elements();
$x->display_slim('Error 404: Site not found');
?>
