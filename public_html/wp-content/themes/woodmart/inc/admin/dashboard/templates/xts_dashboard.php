<div class="xts-welcome-page">

	<?php if ( woodmart_get_opt( 'white_label' ) ) : ?>
		<div class="xts-box xts-white-label-box xts-theme-style">
			<div class="xts-box-content">
				<h3>
					<?php if ( woodmart_get_opt( 'white_label_dashboard_title' ) ) : ?>
						<?php echo esc_html( woodmart_get_opt( 'white_label_dashboard_title' ) ); ?>
					<?php else : ?>
						<?php esc_html_e( 'Welcome to WoodMart', 'woodmart' ); ?>
					<?php endif; ?>
				</h3>
				<div class="xts-about-text">
					<?php if ( woodmart_get_opt( 'white_label_dashboard_text' ) ) : ?>
						<?php echo wp_kses( woodmart_get_opt( 'white_label_dashboard_text' ), true ); ?>
					<?php else : ?>
						<?php esc_html_e( 'Thank you for purchasing our premium eCommerce theme - Woodmart. Here you are able to start creating your awesome web store by importing our prebuilt websites and theme options.', 'woodmart' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="xts-box xts-welcome-box xts-theme-style xts-color-scheme-light">
			<div class="xts-box-content">
				<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/banner.png' ); ?>" alt="banner">

				<h3>
					<?php esc_html_e( 'Welcome to WoodMart', 'woodmart' ); ?>
				</h3>

				<p>
					<?php esc_html_e( 'Thank you for purchasing our premium eCommerce theme - Woodmart. Here you are able to start creating your awesome web store by importing our prebuilt websites and theme options.', 'woodmart' ); ?>
				</p>

				<?php if ( woodmart_get_opt( 'white_label_changelog_tab' ) ) : ?>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=xts_changelog' ) ); ?>" class="xts-btn">
						<?php esc_html_e( 'What\'s new' ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="xts-row xts-welcome-row xts-sp-20 xts-theme-style">
			<div class="xts-col-12 xts-col-xl-6">
				<div class="xts-box xts-info-boxes">
					<div class="xts-box-content">
						<h4>
							<?php esc_html_e( 'پیرامون قالب' ); ?>
						</h4>

						<p>
							<?php esc_html_e( 'برای اطلاعات بیشتر از این لینک ها استفاده کنید!' ); ?>
						</p>

						<div class="xts-row">
							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/docs.jpg' ); ?>" alt="documentation banner">
								</div>
								<a href="https://xtemos.com/documentation/woodmart/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'مستندات' ); ?>
								</a>
							</div>

							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/video.jpg' ); ?>" alt="video banner">
								</div>
								<a href="https://www.youtube.com/channel/UCu3loFwqqOQ9z-YTcnplK8w/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'ویدئو آموزشی' ); ?>
								</a>
							</div>

							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/forum.jpg' ); ?>" alt="forum banner">
								</div>
								<a href="https://xtemos.com/forums/forum/woodmart-premium-template/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'فروم پشتیبانی' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="xts-col-12 xts-col-xl-6">
				<div class="xts-box xts-info-boxes xts-align-center">
					<div class="xts-box-content">
						<h4>
							<?php esc_html_e( 'آیا قالب را دوست دارید؟' ); ?>
						</h4>

						<p>
							<?php esc_html_e( 'در مورد آن در وب دنج نظر بدهید!' ); ?>
						</p>

						<div class="xts-row">
							<div class="xts-col">
								<div class="xts-info-box-img">
									<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/vote.jpg' ); ?>" alt="vote banner">
								</div>
								<a href="https://webdenj.com/woodmart-themes/" class="xts-bordered-btn xts-color-default" target="_blank">
									<?php esc_html_e( 'نظر در مورد قالب' ); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

</div>