<?php
wp_enqueue_script( 'wd-setup-wizard', WOODMART_ASSETS . '/js/wizard.js', array(), WOODMART_VERSION, true );
?>

<div class="xts-box xts-theme-style">
	<div class="xts-box-header">
		<h3>
			<?php esc_html_e( 'Theme plugins', 'woodmart' ); ?>
		</h3>
	</div>

	<div class="xts-box-content">
		<?php
		get_template_part(
			'inc/admin/setup-wizard/templates/plugins',
			'',
			array( 'show_plugins' => 'theme_plugin' )
		);
		?>
	</div>
	<?php if ( ! woodmart_get_opt( 'white_label' ) ) : ?>
		<div class="xts-box-footer">
			<p>افزونه هایی که با برچسب "لازم" مشخص شده اند برای عملکرد روان قالب وودمارت مورد نیاز هستند. افزونه های دیگر قابلیت های بیشتری را ارائه می دهند اما در صورت عدم نیاز ممکن است حذف شوند.</p>
		</div>
	<?php endif; ?>
</div>

<div class="xts-box xts-theme-style">
	<div class="xts-box-header">
		<h3>
			<?php esc_html_e( 'Compatible plugins', 'woodmart' ); ?>
		</h3>
	</div>

	<div class="xts-box-content">
		<?php
		get_template_part(
			'inc/admin/setup-wizard/templates/plugins',
			'',
			array( 'show_plugins' => 'compatible' )
		);
		?>
	</div>
	<?php if ( ! woodmart_get_opt( 'white_label' ) ) : ?>
		<div class="xts-box-footer">
			<p>افزونه ای سازگار پیدا نکردید؟<a href="https://webdenj.com/"> دریافت راهنمایی </a></p>
		</div>
	<?php endif; ?>
</div>
