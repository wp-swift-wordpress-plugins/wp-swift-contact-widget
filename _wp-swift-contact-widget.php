<?php 
$widget_id = "widget_" . $args["widget_id"];
$additional_settings = false;
$phone = false;
$mobile = false;
$widget_title = "Contact Details";
$social_media_links = false;

if (function_exists("get_field")) {
	if( get_field('additional_settings', $widget_id) ) {
		$additional_settings = get_field('additional_settings', $widget_id);
		$additional_settings = array_flip($additional_settings);
	}
	if ( get_field('address_display_options', $widget_id))  {
		$address_display_options = get_field('address_display_options', $widget_id);
		$address_display_options = array_flip($address_display_options);	
	}
	if ( get_field('phone_display_options', $widget_id))  {
		$phone_display_options = get_field('phone_display_options', $widget_id);
		$phone_display_options = array_flip($phone_display_options);	
	}
	if ( get_field('mobile_display_options', $widget_id))  {
		$mobile_display_options = get_field('mobile_display_options', $widget_id);
		$mobile_display_options = array_flip($mobile_display_options);	
	}
	if ( get_field('email_display_options', $widget_id))  {
		$email_display_options = get_field('email_display_options', $widget_id);
		$email_display_options = array_flip($email_display_options);	
	}
	if ( get_field('opening_hours_display_options', $widget_id))  {
		$opening_hours_display_options = get_field('opening_hours_display_options', $widget_id);
		$opening_hours_display_options = array_flip($opening_hours_display_options);	
	}
	if ( get_field('address', 'option') ) {
		$address = get_field('address', 'option');
		if (isset($additional_settings['remove_address_break'])) {
			$address = str_replace('<br />', ' ', $address);
		}
	}
	if ( function_exists('get_phone') )  {
	    $phone_readable = get_phone('office_phone');
	    $phone = get_phone('office_phone', true);
	    $mobile_readable = get_phone('mobile');
	    $mobile = get_phone('mobile', true);
	}
	if( get_field('email', 'option') ) {
	    $email = get_field('email', 'option');
	    $email_text = str_replace('@', '<span class="ampersand">@</span>', $email);
	}
	if( get_field('opening_hours', 'option') ) {
		$opening_hours = get_field('opening_hours', 'option');
	}
	if( get_field('social_media_settings', $widget_id) ) {
		$social_media_settings = get_field('social_media_settings', $widget_id);
		if ($social_media_settings !== 'none' && function_exists('get_social_media')) {
			$social_media_links = get_social_media();
		}	
	}
	if ( get_field('use_site_title', $widget_id)) {
		$widget_title = bloginfo( 'name' );
	} elseif ( get_field('widget_title', $widget_id) ) {
		$widget_title = get_field('widget_title', $widget_id);
	}
}
?>
<section class="cell widget <?php echo $widget_id; ?>">
<div class="footer-contact-widget">

	<h6><?php echo $widget_title; ?></h6>

	<?php if (isset($address_display_options['show']) && isset($address)): ?>
		<div class="contact-method address">
			<?php 
				if (isset($address_display_options['icon'])): 
					?><span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php 
				endif;
				if (isset($address_display_options['label'])): 
					?><span class="key address">Address</span><?php 
				endif;
			 ?><span class="value address"> <?php echo $address; ?></span>
		</div><!-- @end .contact-method -->
	<?php endif ?>

	<?php if (isset($phone_display_options['show']) && $phone): ?>
		<div class="contact-method phone">
			<?php 
				if (isset($phone_display_options['icon'])): 
					?><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span><?php 
				endif;
				if (isset($phone_display_options['label'])): 
					?><span class="key phone">Tel</span><?php 
				endif;
			 ?><span class="value phone"><a href="tel:<?php echo $phone; ?>"><?php echo $phone_readable; ?></a></span>
		</div><!-- @end .contact-method -->
	<?php endif ?>

	<?php if (isset($mobile_display_options['show']) && $mobile): ?>
		<div class="contact-method mobile">
			<?php 
				if (isset($mobile_display_options['icon'])): 
					?><span class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></span><?php 
				endif;
				if (isset($mobile_display_options['label'])): 
					?><span class="key mobile">Mobile</span><?php 
				endif;
			 ?><span class="value mobile"><a href="tel:<?php echo $mobile; ?>"><?php echo $mobile_readable; ?></a></span>
		</div><!-- @end .contact-method -->
	<?php endif ?>

	<?php if (isset($email_display_options['show']) && isset($email)): ?>
		<div class="contact-method email">
			<?php 
				if (isset($email_display_options['icon'])): 
					?><span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span><?php 
				endif;
				if (isset($email_display_options['label'])): 
					?><span class="key email">Email</span><?php 
				endif;
			 ?><span class="value email"><a href="mailto:<?php echo $email; ?>"><?php echo $email_text; ?></a></span>
		</div><!-- @end .contact-method -->
	<?php endif ?>

	<?php if (isset($opening_hours_display_options['show']) && isset($opening_hours)): ?>
		<div class="contact-method opening-hours">
			<?php 
				if (isset($opening_hours_display_options['icon'])): 
					?><span class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span><?php 
				endif;
				if (isset($opening_hours_display_options['label'])): 
					?><span class="key opening-hours">Opening Hours</span><?php 
				endif;
			 ?><span class="value opening-hours"><?php echo $opening_hours; ?></span>
		</div><!-- @end .contact-method -->
	<?php endif ?>

	<?php if ( $social_media_links && count($social_media_links) ) : ?>		     

	   		<?php foreach ($social_media_links as $key => $link): 
	   		?><div class="contact-method social-media">
		   		<span class="icon"><i class="fa <?php echo $link['icon']; ?>" aria-hidden="true"></i></span><span class="value social"><a href="<?php echo $link['link']; ?>"><?php echo $link['name']; ?></a></span>
	        </div><?php 
	        endforeach ?>

	<?php endif; ?>	

</div>
</section>