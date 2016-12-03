<?php
global $colors, $dbc;
$beh = $dbc->database_query("SELECT * FROM news WHERE hide_item=0 ORDER BY itemtime DESC");
	?><div>
		<font color="<?php echo $colors['primary']; ?>"><strong><?php echo $behrow['headline']; ?></strong><br /></font>
	 </div>



<?php 
			spacer($container['leftmodule'] + $container['horizontalpadding'],1,1);
			spacer(14); ?>
<a href="index.php" class="menu">
  <b>
    <?php echo $lan["name"]; ?>
  </b>
</a>
<?php spacer(36); ?>
</td>
<td valign="middle" width="100%">
  <div id="topmenu">
    <?php spacer(1,10,1); ?>
    <font class="sm">
      <?php if(!ALP_TOURNAMENT_MODE) { ?>
      <a href="index.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('home')); ?>
        </strong>
      </a>
      <?php }
				  if($toggle["files"] && !ALP_TOURNAMENT_MODE) { spacer(18); ?>
      <a href="files.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('files')); ?>
        </strong>
      </a>
      <?php  }
				  if($toggle["seating"] && !ALP_TOURNAMENT_MODE) { spacer(18); ?>
      <a href="seating.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('map')); ?>
        </strong>
      </a>
      <?php  }
				  if($toggle["music"] && !ALP_TOURNAMENT_MODE) { spacer(18); ?>
      <a href="music.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('music')); ?>
        </strong>
      </a>
      <?php  }
				  if($toggle["schedule"]) { spacer(18); ?>
      <a href="disp_schedule.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('schedule')); ?>
        </strong>
      </a>
      <?php  }
				  if($toggle["servers"] && ALP_TOURNAMENT_MODE_COMPUTER_GAMES) { spacer(18); ?>
      <a href="servers.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('servers')); ?>
        </strong>
      </a>
      <?php  }
				  spacer(18); ?>
      <a href="tournaments.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('tournaments')); ?>
        </strong>
      </a>
      <?php if($toggle["sponsors"] && !ALP_TOURNAMENT_MODE) { spacer(18); ?>
      <a href="disp_sponsors.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('sponsors')); ?>
        </strong>
      </a>
      <?php  }
                  if(!ALP_TOURNAMENT_MODE && $toggle["staff"]) { spacer(18); ?>
      <a href="staff.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('staff')); ?>
        </strong>
      </a>
      <?php  }
			      if(!ALP_TOURNAMENT_MODE) { spacer(18); ?>
      <a href="users.php" class="menu" style="color: #ffffff">
        <strong>
          <?php echo strtoupper(get_lang('users')); ?>
        </strong>
      </a>
    </font>
    <?php } ?>
    <br />
    <?php spacer(1,10,1); ?>
  </div>