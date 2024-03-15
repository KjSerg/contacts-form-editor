<?php
/* Template Name: Шаблон главной страницы */
get_header();
$var          = variables();
$set          = $var['setting_home'];
$assets       = $var['assets'];
$url          = $var['url'];
$url_home     = $var['url_home'];
$id           = get_the_ID();
$isLighthouse = isLighthouse();
$size         = isLighthouse() ? 'thumbnail' : 'full';
$screens      = carbon_get_post_meta( $id, 'screens' );
if ( ! empty( $screens ) ) :
	foreach ( $screens as $index => $screen ) :
		if ( $screen['_type'] == 'screen_1' ) :
			if ( ! $screen['screen_off'] ) :
				?>

                <section class="section-head" id="<?php echo $screen['id']; ?>">
                    <div class="section-line"></div>
                    <div class="text-decor">
                        <div class="text-decor__left">
                            <span><?php echo $screen['decorative_subtitle']; ?></span>
                        </div>
                        <div class="text-decor__right">
                            <span><?php echo $screen['decorative_subtitle']; ?></span>
                        </div>
                    </div>
                    <img class="head-line-sm" src="<?php echo $assets; ?>img/head-line-sm.png" alt=""/>
                    <div class="container">
                        <div class="head-content">
                            <div class="head-content__left">
                                <div class="head-title" data-aos="fade-up">
									<?php echo $screen['title']; ?>
                                </div>
                                <div class="head-text" data-aos="fade-up" data-aos-delay="100">
									<?php echo $screen['subtitle']; ?>
                                </div>
								<?php the_buttons( $screen['links'], '', 'data-aos="fade-up" data-aos-delay="200"' ); ?>
                            </div>
                            <div class="head-content__right decor-list">
                                <img class="decor-list__item head-ksc" src="<?php _u( $screen['image'] ); ?>" alt=""/>
								<?php if ( $screen['image1'] ): ?>
                                    <img class="decor-list__item head-ksc-line" src="<?php _u( $screen['image1'] ); ?>"
                                         alt=""/>
								<?php endif; ?>
								<?php if ( $screen['image2'] ): ?>
                                    <img class="head-circle" src="<?php _u( $screen['image2'] ); ?>" alt=""/>
								<?php endif; ?>
                                <div class="head-radial"></div>    
								<?php if ( $screen['image3'] ): ?>
                                    <img class="head-line" src="<?php _u( $screen['image3'] ); ?>" alt=""/>
					
                                    <img class="head-line_sm" src="<?php _u( $screen['image3'] ); ?>" alt=""/>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_2' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-technologies" id="<?php echo $screen['id']; ?>">
                    <div class="container">
                        <div class="title-section" data-aos="fade-up" data-aos-delay="100">
                            <div class="title-section__main">
								<?php echo $screen['title']; ?>
                            </div>
                        </div>
						<?php if ( $list = $screen['list'] ): $delay = 100; ?>
                            <div class="technologies">
								<?php foreach ( $list as $item ): ?>
                                    <div class="technologies-item" data-aos="fade-up"
                                         data-aos-delay="<?php echo $delay; ?>">
                                        <div class="technologies-item__ico">
                                            <img src="<?php _u( $item['image'] ) ?>" alt=""/>
                                        </div>
                                        <div class="technologies-item__title">
											<?php echo $item['text'] ?>
                                        </div>
                                    </div>
									<?php $delay = $delay + 100; endforeach; ?>
                            </div>
						<?php endif; ?>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_3' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-stats" id="<?php echo $screen['id']; ?>">
                    <img class="stats-line-left" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
       
                    <div class="stats-radial"></div> 
                    <div class="container">
                        <div class="stats-group">
                            <div class="stats-group__left" data-aos="fade-right" data-aos-delay="100">
                                <div class="title-section__main">
									<?php echo $screen['title']; ?>
                                </div>
                            </div>
							<?php if ( $list = $screen['list'] ): ?>
                                <div class="stats-list">
									<?php foreach ( $list as $item ): ?>
                                        <div class="stats-list__item">
                                            <div class="stats-list__item-main">
                                                <strong><?php echo $item['number']; ?> </strong><?php echo $item['suffix']; ?>
                                            </div>
                                            <div class="stats-list__item-title">
												<?php echo $item['text']; ?>
                                            </div>
                                        </div>
									<?php endforeach; ?>
                                </div>
							<?php endif; ?>
                            <img class="stats-line-right" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_4' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-text-line" id="<?php echo $screen['id']; ?>">
                    <div class="mover-line">

						<?php if ( $list = $screen['list'] ): foreach ( $list as $item ): ?>
                            <div class="mover-line__item"><?php echo $item['text']; ?>
                                <span><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                           style="enable-background:new 0 0 80 50" viewBox="0 0 80 50">
                            <path d="M25 0C11.2 0 0 11.2 0 25s11.2 25 25 25c5.6 0 10.8-1.9 15-5 4.2 3.1 9.4 5 15 5 13.8 0 25-11.2 25-25S68.8 0 55 0c-5.6 0-10.8 1.9-15 5-4.2-3.1-9.4-5-15-5zm15.8 5.6c-.3-.2-.5-.4-.8-.6-6.1 4.6-10 11.8-10 20s3.9 15.4 10 20c.3-.2.5-.4.8-.6 4 2.9 8.9 4.6 14.2 4.6 13.3 0 24-10.7 24-24S68.3 1 55 1c-5.3 0-10.2 1.7-14.2 4.6zm0 0C46.4 10.2 50 17.2 50 25c0 7.8-3.6 14.8-9.2 19.4C34.9 40 31 32.9 31 25s3.9-15 9.8-19.4z"
                                  style="opacity:.7;fill-rule:evenodd;clip-rule:evenodd;fill:#01d9a2;enable-background:new"/>
                        </svg></span>
                            </div>
						<?php endforeach; endif; ?>

                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_5' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-advantages" id="<?php echo $screen['id']; ?>">
                    <div class="container">
                        <div class="advantages-group">
                            <img class="advantages-line" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                            <div class="advantages-radial"></div>
                            <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
								<?php echo $screen['title']; ?>
                            </div>
                            <div class="advantages-group__line">
                                <div class="advantages-group__line-item"></div>
                                <div class="advantages-group__line-item"></div>
                                <div class="advantages-group__line-item"></div>
                                <div class="advantages-group__line-item"></div>
                                <div class="advantages-group__line-item"></div>
                                <div class="advantages-group__line-item"></div>
                            </div>
							<?php
							$list = $screen['list'];
							$list = array_chunk( $list, 2 );
							if ( $list ):
								$delay = 100;
								?>
                                <div class="advantages">
									<?php foreach ( $list as $sub_list ): ?>
                                        <div class="advantages-row" data-aos="fade-up"
                                             data-aos-delay="<?php echo $delay; ?>">
											<?php foreach ( $sub_list as $item ): ?>
                                                <div class="advantages-row__item">
													<?php echo $item['text']; ?>
                                                </div>
											<?php endforeach; ?>
                                        </div>
										<?php $delay = $delay + 100; endforeach; ?>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_6' ):
			if ( ! $screen['screen_off'] ):
				?>

				<?php
				$list = $screen['list'];
				?>

                <section class="section-branding" id="<?php echo $screen['id']; ?>">
                    <div class="branding-radial"></div>
                    <div class="container">
                        <div class="branding js-tab">
                            <div class="branding-left" data-aos="fade-right" data-aos-delay="100">
                                <div class="title-section">
                                    <div class="title-section__main">
										<?php echo $screen['title']; ?>
                                    </div>
                                    <div class="title-section__subtitle">
										<?php echo $screen['subtitle']; ?>
                                    </div>
                                </div>
								<?php if ( $list ): ?>
                                    <div class="branding-list">
										<?php foreach ( $list as $j => $item ): ?>
                                            <div class="branding-list__item js-tab-link <?php echo $j == 0 ? 'active' : ''; ?> "
                                                 data-target="target<?php echo $j; ?>">
												<?php echo $item['title']; ?>
                                            </div>
										<?php endforeach; ?>
                                    </div>
								<?php endif; ?>
								<?php the_buttons( $screen['links'] ); ?>
                            </div>
							<?php if ( $list ): ?>
                                <div class="branding-right" data-aos="fade-left" data-aos-delay="100">
                                    <div class="branding-content">
										<?php foreach ( $list as $j => $item ): ?>
                                            <div class="branding-content__item js-tab-item <?php echo $j == 0 ? 'active' : ''; ?>"
                                                 data-target="target<?php echo $j; ?>">
                                                <div class="branding-video">
                                                    <div class="branding-video__main">
                                                        <video autoplay="" loop="" muted="" playsinline="">
                                                            <source
                                                                    src="<?php echo wp_get_attachment_url( $item['video'] ); ?>"
                                                                    type="video/mp4"/>
                                                        </video>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_7' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-performance" id="<?php echo $screen['id']; ?>">
                    <img class="performance-line" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                    <div class="performance-radial"></div>
                    <div class="container">
                        <div class="title-section">
                            <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
								<?php echo $screen['title']; ?>
                            </div>
                        </div>
						<?php if ( $list = $screen['list'] ): $delay = 100; ?>
                            <div class="performance">
								<?php foreach ( $list as $item ): ?>
                                    <div class="performance-item" data-aos="fade-up"
                                         data-aos-delay="<?php echo $delay; ?>">
                                        <div class="performance-item__ico">
											<?php the_image( $item['image'] ); ?>
                                        </div>
                                        <div class="performance-item__content">
                                            <div class="performance-item__title">
												<?php echo $item['title']; ?>
                                            </div>
                                            <div class="performance-item__text">
												<?php echo $item['text']; ?>
                                            </div>
                                        </div>
                                    </div>
									<?php $delay = $delay + 100; endforeach; ?>
                            </div>
						<?php endif; ?>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_8' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-clients" id="<?php echo $screen['id']; ?>">
                    <div class="container">
                        <div class="clients-group">
                            <div class="clients-line">
                                <div class="clients-line__top"></div>
                                <div class="clients-line__mid"></div>
                                <div class="clients-line__bot"></div>
                            </div>
                            <div class="clients-left">
                                <div class="title-section">
                                    <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
										<?php echo $screen['title']; ?>
                                    </div>
                                    <div class="title-section__subtitle" data-aos="fade-up" data-aos-delay="200">
										<?php echo $screen['subtitle']; ?>
                                    </div>
                                </div>
								<?php the_buttons( $screen['links'], '', 'data-aos="fade-up" data-aos-delay="300"' ); ?>
                            </div>
                            <div class="clients-list">
								<?php
								if ( $list = $screen['list'] ):
									$delay = 100;
									foreach ( $list as $item ):
										?>
                                        <div class="clients-list__item" data-aos="fade-up"
                                             data-aos-delay="<?php echo $delay; ?>">
                                            <div class="clients-list__item-count"></div>
                                            <div class="clients-list__item-content">
                                                <div class="clients-list__item-title">
													<?php echo $item['title']; ?>
                                                </div>
                                                <div class="clients-list__item-text">
													<?php echo $item['text']; ?>
                                                </div>
                                            </div>
                                        </div>
										<?php $delay = $delay + 100; endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_9' ):
			if ( ! $screen['screen_off'] ):
				?>

				<?php
				$gallery       = $screen['gallery'];
				$count_gallery = count( $gallery );
				$half          = $count_gallery / 2;
				$half          = round( $half );
				?>

                <section class="section-partners" id="<?php echo $screen['id']; ?>">
                    <div class="partners-radial-left"></div>
                    <div class="partners-radial-right"></div>
                    <img class="partners-line-sm" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                    <img class="partners-line-big" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                    <div class="container">
                        <div class="title-section text-center">
                            <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
								<?php echo $screen['title']; ?>
                            </div>
                        </div>
                        <div class="partners" data-aos="fade-up" data-aos-delay="200">
                            <div class="partners-ico">

								<?php
								if ( $gallery ):
									foreach ( $gallery as $j => $image_id ):
										$_j = $j + 1;
										if ( $_j <= $half ):
											?>
                                            <div class="partners-ico__item">
                                                <img src="<?php _u( $image_id ); ?>" alt=""/>
                                            </div>
										<?php
										endif;
									endforeach;
								endif;
								?>

                            </div>
                            <ul class="partners-list">
								<?php if ( $list = $screen['list'] ): foreach ( $list as $item ): ?>
                                    <li><?php echo $item['title'] ?></li>
								<?php endforeach; endif; ?>
                            </ul>
                            <div class="partners-ico">
								<?php
								if ( $gallery ):
									foreach ( $gallery as $j => $image_id ):
										$_j = $j + 1;
										if ( $_j > $half ):
											?>
                                            <div class="partners-ico__item">
                                                <img src="<?php _u( $image_id ); ?>" alt=""/>
                                            </div>
										<?php
										endif;
									endforeach;
								endif;
								?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_10' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-ecosystem" id="<?php echo $screen['id']; ?>">
                    <div class="wave-line"></div>
                    <div class="wave-line"></div>
                    
                    <div class="ecosystem-radial-left"></div>
                    <div class="ecosystem-radial-right"></div>

                    <div class="container">
                        <div class="title-section">
                            <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
								<?php echo $screen['title']; ?>
                            </div>
                        </div>
                        <div class="ecosystem-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="ecosystem">
								<?php if ( $list = $screen['list'] ): foreach ( $list as $item ): ?>
                                    <div class="ecosystem-item">
										<?php echo $item['title']; ?>
										<?php if ( $lines = $item['lines'] ): foreach ( $lines as $line ): ?>
                                            <div class="ecosystem-item__line"></div>
										<?php endforeach; endif; ?>
										<?php if ( $item['text'] ): ?>
                                            <div class="ecosystem-item__title">
												<?php echo $item['text']; ?>
                                            </div>
										<?php endif; ?>
                                    </div>
								<?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_11' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-about" id="<?php echo $screen['id']; ?>">
                    <div class="about-radial"></div>
                    <img class="about-line" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                    <div class="container">
                        <div class="about-group">
                            <div class="about-group__media decor-list">
                                <img class="ksg-text decor-list__item" src="<?php _u( $screen['image'] ); ?>" alt=""/>
								<?php if ( $screen['image1'] ): ?>
                                    <img class="ksg-text-line decor-list__item" src="<?php _u( $screen['image1'] ); ?>"
                                         alt=""/>
								<?php endif; ?>
                            </div>
                            <div class="about-group__right">
                                <div class="title-section">
                                    <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
										<?php echo $screen['title']; ?>
                                    </div>
                                    <div class="title-section__subtitle" data-aos="fade-up" data-aos-delay="200">
										<?php _t( $screen['text'] ); ?>
                                    </div>
                                </div>
								<?php the_buttons( $screen['links'], '', 'data-aos="fade-up"  data-aos-delay="300"' ); ?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_12' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-logo" id="<?php echo $screen['id']; ?>">
                    <div class="container">
                        <div class="title-section text-center">
                            <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
								<?php echo $screen['title']; ?>
                            </div>
                        </div>
                        <div class="logo-list" data-aos="fade-up" data-aos-delay="200">
							<?php if ( $list = $screen['list'] ): foreach ( $list as $item ): ?>
                                <a href="<?php echo $item['url'] ?: '#'; ?>" class="logo-list__item">
                                    <img src="<?php _u( $item['image'] ); ?>" alt=""/>
                                </a>
							<?php endforeach; endif; ?>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_13' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-vacancies" id="<?php echo $screen['id']; ?>">
                    <div class="vacancies-radial-left"></div>
                    <div class="vacancies-radial-right"></div>
                    <img class="vacancies-line" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                    <div class="container">
                        <div class="vacancies-grpup">
                            <div class="vacancies-grpup__left">
                                <div class="title-section">
                                    <div class="title-section__main" data-aos="fade-up" data-aos-delay="100">
										<?php echo $screen['title']; ?>
                                    </div>
                                    <div class="title-section__subtitle" data-aos="fade-up" data-aos-delay="200">
										<?php _t( $screen['subtitle'] ); ?>
                                    </div>
                                </div>
								<?php the_buttons( $screen['links'], '', 'data-aos="fade-up" data-aos-delay="100"' ); ?>
                            </div>
                            <div class="vacancies-grpup__right">
                                <div class="vacancies">
									<?php if ( $list = $screen['list'] ):
										$delay = 100;
										foreach ( $list as $item ): ?>
                                            <a class="vacancies-item" href="#" data-aos="fade-up"
                                               data-aos-delay="<?php echo $delay; ?>">
												<?php echo $item['title']; ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                                                     style="enable-background:new 0 0 30.7 11" viewBox="0 0 30.7 11">
                                    <path d="M30.5 6.1c.3-.3.3-.8 0-1.1L25.7.2c-.3-.3-.8-.3-1.1 0-.3.3-.3.8 0 1.1l4.2 4.2-4.2 4.2c-.3.3-.3.8 0 1.1s.8.3 1.1 0l4.8-4.7zM0 6.3h30V4.8H0v1.5z"
                                          style="fill:#0974f4"/>
                                </svg>
                                            </a>
											<?php $delay = $delay + 100; endforeach; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
        elseif ( $screen['_type'] == 'screen_14' ):
			if ( ! $screen['screen_off'] ):
				?>

                <section class="section-contact" id="<?php echo $screen['id']; ?>">
                    <div class="container">
                        <div class="contact-group" data-aos="fade-up" data-aos-delay="100">
                            <img class="contact-circle-sm" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                            <img class="contact-circle" src="<?php echo $assets; ?>img/head-line.png" alt=""/>
                            <div class="contact-group__left">
                                <div class="title-section">
                                    <div class="title-section__main">
										<?php echo $screen['title']; ?>
                                    </div>
                                    <div class="title-section__subtitle">
										<?php _t( $screen['subtitle'] ); ?>
                                    </div>
                                </div>
                                <ul class="contact-list">
									<?php if ( $list = $screen['list'] ): foreach ( $list as $item ): ?>
                                        <li>
                                            <div class="contact-list__ico">
                                                <img src="<?php _u( $item['image'] ); ?>" alt=""/>
                                            </div>
                                            <div class="contact-list__main">
												<?php echo $item['title']; ?>
                                            </div>
                                        </li>
									<?php endforeach; endif; ?>
                                </ul>
                            </div>
                            <div class="contact-group__right">
								<?php echo do_shortcode( $screen['form'] ); ?>
                            </div>
                        </div>
                    </div>
                </section>

			<?php
			endif;
		endif;
	endforeach;
endif; ?>
<?php get_footer(); ?>


