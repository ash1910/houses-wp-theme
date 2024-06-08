<?php
global $post, $houzez_local;
$agent_position = get_post_meta( get_the_ID(), 'fave_agent_position', true );
$languages = get_post_meta( get_the_ID(), 'fave_agent_language', true );
$properties = Houzez_Query::agent_properties_count( $post->ID );
?>
<div class="agent-grid-wrap">	
	<div class="agent-grid-image-wrap">
		<a class="agent-grid-image" href="<?php the_permalink(); ?>">
			<?php get_template_part('template-parts/realtors/agent/image'); ?>
		</a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if( $agent_position != '' ) { ?>
		<div class="agent-list-position"><?php echo esc_attr($agent_position); ?></div>
		<?php } ?>
	</div>
	<div class="agent-grid-content-wrap">
		<ul class="agent-list-contact list-unstyled">
			<?php if( ! empty($properties) ) { ?>
			<li class="agent-listings-count"><?php echo $houzez_local['properties']?>: <strong><?php echo esc_attr($properties); ?></strong></li>
			<?php } ?>

			 <?php if( !empty( $languages ) ) { ?>
			<li class="agent-languages-list"><?php echo $houzez_local['languages']; ?>: <strong><?php echo esc_attr( $languages ); ?></strong></li>
			<?php } ?>
		</ul>
		<a class="btn btn-primary-outlined btn-full-width" href="<?php the_permalink(); ?>">
			<?php echo $houzez_local['view_profile']; ?></a>
	</div>
</div>