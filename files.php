<?php
require_once 'include/_universal.php';
if($master['files_redirect']) { header('Location: '.$master['files_redirect']); }

require_once 'include/cl_display_dir.php';
include_once 'include/cl_display.php';
$x = new universal('files','',0);
if ($x->is_secure()) { 
	$x->display_top();
	if (empty($_GET['type'])) { ?>
		<b>files</b>:<br />
		<br />
		<font class="sm">view only: 
		<a href="files.php?type=1"><b>pictures</b></a>, 
		<a href="files.php?type=2"><b>game screenshots</b></a>, 
		<a href="files.php?type=3"><b>game demos</b></a>, 
		<a href="files.php?type=4"><b>benchmark screenshots</b></a><br />
		<br />
		</font>
		<?php
		$x->add_related_link('add/modify games','admin_games.php',2);
		if ($toggle['uploading']) $x->add_related_link('upload your own pictures, screenshots, or demos.','upload.php',1);
		$x->display_related_links(); ?>
		<br />
		<?php
		display_dir(1);
		display_dir(2);
		display_dir(3);
		display_dir(4); ?>
		<b>games</b>:<br /><br />
		<?php
		$y = new display('games','game',0,0,"games WHERE current_version!='' OR url_update!='' OR url_maps!=''","gameid","name");
		$y->add_field('name','name',0);
		$y->add_field('current_version','current version',0);
		$y->add_field('url_update','files',0,0,array(),array("[url_update]",'files'));
		$y->add_field('url_maps','maps',0,0,array(),array("[url_maps]",'maps'));
		$y->display_solo(); ?>	
		<br />
		<?php
		display_dir(0); 
	} else { 
		display_dir($_GET['type']); ?>
		<br />
		<?php
		if($toggle['uploading']) begitem("<a href=\"upload.php\">upload your own files</a>",0); ?>
		<div align="right"><font class="sm">[<b><a href="files.php">back to files</a></b>]</font></div>
		<?php
	}
	$x->display_bottom();
} else {
	$x->display_slim('you are not authorized to view this page.');
}
?>
