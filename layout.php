<div class="song-page">
    
	<div id="exhibit-page-top">
	    <div id="song-metadata">
		    <h1><?php echo $page->title; ?></h1>
			<h2>Theme: <?php echo exhibit_builder_page_text(1); ?></h2>
			<h2>Era: <?php echo exhibit_builder_page_text(2); ?></h2>
			<h2>Style: <?php echo exhibit_builder_page_text(3); ?></h2>
			<h2>Publication Date: <?php echo exhibit_builder_page_text(4); ?></h2>
		</div><!-- song-metadata -->

		<div id="song-files">
			<div class="">
				<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
				<?php echo exhibit_builder_exhibit_display_item(); ?>
				<?php endif; ?>
			</div>
			<?php echo exhibit_builder_page_text(5); ?>
			<?php echo exhibit_builder_page_item(2); ?>
		</div>
	</div><!-- exhibit-page-top -->
	
	<div id="exhibit-main">
	</div><!-- end exhibit-main -->
	
</div><!-- end song-page -->