<?php 
if( class_exists('acf') ) {
	$site_number 	= get_field('site_number', 'option');
	$site_address 	= get_field('site_address', 'option');
	$site_email 	= get_field('site_email', 'option');
	$site_schedule 	= get_field('site_schedule', 'option');
	$location 		= get_field('google_maps', 'option');
}
//if( !empty($location) ):
?>
	<div id="googleMapWrap">
		<!-- Note: Ayaw lang sa ni taruga... 
			<div id="googleMap" class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		-->
		<div class="static-map"></div>
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="item-box">
							<h2><?php echo __('Our Contact Details', 'sage'); ?></h2>
							<p class="phone"><?php echo $site_number; ?></p>
							<p class="email"><?php echo $site_email; ?></p>
							<p class="address"><?php echo $site_address; ?></p>
							<?php if( !empty($site_schedule) ): ?>
								<div class="schedule">
									<ul class="list-unstyled">
				                        <?php foreach ( $site_schedule as $value ) : ?>
				                            <li>
												<div class="row">
													<div class="col-lg-4"><?php echo $value['site_schedule_day']; ?></div>
													<div class="col-lg-6"><?php echo $value['social_list_time']; ?></div>
												</div>
											</li>
				                        <?php endforeach; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php //endif; ?>
