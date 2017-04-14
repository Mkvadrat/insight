<div class="bg-header">
	<div class="container header-container no-padding">
		<div class="row no-margin">
			<div class="col-xs-12 no-padding">
				<header>
					<a class="logo-head" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>


					<p class="header-tittle"><!-- <?php print $site_slogan; ?> --> <span class="word-2">Мы сбережем</span> <span class="word-3">Ваши деньги.</span></p>
					<div class="phones">
						<?php print render($page['phone_head']) ?>

					</div>

					<div class="services">
						<div class="row no-margin">

							<?php print render($page['service_head']) ?>

						</div>
					</div>

					<!-- end services -->


				</header>

				<nav role="navigation" class="navbar navbar-default">

					<div class="navbar-header">
						<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Навигационное меню -->
					<div id="navbarCollapse" class="collapse navbar-collapse">
						<?php
							$menu = menu_tree('main-menu');
							echo render($menu);
						?>

					</div>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- end header -->

<!-- start wrapper -->

<div class="container wrapper">

	<!-- start side-bar -->

	<div class="row">
		<div class="col-xs-3">
			<div class="side-bar">
				<?php print render($page['left_sidebar']) ?>

			</div>
		</div>

		<!-- end side-bar -->

		<!-- start content -->

		<div class="col-xs-9 content <?php print $classes; ?>">


			<?php print $messages; ?>


			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h3 class="title" id="page-title"><?php print $title; ?></h3><?php endif; ?>


			<?php print render($title_suffix); ?>
			<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($page['help']); ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
			<?php print render($page['content']); ?>



		</div>

		<!-- end content -->
	</div>
</div>

<!-- start footer -->

<div class="container-fluid footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<footer>

					<a class="footer-logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						<img src="../<?php print $directory; ?>/images/logo2.png" alt="<?php print t('Home'); ?>" /></a>

					<div class="menu-footer">
						<?php print render($page['footer_menu']) ?>
					</div>


					<div class="contacts-footer">
						<p>Телефоны: </p>
						<p>Почта:</p>
						<p>Скайп:</p>
						<?php print render($page['skype_footer']) ?>

					</div>

					<div class="social-line">
						<span>Все права защищены © <?php echo date("Y"); ?></span>

						<span>Сайт разработан в </span>

						<a class="mk" href="http://mkvadrat.com/"></a>
						<?php print render($page['socsety']) ?>

					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
