<?php
	/**
	 * @file
	 *	BandBeats Theme Core
	 */
?>

<div class="root">
	<div class="header-wrapper">
		<div class="header">
			<span class="logo" style="display:inline-block">
				<?php if ($logo): ?>
      				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
   				<?php endif; ?>
   				<br/>
			</span>
			<span class="search-box" style="display:inline-block">
				<?php if ($page['search']): ?>
					<?php print render($page['search']); ?>
				<?php endif; ?>
			</span>
			<span class="user-navigation" style="display:inline-block">
				<?php // If the user is logged in ?>
				<?php if ($logged_in): ?>
				<?php if ($secondary_menu): ?>
					<?php print theme('links__system_secondary_menu', array(
          				'links' => $secondary_menu,
          				'attributes' => array(
            			'class' => array('links', 'inline', 'clearfix'),
          				),
          				'heading' => array(
            			'level' => 'h6',
            			'class' => array('element-invisible'),
          				),
        			)); ?>
				<?php endif; ?>
				<?php endif; ?>
				<?php // If the user is not logged in ?>
				<?php if (!$logged_in): ?>
				<?php if ($main_menu): ?>
				<?php print theme('links__system_main_menu', array(
            		'links' => $main_menu,
            		'attributes' => array(
              		'class' => array('links', 'inline', 'clearfix'),
            		),
            		'heading' => array(
              		'text' => t('Main menu'),
              		'level' => 'h6',
              		'class' => array('element-invisible'),
            		),
          		)); ?>
				<?php endif; ?>
				<?php endif; ?>
			</span>
		</div>
		<br class="clear-both"/>
	</div>
	<div class="sidebar-first-wrapper">
		<div class="sidebar-first">
			<?php if($page['sidebar_first']): ?>
				<?php print render($page['sidebar_first']); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="content-wrapper">
		<div class="content-main">
			<?php if($page['content']): ?>
				<?php print render($page['content']); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="sidebar-second-wrapper">
		<div class="sidebar-second">
		</div>
	</div>
	<div class="footer-wrapper">
		<div class="footer">
		</div>
	</div>
</div>