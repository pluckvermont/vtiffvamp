<?php

/* @var $EM_Event EM_Event */

$count_cats = count($EM_Event->get_categories()->categories) > 0;

if( $count_cats > 0 ){

	?>

	<p class="event-categories">

		<?php foreach($EM_Event->get_categories() as $EM_Category): ?>

			<?php echo $EM_Category->output("#_CATEGORYLINK"); ?>

		<?php endforeach; ?>

	</p>

	<?php	

}else{

	echo get_option ( 'dbem_no_categories_message' );

}