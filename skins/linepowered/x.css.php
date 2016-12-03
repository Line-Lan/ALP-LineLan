@font-face { font-family: 'consolas';
             src: url('/skins/linepowered/consolas.ttf') format('truetype'); }

@font-face { font-family: 'impact';
             src: url('/skins/linepowered/impact.ttf') format('truetype'); }
body {
	background-color:	black;
	background: url('<?php echo $master['currentskin'].$images['background']?>') no-repeat center center fixed;
	
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

	}		
	
table, form, body { 
	font: 12px Consolas;
	border: 0px 0px 0px 0px;
	margin: 0px 0px 0px 0px;
	padding: 0px 0px 0px 0px;
	}
	
a:hover {
	text-decoration: underline;
	color: <?php echo $colors["primary"]; ?>;
	}
	
input, select, textarea, .button {
	font-family: Consolas;
	font-weight: bold;
	font-size: 12px;
	border: 1px solid <?php echo $colors['border']; ?>;
	margin: 0px 2px 0px 2px;
	padding: 0px 2px 0px 2px;
	}
	
#topmenu a:hover {
	border-bottom: 4px solid <?php echo $colors['primary']; ?>;
	background: transparent;
	color: #fff;
	text-decoration: none;
	padding: 0px 0px 6px 0px;
}

.formcolors {
	background-color: <?php echo $colors['cell_alternate']; ?>;
	color: <?php echo $colors['text']; ?>;
	border-color: <?php echo $colors['border']; ?>;
	}
	
.formcolors2 {
	background-color: <?php echo $colors['cell_alternate']; ?>;
	color: <?php echo $colors['text']; ?>;
	border-color: <?php echo $colors['primary']; ?>;
	}
	
.ul {
	border: 1px solid #222222;
	margin: 4px 12px 4px 4px;
	padding: 6px 6px 8px 6px;
}

.normal {
	font: 12px Consolas;
	}
	
.radio {
	border: none;
	text-decoration: none;
	}
	
.button {
	font-size: 9px;
	background-color: <?php echo $colors['cell_alternate']; ?>;
	}
	
.main {
	cursor: crosshair
	}
	
.obj {
	cursor: hand
	}
	
.unblend {
	font-weight: bold;
	}
	
.menu_top {
	font: 10px Arial;
	}
	
.menu {
	text-decoration: none;
	}
	
.sm {
	font: 10px Arial;
	}
	
.smm {
	font: 9px Arial;
	font-weight: bold;
	}
	
.celltitle {
	font: 10px Arial;
	font-weight: bold;
	}
	
.title {
	font: 18px Consolas;
	font-weight: bold;
	}
	
.centerd {
	margin-left: auto;
	margin-right: auto;
}

.tourneytitle {
	font: 24px Arial;
	font-weight: bold;
}

.logo {
	font: 18px Impact;
}
