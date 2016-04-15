<?php
// array ( 		displayed name,					file name,							parent id,	toggle name
$tree = array(
	0  => array(get_lang('home'),                                              'index.php',                    -1,     ''),
	1  => array(get_lang('files'),                                             'files.php',                    -1,     'files'),
	2  => array(get_lang('map'),                                               'seating.php',                  -1,     'seating'),
	3  => array(get_lang('servers'),                                           'servers.php',                  -1,     'servers'),
	4  => array(get_lang('tournaments'),                                       'tournaments.php',              -1,     ''),
	5  => array(get_lang('users'),                                             'users.php',                    -1,     ''),
	6  => array('['.get_lang('admin').'] '.get_lang('benchmark_cheaters'),     'admin_benchmark_cheaters.php', 40,     'benchmarks'),
	7  => array('['.get_lang('admin').'] '.get_lang('benchmarks'),             'admin_benchmarks.php',         40,     'benchmarks'),
	8  => array('['.get_lang('admin').'] '.get_lang('caffeine'),               'admin_caffeine.php',           41,     'caffeine'),
	9  => array('['.get_lang('admin').'] '.get_lang('caffeine_cheaters'),      'admin_caffeine_cheaters.php',  41,     'caffeine'),
	10 => array('['.get_lang('admin').'] '.get_lang('caffeine_types'),         'admin_caffeine_types.php',     8,      'caffeine'),
	11 => array('['.get_lang('admin').'] '.get_lang('foodrun'),                'admin_foodrun.php',            55,     'foodrun'),
	12 => array('['.get_lang('admin').'] '.get_lang('gamerequest'),            'admin_gamerequest.php',        56,     ''),
	13 => array('['.get_lang('admin').'] '.get_lang('games'),                  'admin_games.php',              1,      ''),
	14 => array('['.get_lang('admin').'] '.get_lang('gamingrig'),              'admin_gamingrig.php',          43,     'gamingrigs'),
	15 => array('['.get_lang('admin').'] '.get_lang('settings'),               'admin_index.php',              -1,     ''),
	16 => array('['.get_lang('admin').'] '.get_lang('lodging'),                'admin_lodging.php',            70,     ''),
	17 => array('['.get_lang('admin').'] '.get_lang('news'),                   'admin_news.php',               5,      ''),
	18 => array('['.get_lang('admin').'] '.get_lang('paid'),                   'admin_paid.php',               5,      ''),
	19 => array('['.get_lang('admin').'] '.get_lang('poll'),                   'admin_poll.php',               63,     ''),
	20 => array('['.get_lang('admin').'] '.get_lang('priv'),                   'admin_priv.php',               5,      ''),
	21 => array('['.get_lang('admin').'] '.get_lang('prizes'),                 'admin_prizes.php',             45,     'prizes'),
	22 => array('['.get_lang('admin').'] '.get_lang('prizes_print'),           'admin_prizes_print.php',       45,     'prizes'),
	23 => array('['.get_lang('admin').'] '.get_lang('profic'),                 'admin_profic.php',             4,      ''),
	24 => array('['.get_lang('admin').'] '.get_lang('resetpassword'),          'admin_resetpassword.php',      5,      ''),
	25 => array('['.get_lang('admin').'] '.get_lang('restaurant'),             'admin_restaurant.php',         65,     ''),
	26 => array('['.get_lang('admin').'] '.get_lang('satellite'),              'admin_satellite.php',          -1,     ''),
	27 => array('['.get_lang('admin').'] '.get_lang('schedule'),               'admin_schedule.php',           51,     'schedule'),
	28 => array('['.get_lang('admin').'] '.get_lang('seeding'),                'admin_seeding.php',            4,      ''),
	29 => array('['.get_lang('admin').'] '.get_lang('seeding_erase'),          'admin_seeding_erase.php',      4,      ''),
	30 => array('['.get_lang('admin').'] '.get_lang('servers'),                'admin_serverlist.php',         3,      'servers'),
	31 => array('['.get_lang('admin').'] '.get_lang('tournament_servers'),     'admin_servers.php',            4,      ''),
	32 => array('['.get_lang('admin').'] '.get_lang('tournament_teams'),       'admin_teams.php',              52,     ''),
	33 => array('['.get_lang('admin').'] '.get_lang('tournament_teams_delete'),'admin_teams_delete.php',       52,     ''),
	34 => array('['.get_lang('admin').'] '.get_lang('tournament_teams_type'),  'admin_teams_type.php',         36,     ''),
	35 => array('['.get_lang('admin').'] '.get_lang('toggle'),                 'admin_toggle.php',             -1,     ''),
	36 => array('['.get_lang('admin').'] '.get_lang('tournaments'),            'admin_tournament.php',         4,      ''),
	37 => array('['.get_lang('admin').'] '.get_lang('tournament_start'),       'admin_tournament_start.php',   36,     ''),
	38 => array('['.get_lang('admin').'] '.get_lang('tournament_unstart'),     'admin_tournament_unstart.php', 36,     ''),
	39 => array('['.get_lang('admin').'] '.get_lang('users'),                  'admin_users.php',              5,      ''),
	40 => array(get_lang('benchmarks'),                                        'benchmarks.php',               4,      'benchmarks'),
	41 => array(get_lang('caffeine'),                                          'caffeine.php',                 4,      'caffeine'),
	42 => array(get_lang('chng_benchmarks'),                                   'chng_benchmarks.php',          40,     'benchmarks'),
	43 => array(get_lang('chng_gamingrig'),                                    'chng_gamingrig.php',           5,      'gamingrigs'),
	44 => array(get_lang('chng_passwd'),                                       'chng_passwd.php',              5,      ''),
	45 => array(get_lang('chng_prizes'),                                       'chng_prizes.php',              -1,     'prizes'),
	46 => array(get_lang('chng_teams'),                                        'chng_teams.php',               4,      ''),
	47 => array(get_lang('chng_userinfo'),                                     'chng_userinfo.php',            5,      ''),
	48 => array(get_lang('chng_vote'),                                         'chng_vote.php',                63,     ''),
	49 => array(get_lang('credits'),                                           'credits.php',                  -1,     ''),
	50 => array(get_lang('rules'),                                             'disp_rules.php',               4,      ''),
	51 => array(get_lang('schedule'),                                          'disp_schedule.php',            -1,     'schedule'),
	52 => array(get_lang('teams'),                                             'disp_teams.php',               4,      ''),
	53 => array(get_lang('standings'),                                         'disp_tournament.php',          4,      ''),
	54 => array(get_lang('users'),                                             'disp_users.php',               5,      ''),
	55 => array(get_lang('foodruns'),                                          'foodrun.php',                  51,     'foodrun'),
	56 => array(get_lang('gamerequest'),                                       'gamerequest.php',              0,      'gamerequests'),
	57 => array(get_lang('license'),                                           'license.php',                  49,     ''),
	58 => array(get_lang('lodging'),                                           'lodging.php',                  70,     ''),
	59 => array(get_lang('login'),                                             'login.php',                    5,      ''),
	60 => array(get_lang('logout'),                                            'logout.php',                   5,      ''),
	61 => array(get_lang('maps'),                                              'maps.php',                     4,      ''),
	62 => array(get_lang('forgot'),                                            'passwd.php',                   5,      ''),
	63 => array(get_lang('polls'),                                             'polls',                        -1,     ''),
	64 => array(get_lang('register'),                                          'register.php',                 5,      ''),
	65 => array(get_lang('restaurants'),                                       'restaurants.php',              70,     ''),
	66 => array(get_lang('shoutbox'),                                          'shoutbox.php',                 70,     'shoutbox'),
	67 => array(get_lang('tech_support'),                                      'techsupport.php',              70,     'techsupport'),
	68 => array(get_lang('themarathon'),                                       'themarathon.php',              4,      'marath'),
	69 => array(get_lang('upload'),                                            'upload.php',                   1,      'uploading'),
	70 => array(get_lang('information'),                                       '',                             -1,     ''),
	71 => array(get_lang('chng_gamerequests'),                                 'chng_gamerequests.php',        56,     ''),
	72 => array(get_lang('prizes'),                                            'disp_prizes.php',              45,     'prizes'),
	73 => array('['.get_lang('admin').'] '.get_lang('prizes_control'),         'admin_prize_control.php',      45,     'prizes'),
	74 => array('['.get_lang('admin').'] '.get_lang('prizes_draw'),            'admin_prize_draw.php',         45,     'prizes'),
	75 => array(get_lang('help'),                                              '',                             -1,     ''),
	76 => array('['.get_lang('admin').'] '.get_lang('checklists'),             'admin_checklists.php',         75,     ''),
	77 => array(get_lang('music'),                                             'music.php',                    -1,     'music'),
	78 => array(get_lang('viewserver'),                                        'viewserver.php',               3,      'servers'),
    79 => array(get_lang('staff'),                                             'staff.php',                    70,     'staff'),
    80 => array('['.get_lang('admin').'] '.get_lang('staff'),                  'admin_staff.php',              70,     'staff'),
    81 => array(get_lang('chng_staff'),                                        'chng_staff.php',               80,     'staff'),
	82 => array('['.get_lang('admin').'] '.get_lang('sponsors'),               'admin_sponsors.php',           70,     ''),
    83 => array('['.get_lang('admin').'] '.get_lang('tech_support'),           'admin_techsupport.php',        70,     'techsupport'),
    84 => array(get_lang('techsupport_details'),                               'techsupport_details.php',      67,     'techsupport'),
    85 => array(get_lang('techsupport_solve'),                                 'techsupport_solve.php',        67,     'techsupport'),
    86 => array('['.get_lang('admin').'] '.get_lang('settings'),               'admin_config.php',             -1,     ''),
    87 => array('['.get_lang('admin').'] '.get_lang('modules'),                'admin_modules.php',            -1,     ''),
    88 => array(get_lang('sponsors'),                                          'disp_sponsors.php',            70,     'sponsors'),
    89 => array(get_lang('messaging'),							'messaging.php',		-1,	'')
);
?>