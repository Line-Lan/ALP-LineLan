<?php
if(file_exists('DISABLED')) { echo 'install has been disabled because it has already been run.<br />If you wish to run it again, please delete the file /install/DISABLED'; exit();}
	if(!empty($language)&&is_dir("../include/lang/".$language)) {
		$temp = $language;
	} else {
		$temp = "en";
	}
	$insert_table_queries = array(
		"master" => array("INSERT INTO master SET
			alpver='0.98.3',
			tournamentunlock='60',
			proficiencylock='0',
			currentskin='skins/default_grey/',
			currentlanguage='".$temp."',
			dateformat='h:i a - d M Y',
			skin_override='0',
			ip_register_lock='0',
			max_file_upload_size='10485760',
			shoutbox_index_limit='5',
			techsupport_index_limit='10',
			authbyiponly='0',
			doublecheckpassword='1',
			loginselect='0',
			caching='0',
			useskinforcaffeine='1',
			internetmode='0',"
			//alldates='".(ALP_TOURNAMENT_MODE?1:0)."',
			."alldates='1',
            sponsors_border='0',
            staff_photo_width='150',
            sponsors_index_limit='2',
            sponsors_banner_width='500',
            sponsors_width='150',
            music_files='mp3s',
            music_min_time='0',
            music_max_queue='10';"),
		"benchmarks" => array(
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark PCMark2005','pcmark05','100','0');",
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark PCMark2005 CPU','pcmark05_cpu','0','1');",
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark PCMark2005 Memory','pcmark05_mem','0','1');",
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark PCMark2005 Hard Drives','pcmark05_hdd','0','1');",
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark PCMark2005 Graphics','pcmark05_gra','0','1');",
			"INSERT INTO benchmarks (name,abbreviation,deflate,composite) VALUES ('Futuremark 3DMark2005','3dmark05','100','0');"),
		"caffeine_types" => array(
			"INSERT INTO caffeine_types VALUES (1,'".get_lang("coffee")."');",
			"INSERT INTO caffeine_types VALUES (2,'".get_lang("softdrink")."');",
			"INSERT INTO caffeine_types VALUES (3,'".get_lang("tea")."');",
			"INSERT INTO caffeine_types VALUES (4,'".get_lang("other")."');"),
		"caffeine_items" => array(
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','7up or diet 7up', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','a&w creme soda', (29/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','afri-cola', (100/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','aqua blast', (64/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','barqs diet root beer', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','barqs root beer', (23/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','bawls', (80/10));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','caffeine free coca-cola or diet coke', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','caffeine free pepsi or diet pepsi', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','canada dry', (1/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','cherry coke', (34/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','coca-cola classic', (35/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','diet a&w creme soda', (23/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','diet coke', (47/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','diet pepsi', (36/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','diet sundrop', (69/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','dr nehi', (42/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','dr pepper: regular and diet', (42/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','fresca', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','inca kola', (37/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','java water', (89/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','jolt', (72/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','josta', (58/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','kick', (58/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','kmx: orange and blue', (38/8.4));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','krank 20', (71/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','mellow yellow: regular and diet', (51/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','minute maid orange soda', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','mr pibb: regular, diet, and extra', (40/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','mountain dew: regular and code red', (56/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','mug root beer', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','nehi wild red soda', (50/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','pepsi-cola', (38/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','pepsi one', (55/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','rc cola: regular and cherry', (43/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','rc edge', (70/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','red bull', (80/8.3));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','red flash', (40/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','ruby red squirt', (39/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','sierra mist', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','sprite or diet sprite', (0/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','sundrop', (63/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','sunkist orange soda', (42/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','surge', (53/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','tab', (47/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','wild cherry pepsi', (38/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('2','xtc', (70/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','coffee, brewed', (135/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','coffee, decaffeinated', (5/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','coffee, instant', (95/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','general foods intl coffee, cafe vienna', (90/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','general foods intl coffee, orange cappuccino', (102/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','general foods intl coffee, swiss mocha', (55/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','general foods intl coffee, viennese chocolate cafe', (26/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','maxwell house cappuccino, amaretto', (27/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','maxwell house cappuccino, decaffeinated', (4/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','maxwell house cappuccino, french vanilla', (47/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','maxwell house cappuccino, irish creme', (47/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('1','maxwell house cappuccino, mocha', (62/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','arizona iced tea, assorted varieties', (22/16));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','bigelow raspberry royale tea', (83/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','celestial seasonings iced lemon ginseng tea', (100/16));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton brisk iced tea', (9/12));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton iced tea, assorted varieties', (29/16));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton natural brew iced tea mix, decaffeinated', (5/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton natural brew iced tea mix, diet', (12/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton natural brew iced tea mix, sweetened', (25/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton natural brew iced tea mix, unsweetened', (35/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton soothing moments blackberry', (25/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','lipton tea', (37/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','nestea pure lemon sweetened iced tea', (22/16));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','nestea pure sweetened iced tea', (34/16));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','snapple iced tea, all varieties', (42/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','tea, green', (30/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','tea, instant', (15/8));",
			"INSERT INTO caffeine_items (ttype, name, caffeine_permg) VALUES ('3','tea, leaf or bag', (50/8));"),
		"config" => array("INSERT INTO config SET
			name='autonomous lan party',
			org='nerdclub programming team',
			max=100,
			admin='admin',
			datetimestart='2005-12-21 13:00:00',
			datetimeend='2006-01-30 23:00:00',
			email='alp@nerdclub.net',
			country='us',
			address='http://localhost',
			websiteurl='http://www.nerdclub.net/alp',
			location='Lincoln, NE',
			registered='0',
			alp_tournament_mode=".(ALP_TOURNAMENT_MODE?1:0).",
			alp_tournament_mode_computer_games=".(ALP_TOURNAMENT_MODE_COMPUTER_GAMES?1:0)),
		"games" => array(
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (1, 'Age of Empires II', 'aoe2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (2, 'Age of Mythology', 'aom', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (3, 'Aliens vs Predator 2', 'avp2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (4, 'Americas Army: Operations', 'aa', '', '', '', 'armygame', 'armygame');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (5, 'Battlefield: 1942', 'bf1942', '', '', '', 'BF1942', 'gsqp');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (6, 'Battlefield: 1942 - Desert Combat', 'bf1942-dc', '', '', '', 'BF1942', 'gsqp');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (7, 'Battlefield: Vietnam', 'bfviet', '', '', '', 'bfvietnam', 'gsqp2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (8, 'Breed', 'breed', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (9, 'Call of Duty', 'cod', '', '', '', 'COD', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (10, 'Command & Conquer: Generals', 'cncg', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (11, 'Command & Conquer: Generals - Zero Hour', 'cncg-zh', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (12, 'Command & Conquer: Renegade', 'cncren', '', '', '', '', 'rene');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (13, 'Contract J.A.C.K.', 'cjack', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (14, 'Daikatana', 'dai', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (15, 'Deus Ex', 'dx', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (16, 'Devastation', 'dev', '', '', '', '', 'devi');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (17, 'Diablo II', 'diab2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (18, 'Drakan: Order of the Flame', 'drakan', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (19, 'Far Cry', 'farcry', '', '', '', 'FARCRY', 'ase');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (20, 'Freelancer', 'freel', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (21, 'Giants: Citizen Kabuto', 'giants', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (22, 'Grand Theft Auto 2', 'gta2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (23, 'Half-Life', 'HL', '', '', '', 'hl', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (24, 'Half-Life: Counter-strike', 'hl-cs', '', '', '', 'HL-CS', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (25, 'Half-Life: Day of Defeat', 'hl-dod', '', '', '', 'HL-DOD', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (26, 'Half-Life: Desert Crisis', 'hl-dc', '', '', '', '', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (27, 'Half-Life: Natural Selection', 'hl-ns', '', '', '', 'HL-NS', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (28, 'Half-Life: Team Fortress Classic', 'hl-tfc', '', '', '', 'HL', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (29, 'Half-Life: The Specialists', 'hl-ts', '', '', '', 'HL-TS', 'hlife');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (30, 'Halo [PC]', 'halo', '', '', '', 'Halo', 'halo');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (31, 'Homeworld 2', 'hw2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (32, 'IGI-2: Covert Strike', 'igi2', '', '', '', '', 'igi2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (33, 'Jedi Knight 2: Jedi Outcast', 'jk2', '', '', '', 'jk2', 'sof2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (34, 'Jedi Knight 3: Jedi Academy', 'jk3', '', '', '', 'jk3', 'sof2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (35, 'Master of Orion 2: Battle At Antares', 'moo2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (36, 'Master of Orion 3', 'moo3', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (37, 'MechCommander 2', 'mc2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (38, 'Mechwarrior 4', 'mw4', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (39, 'Medal of Honor: Allied Assault', 'mohaa', '', '', '', 'mohaa', 'mohaa');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (40, 'Medal of Honor: Allied Assault Spearhead', 'mohaa-s', '', '', '', '', 'mohaa');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (41, 'Medal of Honor: Allied Assault Breatkthrough', 'mohaa-b', '', '', '', '', 'mohaa');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (42, 'Need for Speed: Underground', 'nfs-u', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (43, 'Neverwinter Nights', 'nwn', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (44, 'No One Lives Forever', 'nolf', '', '', '', '', 'gsqp');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (45, 'No One Lives Forever 2', 'nolf2', '', '', '', '', 'gsqp');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (46, 'Painkiller', 'pain', '', '', '', '', 'pkill');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (47, 'Quake II', 'q2', '', '', '', '', 'q2a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (48, 'Quake III Arena', 'q3a', '', '', '', 'Q3A', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (49, 'Rainbow Six', 'r6', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (50, 'Rainbow Six - Rogue Spear', 'r6-rogue', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (51, 'Rainbow Six - Raven Shield', 'r6-raven', '', '', '', '', 'rvnshld');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (52, 'Revolt', 'revolt', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (53, 'Savage', 'savage', '', '', '', '', 'savage');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (54, 'Soldier of Fortune', 'sof', '', '', '', 'sof1', 'sof1');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (55, 'Soldier of Fortune 2: Double Helix', 'sof2', '', '', '', 'sof2mp', 'sof2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (56, 'Starcraft', 'sc', '', '', '', 'SC', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (57, 'Starcraft: Broodwar', 'sc-bw', '', '', '', 'SC', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (58, 'Soldat', 'soldat', '', '', '', '', 'ase');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (59, 'Tony Hawk''s Pro Skater 3', 'thps3', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (60, 'Tony Hawk''s Pro Skater 4', 'thps4', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (61, 'Tribes', 'tribes', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (62, 'Tribes 2', 'tribes2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (63, 'Unreal Tournament', 'ut', '', '', '', 'UT', 'ut2004');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (64, 'Unreal Tournament 2003', 'ut2003', '', '', '', 'UT2003', 'ut2004');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (65, 'Unreal Tournament 2004', 'ut2004', '', '', '', 'UT2004', 'ut2004');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (66, 'Unreal Tournament 2003: Deathball', 'ut2003-db', '', '', '', '', 'ut2004');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (67, 'Vietcong', 'vc', '', '', '', '', 'vietcong');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (68, 'Warcraft III', 'wc3', '', '', '', 'WC3', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (69, 'Warcraft III: Frozen Throne', 'wc3-ft', '', '', '', 'WC3', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (70, 'Return to Castle Wolfenstein', 'rtcw', '', '', '', '', 'sof2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (71, 'Return to Castle Wolfenstein: Enemy Territory', 'rtcw-et', '', '', '', 'rtcw-et', 'et');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (72, 'Worms 3D', 'worms3d', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (73, 'Global Operations', 'gobs', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (74, 'Gore', 'gore', '', '', '', '', 'gore');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (75, 'Ghost Recon', 'gr', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (76, 'Hexen 2', 'hx2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (77, 'Kingpin: Life of Crime', 'kp', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (78, 'Grand Theft Auto: Vice City', 'mta-vc', '', '', '', '', 'ase');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (79, 'Operation Flashpoint', 'of', '', '', '', '', 'flashpoint');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (80, 'Postal 2', 'p2', '', '', '', '', 'flashpoint');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (81, 'Rise of Nations', 'ron', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (82, 'Rune', 'rune', '', '', '', '', 'flashpoint');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (83, 'Shogo: Armored Division', 'shogo', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (84, 'SIN', 'sin', '', '', '', '', 'q2a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (85, 'Serious Sam', 'ss', '', '', '', '', 'igi2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (86, 'Serious Sam: The Second Encounter', 'ss2', '', '', '', '', 'igi2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (87, 'Star Trek Voyager: Elite Force', 'stv-ef', '', '', '', '', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (88, 'Star Trek Voyager: Elite Force 2', 'stv-ef2', '', '', '', '', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (89, 'Tactical Operations', 'tops', '', '', '', '', 'gsqp');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (90, 'Team Factor', 'tf', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (91, 'Tron 2.0', 'tron2', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (92, 'Unreal', 'unreal', '', '', '', '', 'unreal');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (93, 'Unreal 2 XMP', 'unreal2-xmp', '', '', '', 'ut2', 'devi');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (94, 'V8 Supercar Challenge', 'v8', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (95, 'Half-Life 2: Counter-Strike Source', 'hl2-cs', '', '', '', 'cs-source', 'hlife2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (96, 'Half-Life 2: Day of Defeat', 'hl2-dod', '', '', '', 'HL2-DOD', 'hlife2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (97, 'Battlefield 2', 'bf2', '', '', '', 'battlefield2', 'gsqp2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (98, 'Call of Duty: United Offensive', 'cod:uo', '', '', '', 'cod-uo', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (99, 'Age of Empires III', 'aoe3', '', '', '', '', '');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (100, 'Call of Duty 2', 'cod2', '', '', '', '', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (101, 'Half Life 2: Deathmatch', 'hl2-dm', '', '', '', '', 'hlife2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (102, 'Quake 4', 'q4', '', '', '', '', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (103, 'Medal of Honor: Pacific Assault', 'mohpa', '', '', '', '', 'q3a');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (104, 'Doom 3', 'd3', '', '', '', '', 'doom3');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (105, 'Battlefield 2- Special Forces', 'bf2-sf', '', '', '', 'BF2-SF', 'gsqp2');",
			"INSERT INTO `games` (`gameid`, `name`, `short`, `current_version`, `url_update`, `url_maps`, `thumbs_dir`, `querystr2`) VALUES (106, 'Star Wars Battlefront', 'swbf', '', '', '', '', 'gsqp2');",
			),
		"modules" => array(
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (1,'mod_music.php',4,'music','music');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (2,'mod_sponsors.php',5,'sponsor','sponsors');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (3,'mod_gamerofthehour.php',3,'gamer of hour','gamerofthehour');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (4,'mod_timeremaining.php',2,'time remaining',NULL);",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (5,'mod_importantinfo.php',0,'important info',NULL);",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (6,'mod_techsupport.php',6,'tech support','techsupport');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (7,'mod_shoutbox.php',7,'shoutbox','shoutbox');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (8,'mod_gamingrig.php',8,'gaming rigs','gamingrigs');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (9,'mod_attendance.php',1,'attendace',NULL);",
            "INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (10,'mod_files.php',0,'files','files');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (11,'mod_messages.php',0,'user messaging','messaging');",
			"INSERT INTO `modules` (`moduleid`,`file`,`ordernum`,`description`,`required`) VALUES   (12,'mod_voice.php',0,'voice server monitor',NULL);",
			),
		"prizes_control" => array(
			"INSERT INTO prizes_control VALUES (1,0,1);"),
	);
	
	if(!empty($_GET["t"])&&$_GET["t"]==1) { 
		$insert_table_queries["toggle"] = array("INSERT INTO toggle SET
				benchmarks=0,
				caffeine=0,
				filesharing=0,
				uploading=0,
				files=0,
				foodrun=0,
				servers=1,
				gamingrigs=0,
				gamerequests=0,
				marath=0,
				music=0,
				policy=0,
				prizes=0,
				seating=0,
				shoutbox=0,
				techsupport=0,
				currentattendance=1,
				gamerofthehour=0,
				timeremaining=1,
				schedule=1,
				satellite=0,
				sponsors=0,
                staff=0,
				messaging=1,
				hlsw=1;");
	}
	if(ALP_TOURNAMENT_MODE) {
			$insert_table_queries["toggle"] = array("INSERT INTO toggle SET
				benchmarks=0,
				caffeine=0,
				filesharing=0,
				uploading=0,
				files=0,
				foodrun=0,
				servers=0,
				gamingrigs=0,
				gamerequests=0,
				marath=0,
				music=0,
				policy=0,
				prizes=0,
				seating=0,
				shoutbox=0,
				techsupport=0,
				currentattendance=0,
				gamerofthehour=0,
				timeremaining=0,
				schedule=1,
				satellite=0,
				sponsors=0,
				hlsw=1,
				staff=0,
                messaging=0;");
		} else {
			$insert_table_queries["toggle"] = array("INSERT INTO toggle SET
				benchmarks=1,
				caffeine=1,
				filesharing=1,
				uploading=0,
				files=1,
				foodrun=1,
				servers=1,
				gamingrigs=1,
				gamerequests=1,
				marath=0,
				music=0,
				policy=1,
				prizes=1,
				seating=0,
				shoutbox=1,
				techsupport=1,
				currentattendance=1,
				gamerofthehour=1,
				timeremaining=1,
				schedule=1,
				satellite=0,
				sponsors=0,
				hlsw=1,
				staff=0,
                messaging=0;");
		}
?>
