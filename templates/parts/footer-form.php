
<?php if (is_active_sidebar('global-form')) : ?>
<section id="footer-form" class="py-5 my-lg-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 offset-lg-1">
				<?php dynamic_sidebar('global-form'); ?>
			</div>
			<div class="col-lg-5">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>