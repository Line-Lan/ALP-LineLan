<?php

require_once 'include/_tab.php';
require_once 'include/cl_module.php'; 
require_once 'include/_modulesX.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#212121">
<meta charset="utf-8"/>
<meta name="twitter:card" content="summary">
<meta name="twitter:creator" content="@L1n3m4st3r"/>
<meta name="twitter:site" content="@TeamLineLan">
<meta name="twitter:title" content="Line-Lan Events"/>
<meta property="og:type" content="website">
<meta property="og:site_name" content="Line-Lan Events">
<meta property="og:title" content="Line-Lan Events">
<meta property="description" content="Line-Lan Eventmanagment">
<meta property="og:description" content="Line-Lan Eventmanagment">
<meta property="og:image" content="https://line-lan.net/wp-content/uploads/2016/02/linelan-events.jpg">
<link rel="shortcut icon" ref="/favicon.ico">
<title><?php echo (!empty($title) ? $title . ' - ' : '') . $lan['name']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<style type="text/css" media="all">
	<?php include_once $master['currentskin'].'x.css.php'; ?>
</style>
</head>
<body text="<?php echo $colors['text']; ?>" link="<?php echo $colors['text']; ?>" alink="<?php echo $colors['text']; ?>" vlink="<?php echo $colors['text']; ?>">
<?php
require_once $master['currentskin'].'_top.php';?>

