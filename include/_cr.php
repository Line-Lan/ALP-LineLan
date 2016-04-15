<?php
// removing the credits without replacing or modifying with an appropriate substitute constitutes a violation of the license.
// we worked hard on this program, and all we're receiving for it is a little name recognition.  so respect the ideals of 
// open source software and do not remove the credits.  thanks.
global $dbc, $start_time;
?>
<div align="center">
  <font size="1">

    <a href="credits.php">autonomous LAN party</a>

    <?php spacer(5); ?>|<?php spacer(5); ?>

    version 0.98.3

    <?php spacer(5); ?>|<?php spacer(5);

	 	list($usec, $sec) = explode(" ", microtime());  //Code for process timing clock

		$end_time = ((float)$usec + (float)$sec);		//Code for process timing clock

		echo number_format($end_time - $start_time, 5, '.', '') . ' seconds - queries: ' . $dbc->getNumberOfQueries();

		spacer(5);

		?>|<?php spacer(5); ?>

     <a href="https://line-lan.net/">(c) 2012-<?php echo date("Y"); ?> Line-Lan</a>

	<?php spacer(5); ?>|<?php spacer(5); ?>

	<a href="https://api.line-lan.net/">API</a><?php spacer(5); ?><?php spacer(5); ?>|<?php spacer(5); ?>

    <a href="license.php">License</a>

    <?php spacer(5); ?>|<?php spacer(5); ?>

   <a href="https://line-lan.net/datenschutz/">Datenschutz</a>

		<?php spacer(5); ?>|<?php spacer(5); ?>

          <a href="https://line-lan.net/impressum/">Impressum</a>

          <?php spacer(20); ?>

        </font>

</div>
