<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');

if (constant('WP_COUNTRY') === 'UK') {
?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
		<!-- OneTrust Cookies Consent Notice start for thecareeracademy.co.uk -->
		<script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="79d44d96-cbe3-4da8-80da-6c524fa5098b"></script>
		<script type="text/javascript">
			function OptanonWrapper() {}
		</script>
		<!-- OneTrust Cookies Consent Notice end for thecareeracademy.co.uk -->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<?php if ($enable_skip_link) { ?>
			<a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
		<?php } ?>
		<?php
		if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
			if (hello_elementor_display_header_footer()) {
				if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
					get_template_part('template-parts/dynamic-header');
				} else {
					get_template_part('template-parts/header');
				}
			}
		}
		?>
	<?php
}

if (constant('WP_COUNTRY') === 'IE') {
	?>
		<!doctype html>
		<html <?php language_attributes(); ?>>

		<head>
			<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
			<!-- OneTrust Cookies Consent Notice start for careeracademy.ie -->
			<script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" type="text/javascript" charset="UTF-8" data-domain-script="5d887378-f1bd-42be-9c01-3fd9166f3695"></script>
			<script type="text/javascript">
				function OptanonWrapper() {}
			</script>
			<!-- OneTrust Cookies Consent Notice end for careeracademy.ie -->
			<script src="https://rlcdkogk.careeracademy.ie/script.js"></script>
			<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>
			<?php wp_body_open(); ?>
			<?php if ($enable_skip_link) { ?>
				<a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
			<?php } ?>
			<?php
			if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
				if (hello_elementor_display_header_footer()) {
					if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
						get_template_part('template-parts/dynamic-header');
					} else {
						get_template_part('template-parts/header');
					}
				}
			}
			?>
		<?php
	}

	if (constant('WP_COUNTRY') === 'AU') {
		?>
			<!doctype html>
			<html <?php language_attributes(); ?>>

			<head>
				<meta charset="<?php bloginfo('charset'); ?>">
				<script src="https://mkvhqwtz.thecareeracademy.com.au/script.js"></script>
				<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
				<?php wp_head(); ?>
			</head>

			<body <?php body_class(); ?>>
				<?php wp_body_open(); ?>
				<?php if ($enable_skip_link) { ?>
					<a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
				<?php } ?>
				<?php
				if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
					if (hello_elementor_display_header_footer()) {
						if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
							get_template_part('template-parts/dynamic-header');
						} else {
							get_template_part('template-parts/header');
						}
					}
				}
				?>
			<?php
		}

		if (constant('WP_COUNTRY') === 'NZ') {
			?>
				<!doctype html>
				<html <?php language_attributes(); ?>>

				<head>
					<meta charset="<?php bloginfo('charset'); ?>">
					<meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
					<script src="https://iddqziut.careeracademy.co.nz/script.js"></script>
					<?php wp_head(); ?>
				</head>

				<body <?php body_class(); ?>>
					<?php wp_body_open(); ?>
					<?php if ($enable_skip_link) { ?>
						<a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
					<?php } ?>
					<?php
					if (!function_exists('elementor_theme_do_location') || !elementor_theme_do_location('header')) {
						if (hello_elementor_display_header_footer()) {
							if (did_action('elementor/loaded') && hello_header_footer_experiment_active()) {
								get_template_part('template-parts/dynamic-header');
							} else {
								get_template_part('template-parts/header');
							}
						}
					}
					?>
				<?php
			}

			if (constant('WP_COUNTRY') === 'GB') {
				?>
					<!DOCTYPE html>
					<?php astra_html_before(); ?>
					<html <?php language_attributes(); ?>>

					<head>
						<script src="https://mkvhqwtz.thecareeracademy.com.au/script.js"></script>
						<?php astra_head_top(); ?>
						<meta charset="<?php bloginfo('charset'); ?>">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<link rel="profile" href="https://gmpg.org/xfn/11">
						<?php wp_head(); ?>
						<?php astra_head_bottom(); ?>
					</head>

					<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
						<?php astra_body_top(); ?>
						<?php wp_body_open(); ?>
						<a class="skip-link screen-reader-text" href="#content" role="link" title="<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>">
							<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
						</a>
						<div <?php
								echo astra_attr(
									'site',
									array(
										'id'    => 'page',
										'class' => 'hfeed site',
									)
								);
								?>>
							<?php
							astra_header_before();
							astra_header();
							astra_header_after();
							astra_content_before();
							?>
							<div id="content" class="site-content">
								<div class="ast-container">
									<?php astra_content_top(); ?>
								<?php

							}
								?>