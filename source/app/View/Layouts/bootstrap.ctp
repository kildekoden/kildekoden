<?php echo $this->Html->docType('html5'); ?>
<html lang="en">
	<head>
		<?php echo $this->Html->charset(); ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
			brought to you by...
 ██████╗ ██╗██╗   ██╗ ██████╗
██╔════╝███║██║   ██║██╔═████╗
██║     ╚██║██║   ██║██║██╔██║
██║      ██║╚██╗ ██╔╝████╔╝██║
╚██████╗ ██║ ╚████╔╝ ╚██████╔╝
 ╚═════╝ ╚═╝  ╚═══╝   ╚═════╝
		 chrisvogt.me | @c1v0
-->
		<title><?php echo $this->fetch('title'); ?> | <?php echo env(APP_NAME); ?></title>

	<?php
		echo $this->Html->meta('favicon.ico', '/favicon-96x96.png', ['type' => 'icon', 'inline' => false]);

	/**
	 * Common stylehseets
	 */
		$this->Html->css([
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css',
			'styles',
			'/components/remodal/dist/remodal.css',
			'/components/remodal/dist/remodal-default-theme.css',
			'https://cdnjs.cloudflare.com/ajax/libs/octicons/2.4.1/octicons.min.css'
		], ['inline' => false]);

	/**
	 * Common scripts
	 */
		$this->Html->script([
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
			'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js',
			'common.jquery',
			'/components/remodal/dist/remodal.min.js'
		], ['block' => 'script']);

		$appDescription = 'A free and open source app that uses PHP and jQuery to display GitHub repository information.';

		echo $this->Html->meta(['name' => 'application-name', 'content' => 'GHREPO.info'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'author', 'content' => 'Chris Vogt'], null, ['inline' => false]);
		echo $this->Html->meta('description', h($appDescription), ['inline' => false]);
		echo $this->Html->meta('keywords', 'GitHub, repository, repo, source code, repository information', ['inline' => false]);

		echo $this->Html->meta(['name' => 'og:title', 'content' => 'GitHub Repository Viewer'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:description', 'content' => h($appDescription)], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/ghrepo-info/develop/source/webroot/img/screenshot.home.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/ghrepo-info/develop/source/webroot/img/screenshot.result.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'og:type', 'content' => 'website'], null, ['inline' => false]);

		echo $this->Html->meta(['name' => 'twitter:card', 'content' => 'summary_large_image'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:creator', 'content' => '@C1V0'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:site', 'content' => '@C1V0'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:description', 'content' => h($appDescription)], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:image', 'content' => 'https://cdn.rawgit.com/chrisvogt/ghrepo-info/develop/source/webroot/img/screenshot.home.jpg'], null, ['inline' => false]);
		echo $this->Html->meta(['name' => 'twitter:site', 'content' => '<?php echo Router::url( $this->here, true ); ?>'], null, ['inline' => false]);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script'); ?>

    <!--[if lt IE 9]>
    <?php echo $this->Html->css([
    	'https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js',
    	'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'
	  ]); ?>
	<style>
		.gradient {
			 filter: none;
		}
	</style>
    <![endif]-->
	</head>

	<body>
		<?php echo $this->element('navigation'); ?>
		<?php echo $this->fetch('content'); ?>

		<?php echo $this->element('modal/about'); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
    <?php if (env('ANALYTICS')) echo $this->element('analytics'); ?>
  </body>
</html>
