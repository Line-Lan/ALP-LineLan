<?php
// IF YOU ARE MAKING A CUSTOM SKIN, PLEASE INCLUDE WHAT VERSION OF ALP IT WAS MADE FOR.
// ie: this custom skin was made for ALP 0.97.2d

// colors (can also accept standard html name colors such as pink or green)
$colors['background'] = '#212121';
$colors['primary'] = '#3c9de3';
$colors['secondary'] = 'white';
$colors['border'] = '#396693';
$colors['border_alternate'] = 'white'; // currently only used on bargraph borders
$colors['cell_title'] = '#3b3b3b';
$colors['cell_background'] = '#212121';
$colors['cell_alternate'] = '#4f4f4f';
$colors['text'] = '#FFFFFF';
$colors['blended_text'] = '#B6B6B6';
$colors['graphs'] = $colors['primary'];
$colors['alert'] = '#ff0000';

$colors['image_text'] = 'white'; // ONLY white or black

// images
$images['background'] = 'de_mirage-16.jpg';
$images['title'] = '';
$images['arrow_on'] = 'phpwcms_arrow_off.gif';
$images['arrow_off'] = 'phpwcms_arrow.gif';
$images['dotted_line'] = 'dotted_line.gif';
$images['empty_bargraph_background'] = 'emptybargraphbg.gif';
$images['go'] = 'white_go.gif';

// widths of right and left columns
$container['leftmodule'] = 210;
$container['rightmodule'] = 200;
$container['indexmodule'] = 250;

// padding (spacing inbetween modules and columns)
$container['horizontalpadding'] = 16;
$container['verticalpadding'] = 8;

// module padding (spacing inside the module between content and border)
$container['horizontalmodulepadding'] = 5;
$container['verticalmodulepadding'] = 5;

// border size: these are used only if mod****.gif images do not exist in the current skin directory
$container['border_width'] = 1;
$container['border_height'] = 1;

// seating chart colors
$seat['background'] = $colors['background']; //'#555555';
$seat['border'] = '#FFFFFF';
$seat['tablecolor'] = $colors['secondary'];
$seat['tableborder'] = $colors['primary'];
$seat['voidcolor'] = $colors['cell_title']; //$colors['cell_background'];
$seat['gridcolor'] = '#CCCCCC';
$seat['currentcolor'] = $colors['primary'];
$seat['occupied'] = '#007700';
$seat['reserved'] = '#FF9900';

// display title menu items on the left, right, or center.
$container['title_menu'] = 'left';

// display index.php modules on left or right of body.
$container['index_modules'] = 'right';

// these are the modules displayed.  if you delete a module from below, it will not show up on ALP.
// this also controls the order of the modules.

// array(location, type)
// location options: 'left', 'right', or 'main'
// type options: 'left', 'right', or 'main'
$modulelist['mod_controlpanel'] = array('left','main');
$modulelist['mod_register'] = array('left','main');
$modulelist['mod_admincontrolpanel'] = array('left','main');
$modulelist['mod_guides'] = array('left','main');
if(ALP_TOURNAMENT_MODE) $modulelist['mod_news'] = array('left','main');
$modulelist['mod_schedule'] = array('left','main');
$modulelist['mod_tournaments'] = array('left','main');
$modulelist['mod_polls'] = array('left','main');
?>
