<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 

?>
<a data-toggle="collapse" href="#top-slider">
	<?php if (empty($currentcampus)||empty($campuses[0][$currentcampus])) { ?>
		Service Times &amp; Campuses
	<?php } else { ?>
		<?= htmlspecialchars($campuses[0][$currentcampus]) ?> Campus <small>(change?)</small>
	<?php } ?>
	&nbsp;&nbsp;&nbsp;<i class="icon-caret-down icon-large"></i>
</a>
